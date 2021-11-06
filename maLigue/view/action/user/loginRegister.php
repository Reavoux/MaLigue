<?php
$nom = "";
$prenom = "";
$mail = "";
$login = "";
$pass = "";
$dateDeNaissance = "";
$adressePostale = "";
$telephone = "";
$statut = 0;
$role = "user";

if (isset($_POST["nom"]) and $_POST["nom"]!=""){
    $nom = addslashes($_POST['nom']);
}

if (isset($_POST["prenom"]) and $_POST["prenom"]!=""){
    $prenom = addslashes($_POST['prenom']);
}

if (isset($_POST["mail"]) and $_POST["mail"]!=""){
    $mail = addslashes($_POST['mail']);
}

if (isset($_POST["login"]) and $_POST["login"]!=""){
    $login = addslashes($_POST['login']);
}

if (isset($_POST["pass"]) and $_POST["pass"]!=""){
    $pass = $_POST['pass'];
}

if (isset($_POST["dateDeNaissance"]) and $_POST["dateDeNaissance"]!=""){
    $dateDeNaissance = $_POST['dateDeNaissance'];
}

if (isset($_POST["adressePostale"]) and $_POST["adressePostale"]!=""){
    $adressePostale = addslashes($_POST['adressePostale']);
}

if (isset($_POST["telephone"]) and $_POST["telephone"]!=""){
    $telephone = addslashes($_POST['telephone']);
}

try {
	$rqAddUser = "INSERT INTO user (nom, prenom, mail, login, pass, dateDeNaissance, adressePostale, telephone, statut, role) VALUES (?,?,?,?,?,?,?,?,?,?)";
	$addUser= $conn->prepare($rqAddUser);
	$addUser->execute([$nom, $prenom, $mail, $login, $pass, $dateDeNaissance, $adressePostale, $telephone, $statut, $role]);
}
catch(Exception $e)
{
	echo "Err => ". $e;
}
echo "Success";
?>