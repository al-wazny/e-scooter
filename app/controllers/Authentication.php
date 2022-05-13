<?php
session_start();

class Authentication extends Controller
{

    private $authModel;

    public function __construct()
    {
        $this->authModel = $this->model('authenticationModel');
    }

    public function login()
    {
        $this->view('pages/login');
    }

    public function loginHandler($info)
    {
        $username = trim($info['username']);
        $password = trim($info['password']);

        if ($this->authModel->validatePassword($username, $password))
        {
            $this->authModel->login($username);

            header("location: ../../index.php/pages/index");
        } else {
            $data['error'] = "Wrong Username or Password";

            $this->view("pages/login", $data);
        }
    }

    public function registrate()
    {
        $this->view('pages/registrate');
    }

    public function registrationHandler($info)
    {
        foreach($info as $data) {
            echo $data;
        }
        // $password = trim($info['password']);
        // $username = trim($info['username']);
        // if (preg_match('/^[A-Za-z0-9]+$/', $username))
        // {
        //     if (empty($password) || empty($username))
        //     {
        //         $data['error'] = "No Input given";
        //         return $this->view("pages/registrate", $data);

        //     } elseif (strlen($password) > 20 || strlen($username)  > 20) {
        //         $data['error'] = "Input is too long";
        //         return $this->view("pages/registrate", $data);
        //     }

        //     if ($this->authModel->repeatPassword($info['password'], $info['passwordRepeat']))
        //     {
        //         if ($this->authModel->createUser($info))
        //         {
        //             $this->authModel->login($info['username']);

        //             header("location: ../../index.php/pages/index");
        //         } else {
        //             $data['error'] = "User already Exist";
        //         }

        //     } else {
        //         $data['error'] = "Password is not identical";
        //     }
        // } else {
        //     $data['error'] = "Username doesn't match pattern";
        // }

        $this->view("pages/registrate", $data);
    }

    public function logout()
    {
        $_SESSION['user'] = '';
        $_SESSION['username'] = '';

        header("location: ../../index.php/authentication/login");
    }
}

//TODO DB users email column hinzufügen
//TODO DB auto-increment id Scooters
//TODO DB Foreign Key 'currenOwner'

