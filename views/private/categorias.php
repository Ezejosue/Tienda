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
    <link href="../../resources/css/imagen.css" rel="stylesheet">
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
                <h1 class="text-center">CATEGORÍAS</h1>
                <!-- Barra de busqueda -->
                <div class="search-box">
                    <div class="row">
                        <div class="col-sm-11 col-9">
                            <input type="text" id="myInput" class="form-control" placeholder="Buscar">
                        </div>
                        <!-- Botón de agregar -->
                        <div class="col-sm-1 col-3">
                            <a href="#ventana1" class="btn btn-success btn-md" data-toggle="modal">
                                <span class="btn-label">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <br>
                    <!-- Tabla donde se muestran las categorías -->
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header">
                            <p class="card-category">Categorías </p>
                        </div>
                        <div class="card-body table-full-width table-responsive" id="myTable">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Estado</th>
                                        <th>Modificar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td></td>
                                        <td>Cámaras</td>
                                        <td>Público</td>
                                        <td>
                                            <a href="#ventana2" class="btn btn-info" data-toggle="modal">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            <!-- Modal de agregar -->
                                            <div class="modal fade" id="ventana1">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">AGREGAR CATEGORÍA</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="preview">
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-3"></div>
                                                                        <div class="col-sm-6 text-center">
                                                                            <button id="triggerUpload"
                                                                                class="btn btn-primary"> <i
                                                                                    class="fa fa-magic"></i>
                                                                                Subir imagen</button>
                                                                            <input type="file" id="filePicker" />
                                                                        </div>
                                                                        <br>
                                                                        <br>
                                                                        <br>
                                                                        <div class="col-sm-3"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-sm-1">
                                                                    <i class="fa fa-hashtag"></i>
                                                                </div>
                                                                <div class="col-sm-11">
                                                                    <input placeholder="Código" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-sm-1">
                                                                    <i class="fa fa-list"></i>
                                                                </div>
                                                                <div class="col-sm-11">
                                                                    <input placeholder="Nombre" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-sm-1">
                                                                    <i class="fa fa-file-alt"></i>
                                                                </div>
                                                                <div class="col-sm-11">
                                                                    <textarea placeholder="Descripción"
                                                                        class="form-control"
                                                                        id="exampleFormControlTextarea1"
                                                                        rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-sm-1">
                                                                    <i class="fa fa-eye"></i>
                                                                </div>
                                                                <div class="col-sm-11">
                                                                    <select class="form-control">
                                                                        <option>Público</option>
                                                                        <option>Oculto</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Cancelar</button>
                                                            <button type="button"
                                                                class="btn btn-primary">Aceptar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal de Modificar -->
                                            <div class="modal fade" id="ventana2">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">MODIFICAR CATEGORÍA</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="preview">
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-3"></div>
                                                                        <div class="col-sm-6 text-center">
                                                                            <button id="triggerUpload"
                                                                                class="btn btn-primary">
                                                                                <i class="fa fa-magic"></i>
                                                                                Subir imagen</button>
                                                                            <input type="file" id="filePicker" />
                                                                        </div>
                                                                        <br>
                                                                        <br>
                                                                        <br>
                                                                        <div class="col-sm-3"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-sm-1">
                                                                    <i class="fa fa-hashtag"></i>
                                                                </div>
                                                                <div class="col-sm-11">
                                                                    <input placeholder="Código" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-sm-1">
                                                                    <i class="fa fa-list"></i>
                                                                </div>
                                                                <div class="col-sm-11">
                                                                    <input placeholder="Nombre" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-sm-1">
                                                                    <i class="fa fa-eye"></i>
                                                                </div>
                                                                <div class="col-sm-11">
                                                                    <select class="form-control">
                                                                        <option>Público</option>
                                                                        <option>Oculto</option>
                                                                    </select>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Cerrar</button>
                                                                        <button type="button"
                                                                            class="btn btn-primary">Aceptar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                        </td>
                                        <td>
                                            <div clas="col-sm-1">
                                                <a href="#ventana3" class="btn btn-danger" data-toggle="modal">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                                <!-- Modal de Eliminar -->
                                                <div class="modal fade" id="ventana3">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">ELIMINAR CATEGORÍA</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h6>¿Está seguro de que desea eliminar esta categoría?
                                                                </h6>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Cerrar</button>
                                                                <button type="button"
                                                                    class="btn btn-primary">Aceptar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td></td>
                                        <td>Accesorios</td>
                                        <td>Público</td>
                                        <td>
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
                                        <td></td>
                                        <td>Paquetes</td>
                                        <td>Oculto</td>
                                        <td>
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
                    <br>
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