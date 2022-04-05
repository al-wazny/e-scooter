<?php
include('Database.php');

$db = new Database();
$db->getUser($_GET['username']);