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
                        PageVide
                        </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" id="ejs_heure">Heure Dynamique</li>
                        </ol>
                       
						<div class="row">
						<p><?php echo $nomDePage ?></p>
						</div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <!-- Groupe -->
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>Groupe A</tr>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Joueurs</th>
                                        <th scope="col">Matchs joués</th>
                                        <th scope="col">G</th>
                                        <th scope="col">P</th>
                                        <th scope="col">N</th>
                                        <th scope="col">Bp</th>
                                        <th scope="col">Bc</th>
                                        <th scope="col">Dif</th>
                                        <th scope="col">Pts</th>
                                        <th scope="col">Stat 1</th>
                                        <th scope="col">Stat 2</th>
                                        <th scope="col">Stat 3</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">A1</th>
                                        <td>Frédérick</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>15</td>
                                        <td>3</td>
                                        <td>+12</td>
                                        <td>9</td>
                                        <td>14</td>
                                        <td>16</td>
                                        <td>18</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">A2</th>
                                        <td>François</td>
                                        <td>3</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>18</td>
                                        <td>9</td>
                                        <td>+11</td>
                                        <td>7</td>
                                        <td>14</td>
                                        <td>16</td>
                                        <td>18</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">A3</th>
                                        <td>Romain</td>
                                        <td>3</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>9</td>
                                        <td>6</td>
                                        <td>+3</td>
                                        <td>6</td>
                                        <td>14</td>
                                        <td>16</td>
                                        <td>18</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">A4</th>
                                        <td>Anthony</td>
                                        <td>3</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>20</td>
                                        <td>3</td>
                                        <td>+17</td>
                                        <td>4</td>
                                        <td>14</td>
                                        <td>16</td>
                                        <td>18</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Fin Groupe -->


                        <!-- Matchs -->

                        <!-- Fin Matchs -->



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