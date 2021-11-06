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
                        <div class="col-md-8">
                            <!-- Spied element -->
                            <div
                            data-mdb-spy="scroll"
                            data-mdb-target="#scrollspy1"
                            data-mdb-offset="0"
                            class="scrollspy-example"
                            >
                            <section id="example-1">
                                <h3>Section 1</h3>
                                ...
                            </section>
                            <section id="example-2">
                                <h3>Section 2</h3>
                                ...
                            </section>
                            <section id="example-3">
                                <h3>Section 3</h3>
                                ...
                                <section id="example-sub-A">
                                <h3>Subsection A</h3>
                                ...
                                </section>
                                <section id="example-sub-B">
                                <h3>Subsection B</h3>
                                ...
                                </section>
                            </section>
                            <section id="example-4">
                                <h3>Section 4</h3>
                                ...
                            </section>
                            </div>
                            <!-- Spied element -->
                        </div>

                        <div class="col-md-4">
                            <!-- Scrollspy -->
                            <div id="scrollspy1" class="sticky-top">
                            <ul class="nav flex-column nav-pills menu-sidebar">
                                <li class="nav-item">
                                <a class="nav-link" href="#example-1">Section 1</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#example-2">Section 2</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#example-3">Section 3</a>
                                <ul class="nav flex-column ps-3">
                                    <li class="nav-item">
                                    <a class="nav-link" href="#example-sub-A">Subsection A</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="#example-sub-B">Subsection B</a>
                                    </li>
                                </ul>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#example-4">Section 4</a>
                                </li>
                            </ul>
                            </div>
                            <!-- Scrollspy -->
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