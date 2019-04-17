<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Inicio</title>

    <link href="../../resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../resources/css/simple-sidebar.css" rel="stylesheet">
    <link href="../../resources/css/font-awesome.css" rel="stylesheet">
    <link href="../../resources/css/estilo.css" rel="stylesheet">
    <script src="../../resources/js/chart.bundle.js"></script>
</head>

<body>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->        
        <?php
            require "../../core/models/sidebar-dash.php";
            sidebar::menu();
        ?>
        <!-- Fin sidebar -->
        <!-- Contenido -->
        <div id="page-content-wrapper">
            <!-- Navbar -->
            <?php
                require "../../core/models/navbar-dash.php";
                navbar::menu2();
            ?>
            <!-- Fin navbar -->
            <div class="container-fluid" id="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <canvas id="myChart" width="350" height="150"></canvas>
                        <?php
                            require "../../core/models/charts.php";
                            charts::index();
                        ?>
                    </div>
                </div>
                <br>
                <hr>
                <h1 class="text-center">RESUMEN</h1>
                <br>
                <div class="row">
                    <div class="col-lg-3 col-sm-12">
                        <div class="circle-tile ">
                            <a href="clientes.php">
                                <div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded"> Clientes </div>
                                <div class="circle-tile-number text-faded ">265</div>
                                <a class="circle-tile-footer" href="clientes.php">Más información<i
                                        class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-12">
                        <div class="circle-tile ">
                            <a href="productos.php">
                                <div class="circle-tile-heading red"><i class="fa fa-camera fa-fw fa-3x"></i></div>
                            </a>
                            <div class="circle-tile-content red">
                                <div class="circle-tile-description text-faded"> Productos </div>
                                <div class="circle-tile-number text-faded ">10</div>
                                <a class="circle-tile-footer" href="productos.php">Más información<i
                                        class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-12">
                        <div class="circle-tile ">
                            <a href="categorias.php">
                                <div class="circle-tile-heading green"><i class="fa fa-list fa-fw fa-3x"></i></div>
                            </a>
                            <div class="circle-tile-content green">
                                <div class="circle-tile-description text-faded"> Categorías </div>
                                <div class="circle-tile-number text-faded ">10</div>
                                <a class="circle-tile-footer" href="categorias.php">Más información<i
                                        class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-12">
                        <div class="circle-tile ">
                            <a href="pedidos.php">
                                <div class="circle-tile-heading orange"><i class="fa fa-shopping-cart fa-fw fa-3x"></i>
                                </div>
                            </a>

                            <div class="circle-tile-content orange">
                                <div class="circle-tile-description text-faded"> Pedidos </div>
                                <div class="circle-tile-number text-faded ">10</div>
                                <a class="circle-tile-footer" href="pedidos.php">Más información<i
                                        class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin contenido -->
        </div>

        <script src="../../resources/js/jquery.min.js"></script>
        <script src="../../resources/js/estilo-dash.js"></script>
        <script src="../../resources/js/font-awesome.js"></script>
        <script src="../../resources/js/bootstrap.bundle.min.js"></script>

        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
</body>
</html>