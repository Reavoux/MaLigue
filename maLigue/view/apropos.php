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
	<?php include "menu/navBarTop.php"; ?>
      <!--Header-->
      <header class="masthead" style="background-image: url('assets/templetFrontend/images/eyes.jpg')">
         <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
               <div class="col-md-10 col-lg-8 col-xl-7">
                  <div class="page-heading">
                     <h1>Qui sommes nous ?</h1>
                     <span class="subheading">Nous sommes une association de jeux de société.</span>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!--Content-->
      <main class="mb-4">
         <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
               <div class="col-md-12 col-lg-10 col-xl-9">
                  <h2>Déscription.</h2>
                  <p class="divan">
                     <img src="sources/img/ledivan.jpg" title="Le divan" alt="Le divan"/>
                  </p>
                  <p class="test">
                     L’objectif de l'assocation LesJeuxCestCool est de promouvoir le jeu de société moderne auprès du plus grand nombre, au travers notamment de l’organisation d'événements hebdomadaire ainsi que des tournois organisé chaque mois. Avec l’aide de nos partenaire.                        
                  </p>
               </div>
               <div class="col-md-12 col-lg-10 col-xl-9">
                  <h5>
                     L'association compte parmis ses rangs :                        
                  </h5>
                  <ul class="lien">
                     <li><a href="https://fumbbl.com/p/news" target="_blank">Fumbbl</a></li>
                     <li><a href="https://www.trictrac.net/" target="_blank">TricTrac</a></li>
                     <li><a href="https://www.philibertnet.com/fr/" target="_blank">Philibertnet</a></li>
                     <li><a href="https://ledivan.fr/" target="_blank">Le divan</a></li>
                     <li><a href="http://www.echecs.asso.fr/" target="_blank">Fédération Française d'echecs</a></li>
                  </ul>
                  <p>
                     Nous restons ouvert à l’adhésion d’autres associations ludiques.</br> Chaque association apporte sa spécificité, tant sur le type de jeux pratiqués que sur l'expérience en terme d'organisation de manifestations ludiques diverses dans la région.
                  </p>
               </div>
               <div class="col-md-12 col-lg-10 col-xl-9">
                  <p class="divan col-md-7">
                     <iframe width="500" height="280" src="https://www.youtube.com/embed/PXKAG8_YKWU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </p>
                  <p class="test col-md-5">
                     Une petite vidéo d'archive sur la création de notre taverne. </br> Lieu d'amusement, de rencontre, de combat et parfois de dispute entre amis !! 
                  </p>
               </div>
            </div>
         </div>
      </main>
      <!-- Footer-->
      <?php include "footer/footer.php"; ?>
      <!-- Bootstrap core JS-->
      <script src="./assets/templetFrontend/js/bootstrap.bundle.min.js"></script>
      <script src="./assets/templetFrontend/js/scripts.js"></script>
   </body>
</html>