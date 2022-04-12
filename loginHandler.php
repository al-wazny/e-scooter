<?php
include('./Database.php');

$username = $_POST['username'];
$password = $_POST['password'];

$db = new Database();

$db->loginHandler($username, $password);
