<?php
require_once(__DIR__ . '/../lib/Database.php');
session_start();

class CheckoutModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getUserInfo()
    {
        $username = $_SESSION['username'];
        $query  = "SELECT * FROM users WHERE username = '".$username."'";

        $this->db->query($query);

        return $this->db->single();
    }

    public function getScooter($id)
    {
        $sql = "SELECT * FROM scooters WHERE id=$id";
        $this->db->query($sql);

        return $this->db->single();
    }

    public function updateDbRecord($id, $duration)
    {
        $user = $this->getUserInfo();
        $userId = $user->id;
        $query = "UPDATE scooters SET isAvailable=0, duration=$duration, currentOwner=$userId WHERE id=$id";
        return $this->db->query($query);
    }
}