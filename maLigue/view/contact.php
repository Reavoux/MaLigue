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
      <header class="masthead" style="background-image: url('assets/templetFrontend/images/slider-02.jpg')">
         <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
               <div class="col-md-10 col-lg-8 col-xl-7">
                  <div class="page-heading">
                     <h1>Contactez moi.</h1>
                     <span class="subheading">Vous avez des questions? J'ai des réponses !</span>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!--Content-->
      <main class="mb-4">
         <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
               <div class="col-md-10 col-lg-8 col-xl-7">
                  <p>Vous voulez entrer en contact ? </br> Remplissez le formulaire ci-dessous pour m’envoyer un message et je vous répondrai dans les plus brefs délais !</p>
                  <div class="my-5">
                     <form id="contactForm">
                        <div class="form-floating">
                           <input class="form-control" id="name" type="text" placeholder="Entrez votre nom, prénom"/>
                           <label for="name">Non, Prénom</label>
                        </div>
                        <div class="form-floating">
                           <input class="form-control" id="email" type="email" placeholder="Entrez votre mail"/>
                           <label for="email">Adresse mail</label>
                        </div>
                        <div class="form-floating">
                           <input class="form-control" id="phone" type="tel" placeholder="Entrez votre numéro de téléphone"/>
                           <label for="phone">Téléphone</label>
                        </div>
                        <div class="form-floating">
                           <textarea class="form-control" id="message" placeholder="Entrez votre message" style="height: 12rem"></textarea>
                           <label for="message">Message</label>
                        </div>
                        <br/>
                        <!--Button-->
                        <button class="btn btn-primary text-uppercase disabled" id="submitButton" type="submit">Envoyer</button>
                     </form>
                  </div>
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