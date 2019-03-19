<?php
namespace App\Controllers;

use Jenssegers\Blade\Blade;

abstract class Controller {
    protected $request;
    protected $response;
    protected $view;

    public function __construct($request, $response) {
        $this->request = $request;
        $this->response = $response;
        $settings = include(__DIR__.'/../../../settings.php');
        $settingsBlade = $settings['blade'];
        $this->view = new Blade($settingsBlade['views'], $settingsBlade['cache']);
    }
}