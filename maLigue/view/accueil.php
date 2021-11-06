<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
	  <title><?php echo $nomdeSite ?></title>
      <link rel="icon" type="image/x-icon" href="sources/favicon.ico" />
      <script src="./assets/templetFrontend/js/bootstrap.icone.js"></script>
      <link rel="stylesheet" href="./assets/templetFrontend/css/fontsgoogle.api.css" />
      <link rel="stylesheet" href="./assets/templetFrontend/css/fontsgoogle2.api.css"  />
      <link rel="stylesheet" href="./assets/templetFrontend/css/bootstrap.css">
      <link rel="stylesheet" href="./assets/templetFrontend/css/styles.css">
   </head>
   <body>
      <!-- Barre de navigation-->
		<?php 
		include "menu/navBarTop.php";
		if (isset($_GET['myLigue']) && $_GET['myLigue'] == "myLigue") {
			$connectUser->desconnect();
			echo " <script type=\"text/javascript\">window.location.replace(\".\?action=accueil\")</script>";
		}
		?>
      <!--Header-->
      <header class="masthead" style="background-image: url('assets/templetFrontend/images/slider-01.jpg')">
         <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
               <div class="col-md-10 col-lg-8 col-xl-7">
                  <div class="site-heading">
                     <div class="jump">
                        <h1><span style="--i:1">Jouer</span>
                           <span style="--i:2">C'est </span>
                           <span style="--i:3">Cool</span>
                           <span style="--i:4">.</span>
                           <span style="--i:5">.</span>
                           <span style="--i:6">.</span>
                        </h1>
                     </div>
                     <span class="subheading">Joues avec tes ami(e)s !</span>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!--Content-->
      <div class="row row-cols-1 row-cols-md-3 g-4">
         <div class="col">
            <div class="card h-100">
               <img src="assets/templetFrontend/images/perseval.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">Provencal le Gaulois</h5>
                  <p class="card-text">"Là, vous faites sirop de vingt-et-un et vous dites : beau sirop, mi-sirop, siroté, gagne-sirop, sirop-grelot, passe-montagne, sirop au bon goût." </br> <b> C'est pas faux.</b> </C></p>
               </div>
               <div class="card-footer">
                  <small class="text-muted">Dernier message : 3 mins</small>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="card h-100">
               <img src="assets/templetFrontend/images/arthur.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">Arthur Pendragon</h5>
                  <p class="card-text">"Je suis roi de Bretagne. J'ai pas de conseil à recevoir d'un clodo !"</p>
               </div>
               <div class="card-footer">
                  <small class="text-muted">Dernier message : 5 mins</small>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="card h-100">
               <img src="assets/templetFrontend/images/Sans titre.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">Roi Burgonde</h5>
                  <p class="card-text">"Troupa ! Troupa ! Troupatroupatroupatroupa ! TROUPA ! HAHAHAHAHAHAHA ! Troupaskaya !
                     "
                  </p>
               </div>
               <div class="card-footer">
                  <small class="text-muted">Dernier message : 10 mins </small>
               </div>
            </div>
         </div>
      </div>
      </br>
      <!-- Footer-->
      <?php include "footer/footer.php"; ?>
      <!-- Bootstrap core JS-->
      <script src="./assets/templetFrontend/js/bootstrap.bundle.min.js"></script>
      <script src="./assets/templetFrontend/js/scripts.js"></script>
   </body>
</html>