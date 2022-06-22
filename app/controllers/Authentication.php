<?php
session_start();
require_once(__DIR__ . '/../lib/Controller.php');

class Authentication extends Controller
{

    private $authModel;
    private $user;

    public function __construct()
    {
        $this->authModel = $this->model('authenticationModel');
    }

    public function loginHandler($userData)
    {
        $this->user = $userData;
        $this->filterDataFromWhitespaces();

        try {
            $this->authModel->validatePassword($this->user['username'], $this->user['password']);
            $this->loginUser();
        } catch (Exception $e) {
            $data['error'] = $e->getMessage();
            return $data;
        }
    }

    public function logout()
    {
        $_SESSION['uuid'] = '';
        $_SESSION['username'] = '';
    }

    protected function loginUser()
    {
        $_SESSION['uuid'] = $this->user['uuid'];
        $_SESSION['username'] = $this->user['username'];

        header('location: ../index.php');
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
            $_SESSION['error'] = $e->getMessage();
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
            }
            throw new Exception('Passwords are not Identical');
        }
        throw new Exception('Username does not match the required pattern');
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

$auth = new Authentication();

if (isset($_POST['Login'])) {
    $auth->loginHandler($_POST);
} elseif (isset($_POST['Registrate'])) {
    $auth->registrationHandler($_POST);
}