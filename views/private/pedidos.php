<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Pedidos</title>

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
            require "../templates/sidebar-dash.php";
            sidebar::menu();
        ?>
        <!-- Fin sidebar -->

        <!-- Contenido -->
        <div id="page-content-wrapper">
            <!-- Navbar -->
            <?php
                require "../templates/navbar-dash.php";
                navbar::menu2();
            ?>
            <!-- Fin navbar -->
            <div class="container-fluid" id="container">
                <h1 class="text-center">PEDIDOS</h1>
                <br>
                <!-- Barra de busqueda -->
                <div class="search-box">
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" id="myInput" class="form-control" placeholder="Buscar">
                            
                            <br>
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <p class="card-category">Pedidos realizados en la ultima semana</p>
                                </div>
                                <div class="card-body table-full-width table-responsive" id="myTable">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Usuario</th>
                                                <th>Productos</th>
                                                <th>Total</th>
                                                <th>Estado</th>
                                                <th>Cambiar Estado</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>FocusView Pro</td>
                                                <td>$150.00</td>
                                                <td>En Proceso</td>
                                                <td>
                                                    <div clas="col-sm-1">
                                                        <a href="#ventana2" class="btn btn-info" data-toggle="modal">
                                                            <i class="fa fa-pen"></i>
                                                        </a>
                                                    </div>

                                                </td>
                                                <td>
                                                    <div clas="col-sm-1">
                                                        <a href="#ventana3" class="btn btn-danger" data-toggle="modal">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>FocusView Hoth</td>
                                                <td>$200.00</td>
                                                <td>En Proceso</td>
                                                <td>
                                                    <div clas="col-sm-1">
                                                        <a href="#ventana2" class="btn btn-info" data-toggle="modal">
                                                            <i class="fa fa-pen"></i>
                                                        </a>

                                                </td>
                                                <td>
                                                    <div clas="col-sm-1">
                                                        <a href="#ventana3" class="btn btn-danger" data-toggle="modal">
                                                            <i class="fa fa-times"></i>
                                                        </a>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sage Rodriguez</td>
                                                <td>Kit FocusView Ultra</td>
                                                <td>$350.00</td>
                                                <td>Entregado</td>
                                                <td>
                                                    <div clas="col-sm-1">
                                                        <a href="#ventana2" class="btn btn-info" data-toggle="modal">
                                                            <i class="fa fa-pen"></i>
                                                        </a>

                                                </td>
                                                <td>
                                                    <div clas="col-sm-1">
                                                        <a href="#ventana3" class="btn btn-danger" data-toggle="modal">
                                                            <i class="fa fa-times"></i>
                                                        </a>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>FocusView XPro</td>
                                                <td>$250.00</td>
                                                <td>Cancelado</td>
                                                <td>
                                                    <div clas="col-sm-1">
                                                        <a href="#ventana2" class="btn btn-info" data-toggle="modal">
                                                            <i class="fa fa-pen"></i>
                                                        </a>

                                                </td>
                                                <td>
                                                    <div clas="col-sm-1">
                                                        <a href="#ventana3" class="btn btn-danger" data-toggle="modal">
                                                            <i class="fa fa-times"></i>
                                                        </a>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Fin contenido -->

            <!-- Modal de modificar -->
            <div class="modal fade" id="ventana2">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">CAMBIAR ESTADO</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <select class="form-control">
                                <option>En Proceso</option>
                                <option>Entregado</option>
                                <option>Cancelado</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal de eliminar -->
            <div class="modal fade" id="ventana3">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">ELIMINAR PEDIDO</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h6>¿Está seguro de que desea eliminar este
                                pedido?</h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
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