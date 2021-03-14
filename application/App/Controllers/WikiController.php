<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Preferences;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use RedBeanPHP\R;

class WikiController extends AbstractTwigController
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
    public function page(Request $request, Response $response, array $args = []): Response
    {
        $page = R::findOne( 'cms_pages',
        'unique_slug = ? AND category = ?',
        [$args['unique_slug'], "wiki"]);
        if(empty($page)) {
          return $this->render($response, 'basic-page.twig', [
              'pageTitle' => "Error",
              'content' => "Not found.",
          ]);
        }else{
          return $this->render($response, 'basic-page.twig', [
              'pageTitle' => $page['name'],
              'content' => $page['content'],
          ]);
        }
    }
}
