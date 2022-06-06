<?php

require_once('../app/lib/Controller.php');

class Pages extends Controller {

    private $startPage;
    private $productPage;

    public function __construct()
    {
        $this->startPage = $this->model('startPageLoader');
    }

    public function index()
    {
        return $this->startPage->load();
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

$page = new Pages();
$data = $page->index();
