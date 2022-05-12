<?php

class Pages extends Controller {

    private $pagesModel;
    private $authModel;
    private $todoModel;

    public function __construct()
    {
        $this->authModel = $this->model('authenticationModel');
    }

    public function scooter() 
    {
        $this->view('pages/scooter');;
    }
}
