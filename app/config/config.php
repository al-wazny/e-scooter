<?php
define('SERVERNAME', 'localhost');
define('USERNAME', 'lalwazny');
define('PASSWORD', 'password');
define('DB_NAME', 'e-scooter');
define('DB_CHAR', 'uft8mb4');

define('APP_ROOT', dirname(dirname(__FILE__)));

$root_url = (!empty($_SERVER['HTTPS']) ? "https" : "http") . '://' . $_SERVER['HTTP_HOST'] . '.com/';
define('URL_ROOT', $root_url);
