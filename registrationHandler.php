<?php
include('Database.php');

$username = $_GET['username'];
$password = $_GET['password'];
$passwordRepeat = $_GET['passwordRepeat'];

if ($password === $passwordRepeat) {
   $password = md5($password);
   
   $db = new Database();
   $db->addUser($username, $password);
}