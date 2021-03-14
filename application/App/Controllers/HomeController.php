<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Preferences;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use RedBeanPHP\R;

class HomeController extends AbstractTwigController
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
    public function home(Request $request, Response $response, array $args = []): Response
    {
        $news = R::findAll( 'cms_news' , 'ORDER BY date DESC, id DESC LIMIT 6' );
        return $this->render($response, 'news.twig', [
            'pageTitle' => "Actualités",
            'news' => $news,
        ]);
    }
    /**
     * @param Request  $request
     * @param Response $response
     * @param array    $args
     *
     * @return Response
     */
    public function news(Request $request, Response $response, array $args = []): Response
    {

        $news = R::findOne( 'cms_news', 'id = ?', [$args['id']]);
        //$news = R::getAll( 'SELECT * FROM news LIMIT 0,6' );
        return $this->render($response, 'view-news.twig', [
            'pageTitle' => $news['title'],
            'content' => $news['content'],
            'img_url' => $news['img_url'],
            'author' => $news['author'],
            'date' => $news['date'],
        ]);
    }
}
