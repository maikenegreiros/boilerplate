<?php
namespace App\Controllers;

class Home extends Controller {

    public function __construct($request, $response) {
        parent::__construct($request, $response);
    }

    public function index() {
        $this->response->getBody()->write($this->view->make('home'));
    }
}