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
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $token = R::getAll('SELECT * FROM cms_settings WHERE setting ="api_token"')[0]['default_value'];

      if (!isset($_POST['formuser']) || !isset($_POST['formpass'])) {
        return $this->render($response, 'basic-page.twig', [
          'pageTitle' => "Login Error",
          'content' => "You must fill all the forms. Please try again.",
        ]);
      } else {
        // On recherche si l'utilisateur existe en base de donnée
        $userLogin = R::findOne('cms_users', 'username = ?', [$_POST['formuser']]);

        // Si l'utilisateur existe alors 
        if ($userLogin) {
          // On vérifie si le mot de passe est correcte
          if (password_verify($_POST['formpass'], $userLogin['password'])) {
            // si le mot de passe est connecte alors on recherche les personnages de l'utilisateur on set les sessions et on renvoit sur l'accueil

            $players = $this->preferences->APIcall_GET($this->preferences->getApiServer(), $token, '/api/v1/users/' . $userLogin['id'] . '/players');

            $_SESSION['user_Id'] = $userLogin['id'];
            $_SESSION['user_Name'] = $userLogin['username'];
            if ($userLogin['admin'] >= 1) :
              $_SESSION['isAdmin'] = $userLogin['admin'];
            endif;
            $_SESSION['points'] = $userLogin['points'];
            $_SESSION['characters'] = $players;

            if (isset($_COOKIE['language'])) {
              $_SESSION['language'] = $_COOKIE['language'];
            }

            return $response->withHeader('Location', $this->preferences->getBaseURL());
          }
        }

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

          if (isset($register['Message']) && $register['Message'] == "Authorization has been denied for this request.") {
            $loginAPI = $this->preferences->APIcall_POST($this->preferences->getApiServer(), $this->preferences->getApiData(), "", '/api/oauth/token');

            // die(var_dump($register));
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
                // die(var_dump($user_infos));

                $userLogin = R::findOne('cms_users', 'id = ?', [$user_infos['Id']]);
                if (empty($userLogin) && count($userLogin) == 0 || is_null($userLogin)) {
                  R::exec(
                    'INSERT INTO cms_users (id, email, username, points, admin) VALUES (?,?,?,0,0)',
                    [
                      $user_infos['Id'],
                      $user_infos['Email'],
                      $user_infos['Name']
                    ]
                  );
                  $userLogin = R::findOne('cms_users', 'id = ?', [$user_infos['Id']]);
                }

                if ($userLogin) {

                  if ($userLogin['username'] == null || $userLogin['username'] == "") {
                    R::exec(
                      'UPDATE cms_users SET username=?  WHERE id = ?',
                      [
                        $user_infos['Name'],
                        $user_infos['Id']
                      ]
                    );
                    $userLogin = R::findOne('cms_users', 'id = ?', [$user_infos['Id']]);
                  }



                  if ($userLogin['password'] == null || $userLogin['password'] == "") {
                    R::exec(
                      'UPDATE cms_users SET password=?  WHERE id = ?',
                      [
                        password_hash($_POST['formpass'],  PASSWORD_ARGON2I),
                        $user_infos['Id']
                      ]
                    );
                    $userLogin = R::findOne('cms_users', 'id = ?', [$user_infos['Id']]);
                  }
                }

                $players = $this->preferences->APIcall_GET($this->preferences->getApiServer(), $token, '/api/v1/users/' . $userLogin['id'] . '/players');

                $_SESSION['user_Id'] = $userLogin['id'];
                $_SESSION['user_Name'] = $userLogin['username'];
                if ($userLogin['admin'] >= 1) :
                  $_SESSION['isAdmin'] = $userLogin['admin'];
                endif;
                $_SESSION['points'] = $userLogin['points'];
                $_SESSION['game_money'] = $userLogin['game_money'];

                $_SESSION['characters'] = $players;

                if (isset($_COOKIE['language'])) {
                  $_SESSION['language'] = $_COOKIE['language'];
                }

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
              // die(var_dump($user_infos));


              $userLogin = R::findOne('cms_users', 'id = ?', [$user_infos['Id']]);
              // die(var_dump($userLogin));

              if (empty($userLogin) && count($userLogin) == 0 || is_null($userLogin)) {
                // die(var_dump('ici'));

                R::exec(
                  'INSERT INTO cms_users (id, email, username, points, admin) VALUES (?,?,?,0,0)',
                  [
                    $user_infos['Id'],
                    $user_infos['Email'],
                    $user_infos['Name']
                  ]
                );

                $userLogin = R::findOne('cms_users', 'id = ?', [$user_infos['Id']]);
              }

              if ($userLogin) {

                if ($userLogin['username'] == null || $userLogin['username'] == "") {
                  R::exec(
                    'UPDATE cms_users SET username=?  WHERE id = ?',
                    [
                      $user_infos['Name'],
                      $user_infos['Id']
                    ]
                  );
                  $userLogin = R::findOne('cms_users', 'id = ?', [$user_infos['Id']]);
                }

                if ($userLogin['password'] == null || $userLogin['password'] == "") {
                  R::exec(
                    'UPDATE cms_users SET password=?  WHERE id = ?',
                    [
                      password_hash($_POST['formpass'],  PASSWORD_ARGON2I),
                      $user_infos['Id']
                    ]
                  );
                  $userLogin = R::findOne('cms_users', 'id = ?', [$user_infos['Id']]);
                }
              }

              $players = $this->preferences->APIcall_GET($this->preferences->getApiServer(), $token, '/api/v1/users/' . $userLogin['id'] . '/players');

              $_SESSION['user_Id'] = $userLogin['id'];
              $_SESSION['user_Name'] = $userLogin['username'];
              if ($userLogin['admin'] >= 1) :
                $_SESSION['isAdmin'] = $userLogin['admin'];
              endif;
              $_SESSION['points'] = $userLogin['points'];
              $_SESSION['characters'] = $players;

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
    } else {
      return $this->render($response, 'login/index.twig', [
        'pageTitle' => "Page de connexion",
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

    /**
   * @param Request  $request
   * @param Response $response
   * @param array    $args
   *
   * @return Response
   */
  public function passwordResetRequest(Request $request, Response $response, array $args = []): Response
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $username = $_POST['username'];
      $email = $_POST['email'];

      // Si username et email sont disponible et non vide
      if (isset($username) && !empty($username) && isset($email) && !empty($email)) {
        // Alors on vérifie si l'utilisateur existe en base de donnée
        $userWeb = R::findOne('cms_users', 'username = ? and email = ?', [
          $username,
          $email
        ]);


        // Si l'utilisateur est existe bien et que le mail est bien identique au compte
        if ($userWeb && $userWeb['email'] === $email) {
          // Alors on ajoute le token de reset en db et on envoit un email
          $token = bin2hex(random_bytes(12));
          R::exec(
            'UPDATE cms_users SET password_token=?  WHERE username = ?',
            [
              $token,
              $username
            ]
          );

          $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/password-reset/new/" . $token;

          if ($this->preferences->passwordEmail($userWeb['email'], $url)) {
            return $this->render($response, 'password-reset/index.twig', [
              'pageTitle' => "Mot de passe oublié",
              'content' => "Un lien de réinitialisation vous à été envoyer par email.",
            ]);
          }
        } else {
          // /api/v1/users/[lookupKey]
          $token = R::getAll('SELECT * FROM cms_settings WHERE setting ="api_token"')[0]['default_value'];
          $userIntersect = $this->preferences->APIcall_GET($this->preferences->getApiServer(), $token, '/api/v1/users/' . $username);

          if ($userIntersect) {
            R::exec(
              'INSERT INTO cms_users (id, email,username, points, admin) VALUES (?,?,?,0,0)',
              [
                $userIntersect['Id'],
                $userIntersect['Email'],
                $userIntersect['Name']
              ]
            );
            $userWeb = R::findOne('cms_users', 'id = ?', [$userIntersect['Id']]);

            if ($userWeb && $userWeb['email'] === $email) {
              $token = bin2hex(random_bytes(12));
              R::exec(
                'UPDATE cms_users SET password_token=?  WHERE username = ?',
                [
                  $token,
                  $username
                ]
              );

              $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/password-reset/new/" . $token;

              if ($this->preferences->passwordEmail($userWeb['email'], $url)) {
                return $this->render($response, 'password-reset/index.twig', [
                  'pageTitle' => "Mot de passe oublié",
                  'content' => "Un lien de réinitialisation vous à été envoyer par email.",
                ]);
              }
            } else {
              return $this->render($response, 'basic-page.twig', [
                'pageTitle' => "Error",
                'content' => "Erreur s'est produit, veuillez réessayer.",
              ]);
            }
          }
        }
      }
    }

    return $this->render($response, 'password-reset/index.twig', [
      'pageTitle' => "Mot de passe oublié",
    ]);
  }

  /**
   * @param Request  $request
   * @param Response $response
   * @param array    $args
   *
   * @return Response
   */
  public function passwordResetRequestReset(Request $request, Response $response, array $args = []): Response
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $passwordConfirm = $_POST['passwordConfirm'];

      if (
        isset($username) && !empty($username) &&
        isset($email) && !empty($email) &&
        isset($password) && !empty($password) &&
        isset($passwordConfirm) && !empty($passwordConfirm)
      ) {

        if ($password === $passwordConfirm) {

          // /api/v1/users/[lookupKey]/manage/password/change
          $userWeb = R::findOne('cms_users', 'password_token = ? AND username = ?', [
            $args['token'],
            $username
          ]);
          // die(var_dump($userWeb));

          if ($userWeb && $userWeb['email'] === $email) {
            // die(var_dump($userWeb));
            $token = R::getAll('SELECT * FROM cms_settings WHERE setting ="api_token"')[0]['default_value'];
            // die(var_dump($token));

            $data = ['new' => hash('sha256', $password)];

            $newspassword = $this->preferences->APIcall_POST($this->preferences->getApiServer(), $data, $token, '/api/v1/users/' . $userWeb['username'] . '/manage/password/change');
            // die(var_dump($newspassword));

            if ($newspassword === "Password updated.") {
              R::exec(
                'UPDATE cms_users SET password_token=?, password=?  WHERE username = ?',
                [
                  null,
                  password_hash($password,  PASSWORD_ARGON2I),
                  $username
                ]
              );
              return $this->render($response, 'password-reset/reset.twig', [
                'pageTitle' => "Mot de passe oublié",
                'content' => 'Votre mot de passe à bien été modifier.'
              ]);
            }
          }
        } else {
          return $this->render($response, 'password-reset/reset.twig', [
            'pageTitle' => "Mot de passe oublié",
            'content' => 'Vos mot de passe ne correspondent pas.'
          ]);
        }
      }
    }
    $userWeb = R::findOne('cms_users', 'password_token = ?', [
      $args['token']
    ]);

    if ($userWeb) {
      return $this->render($response, 'password-reset/reset.twig', [
        'pageTitle' => "Mot de passe oublié",
      ]);
    } else {
      return $this->render($response, 'password-reset/reset.twig', [
        'pageTitle' => "Mot de passe oublié",
        'content' => 'Le token est invalide.'
      ]);
    }
  }
}
