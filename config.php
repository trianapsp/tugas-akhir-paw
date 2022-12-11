<?php

session_start();

define('LOCALHOST', 'localhost');
define('ROOT', 'root');
define('PASSWORD', '');
define('DATABASE', 'login_db');
define('SITEURL', 'http://localhost/PHP-ACCOUNT/');

$link = mysqli_connect(LOCALHOST, ROOT, PASSWORD, DATABASE) or die (mysqli_error($link));
$db_select = mysqli_select_db($link, DATABASE) or die(mysqli_error($link));

?>
