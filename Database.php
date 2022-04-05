<?php
class Database {

    private $host = '127.0.0.1:6033';
    private $user = 'user';
    private $pass = 'password';
    private $dbname = 'db';

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

    public function addUser($username, $password) {
        $sql = "INSERT INTO users (username, password) VALUES ('.$username.', '.$password.')";
        return $this->connection->query($sql);
    }

    public function getUser($username){
        $sql = "SELECT password FROM users WHERE username='.$username.'";
        $result = $this->connection->query($sql);

        if($result->num_rows <= 0) {
            return "username or password might be wrong";
        }
        $user = $result->fetch_assoc();
    }
    
}