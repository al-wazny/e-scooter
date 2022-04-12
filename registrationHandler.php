<?php
include('./Database.php');

$username = $_POST['username'];
$password = $_POST['password'];
$passwordRepeat = $_POST['passwordRepeat'];

var_dump($_POST);

if ($password === $passwordRepeat) {
   $db = new Database();

   // check if there is a row in the db with the given username
   // to tell the user to pick a different username so there won't be duplicates
   if (!$db->getUser($username)) {
      $hash = password_hash($password, PASSWORD_DEFAULT);
   
      $db = new Database();
      $db->addUser($username, $hash);
      $db->loginHandler($username, $password);
   } else {
      echo 'username already in use, pick a different one';
   }
}
