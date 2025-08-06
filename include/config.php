<?php
//defined("_AS") or die("Access denied!");
date_default_timezone_set('Asia/Tehran');

define('DB_HOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_DATABASE','fastfood');

$mysqli=@new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE);



if ($mysqli->connect_errno)
    die('Error to connect DB!');


$mysqli->set_charset('utf8');

//DB::setConnection($mysqli);

//$mysqli->query("set @@global.sql_mode='ERROR_FOR_DIVISION_BY_ZERO,NO_ZERO_DATE,NO_ZERO_IN_DATE,NO_AUTO_CREATE_USER'");
mb_internal_encoding('UTF-8');
?>