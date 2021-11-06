<?php
$nomdeSite = "Ma ligue";
$dateActuelle=date("d-m-Y");
$dateHeureActuelle=date("d-m-Y H:i:s");
include "config.php";

if(isset($_GET['action'])) {
	$nomDePage=$_GET['action'];
	include_once "view/$nomDePage.php";		
}
else {
	include_once "view/accueil.php";
}

?>