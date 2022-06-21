<?php
require_once(__DIR__ . '/../lib/Controller.php');

class Checkout extends Controller {

    public function __construct()
    {
        $this->checkoutModel = $this->model('checkoutModel');
        $this->updateDbRecord();
    }

    public function getUser() 
    {
        return $this->checkoutModel->getUserInfo();
    }

    public function getScooterInfo() 
    {
        return $this->checkoutModel->getScooter($_GET['scooterId']);
    }
    
    public function getDateDiff()
    {
        $difference = date_diff(date_create($_GET['startDate']), date_create($_GET['endDate']));
        return (int) $difference->format("%a");
    }

    private function updateDbRecord()
    {
        // check if user is logged in
        if ($_SESSION['username'] == '') {
            return header('location: login.php');
        }
        $this->checkoutModel->updateDbRecord($_GET['scooterId'], $this->getDateDiff());
    }
}

$checkout = new Checkout();

$user = $checkout->getUser();
$scooter = $checkout->getScooterInfo();

$dateDiff = $checkout->getDateDiff();
$priceSum = ($dateDiff * $scooter->price);