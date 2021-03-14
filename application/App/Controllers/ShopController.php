<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Preferences;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use RedBeanPHP\R;

class ShopController extends AbstractTwigController
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
    public function list(Request $request, Response $response, array $args = []): Response
    {
      $token = R::getAll('SELECT * FROM cms_settings WHERE setting ="api_token"')[0]['default_value'];

      if (!$token)
      {
        return $this->render($response, 'basic-page.twig', [
            'pageTitle' => "API Error",
            'content' => "Server did not receive a response...<br>check your ports, ip, settings,...Server\\resources\config\api.config.json should have the correct ip's and hosts set up.",
        ]);
      }
      else
      {

        $shopItems = R::getAll( 'SELECT * FROM cms_shop WHERE visible=1' );

        $shop = array();
        foreach($shopItems as $itemShop){
          $itemData = $this->preferences->APIcall_GET($this->preferences->getApiServer(), $token, '/api/v1/gameobjects/item/'.$itemShop['id_item']);
          if(!empty($args['cat']) && $args['cat'] > 0 && $args['cat'] < 7 && !empty($itemData)) {
            if($itemData['ItemType'] != $args['cat']) {
              continue;
            }
          }
          $shop[$itemShop['id']]['itemData'] = $itemData;
          if($itemShop['forceddescription'] != ""){
            $shop[$itemShop['id']]['Desc'] = $itemShop['forceddescription'];
          }else{
            $shop[$itemShop['id']]['Desc'] = $itemData['Description'];
          }
          if($itemShop['promotion'] > 0){
            $shop[$itemShop['id']]['Price'] = $itemShop['price'] * (1-($itemShop['promotion'] / 100));
          }else{
            $shop[$itemShop['id']]['Price'] = $itemShop['price'];
          }
          $shop[$itemShop['id']]['Quantity'] = $itemShop['quantity'];
          $shop[$itemShop['id']]['Promotion'] = $itemShop['promotion'];
          $shop[$itemShop['id']]['id'] = $itemShop['id'];
        }

        return $this->render($response, 'shop-list.twig', [
            'pageTitle' => "Itemshop",
            'shop' => $shop,
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
    public function detail(Request $request, Response $response, array $args = []): Response
    {
      $token = R::getAll('SELECT * FROM cms_settings WHERE setting ="api_token"')[0]['default_value'];

      if(!isset($_SESSION['user_Id'])) {
        return $this->render($response, 'basic-page.twig', [
            'pageTitle' => "Erreur",
            'content' => "Une erreur est survenue, veuillez réessayer.",
        ]);
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

        if(isset($_POST['playerShop'])) {
          $itemShop = R::findOne( 'cms_shop', 'id = ?', [$args['id']]);
          if(empty($itemShop)) {
            return $this->render($response, 'basic-page.twig', [
                'pageTitle' => "Erreur",
                'content' => "Une erreur est survenue, veuillez réessayer.",
            ]);
          }
          $userWeb = R::findOne( 'cms_users', 'id = ?', [$_SESSION['user_Id']]);
          if(empty($userWeb)) {
            return $this->render($response, 'basic-page.twig', [
                'pageTitle' => "Erreur",
                'content' => "Une erreur est survenue, veuillez réessayer.",
            ]);
          }
          if($itemShop['promotion']>0) {
            if(($itemShop['price'] * (1-($itemShop['promotion'] / 100))) > $userWeb['points']) {
              return $this->render($response, 'basic-page.twig', [
                  'pageTitle' => "Erreur",
                  'content' => "Vous n'avez pas assez de points.",
              ]);
            }
            $virtual_currency = $userWeb['points'] - ($itemShop['price'] * (1-($itemShop['promotion'] / 100)));
          }else{
            if($itemShop['price'] > $userWeb['points']) {
              return $this->render($response, 'basic-page.twig', [
                  'pageTitle' => "Erreur",
                  'content' => "Vous n'avez pas assez de points.",
              ]);
            }
            $virtual_currency = $userWeb['points'] - $itemShop['price'];
          }
          R::exec( 'UPDATE cms_users SET points=? WHERE id=?',
          [
            $virtual_currency,
            $_SESSION['user_Id']
          ]);
          R::exec( 'INSERT INTO cms_shop_history (date, shop_id, user_id, credits_now) VALUES (NOW(),?,?,?)',
          [
            $args['id'],
            $_SESSION['user_Id'],
            $virtual_currency
          ]);
          $_SESSION['points'] = $virtual_currency;

          $postData = array(
              'itemid' => $itemShop['id_item'],
              'quantity' =>  $itemShop['quantity'],
              'bankoverflow' => true
          );
          $apiResponse = $this->preferences->APIcall_POST($this->preferences->getApiServer(), $postData, $token, '/api/v1/players/'.$_POST['playerShop'].'/items/give');

          return $this->render($response, 'basic-page.twig', [
              'pageTitle' => "Validation cashshop",
              'content' => "Vous devriez avoir reçu votre objet en jeu.",
          ]);
        }

        $itemShop = R::findOne( 'cms_shop', 'id = ?', [$args['id']]);
        $shop = array();

        $itemData = $this->preferences->APIcall_GET($this->preferences->getApiServer(), $token, '/api/v1/gameobjects/item/'.$itemShop['id_item']);
        $players = $this->preferences->APIcall_GET($this->preferences->getApiServer(), $token, '/api/v1/users/' . $_SESSION['user_Id'] .'/players');
        $shop['itemData'] = $itemData;
        if($itemShop['forceddescription'] != ""){
          $shop['Desc'] = $itemShop['forceddescription'];
        }else{
          $shop['Desc'] = $itemData['Description'];
        }
        if($itemShop['promotion'] > 0){
          $shop['Price'] = $itemShop['price'] * (1-($itemShop['promotion'] / 100));
        }else{
          $shop['Price'] = $itemShop['price'];
        }
        $shop['Quantity'] = $itemShop['quantity'];
        $shop['Promotion'] = $itemShop['promotion'];
        $shop['id'] = $itemShop['id'];

        //$news = R::getAll( 'SELECT * FROM news LIMIT 0,6' );
        return $this->render($response, 'view-itemshop.twig', [
            'itemShop'   => $shop,
            'playersAcc' => $players
        ]);

      }
    }
}
