<?php
if($_SESSION['username'] == '') {
    header('location: views/pages/login.php');
}
// require_once 'app/boostrap.php';

// new Core();
header('location: views/index.php');