<?php

class startPageLoader
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getScooters()
    {
        $query = "SELECT * FROM Scooters";
        $this->db->query($query);

        return $this->db->resultSet();
    }
}
