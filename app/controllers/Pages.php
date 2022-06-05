<?php

class Pages extends Controller {

    private $startPage;
    private $authModel;
    private $productPage;

    public function __construct()
    {
        $this->authModel = $this->model('authenticationModel');
        $this->startPage = $this->model('startPageLoader');
        $this->productPage = $this->model('productPageLoader');
    }

    public function index()
    {
        $data = $this->startPage->load();
        
        $this->view('index', $data);
    }

    public function scooter($data) 
    {
        $data = $this->productPage->getScooter($data['id']);
        $this->view('pages/scooter', $data);
    }

    public function login()
    {
        $this->view('pages/login');
    }

    public function registrate()
    {
        $this->view('pages/registrate');
    }
}
