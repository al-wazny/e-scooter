<?php

class Database {
    
    private $host = '127.0.0.1:3306';
    private $user = 'e-scooter';
    private $pass = 'password';
    private $dbname = 'Scooter';
    
    protected $connection;
    protected $err;
    protected $stmt;
    
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

    private function query($sql){
        try {
            return $this->connection->query($sql);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function addUser($username, $password) {
        $uuid = uniqid($username);
        $sql = "INSERT INTO users (username, password, uuid) VALUES ('$username', '$password', '$uuid');";
        return $this->query($sql);
    }

    public function getUser($username){
        $sql = "SELECT password, uuid FROM users WHERE username='$username'";
        $result = $this->query($sql);
        
        if($result->num_rows <= 0) {
            return false;
        }
        return $result->fetch_assoc();
    }

    public function loginHandler($username, $password) {
        $user = $this->getUser($username);

        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['userID'] = $user['uuid'];
            $_SESSION['username'] = $username;
            header('location: index.php');
        } else {
            echo 'wrong username or password!';
        }
    }   
}