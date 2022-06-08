<?php
require_once('C:\xampp\htdocs\e-scooter\app\lib\Database.php');
class startPageLoader
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function load() 
    {
        return $this->getScooters();
    }

    private function getScooters()
    {
        $query = "SELECT * FROM Scooters";
        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function getScooter($id)
    {
        $sql = "SELECT * FROM Scooters WHERE id=$id";
    
        $this->db->query($sql);
        return $this->db->single();
    }
}
