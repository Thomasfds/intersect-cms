<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Preferences;
use App\Status;
use DateTime;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use RedBeanPHP\R;

class GameController extends AbstractTwigController
{
    /**
     * @var Preferences
     */
    private $preferences;

    /**
     * HomeController constructor.
     *
     * @param Twig        $twig
     * @param Preferences $preferences
     */
    public function __construct(Twig $twig, Preferences $preferences)
    {
        parent::__construct($twig);

        $this->preferences = $preferences;
    }

    /**
     * @param Request  $request
     * @param Response $response
     * @param array    $args
     *
     * @return Response
     */
    public function download(Request $request, Response $response, array $args = []): Response
    {
        $page = R::findOne('cms_pages', ' unique_slug LIKE ? ', ['download_game']);
        return $this->render($response, 'basic-page.twig', [
            'pageTitle' => $page->name,
            'content' => $page->content,
            'rootPath' => $this->preferences->getRootPath(),
            'assetsPath' => $this->preferences->getBaseUrl() . 'assets/' . $this->preferences->getThemeName() . "/",
        ]);
    }

    /**
     * @param Request  $request
     * @param Response $response
     * @param array    $args
     *
     * @return Response
     */
    public function leader(Request $request, Response $response, array $args = []): Response
    {
        $rootPath = realpath(__DIR__ . '/../../../');

        $cachefile = $rootPath . '/cache/classement_general.json';

        $cachetime = 3600; // time to cache in seconds
        $cacheDate = new DateTime();

        if (file_exists($cachefile) && (strtotime(date("F d Y H:i:s.", filectime($cachefile))) > (time() - $cachetime))) {
            $liste_joueur = file_get_contents($cachefile);

            $liste_joueur = json_decode($liste_joueur);
            $date = $liste_joueur->date->date;
            return $this->render($response, 'leader.twig', [
                'pageTitle' => "Classement joueur",
                'players' => $liste_joueur->joueurs,
                'cacheDate' => $date
            ]);
        } else {
            if (file_exists($cachefile)) {
                unlink($cachefile);
            }
        }
        $cache = fopen($cachefile, 'w');

        $token = $this->preferences->getApiToken();

        $rankings = $this->preferences->APIcall_GET($this->preferences->getApiServer(), $token, '/api/v1/players/rank?page=0&pageSize=25&sortDirection=Descending');
        $liste_joueur = [];


        if (isset($rankings['Message']) && $rankings['Message'] == "Authorization has been denied for this request.") {
            $loginAPI = $this->preferences->APIcall_POST($this->preferences->getApiServer(), $this->preferences->getApiData(), "", '/api/oauth/token');

            R::exec(
                'UPDATE cms_settings SET default_value=?, value=? WHERE setting ="api_token"',
                [
                    $loginAPI['access_token'],
                    $loginAPI['access_token']
                ]
            );

            $token = $this->preferences->getApiToken();

            $rankings = $this->preferences->APIcall_GET($this->preferences->getApiServer(), $token, '/api/v1/players/rank?page=0&pageSize=25&sortDirection=Descending');
            if (isset($rankings['Values'])) {
                foreach ($rankings['Values'] as $rank) {
                    $liste_joueur[] = ['name' => $rank['Name'], 'level' => $rank['Level'], 'exp' => $rank['Exp'], 'expNext' => $rank['ExperienceToNextLevel']];
                }
            }
        } else {
            if (isset($rankings['Values'])) {
                foreach ($rankings['Values'] as $rank) {
                    $liste_joueur[] = ['name' => $rank['Name'], 'level' => $rank['Level'], 'exp' => $rank['Exp'], 'expNext' => $rank['ExperienceToNextLevel']];
                }
            }
        }



        if ($liste_joueur) {

            $data = ['joueurs' => $liste_joueur, 'date' => new DateTime()];
            fwrite($cache, json_encode($data));
            fclose($cache);

            return $this->render($response, 'leader.twig', [
                'pageTitle' => "Classement joueur",
                'players' => $liste_joueur,
                'cacheDate' => $cacheDate

            ]);
        } else {

            return $this->render($response, 'leader.twig', [
                'pageTitle' => "Classement joueur",
                'players' => 0,
                'cacheDate' => $cacheDate
            ]);
        }
    }

    /**
     * @param Request  $request
     * @param Response $response
     * @param array    $args
     *
     * @return Response
     */
    public function page(Request $request, Response $response, array $args = []): Response
    {
        $page = R::findOne(
            'cms_pages',
            'unique_slug = ? AND category = ?',
            [$args['unique_slug'], "game"]
        );
        if (empty($page)) {
            return $this->render($response, 'basic-page.twig', [
                'pageTitle' => "Error",
                'content' => "Not found.",
            ]);
        } else {
            return $this->render($response, 'basic-page.twig', [
                'pageTitle' => $page['name'],
                'content' => $page['content'],
            ]);
        }
    }


