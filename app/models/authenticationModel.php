<?php
session_start();

class authenticationModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function createUser($data)
    {
        $username = trim($data["username"]);

        if (!$this->db->Exist('username', 'users', 'username', $data["username"]))
        {
            $password = password_hash($data['password'], PASSWORD_DEFAULT);
            $uuid = uniqid($username);

            $query = "INSERT INTO users (username, password, uuid, street_housenumber, city, zip_code, birthday, firstname, lastname, email)
                      VALUES ('".$username."', '".$password."', '".$uuid."', '".$data['adress']."', '".$data['city']."', '".$data['ZIP']."', '".$data['birthday']."', '".$data['firstname']."', '".$data['lastname']."', '".$data['email']."')";

            return $this->db->insert($query);
        }
        throw new Exception('Username aready in use');
    }

    public function repeatPassword($password, $passwordRepeat)
    {
        return ($password === $passwordRepeat);
    }

    public function login($username)
    {
        $user = $this->getUserInfo($username);

        $_SESSION['user'] = $user->uuid;
        $_SESSION['username'] = $user->username;
    }

    public function isAuthorized($uuid)
    {
        return ($uuid === $_SESSION['user'] || $this->isAdmin());
    }

    public function getUserInfo($username)
    {
        $query  = "SELECT * FROM accounts WHERE username = '".$username."'";

        $this->db->query($query);

        return $this->db->single();
    }

    public function validatePassword($username, $password)
    {
        $user = $this->getUserInfo($username);

        return (password_verify($password, $user->password));
    }

    public function isAuthor($task)
    {
        $isAdmin = $this->isAdmin();

        foreach ($task as &$todo)
        {
            if ($todo['user_id'] === $_SESSION['user'] || $isAdmin)
            {
                $todo['author'] = true;
            } else {
                $todo['author'] = false;
            }
        }
        return $task;
    }

    public function isAdmin()
    {
        $user = $this->getUserInfo($_SESSION['username']);

        $author = $user->is_Admin;

        $author = boolval($author);

        return $author;
    }
}
