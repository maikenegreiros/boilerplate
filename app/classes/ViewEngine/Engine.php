<?php
namespace App\ViewsEngine;

use Slim\Container;

interface Engine {
    public function __construct(Container  $container);
    public function render();
}