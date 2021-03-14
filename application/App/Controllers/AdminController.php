<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Preferences;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use RedBeanPHP\R;

class AdminController extends AbstractTwigController
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

  // NEWS
  /**
   * @param Request  $request
   * @param Response $response
   * @param array    $args
   *
   * @return Response
   */
  public function news_add(Request $request, Response $response, array $args = []): Response
  {
    if (!isset($_SESSION['user_Id'])) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] < 1) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    if (isset($_POST['nTitle']) && isset($_POST['nContent'])) {
      //$TryContent = $_POST['nContent'];
      //$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      R::exec(
        'INSERT INTO cms_news (title, content, author, img_url, date) VALUES (?,?,?,?,NOW())',
        [
          $_POST['nTitle'],
          $_POST['nContent'],
          $_SESSION['user_Name'],
          $_POST['nImg']
        ]
      );
      $nId = R::getInsertID();
      return $response->withHeader('Location', $this->preferences->getBaseURL() . 'admin/news/edit/' . $nId);
    }
    //$news = R::load( 'news', 1 );
    $newsList = R::getAll('SELECT * FROM cms_news');

    $imgs = scandir($this->preferences->getRootPath() . '\public\assets\general\news');

    return $this->render($response, 'admin-news.twig', [
      'pageTitle' => "Actualités",
      'news' => $newsList,
      'imgList' => $imgs
    ]);
  }

  /**
   * @param Request  $request
   * @param Response $response
   * @param array    $args
   *
   * @return Response
   */
  public function news_edit(Request $request, Response $response, array $args = []): Response
  {
    if (!isset($_SESSION['user_Id'])) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] < 1) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    if (isset($_POST['nTitle']) && isset($_POST['nContent'])) {
      //$TryContent = $_POST['nContent'];
      //$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      R::exec(
        'UPDATE cms_news SET title=?, content=?, author=?, img_url=? WHERE id = ?',
        [
          $_POST['nTitle'],
          $_POST['nContent'],
          $_SESSION['user_Name'],
          $_POST['nImg'],
          $args['id']
        ]
      );
    }

    $newsEdit = R::findOne('cms_news', 'id = ?', [$args['id']]);
    $newsList = R::getAll('SELECT * FROM cms_news');
    $imgs = scandir($this->preferences->getRootPath() . '\public\assets\general\news');

    return $this->render($response, 'admin-news.twig', [
      'pageTitle' => "Actualités",
      'news' => $newsList,
      'newsEdit' => $newsEdit,
      'imgList' => $imgs
    ]);
  }

  /**
   * @param Request  $request
   * @param Response $response
   * @param array    $args
   *
   * @return Response
   */
  public function news_delete(Request $request, Response $response, array $args = []): Response
  {
    if (!isset($_SESSION['user_Id'])) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] < 1) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    R::hunt(
      'cms_news',
      ' id = ? ',
      [$args['id']]
    );
    return $response->withHeader('Location', $this->preferences->getBaseURL() . 'admin/news/add');
  }

  //SHOP
  /**
   * @param Request  $request
   * @param Response $response
   * @param array    $args
   *
   * @return Response
   */
  public function shop_add(Request $request, Response $response, array $args = []): Response
  {
    $token = R::getAll('SELECT * FROM cms_settings WHERE setting ="api_token"')[0]['default_value'];

    if (!isset($_SESSION['user_Id'])) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }

    if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] < 1) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }

    if (!$token)
    {
      return $this->render($response, 'basic-page.twig', [
          'pageTitle' => "API Error",
          'content' => "Server did not receive a response...<br>check your ports, ip, settings,...Server\\resources\config\api.config.json should have the correct ip's and hosts set up.",
      ]);
    }
    else
    {

    // /api/v1/gameobjects/[typeKey]
    $data = ['page' => 0, 'count' => 100];
    $items = $this->preferences->APIcall_POST($this->preferences->getApiServer(), $data, $token, '/api/v1/gameobjects/item');

    // $this->dd($items);


    if (isset($_POST['iId']) && isset($_POST['iPrice'])) {
      //$TryContent = $_POST['nContent'];
      //$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      R::exec(
        'INSERT INTO cms_shop (id_item, price, forceddescription, quantity, promotion, visible) VALUES (?,?,?,?,?,?)',
        [
          $_POST['iId'],
          $_POST['iPrice'],
          $_POST['iContent'],
          $_POST['iQuantity'],
          $_POST['iPromo'],
          $_POST['iVisible'],
        ]
      );
      $nId = R::getInsertID();
      return $response->withHeader('Location', $this->preferences->getBaseURL() . 'admin/shop/edit/' . $nId);
    }
    //$news = R::load( 'news', 1 );
    $shopItems = R::getAll('SELECT * FROM cms_shop');

    $shop = array();
    foreach ($shopItems as $itemShop) {
      $itemData = $this->preferences->APIcall_GET($this->preferences->getApiServer(), $this->preferences->getApiToken()['access_token'], '/api/v1/gameobjects/item/' . $itemShop['id_item']);
      $shop[$itemShop['id']]['itemData'] = $itemData;
      if ($itemShop['forceddescription'] != "") {
        $shop[$itemShop['id']]['Desc'] = $itemShop['forceddescription'];
      } else {
        $shop[$itemShop['id']]['Desc'] = $itemData['Description'];
      }
      $shop[$itemShop['id']]['Price'] = $itemShop['price'];
      $shop[$itemShop['id']]['Quantity'] = $itemShop['quantity'];
      $shop[$itemShop['id']]['Promotion'] = $itemShop['promotion'];
      $shop[$itemShop['id']]['Visible'] = $itemShop['visible'];
      $shop[$itemShop['id']]['id'] = $itemShop['id'];
    }

    return $this->render($response, 'admin-shop.twig', [
      'pageTitle' => "Boutique",
      'news' => $shop
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
  public function shop_edit(Request $request, Response $response, array $args = []): Response
  {
    $token = R::getAll('SELECT * FROM cms_settings WHERE setting ="api_token"')[0]['default_value'];

    if (!isset($_SESSION['user_Id'])) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] < 1) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    if (!$token) {
      return $this->render($response, 'basic-page.twig', [
        'pageTitle' => "API Error",
        'content' => "Server did not receive a response...<br>check your ports, ip, settings,...Server\\resources\config\api.config.json should have the correct ip's and hosts set up.",
      ]);
    } else {

      if (isset($_POST['iId']) && isset($_POST['iPrice'])) {
        //$TryContent = $_POST['nContent'];
        //$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        R::exec(
          'UPDATE cms_shop SET id_item=?, price=?, forceddescription=?, quantity=?, promotion=?, visible=? WHERE id = ?',
          [
            $_POST['iId'],
            $_POST['iPrice'],
            $_POST['iContent'],
            $_POST['iQuantity'],
            $_POST['iPromo'],
            $_POST['iVisible'],
            $args['id']
          ]
        );
      }

      $shopEdit = R::findOne('cms_shop', 'id = ?', [$args['id']]);
      $shopList = R::getAll('SELECT * FROM cms_shop WHERE id != ?', [$args['id']]);

      $shopDetail = array();
      if ($shopEdit != null) {
        $itemData = $this->preferences->APIcall_GET($this->preferences->getApiServer(), $token, '/api/v1/gameobjects/item/' . $shopEdit['id_item']);
        $shopDetail['itemData'] = $itemData;
        $shopDetail['cDesc'] = $shopEdit['forceddescription'];
        $shopDetail['baseDesc'] = $itemData['Description'];
        $shopDetail['Price'] = $shopEdit['price'];
        $shopDetail['Quantity'] = $shopEdit['quantity'];
        $shopDetail['Promotion'] = $shopEdit['promotion'];
        $shopDetail['Visible'] = $shopEdit['visible'];
        $shopDetail['id'] = $shopEdit['id'];
        $shopDetail['id_item'] = $shopEdit['id_item'];
      }

      $shop = array();
      foreach ($shopList as $itemShop) {
        $itemDataList = $this->preferences->APIcall_GET($this->preferences->getApiServer(), $token, '/api/v1/gameobjects/item/' . $itemShop['id_item']);
        $shop[$itemShop['id']]['itemData'] = $itemDataList;
        if ($itemShop['forceddescription'] != "") {
          $shop[$itemShop['id']]['Desc'] = $itemShop['forceddescription'];
        } else {
          $shop[$itemShop['id']]['Desc'] = $itemDataList['Description'];
        }
        $shop[$itemShop['id']]['Price'] = $itemShop['price'];
        $shop[$itemShop['id']]['Quantity'] = $itemShop['quantity'];
        $shop[$itemShop['id']]['Promotion'] = $itemShop['promotion'];
        $shop[$itemShop['id']]['Visible'] = $itemShop['visible'];
        $shop[$itemShop['id']]['id'] = $itemShop['id'];
      }

      return $this->render($response, 'admin-shop.twig', [
        'pageTitle' => "Boutique",
        'news' => $shop,
        'shopEdit' => $shopDetail
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
  public function shop_delete(Request $request, Response $response, array $args = []): Response
  {
    if (!isset($_SESSION['user_Id'])) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] < 1) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    R::hunt(
      'cms_shop',
      ' id = ? ',
      [$args['id']]
    );
    return $response->withHeader('Location', $this->preferences->getBaseURL() . 'admin/shop/add');
  }

  //PAGES
  /**
   * @param Request  $request
   * @param Response $response
   * @param array    $args
   *
   * @return Response
   */
  public function pages_add(Request $request, Response $response, array $args = []): Response
  {
    if (!isset($_SESSION['user_Id'])) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] < 1) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    if (isset($_POST['pName']) && isset($_POST['pCat']) && isset($_POST['pContent']) && isset($_POST['pSlug'])) {
      //$TryContent = $_POST['nContent'];
      //$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      R::exec(
        'INSERT INTO cms_pages (category, unique_slug, name, content) VALUES (?,?,?,?)',
        [
          $_POST['pCat'],
          $_POST['pSlug'],
          $_POST['pName'],
          $_POST['pContent']
        ]
      );
      $nId = R::getInsertID();
      return $response->withHeader('Location', $this->preferences->getBaseURL() . 'admin/pages/edit/' . $nId);
    }
    //$news = R::load( 'news', 1 );
    $pagesList = R::getAll('SELECT * FROM cms_pages');

    return $this->render($response, 'admin-pages.twig', [
      'pageTitle' => "Pages",
      'pages' => $pagesList
    ]);
  }

  /**
   * @param Request  $request
   * @param Response $response
   * @param array    $args
   *
   * @return Response
   */
  public function pages_edit(Request $request, Response $response, array $args = []): Response
  {
    if (!isset($_SESSION['user_Id'])) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] < 1) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    if (isset($_POST['pName']) && isset($_POST['pCat']) && isset($_POST['pContent']) && isset($_POST['pSlug'])) {
      //$TryContent = $_POST['nContent'];
      //$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      R::exec(
        'UPDATE cms_pages SET category=?, unique_slug=?, name=?, content=? WHERE id = ?',
        [
          $_POST['pCat'],
          $_POST['pSlug'],
          $_POST['pName'],
          $_POST['pContent'],
          $args['id']
        ]
      );
    }

    $pageEdit = R::findOne('cms_pages', 'id = ?', [$args['id']]);
    $pagesList = R::getAll('SELECT * FROM cms_pages');

    return $this->render($response, 'admin-pages.twig', [
      'pageTitle' => "Pages",
      'pages' => $pagesList,
      'pageEdit' => $pageEdit
    ]);
  }

  /**
   * @param Request  $request
   * @param Response $response
   * @param array    $args
   *
   * @return Response
   */
  public function pages_delete(Request $request, Response $response, array $args = []): Response
  {
    if (!isset($_SESSION['user_Id'])) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] < 1) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    R::hunt(
      'cms_pages',
      ' id = ? ',
      [$args['id']]
    );
    return $response->withHeader('Location', $this->preferences->getBaseURL() . 'admin/pages/add');
  }

  // SETTINGS
  /**
   * @param Request  $request
   * @param Response $response
   * @param array    $args
   *
   * @return Response
   */
  public function settings(Request $request, Response $response, array $args = []): Response
  {
    if (!isset($_SESSION['user_Id'])) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] < 1) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }

    if (isset($_POST['settingsSend'])) {
      $settings = R::getAll('SELECT * FROM cms_settings');
      foreach ($settings as $setting) {
        $TryContent = $_POST[$setting['setting']];
        if (empty($TryContent) || $TryContent == null) {
          continue;
        }
        R::exec(
          'UPDATE cms_settings SET value=? WHERE setting = ?',
          [
            $TryContent,
            $setting['setting']
          ]
        );
      }
      return $response->withHeader('Location', $this->preferences->getBaseURL() . "admin/settings");
    }
    $settings = R::getAll('SELECT * FROM cms_settings');
    //$news = R::load( 'news', 1 );

    return $this->render($response, 'admin-settings.twig', [
      'pageTitle' => "Pages",
      'settings' => $settings
    ]);
  }

  // TRANSLATION
  /**
   * @param Request  $request
   * @param Response $response
   * @param array    $args
   *
   * @return Response
   */
  public function translate(Request $request, Response $response, array $args = []): Response
  {
    if (!isset($_SESSION['user_Id'])) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] < 1) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }

    if (isset($_POST['translationSend'])) {
      $strings = R::getAll('SELECT * FROM cms_lang WHERE language=?', [$this->preferences->getCmsSettings()['current_lang']]);
      foreach ($strings as $string) {
        $TryContent = $_POST[$string['str_key']];
        if (empty($TryContent) || $TryContent == null || $TryContent == $string['text']) {
          continue;
        }
        R::exec(
          'UPDATE cms_lang SET text=? WHERE str_key = ? AND language = ?',
          [
            $TryContent,
            $string['str_key'],
            $this->preferences->getCmsSettings()['current_lang']
          ]
        );
      }
      return $response->withHeader('Location', $this->preferences->getBaseURL() . "admin/translate");
    }
    $strings = R::getAll('SELECT * FROM cms_lang WHERE language=?', [$this->preferences->getCmsSettings()['current_lang']]);
    //$news = R::load( 'news', 1 );

    return $this->render($response, 'admin-translation.twig', [
      'pageTitle' => "Translation",
      'strings' => $strings
    ]);
  }

  public function home(Request $request, Response $response, array $args = []): Response
  {
    if (!isset($_SESSION['user_Id'])) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] < 1) { // Moar admin verif plz
      return $response->withHeader('Location', $this->preferences->getBaseURL());
    }
    return $this->render($response, 'admin-home.twig', [
      'pageTitle' => "Admin"
    ]);
  }


  /**
   * @param Request  $request
   * @param Response $response
   * @param array    $args
   *
   * @return Response
   */
  public function items(Request $request, Response $response, array $args = []): Response
  {
    // $this->dd($args['page']);

    $page = $args['page'];

    $token = R::getAll('SELECT * FROM cms_settings WHERE setting ="api_token"')[0]['default_value'];
    $data = ['page' => $page, 'count' => 25];
    $items = $this->preferences->APIcall_POST($this->preferences->getApiServer(), $data, $token, '/api/v1/gameobjects/item');
    // $this->dd($items);

    $liste_items = [];
    $total = $items['total'];
    $max = round($total / 25);

    foreach($items['entries'] as $item){
      $liste_items[] = ['id' => $item['Value']['Id'], 'name' =>  $item['Value']['Name']];
    // $this->dd($item['Value']['Name']);
      
    }
    // $this->dd($liste_items);


    return $this->render($response, 'admin/admin-items.twig', [
      'pageTitle' => "Admin",
      'page_max' => $max,
      'items' => $liste_items,
      'page_actuel' => $page
    ]);
  }
}
