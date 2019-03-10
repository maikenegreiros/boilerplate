<?php
require __DIR__.'/../vendor/autoload.php';

use App\Controllers\Home;
use App\Controllers\Profile;

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);

$app = new \Slim\App($c);

$container = $app->getContainer();
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(__DIR__.'/../app/views/', [
        'cache' => __DIR__.'/../cache'
    ]);

    // Instantiate and add Slim specific extension
    $router = $container->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension(new Slim\Views\TwigExtension($router, $uri));

    return $view;
};

$app->get('/', function ($request, $response, $args) {
    (new Home($request, $response, $this->view))->index();
    // return $this->view->render($response, 'home.html');
})->setName('home');

$app->get('/contato', function ($request, $response, $args) {
    return $this->view->render($response, 'contato.html');
})->setName('contato');

$app->get('/teste/{name}', function ($request, $response, $args) {
    (new Profile($request, $response, $this->view))->index();
    // return $this->view->render($response, 'profile.html', $args);
})->setName('profile');

$app->run();