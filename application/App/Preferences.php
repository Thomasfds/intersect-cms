<?php

declare(strict_types=1);

namespace App;

/**
 * This class contains the preferences for the application.
 *
 * @package App
 */
class Preferences
{
    /**
     * @var string
     */
    private $rootPath;
    private $themeName;
    private $baseURL;

    private $apiUsername;
    private $apiPassword;
    private $apiServer;
    private $apiToken;

    private $cmsSettings;

    private $dbIp = "127.0.0.1";
    private $dbUser = "root";
    private $dbPassword = "";
    private $dbPort = "3306";
    private $dbName = "test_rpg";

    /**
     * Preferences constructor.
     *
     * @param string $rootPath
     */
    public function __construct(string $rootPath)
    {
        $this->rootPath = $rootPath;
    }

    /**
     * @return string
     */
    public function getRootPath(): string
    {
        return $this->rootPath;
    }

    /**
     * @return string
     */
    public function getThemeName(): string
    {
        return $this->themeName;
    }

    /**
     * @return string
     */
    public function setThemeName($themeName)
    {
        $this->themeName = $themeName;
    }

    /**
     * @return string
     */
    public function getDbIp(): string
    {
        return $this->dbIp;
    }
    /**
     * @return string
     */
    public function getDbUser(): string
    {
        return $this->dbUser;
    }
    /**
     * @return string
     */
    public function getDbPassword(): string
    {
        return $this->dbPassword;
    }
    /**
     * @return string
     */
    public function getDbPort(): string
    {
        return $this->dbPort;
    }
    /**
     * @return string
     */
    public function getDbName(): string
    {
        return $this->dbName;
    }


    /* Config API */
    /**
     * @return string
     */
    public function getApiUser(): string
    {
        return $this->apiUsername;
    }
    public function setApiUser($username)
    {
        $this->apiUsername = $username;
    }
    /**
     * @return string
     */
    public function getApiPassword(): string
    {
        return $this->apiPassword;
    }
    public function setApiPassword($password)
    {
        $this->apiPassword = $password;
    }
    /**
     * @return string
     */
    public function getApiServer(): string
    {
        return $this->apiServer;
    }
    public function setApiServer($server)
    {
        $this->apiServer = $server;
    }

    /**
     * @return string
     */
    public function getApiToken()
    {
        return $this->apiToken;
    }
    public function setApiToken($token)
    {
        $this->apiToken = $token;
    }


    /**
     * @return array
     */
    public function getCmsSettings()
    {
        return $this->cmsSettings;
    }
    public function setCmsSettings($settings)
    {
        $this->cmsSettings = $settings;
    }

    public function getApiData()
    {
        // API login
        $postData = array(
            'grant_type' => "password",
            'username' => $this->getApiUser(),
            'password' =>  $this->getApiPassword()
        );
        // die(var_dump($postData));

        return $postData;
    }

    /**
     * @return string
     */
    public function getBaseURL(): string
    {
        return $this->baseURL;
    }
    public function setBaseURL($server)
    {
        $this->baseURL = $server;
    }


    /* Function API */
    public function APIcall_POST($server, $postData, $access_token, $calltype)
    {
        $ch = curl_init($server . $calltype);
        curl_setopt_array($ch, array(
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                'authorization:Bearer ' . $access_token, // "authorization:Bearer", et non pas "authorization: Bearer"
                'Content-Type:application/json' // "Content-Type:application/json", et non pas "Content-Type: application/json"
            ),
            CURLOPT_POSTFIELDS => json_encode($postData)
        ));
        $response = curl_exec($ch);
        // die(var_dump($response));

        if ($response === false) {
            return (curl_error($ch));
        }
        $responseData = json_decode($response, true);
        return $responseData;
    }

    // Permet de récupérer des données depuis la BDD via l'API : liste des joueurs, etc
    public function APIcall_GET($server, $access_token, $calltype)
    {
        // die($server.$calltype);
        $ch = curl_init($server . $calltype);
        curl_setopt_array($ch, array(
            CURLOPT_HTTPGET => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                'authorization:Bearer ' . $access_token, // "authorization:Bearer", et non pas "authorization: Bearer"
                'Content-Type:application/json' // "Content-Type:application/json", et non pas "Content-Type: application/json"
            ),
        ));
        $response = curl_exec($ch);
                // die(var_dump($response));

        if ($response === false) {
            return (curl_error($ch));
        }
        $responseData = json_decode($response, true);
        return $responseData;
    }

    public function returnJson($data)
    {
        header("Content-Type: application/json");
        echo json_encode($data);
        exit;
    }
}
