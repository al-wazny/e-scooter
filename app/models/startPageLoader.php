<?php
require_once(__DIR__ . '/../lib/Database.php');
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
        $query = $this->getQueryByFilterSettings();
        $this->db->query($query);

        $scooters = $this->db->resultSet();
        return $this->filterByManufactor($scooters);
    }

    private function getQueryByFilterSettings()
    {
        $query = "SELECT * FROM scooters";

        if (isset($_GET['availability'])) {
            $query .= " WHERE isAvailable=1";
        }

        if (!isset($_GET['price'])) {
            $query .= " ORDER BY price";
        } else  {
            switch ($_GET['price']) {
                case 'top_product':
                    $query .= " ORDER BY price";
                    break;
                
                case 'worst_product':
                    $query .= " ORDER BY price DESC";
                    break;
            }
        }
       
        return $query;
    }

    private function filterByManufactor($scooters) 
    {
        $filteredScooters = [];
        $manufactor = [];

        if (isset($_GET['Segway'])) {
            array_push($manufactor, 'Segway');
        }
        if (isset($_GET['Xiaomi'])) {
            array_push($manufactor, 'xiaomi');
        }
        if (isset($_GET['Grover'])) {
            array_push($manufactor, 'Grover');
        }
        if (!empty($manufactor)) {
            foreach($scooters as $scooter) {
                if (in_array($scooter['manufactor'], $manufactor)) {
                    array_push($filteredScooters, $scooter);
                }
            }
            return $filteredScooters;
        }
        return $scooters;
    }

    public function getScooter($id)
    {
        $sql = "SELECT * FROM scooters WHERE id=$id";
        $this->db->query($sql);

        return $this->db->single();
    }
}