    /**
     * @param Request  $request
     * @param Response $response
     * @param array    $args
     *
     * @return Response
     */
    public function playerList(Request $request, Response $response, array $args = []): Response
    {

        $status = new Status();


        $username = R::getAll('SELECT * FROM cms_settings WHERE setting ="api_username"')[0]['default_value'];
        $password = R::getAll('SELECT * FROM cms_settings WHERE setting ="api_password"')[0]['default_value'];
        $api_server = R::getAll('SELECT * FROM cms_settings WHERE setting ="api_server"')[0]['default_value'];
        $token = R::getAll('SELECT * FROM cms_settings WHERE setting ="api_token"')[0]['default_value'];
        $joueurs = $this->preferences->APIcall_GET($this->preferences->getApiServer(), $token, '/api/v1/players?page=0&pageSize=25');
        $total = $joueurs['Total'];
        $page = 0;
        $max = round($total / 25);
        $init = 25;
        // $this->dd($total);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ajax = $_POST['ajax'];

            if ($ajax === "all") {            
                  
                $joueurs = $this->preferences->APIcall_GET($this->preferences->getApiServer(), $token, '/api/v1/players?page='.$_POST['page'].'&pageSize=25');

                if (isset($joueurs['Message']) && $joueurs['Message'] == "Authorization has been denied for this request.") {
                    $loginAPI = $this->preferences->APIcall_POST($this->preferences->getApiServer(), $this->preferences->getApiData(), "", '/api/oauth/token');

                    R::exec(
                        'UPDATE cms_settings SET default_value=? WHERE setting ="api_token"',
                        [
                            $loginAPI['access_token']
                        ]
                    );

                    $token = R::getAll('SELECT * FROM cms_settings WHERE setting ="api_token"')[0]['default_value'];
                    $joueurs = $this->preferences->APIcall_GET($this->preferences->getApiServer(), $token, '/api/v1/players?page='.$_POST['page'].'&pageSize=25');
                    if ($joueurs != null && isset($joueurs['Values']) && $joueurs['Values'] != null) {
                        foreach ($joueurs['Values'] as $joueur) {
                            $joueurs_liste[] = ['name' => $joueur['Name'], 'level' => $joueur['Level'], 'exp' => $joueur['Exp'], 'expNext' => $joueur['ExperienceToNextLevel']];
                        }

                        $response =  $this->render($response, 'playersList/table.twig', [
                            "joueurs" => $joueurs_liste,
                            'page_actuel' => $_POST['page'],
                            'max' => $max,
                            'initPlus' => $init * $_POST['page']
                        ]);
                            $data = ['success' => true, 'content' => $response->getBody()->__toString()];
                        return $this->preferences->returnJson($data);
                    }
                } else {
                    if ($joueurs != null && isset($joueurs['Values']) && $joueurs['Values'] != null) {
                        foreach ($joueurs['Values'] as $joueur) {
                            $joueurs_liste[] = ['name' => $joueur['Name'], 'level' => $joueur['Level'], 'exp' => $joueur['Exp'], 'expNext' => $joueur['ExperienceToNextLevel']];
                        }

                        $response =  $this->render($response, 'playersList/table.twig', [
                            "joueurs" => $joueurs_liste,
                            'page_actuel' => $_POST['page'],
                            'max' => $max,
                            'initPlus' => $init + 25 * $_POST['page']

                        ]);
                            $data = ['success' => true, 'content' => $response->getBody()->__toString()];
                        return $this->preferences->returnJson($data);
                    }
                }
            }

            if ($ajax === "online") {    
                $data = ['page' => 0, 'count' => 999];

                $joueurs = $this->preferences->APIcall_POST($this->preferences->getApiServer(),$data,  $token, '/api/v1/players/online');
                // $this->dd($joueurs);
                if (isset($joueurs['Message']) && $joueurs['Message'] == "Authorization has been denied for this request.") {
                    $loginAPI = $this->preferences->APIcall_POST($this->preferences->getApiServer(), $this->preferences->getApiData(), "", '/api/oauth/token');

                    R::exec(
                        'UPDATE cms_settings SET default_value=? WHERE setting ="api_token"',
                        [
                            $loginAPI['access_token']
                        ]
                    );

                    $token = R::getAll('SELECT * FROM cms_settings WHERE setting ="api_token"')[0]['default_value'];
                    $data = ['page' => 0, 'count' => 999];

                    $joueurs = $this->preferences->APIcall_POST($this->preferences->getApiServer(),$data,  $token, '/api/v1/players/online');
                    if ($joueurs != null && isset($joueurs['entries']) && $joueurs['entries'] != null) {
                        foreach ($joueurs['entries'] as $joueur) {
                            $joueurs_liste[] = ['name' => $joueur['Name'], 'level' => $joueur['Level'], 'exp' => $joueur['Exp'], 'expNext' => $joueur['ExperienceToNextLevel']];
                        }

                        $response =  $this->render($response, 'playersList/table.twig', [
                            'pageTitle' => "Classement joueur",
                            "joueurs" => $joueurs_liste
                        ]);
                            $data = ['success' => true, 'content' => $response->getBody()->__toString()];
                        return $this->preferences->returnJson($data);
                    }
                } else {
                    if ($joueurs != null && isset($joueurs['entries']) && $joueurs['entries'] != null) {
                        foreach ($joueurs['entries'] as $joueur) {
                            $joueurs_liste[] = ['name' => $joueur['Name'], 'level' => $joueur['Level'], 'exp' => $joueur['Exp'], 'expNext' => $joueur['ExperienceToNextLevel']];
                        }

                        $response =  $this->render($response, 'playersList/table.twig', [
                            'pageTitle' => "Classement joueur",
                            "joueurs" => $joueurs_liste
                        ]);
                            $data = ['success' => true, 'content' => $response->getBody()->__toString()];
                        return $this->preferences->returnJson($data);
                    }
                }
            }
        }else{
            return $this->render($response, 'playersList/players.twig', [
                'pageTitle' => "Liste des joueurs",
            ]);
        }

       
    }
}
