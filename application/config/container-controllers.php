<?php

declare(strict_types=1);

use App\Controllers\ExceptionDemoController;
use App\Controllers\HelloController;
use App\Controllers\HomeController;
use App\Controllers\GameController;
use App\Preferences;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Slim\Views\Twig;

return [
    ExceptionDemoController::class => function (ContainerInterface $container): ExceptionDemoController {
        return new ExceptionDemoController();
    },
    GameController::class => function (ContainerInterface $container): GameController {
        return new GameController($container->get(Twig::class), $container->get(Preferences::class));
    },
    HomeController::class => function (ContainerInterface $container): HomeController {
        return new HomeController($container->get(Twig::class), $container->get(Preferences::class));
    },
    UserController::class => function (ContainerInterface $container): UserController {
        return new UserController($container->get(Twig::class), $container->get(Preferences::class));
    },
    WikiController::class => function (ContainerInterface $container): WikiController {
        return new WikiController($container->get(Twig::class), $container->get(Preferences::class));
    },
    ShopController::class => function (ContainerInterface $container): ShopController {
        return new ShopController($container->get(Twig::class), $container->get(Preferences::class));
    },
    AdminController::class => function (ContainerInterface $container): AdminController {
        return new AdminController($container->get(Twig::class), $container->get(Preferences::class));
    },
];
