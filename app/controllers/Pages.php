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

        $data = $this->startPage->getScooters();
        
        $this->view('index', $data);
    }

    public function scooter() 
    {
        $this->view('pages/scooter');;
    }
}
