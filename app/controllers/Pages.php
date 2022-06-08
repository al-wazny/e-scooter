<?php
require_once('../app/lib/Controller.php');

class Pages extends Controller {

    private $startPage;

    public function __construct()
    {
        $this->startPage = $this->model('startPageLoader');
    }

    public function index()
    {
        if (isset($_GET['id'])) {
            return $this->scooter($_GET['id']);
        }
        return $this->startPage->load();   
    }

    public function scooter($data) 
    {
        return $this->startPage->getScooter($data['id']);
    }
}

$page = new Pages();
$data = $page->index();