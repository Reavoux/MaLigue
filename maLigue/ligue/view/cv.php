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
                        <h1 class="mt-4">Pseudo</h1>
                        <ol class="breadcrumb mb-4 float-right">
                            <li class="breadcrumb-item active" id="ejs_heure">Heure Dynamique</li>
                        </ol>
                        <div id="headshot" class="quickFade">
                            <img src="docs/imagesProfils/renard.jpg" alt="Alan Smith" />
                        </div>
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card mb-4">
                                    <div class="card-header">
                                    <i class="fas fa-user-alt"></i> Prénom NOM
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> Adresse : </li>
                                            <li class="list-group-item"><i class="fas fa-phone-alt"></i> Téléphone : </li>
                                            <li class="list-group-item"><i class="fas fa-envelope"></i> Mail : </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fab fa-studiovinari"></i>
                                        Ligue en cours
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> Adresse : </li>
                                            <li class="list-group-item"><i class="fas fa-phone-alt"></i> Téléphone : </li>
                                            <li class="list-group-item"><i class="fas fa-envelope"></i> Mail : </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-trophy"></i>
                                        Palmarès
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> Adresse : </li>
                                            <li class="list-group-item"><i class="fas fa-phone-alt"></i> Téléphone : </li>
                                            <li class="list-group-item"><i class="fas fa-envelope"></i> Mail : </li>
                                        </ul>
                                    </div>
                                </div>                                
                            </div>
                            <div class="col-xl-3">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Statistiques
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><i class="fas fa-meh"></i> Matchs joués :</li>
                                            <li class="list-group-item"><i class="fas fa-smile"></i> Matchs gagnés :</li>
                                            <li class="list-group-item"><i class="fas fa-poo"></i> Matchs perdus :</li>
                                        </ul>
                                    </div>
                                </div>                                
                            </div>
                            <hr class="dropdown-divider"/>
                            <br/>
                            <br/>
                            <?php include "tableau/tableauMesLigues.php"; ?>                            
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