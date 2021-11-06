<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $nomdeSite ?></title>

        <!-- CSS -->
        <link rel="stylesheet" href="assets/login/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/login/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/login/css/form-elements.css">
        <link rel="stylesheet" href="assets/login/css/style.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/login/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/login/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/login/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/login/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/login/ico/apple-touch-icon-57-precomposed.png">

		<!-- Formulaire AJAX -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<script>	 
			/*
			Fonction pour l'envoi de methode POST
			*/
			$(document).ready(function()
			{	
				//using $.ajax() function	
				$(document).on('submit', '#formAddUser', function()
				{		
					var data = $(this).serialize();
					$.ajax({
					type : 'POST',
					url  : '?action=loginRegister',
					data : data,
					success :  function(msg)
							{
									if(msg == 'Success'){
										var texte = "Success !";
										$("#zone_de_rechargement").empty().hide();
										$("#zone_de_rechargement").append(texte);
										$('#zone_de_rechargement').fadeIn(1000);
										alert(texte);
									}
									else{
										var texte = "Success !";
										alert(texte);
										$("#zone_de_rechargement").empty().hide();
										$("#zone_de_rechargement").append(texte);
										$('#zone_de_rechargement').fadeIn(1000);
									}							
							}
					});
					return false;
				});
				
			});	 
		</script>


    </head>

    <body>

		<?php
		if (isset($_GET['myLigue']) && $_GET['myLigue'] == "myLigue") {
			$connectUser->desconnect();
			echo " <script type=\"text/javascript\">window.location.replace(\".\?action=login\")</script>";
		}
		?>

        <!-- Top content -->
        <div class="top-content">
        	<div class="container">                	
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><a href="./" style="color:black;font-size:50px;font-weight: 300;">Ma ligue</a></h1>
                        <div class="description">
                        	<p>
								La vie est comme un jeu, il y a de nombreux joueurs. 
								Si tu ne joues pas avec eux, ils joueront avec toi.								
                        	</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 show-forms">
                    	<span class="show-login-form active">Connexion</span> 
                    	<span class="show-forms-divider">/</span> 
                    	<span class="show-register-form">S'inscrire</span>
                    </div>
                </div>
                                
                <div class="row login-form">
                    <div class="col-sm-4 col-sm-offset-1">
						<form role="form" name ="formCnxUser" id ="formCnxUser" method="post" class="l-form">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="l-form-username">Nom d'utilisateur</label>
	                        	<input type="text" name="loginCnx" placeholder="Nom d'utilisateur..." class="l-form-username form-control" id="l-form-username">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="l-form-password">Mot de passe</label>
	                        	<input type="password" name="passCnx" placeholder="Mot de passe..." class="l-form-password form-control" id="l-form-password">
	                        </div>
				            <button type="submit" class="btn">S'identifier!</button>
				    	</form>
						<?php include "beans/user_connect.php" ?>
                    </div>
                    <div class="col-sm-6 forms-right-icons">
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-user"></i></div>
							<div class="col-sm-10">
								<h3>Votre compte :</h3>
								<p>Jusqu'a 3 emprunts en même temps.<br/>Pour une durer maximale de 3 semaines.<br/>Le bonheur ne se mérite pas, il s'emprunte</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-eye"></i></div>
							<div class="col-sm-10">
								<h3>Accessibilité :</h3>
								<p>Notre catalogue est mis à jour en temps réel pour votre plus grand bonheur.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-twitter"></i></div>
							<div class="col-sm-10">
								<h3>Contact :</h3>
								<p>Pour vous offrir une meilleure qualité de service.<br/>Nous avons mis en palce un formulaire de contact.<br/> Faites-nous pars de vos questions et/ou suggestions.</p>
							</div>
						</div>
                    </div>
                </div>
                
                <div class="row register-form">
                    <div class="col-sm-4 col-sm-offset-1">
						<form name= "formAddUser" id ="formAddUser" role="form" method="post" class="r-form">
	                        <div class="form-group">
	                        	<label class="sr-only" for="r-form-last-name">Nom</label>
	                        	<input type="text" name="nom" placeholder="Nom ..." class="r-form-last-name form-control" id="r-form-last-name">
	                        </div>
							<div class="form-group">
	                    		<label class="sr-only" for="r-form-first-name">Prénom</label>
	                        	<input type="text" name="prenom" placeholder="Prénom..." class="r-form-first-name form-control" id="r-form-first-name">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="r-form-email">Email</label>
	                        	<input type="email" pattern=".+@.+\.[a-zA-Z0-9-]{2,4}" name="mail" placeholder="Email..." class="r-form-email form-control" id="r-form-email">
	                        </div>
							<div class="form-group">
	                    		<label class="sr-only" for="r-form-first-name">Date de naissance</label>
	                        	<input type="date" name="dateDeNaissance" placeholder="Date De Naissance..." class="r-form-first-name form-control" id="r-form-first-name">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="r-form-last-name">Adresse postale</label>
	                        	<input type="text" name="adressePostale" placeholder="Adresse postale..." class="r-form-last-name form-control" id="r-form-last-name">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="r-form-last-name">Téléphone</label>
	                        	<input type="text" name="telephone" placeholder="Téléphone..." class="r-form-last-name form-control" id="r-form-last-name">
	                        </div>
							<div class="form-group">
	                    		<label class="sr-only" for="r-form-first-name">Nom d'utilisateur</label>
	                        	<input type="text" name="login" placeholder="Nom d'utilisateur..." class="r-form-first-name form-control" id="r-form-first-name">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="r-form-last-name">Mot de passe</label>
	                        	<input type="password" name="pass" placeholder="Mot de passe..." class="r-form-last-name form-control" id="r-form-last-name">
	                        </div>
				            <button type="submit" class="btn">Enregistre-moi!</button>
						</form>
						<b id='zone_de_rechargement'></b>
                    </div>
                    <div class="col-sm-6 forms-right-icons">
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-pencil"></i></div>
							<div class="col-sm-10">
								<h3>Inscription.</h3>
								<p>Chaque champ doit être renseigné.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-commenting"></i></div>
							<div class="col-sm-10">
								<h3>Validation.</h3>
								<p>La validation du compte est soumis à l'approbation d'un administrateur.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-2 icon"><i class="fa fa-magic"></i></div>
							<div class="col-sm-10">
								<h3>La magie commence.</h3>
								<p>"Je me disais que, tant qu'il y aurait des livres, le bonheur m'était garanti." <br/>Simone de Beauvoir.</p>
							</div>
						</div>
                    </div>
                </div>

				
        	</div>
        </div>		
        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p>Copyright &copy; Frédérick BLUET <?php echo date("Y") ?></p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/login/js/jquery-1.11.1.min.js"></script>
        <script src="assets/login/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/login/js/jquery.backstretch.min.js"></script>
        <script src="assets/login/js/scripts.js"></script>
        

    </body>

</html>