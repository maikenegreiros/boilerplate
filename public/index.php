<?php
require __DIR__.'/../vendor/autoload.php';

use App\Controllers\Home;

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);

$app = new \Slim\App($c);

$container = $app->getContainer();

$app->get('/', function ($request, $response, $args) {
    (new Home($request, $response))->index();
})->setName('home');

$app->run();