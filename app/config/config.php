<?php
define('SERVERNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DB_NAME', 'escooter');
define('DB_CHAR', 'uft8mb4');

define('APP_ROOT', dirname(dirname(__FILE__)));

$root_url = (!empty($_SERVER['HTTPS']) ? "https" : "http") . '://' . $_SERVER['HTTP_HOST'] . '.com/';
define('URL_ROOT', $root_url);

define('SITE_NAME', 'thiccMoms');


//echo  URL_ROOT;
//echo APP_ROOT;