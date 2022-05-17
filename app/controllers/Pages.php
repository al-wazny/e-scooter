<?php

class Pages extends Controller {

    private $startPage;
    private $authModel;

    public function __construct()
    {
        $this->authModel = $this->model('authenticationModel');
        $this->startPage = $this->model('startPageLoader');
    }

    public function index()
    {
        $data = $this->startPage->load();
        
        $this->view('index', $data);
    }

    public function scooter() 
    {
        $this->view('pages/scooter');
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
