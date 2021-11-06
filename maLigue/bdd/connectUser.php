<?php

/**
 *
 * @author BLUET Frédérick
 */
class connectUser {

    public
		$sql = "";

	// donner une valeur a la variable (initialisation de la variable)
    public function __construct() {
		try
		{
			$this->sql = new PDO('mysql:host=localhost;dbname=maligue;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}
   }

	// Vérification des logins et mot de passe
    public function connect($login, $pass) {
        if ($login == "" || $pass == "") {
            echo "Verifiez vos donner de connection";
        } else {
			// connexion à la base des données
			$conn = $this->sql;
			
			// La requete de BDD
			$champsListeUser = "*";
			$cndListeUser = "WHERE login = '$login' and pass= '$pass'";
			$listeUser = "SELECT $champsListeUser FROM user $cndListeUser";
			$tblListeUser=$conn->prepare($listeUser);			
			$tblListeUser->execute();
			$resultListeUser = $tblListeUser->fetchAll();		
			
			$nbUser = count($resultListeUser);

            if ($nbUser == 1) {			
				if($resultListeUser[0]['statut']==0){
					// echo "<script type=\"text/javascript\">alert('Votre compte est en cours de validation !');</script>";
					echo "<b style='background-color:powderblue;'>Votre compte est en cours de validation !</b>";
				}else{
					$_SESSION['userMaLigue_id'] = $resultListeUser[0]['id'];
					$_SESSION['userMaLigue_name']= $resultListeUser[0]['nom']. " " . $resultListeUser[0]['prenom'];
					$_SESSION['userMaLigue_mail']= $resultListeUser[0]['mail'];
					$_SESSION['userMaLigue_role']= $resultListeUser[0]['role'];
					// Redirection vers la page d'accueil suite à la validation dess logins
					echo "<script type=\"text/javascript\">window.location.replace(\"\ligue\?action=accueil\")</script>";
				}
			} else {
                echo "<b style='background-color:powderblue;'>Mauvais login ou mot de passe !</b>";
            }
        }
    }

    public function desconnect() {
        unset( $_SESSION['userMaLigue_id']);
        unset( $_SESSION['userMaLigue_name']);
        unset($_SESSION['userMaLigue_mail']);
        unset($_SESSION['userMaLigue_role']);
    }

}
