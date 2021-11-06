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
      <header class="masthead" style="background-image: url('assets/templetFrontend/images/slider-03.jpg')">
         <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
               <div class="col-md-10 col-lg-8 col-xl-7">
                  <div class="page-heading">
                     <h1>Ligue en cours.</h1>
                     <span class="subheading">Prêt feu partez !</span>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!--Content-->
      <div class="container px-4 px-lg-5">
         <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
               <table class="table table-hover table-striped">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ligue Blood Bowl</th>
                        <th scope="col">N° Joueurs</th>
                        <th scope="col">Créateur</th>
                        <th scope="col">Lien</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <th scope="row">1</th>
                        <td>Papier crépon</td>
                        <td>8</td>
                        <td>Reav</td>
                        <td><a href="" onclick="MatcheSuivant()"><i class= "fa fa-list" ></i></a></td>
                     </tr>
                     <tr>
                        <th scope="row">2</th>
                        <td>J'aime les crêpes</td>
                        <td>10</td>
                        <td>Darelik</td>
                        <td><a href="" onclick="Pateacrepes()"><i class= "fa fa-list" ></i></a></td>
                     </tr>
                     <tr>
                        <th scope="row">3</th>
                        <td>Ral'Bowl</td>
                        <td>12</td>
                        <td>Elmios</td>
                        <td><a href="sources/pdf/Rapport_de_match.pdf" download="docs/docSiteFrontend/pdf/Rapport_de_match.pdf"><i class="fa fa-file"></i></a></td>
                     </tr>
                     <tr>
                        <th scope="row">4</th>
                        <td>Mascarade</td>
                        <td>4</td>
                        <td>Golidrim</td>
                        <td><a href="sources/pdf/Rapport_de_match.pdf" download="docs/docSiteFrontend/pdf/Rapport_de_match.pdf"><i class="fa fa-file"></i></a></td>
                     </tr>
                  </tbody>
               </table>
               </br>
               <h5>Règles du jeu !</h5>
               <object class="regles"
                  type="application/pdf"
                  data="docs/docSiteFrontend/pdf/Blood-Bowl-LRB6.pdf"
                  width="100%"
                  height="600">
               </object>
            </div>
         </div>
      </div>
      </div>
      <!-- Footer-->
      <?php include "footer/footer.php"; ?>
      <!-- Bootstrap core JS-->
      <script src="./assets/templetFrontend/js/bootstrap.bundle.min.js"></script>
      <script src="./assets/templetFrontend/js/scripts.js"></script>
   </body>
</html>