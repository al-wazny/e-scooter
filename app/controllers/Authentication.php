<?php
session_start();

class Authentication extends Controller
{

    private $authModel;
    private $user;

    public function __construct()
    {
        $this->authModel = $this->model('authenticationModel');
        $_SESSION['registrationError'] = '';
    }

    public function loginHandler($info)
    {
        $username = trim($info['username']);
        $password = trim($info['password']);

        if ($this->authModel->validatePassword($username, $password))
        {
            $this->loginUser();

            header("location: ../../index.php/pages/index");
        } else {
            $data['error'] = "Wrong Username or Password";

            $this->view("pages/login", $data);
        }
    }

    public function logout()
    {
        $_SESSION['uuid'] = '';
        $_SESSION['username'] = '';

        $this->view('index');
    }

    protected function loginUser()
    {
        $_SESSION['uuid'] = $this->user['uuid'];
        $_SESSION['username'] = $this->user['username'];

        header('location: ../..');
    }

    public function registrationHandler($userData)
    {
        $this->user = $userData;

        try {
            $this->filterDataFromWhitespaces();
            $this->validateInput();
            $this->authModel->createUser($this->user);
            $this->loginUser();
        } catch (Exception $e) {
            $_SESSION['registrationError'] = $e->getMessage();
            header('location: ../../pages/registrate');
        }
    }

    protected function filterDataFromWhitespaces()
    {
        foreach($this->user as &$data){
            trim($data);
        }
    }

    protected function validateInput()
    {
        if (preg_match('/^[A-Za-z0-9]+$/', $this->user['username']) && $this->validInputLength()) {
            if ($this->user['password'] === $this->user['passwordRepeat']) {
                return true;
            } else {
                throw new Exception('Passwords are not Identical');
            }
        } else {
            throw new Exception('Username does not match the required pattern');
        }
    }

    private function validInputLength()
    {
        if (empty($this->user['password']) || empty($this->user['username'])) {
            throw new Exception('Missing required Input');
        } elseif (strlen($this->user['password']) > 20 || strlen($this->user['username'])  > 20) {
            throw new Exception('Too long of an Input');
        }
        return true;
    }
}

//TODO DB users email column hinzufügen
//TODO DB Foreign Key 'currenOwner'

