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

        if (!$this->db->Exist('username', 'accounts', 'username', $username))
        {
            $password = password_hash($data['password'], PASSWORD_DEFAULT);
            $uuid = uniqid($username);

            $query = "INSERT INTO accounts (is_Admin, username, password, uuid)
                      VALUES ('0', '$username', '$password', '$uuid')";

            $this->db->insert($query);

            return true;
        }

        return false;
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
        echo 'blub';
        return $author;
    }
}