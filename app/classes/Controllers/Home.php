<?php
namespace App\Controllers;

class Home {
    private $request;
    private $response;
    private $view;

    public function __construct($request, $response, $view) {
        $this->request = $request;
        $this->response = $response;
        $this->view = $view;
    }

    public function index() {
        $this->view->render($this->response, 'home.html');
    }
}