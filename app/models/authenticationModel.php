<?php
require_once('C:\xampp\htdocs\e-scooter\app\lib\Database.php');

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

    public function login($user)
    {
        $_SESSION['user'] = $user->uuid;
        $_SESSION['username'] = $user->username;
    }

    public function isAuthorized($uuid)
    {
        return ($uuid === $_SESSION['user'] || $this->isAdmin());
    }

    public function getUserInfo($username)
    {
        (string) $username;
        $query  = "SELECT * FROM users WHERE username = '".$username."'";

        $this->db->query($query);

        return $this->db->single();
    }

    public function validatePassword($username, $password)
    {
        $user = $this->getUserInfo($username);

        // DB return an object if only a single record is selected
        // if $user isn't an object then it's null 
        if (!is_object($user)) {
            throw new Exception("Wrong username or password");
        }
        $this->login($user);
        return password_verify($password, $user->password);
    }

    // public function isAuthor($task)
    // {
    //     $isAdmin = $this->isAdmin();

    //     foreach ($task as &$todo)
    //     {
    //         if ($todo['user_id'] === $_SESSION['user'] || $isAdmin)
    //         {
    //             $todo['author'] = true;
    //         } else {
    //             $todo['author'] = false;
    //         }
    //     }
    //     return $task;
    // }

    public function isAdmin()
    {
        $user = $this->getUserInfo($_SESSION['username']);

        $author = $user->is_Admin;

        $author = boolval($author);

        return $author;
    }
}
