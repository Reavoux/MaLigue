<?php
$nomdeSite = "Ma ligue";
$dateActuelle=date("d-m-Y");
$dateHeureActuelle=date("d-m-Y H:i:s");
include "config.php";

if((isset($_SESSION['userMaLigue_name']) && $_SESSION['userMaLigue_name']!="") or ((isset($_GET['action'])) && $_GET['action']=="loginRegister")) {
	if(isset($_GET['action'])) {
		$nomDePage=$_GET['action'];
		include_once "view/$nomDePage.php";		
	}
	else {
		include_once "view/accueil.php";
	}
}else {
	echo "<script type=\"text/javascript\">window.location.replace(\"..\?action=accueil\")</script>";
}

?>