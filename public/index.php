<?php

    require_once __DIR__.'/../vendor/autoload.php';

use app\controllers\AuthController;
use app\controllers\HomeController;
use app\core\Application;

    $app = new Application(dirname(__DIR__));

    $app->router->get('/', [HomeController::class, 'home']);
    $app->router->get('/contact', [HomeController::class, 'contact']);
    $app->router->post('/contact',[HomeController::class, 'handleContact']);

    $app->router->get('/login',[AuthController::class, 'login']);
    $app->router->post('/login',[AuthController::class, 'login']);
    $app->router->get('/register',[AuthController::class, 'register']);
    $app->router->post('/register',[AuthController::class, 'register']);


    $app->run();

?>