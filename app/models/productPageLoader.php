<?php

class productPageLoader
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getScooter($id)
    {
        $sql = "SELECT * FROM Scooters WHERE id=$id";
    
        $this->db->query($sql);
        return $this->db->single();
    }
}
