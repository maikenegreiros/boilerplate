<?php
namespace App\Controllers;

class Profile {
    private $request;
    private $response;
    private $view;

    public function __construct($request, $response, $view) {
        $this->request = $request;
        $this->response = $response;
        $this->view = $view;
    }

    public function index() {
        $route = $this->request->getAttribute('route');
        $data = $route->getArguments();
        $this->view->render($this->response, 'profile.html', $data);
    }
}