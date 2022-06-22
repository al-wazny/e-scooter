<?php
if($_SESSION['username'] == '') {
    return header('location: views/pages/login.php');
} 
header('location: views/index.php');