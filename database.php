<?php
class Database {

    private $host = '172.17.0.2';
    private $user = 'todolist';
    private $pass = 'password';
    private $dbname = 'todolist';

    private $connection;
    private $err;
    private $stmt;

    public function __construct()
    {

        // Create MYSQLI instance
        try {
            $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        } catch (Exception $e) { // Catches Exception if it is thrown
            $this->err = $e->getMessage();
            echo $this->err;
        }

    }

    
}