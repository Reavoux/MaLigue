<?php 
ini_set('display_errors', '1');
session_start();
date_default_timezone_set('UTC');
header('Content-Type: text/html; charset=utf-8' );
include "bdd/index.php";
include "bdd/connectUser.php";
$connectUser= new connectUser;
?>