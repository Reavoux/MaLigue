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
                        <h1 class="mt-4">
                        Amis
                        </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" id="ejs_heure">Heure Dynamique</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-2"></div>
                            <div class="col-xl-8">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-user-friends"></i>
                                        Liste d'amis
                                    </div>
                                    <div class="card-body">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="tous-tab" data-bs-toggle="tab" data-bs-target="#tous" type="button" role="tab" aria-controls="tous" aria-selected="true">Tous</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="enAttente-tab" data-bs-toggle="tab" data-bs-target="#enAttente" type="button" role="tab" aria-controls="enAttente" aria-selected="false">En attente</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="bloque-tab" data-bs-toggle="tab" data-bs-target="#bloque" type="button" role="tab" aria-controls="bloque" aria-selected="false">Bloqué</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="ajouter-tab" data-bs-toggle="tab" data-bs-target="#ajouter" type="button" role="tab" aria-controls="ajouter" aria-selected="false">Ajouter un ami</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="tous" role="tabpanel" aria-labelledby="tous-tab"><?php include "action/tousLesAmis.php"?></div>
                                            <div class="tab-pane fade" id="enAttente" role="tabpanel" aria-labelledby="enAttente-tab">...</div>
                                            <div class="tab-pane fade" id="bloque" role="tabpanel" aria-labelledby="bloque-tab"><?php include "action/tousLesAmisBloque.php"?></div>
                                            <div class="tab-pane fade" id="ajouter" role="tabpanel" aria-labelledby="ajouter-tab"><?php include "action/ajouterUnAmi.php"?></div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-xl-2"></div>
                        </div>
                        <?php include "tableau/tableauMesLigues.php"; ?>
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