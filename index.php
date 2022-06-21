<?php
session_start();
if($_SESSION['username'] == '') {
    header('location: views/pages/login.php');
} else {
    header('location: views/index.php');
}