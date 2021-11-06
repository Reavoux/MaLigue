<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ma ligue</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../assets/templetBackend/css/styles.css" rel="stylesheet" />
        <link href="../assets/templetBackend/css/avatar.css" rel="stylesheet" />
        <link href="../assets/templetBackend/css/contact.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        
    </head>
    <body class="sb-nav-fixed">
        <div id="layoutSidenav">
			<?php include "menu/navBarTop.php"; ?>
            <div id="layoutSidenav_nav">
				<?php include "menu/navBarLeft.php"; ?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

                        <h1 class="mt-4">
                        Contact
                        </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" id="ejs_heure">Heure Dynamique</li>
                        </ol>
                        <div class="row">
                            <div class="container">
                                <div style="text-align:center">
                                    <h2>Nous Contacter</h2>
                                    <p>Vous avez des questions? J'ai des réponses !</p>
                                </div>
                                <div class="row">
                                    <div class="column">
                                        <img src="../assets/templetBackend/images/paysageContact.jpg" style="width:100%">
                                    </div>
                                    <div class="column">
                                        <form action="/action_page.php">
                                        <div class="row g-2">
                                            <div class="col-md">
                                                <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInputGrid" placeholder="Nom">
                                                <label for="floatingInputGrid">Nom..</label>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInputGrid" placeholder="Prénom">
                                                <label for="floatingInputGrid">Prénom..</label>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">Adresse Mail..</label>
                                            </div>
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 170px"></textarea>
                                                <label for="floatingTextarea2">Votre message..</label>
                                            </div>
                                            <button type="button" class="btn btn-primary btn-lg mt-4">Soumettre</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
					<?php include "footer/footer.php"; ?>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../assets/templetBackend/js/scripts.js"></script>
        <script src="../assets/templetBackend/js/dateHeure.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/templetBackend/assets/demo/chart-area-demo.js"></script>
        <script src="../assets/templetBackend/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../assets/templetBackend/js/datatables-simple-demo.js"></script>
    </body>
</html>