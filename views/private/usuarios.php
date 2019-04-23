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
            <h1 class="text-center">USUARIOS</h1>
                <!-- Barra de busqueda -->
                <div class="search-box">
                    <div class="row">
                        <div class="col-sm-11 col-9">
                            <input type="text" id="myInput" class="form-control" placeholder="Buscar">
                        </div>
                        <div class="col-sm-1 col-3">
                            <a href="#ventana1" class="btn btn-success btn-md" data-toggle="modal">
                                <span class="btn-label">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
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
                                    <th>Foto</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Nombre De Usuario</th>
                                    <th>Modificar</th>
                                    <th>Eliminar</th>
                                    <th>Ver más</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td>Gerardo Javier</td>
                                    <td>Ramírez Gómez</td>
                                    <td>Admin 1</td>
                                    <td>
                                        <a href="#ventana2" class="btn btn-info" data-toggle="modal">
                                            <i class="fa fa-pen"></i>
                                        </a>
                                    </td>
                                    <td>

                                        <a href="#ventana3" class="btn btn-danger" data-toggle="modal">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#ventana4" class="btn btn-warning" data-toggle="modal">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td></td>
                                    <td>Carlos Eduardo</td>
                                    <td>Quijano Gonzalez</td>
                                    <td>Admin 2</td>
                                    <td>
                                        <a href="#ventana2" class="btn btn-info" data-toggle="modal">
                                            <i class="fa fa-pen"></i>
                                        </a>

                                    </td>
                                    <td>
                                        <a href="#ventana3" class="btn btn-danger" data-toggle="modal">
                                            <i class="fa fa-times"></i>
                                        </a>

                                    </td>
                                    <td>
                                        <a href="#ventana4" class="btn btn-warning" data-toggle="modal">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td></td>
                                    <td>Josué Ezequiel</td>
                                    <td>Avalos Avalos</td>
                                    <td>Admin 3</td>
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
                                    <td>
                                        <a href="#ventana4" class="btn btn-warning" data-toggle="modal">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
            </div>
            <!-- Modal de Agregar -->
            <div class="modal fade" id="ventana1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">AGREGAR USUARIO</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                                            <button id="triggerUpload" class="btn btn-primary"> <i
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
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="col-sm-11">
                                    <input placeholder="Nombres" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="col-sm-11">
                                    <input placeholder="Apellidos" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-user-shield"></i>
                                </div>
                                <div class="col-sm-11">
                                    <input placeholder="Nombre De Usuario" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="col-sm-11">
                                    <input placeholder="Correo" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-lock"></i>
                                </div>
                                <div class="col-sm-11">
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Contraseña">
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-lock"></i>
                                </div>
                                <div class="col-sm-11">
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Repetir contraseña">
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-restroom"></i>
                                </div>
                                <div class="col-sm-11">
                                    <select class="custom-select" id="inlineFormCustomSelectPref">
                                        <option selected>Género</option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Femenino</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-users-cog"></i>
                                </div>
                                <div class="col-sm-11">
                                    <select class="custom-select" id="inlineFormCustomSelectPref">
                                        <option selected>Tipo de usuario</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Empleado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-eye"></i>
                                </div>
                                <div class="col-sm-11">
                                    <select class="custom-select" id="inlineFormCustomSelectPref">
                                        <option selected>Estado</option>
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal de Modificar -->
            <div class="modal fade" id="ventana2">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">MODIFICAR USUARIO</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                                            <button id="triggerUpload" class="btn btn-primary"> <i
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
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="col-sm-11">
                                    <input placeholder="Nombres" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="col-sm-11">
                                    <input placeholder="Apellidos" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-user-shield"></i>
                                </div>
                                <div class="col-sm-11">
                                    <input placeholder="Nombre De Usuario" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="col-sm-11">
                                    <input placeholder="Correo" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-lock"></i>
                                </div>
                                <div class="col-sm-11">
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Contraseña">
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-lock"></i>
                                </div>
                                <div class="col-sm-11">
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Repetir contraseña">
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-restroom"></i>
                                </div>
                                <div class="col-sm-11">
                                    <select class="custom-select" id="inlineFormCustomSelectPref">
                                        <option selected>Género</option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Femenino</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-users-cog"></i>
                                </div>
                                <div class="col-sm-11">
                                    <select class="custom-select" id="inlineFormCustomSelectPref">
                                        <option selected>Tipo de usuario</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Empleado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-1">
                                    <i class="fa fa-eye"></i>
                                </div>
                                <div class="col-sm-11">
                                    <select class="custom-select" id="inlineFormCustomSelectPref">
                                        <option selected>Estado</option>
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal de ver más -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true" id="ventana4">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">INFORMACIÓN DEL USUARIO</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <i class="fa fa-hashtag"></i>
                                        </div>
                                        <div class="col-md-5"><input placeholder="1" class="form-control"></div>
                                        <div class="col-sm-1">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="col-md-5"><input placeholder="Gerardo Javier" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="col-md-5"><input placeholder="Ramirez Gomez" class="form-control">
                                        </div>
                                        <div class="col-sm-1">
                                            <i class="fa fa-user-shield"></i>
                                        </div>
                                        <div class="col-md-5"><input placeholder="Admin 1" class="form-control"></div>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="col-md-5"><input placeholder="gerardogo145@gmail.com"
                                                class="form-control">
                                        </div>
                                        <div class="col-sm-1">
                                            <i class="fa fa-restroom"></i>
                                        </div>
                                        <div class="col-md-5"><input placeholder="Masculino" class="form-control"></div>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <i class="fa fa-users-cog"></i>
                                        </div>
                                        <div class="col-md-5"><input placeholder="Administrador" class="form-control">
                                        </div>
                                        <div class="col-sm-1">
                                            <i class="fa fa-eye"></i>
                                        </div>
                                        <div class="col-md-5"><input placeholder="Activo" class="form-control"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal de eliminar -->
            <div class="modal fade" id="ventana3">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">ELIMINAR USUARIO</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h6>¿Está seguro de que desea eliminar este usuario?</h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Aceptar</button>
                        </div>
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