<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Preferences;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use RedBeanPHP\R;

class UserController extends AbstractTwigController
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
  public function register(Request $request, Response $response, array $args = []): Response
  {
    if (isset($_SESSION['user_Id'])) {
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    return $this->render($response, 'register.twig');
  }

  /**
   * @param Request  $request
   * @param Response $response
   * @param array    $args
   *
   * @return Response
   */
  public function register_complete(Request $request, Response $response, array $args = []): Response
  {
    if (isset($_SESSION['user_Id'])) {
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    if (!isset($_POST['formAccount']) || !isset($_POST['formPassword']) || !isset($_POST['formPasswordConf']) || !isset($_POST['formEmail'])) {
      return $this->render($response, 'basic-page.twig', [
        'pageTitle' => "Registration Error",
        'content' => "You must fill all the forms. Please try again.",
      ]);
    }

    if ($_POST['formPassword'] != $_POST['formPasswordConf']) {
      return $this->render($response, 'basic-page.twig', [
        'pageTitle' => "Registration Error",
        'content' => "Password missmatch.",
      ]);
    }

    if ($this->preferences->getApiToken() != null) {
      return $this->render($response, 'basic-page.twig', [
        'pageTitle' => "API Error",
        'content' => "Server did not receive a response...<br>check your ports, ip, settings,...Server\\resources\config\api.config.json should have the correct ip's and hosts set up.",
      ]);
    } else {
      $userData = array(
        'username' => $_POST['formAccount'],
        'password' => hash('sha256', $_POST['formPassword']),
        'email' => $_POST['formEmail']
      );

      $token = R::getAll('SELECT * FROM cms_settings WHERE setting ="api_token"')[0]['default_value'];


      $register = $this->preferences->APIcall_POST($this->preferences->getApiServer(), $userData, $token, '/api/v1/users/register');


        if (isset($register['Message']) && $register['Message'] === "Authorization has been denied for this request.") {
          $loginAPI = $this->preferences->APIcall_POST($this->preferences->getApiServer(), $this->preferences->getApiData(), "", '/api/oauth/token');

          R::exec(
            'UPDATE cms_settings SET default_value=? WHERE setting ="api_token"',
            [
              $loginAPI['access_token']
            ]
          );

          $token = R::getAll('SELECT * FROM cms_settings WHERE setting ="api_token"')[0]['default_value'];
          $register = $this->preferences->APIcall_POST($this->preferences->getApiServer(), $userData, $token, '/api/v1/users/register');
          if (isset($register['Message'])) {
            return $this->render($response, 'basic-page.twig', [
              'pageTitle' => "Success",
              'content' => "Register OK",
            ]);
          }
        }else{
          if (isset($register['Message'])) {
            if($register['Message'] === "Account already with email '".$userData['email']."'."){
              return $this->render($response, 'basic-page.twig', [
                'pageTitle' => "Erreur",
                'content' => "Un compte existe déjà avec cette adresse e-mail",
              ]);
            }else{
              return $this->render($response, 'basic-page.twig', [
                'pageTitle' => "Succès",
                'content' => "Votre inscription à bien été pris en compte.",
              ]);
            }
            
          }
        }
    
    }
  }

  /**
   * @param Request  $request
   * @param Response $response
   * @param array    $args
   *
   * @return Response
   */
  public function login(Request $request, Response $response, array $args = []): Response
  {
    $token = R::getAll('SELECT * FROM cms_settings WHERE setting ="api_token"')[0]['default_value'];

    if (!isset($_POST['formuser']) || !isset($_POST['formpass'])) {
      return $this->render($response, 'basic-page.twig', [
        'pageTitle' => "Login Error",
        'content' => "You must fill all the forms. Please try again.",
      ]);
    }

    // die($this->preferences->getApiToken());
    if ($token == null) {
      return $this->render($response, 'basic-page.twig', [
        'pageTitle' => "API Error",
        'content' => "Server did not receive a response...<br>check your ports, ip, settings,...Server\\resources\config\api.config.json should have the correct ip's and hosts set up.",
      ]);
    } else {
      $userData = array(
        'username' => $_POST['formuser'],
        'password' => hash('sha256', $_POST['formpass'])
      );

      $register = $this->preferences->APIcall_POST($this->preferences->getApiServer(), $userData, $token, '/api/v1/users/' . $userData['username'] . '/password/validate');
      // die(var_dump($register));

      if (isset($register['Message']) && $register['Message'] == "Authorization has been denied for this request.") {
        $loginAPI = $this->preferences->APIcall_POST($this->preferences->getApiServer(), $this->preferences->getApiData(), "", '/api/oauth/token');

        // die(var_dump($loginAPI['access_token']));
        R::exec(
          'UPDATE cms_settings SET default_value=? WHERE setting ="api_token"',
          [
            $loginAPI['access_token']
          ]
        );

        $token = R::getAll('SELECT * FROM cms_settings WHERE setting ="api_token"')[0]['default_value'];

        if (isset($register['Message'])) {
          if ($register['Message'] == "Password Correct") {
            $user_infos = $this->preferences->APIcall_GET($this->preferences->getApiServer(), $token, '/api/v1/users/' . $userData['username']);
            die(var_dump($user_infos));

            $userLogin = R::findOne('cms_users', 'id = ?', [$user_infos['Id']]);
            if (empty($userLogin) && count($userLogin) == 0) {
              R::exec(
                'INSERT INTO cms_users (id, email, points, admin) VALUES (?,?,0,0)',
                [
                  $user_infos['Id'],
                  $user_infos['Email']
                ]
              );
              $userLogin = R::findOne('cms_users', 'id = ?', [$user_infos['Id']]);
            }
            $_SESSION['user_Id'] = $user_infos['Id'];
            $_SESSION['user_Name'] = $user_infos['Name'];
            if ($userLogin['admin'] >= 1) :
              $_SESSION['isAdmin'] = $userLogin['admin'];
            endif;
            $_SESSION['points'] = $userLogin['points'];

            return $response->withHeader('Location', $this->preferences->getBaseURL());
          } else {
            return $this->render($response, 'basic-page.twig', [
              'pageTitle' => "Error",
              'content' => $register['Message'],
            ]);
          }
        } else {
          return $this->render($response, 'basic-page.twig', [
            'pageTitle' => "Error",
            'content' => "Erreur de connexion, veuillez réessayer.",
          ]);
        }
      }

      if (isset($register['Message'])) {
        if ($register['Message'] == "Password Correct") {
          // die($token);

          $user_infos = $this->preferences->APIcall_GET($this->preferences->getApiServer(), $token, '/api/v1/users/' . $userData['username']);

          $userLogin = R::findOne('cms_users', 'id = ?', [$user_infos['Id']]);
          if (empty($userLogin) && count($userLogin) == 0) {
            R::exec(
              'INSERT INTO cms_users (id, email, points, admin) VALUES (?,?,0,0)',
              [
                $user_infos['Id'],
                $user_infos['Email']
              ]
            );
            $userLogin = R::findOne('cms_users', 'id = ?', [$user_infos['Id']]);
          }
          $_SESSION['user_Id'] = $user_infos['Id'];
          $_SESSION['user_Name'] = $user_infos['Name'];
          if ($userLogin['admin'] >= 1) :
            $_SESSION['isAdmin'] = $userLogin['admin'];
          endif;
          $_SESSION['points'] = $userLogin['points'];

          return $response->withHeader('Location', $this->preferences->getBaseURL());
        } else {
          return $this->render($response, 'basic-page.twig', [
            'pageTitle' => "Error",
            'content' => $register['Message'],
          ]);
        }
      } else {
        return $this->render($response, 'basic-page.twig', [
          'pageTitle' => "Error",
          'content' => "Erreur de connexion, veuillez réessayer.",
        ]);
      }
    }
  }

  /**
   * @param Request  $request
   * @param Response $response
   * @param array    $args
   *
   * @return Response
   */
  public function logout(Request $request, Response $response, array $args = []): Response
  {
    if (isset($_SESSION['user_Id'])) {
      session_destroy();
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    } else {
      return $this->render($response, 'basic-page.twig', [
        'pageTitle' => "Erreur",
        'content' => "Une erreur est survenue, veuillez réessayer.",
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
  public function my_account(Request $request, Response $response, array $args = []): Response
  {
    if (isset($_SESSION['user_Id'])) {
      //$register = self::APIcall_POST($this->preferences->getApiServer(), $userData, $this->preferences->getApiToken()['access_token'], '/api/v1/users/' . $_SESSION['user_Id']);
      $token = R::getAll('SELECT * FROM cms_settings WHERE setting ="api_token"')[0]['default_value'];

      $register = $this->preferences->APIcall_GET($this->preferences->getApiServer(), $token, '/api/v1/users/' . $_SESSION['user_Id']);
      $players = $this->preferences->APIcall_GET($this->preferences->getApiServer(), $token, '/api/v1/users/' . $_SESSION['user_Id'] . '/players');
      $classes = $this->preferences->APIcall_POST($this->preferences->getApiServer(), $this->preferences->getApiData(), $token, '/api/v1/gameobjects/class?page=0&count=10');
      if (isset($register)) {
        $userWeb = R::findOne('cms_users', 'id = ?', [$_SESSION['user_Id']]);
        if (empty($userWeb) && count($userWeb) == 0) {
          return $this->render($response, 'basic-page.twig', [
            'pageTitle' => "Error",
            'content' => "Erreur de compte, veuillez réessayer.",
          ]);
        }
        return $this->render($response, 'manage-account.twig', [
          'account' => $register,
          'webInfos' => $userWeb,
          'players' => $players,
          'classes' => $classes['entries'],
        ]);
      } else {
        return $this->render($response, 'basic-page.twig', [
          'pageTitle' => "Error",
          'content' => "Erreur de compte, veuillez réessayer.",
        ]);
      }
    } else {
      return $this->render($response, 'basic-page.twig', [
        'pageTitle' => "Erreur",
        'content' => "Une erreur est survenue, veuillez réessayer.",
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
  public function buyPoints(Request $request, Response $response, array $args = []): Response
  {
    if (!isset($_SESSION['user_Id'])) {
      return $this->render($response, 'basic-page.twig', [
        'pageTitle' => "Erreur",
        'content' => "Une erreur est survenue, veuillez réessayer.",
      ]);
    }
    $userWeb = R::findOne('cms_users', 'id = ?', [$_SESSION['user_Id']]);
    if (empty($userWeb) && count($userWeb) == 0) {
      return $this->render($response, 'basic-page.twig', [
        'pageTitle' => "Error",
        'content' => "Erreur de compte, veuillez réessayer.",
      ]);
    }
    if (isset($_POST['code'])) {
      $code = isset($_POST['code']) ? preg_replace('/[^a-zA-Z0-9]+/', '', $_POST['code']) : '';
      if (empty($code)) {
        return $this->render($response, 'basic-page.twig', [
          'pageTitle' => "Erreur",
          'content' => "Vous devez entrer un code.",
        ]);
      } else {
        $dedipass = file_get_contents('http://api.dedipass.com/v1/pay/?public_key=' . $this->preferences->getCmsSettings()['credit_dedipass_public_key'] . '&private_key=' . $this->preferences->getCmsSettings()['credit_dedipass_private_key'] . '&code=' . $code);
        $dedipass = json_decode($dedipass);
        if ($dedipass->status == 'success') {
          // Le transaction est validée et payée.
          // Vous pouvez utiliser la variable $virtual_currency
          // pour créditer le nombre de Credits.
          $virtual_currency = $dedipass->virtual_currency;
          R::exec(
            'UPDATE cms_users SET points=points+? WHERE id=?',
            [
              $virtual_currency,
              $_SESSION['user_Id']
            ]
          );
          R::exec(
            'INSERT INTO cms_points_history (date, user_id, code, points_amount) VALUES (NOW(),?,?,?)',
            [
              $_SESSION['user_Id'],
              $code,
              $virtual_currency
            ]
          );
          $userWeb = R::findOne('cms_users', 'id = ?', [$_SESSION['user_Id']]);
          $_SESSION['points'] = $userWeb['points'];
          return $this->render($response, 'basic-page.twig', [
            'pageTitle' => "Succès",
            'content' => "Le code est accepté, vous allez recevoir " . $virtual_currency . " Credits.",
          ]);
        } else {
          // Le code est invalide
          return $this->render($response, 'basic-page.twig', [
            'pageTitle' => "Erreur",
            'content' => "Le code est invalide, veuillez réessayer.",
          ]);
        }
      }
    }
    return $this->render($response, 'credits.twig');
  }
}
