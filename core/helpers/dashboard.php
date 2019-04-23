<?php
class Dashboard
{
	public static function headerTemplate($title)
	{
		session_start();
		ini_set('date.timezone', 'America/El_Salvador');
        print('
            <!DOCTYPE html>
            <html lang="es">
            
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Dashboard '.$title.' </title>
            
                <link href="../../resources/css/bootstrap.min.css" rel="stylesheet">
                <link href="../../resources/css/font-awesome.css" rel="stylesheet">
                <link href="../../resources/css/estilo.css" rel="stylesheet">
                <script src="../../resources/js/chart.bundle.js"></script>
            </head>
            
            <body>
        ');
		if (isset($_SESSION['idUsuario'])) {
			$filename = basename($_SERVER['PHP_SELF']);
			if ($filename != 'index.php') {
				self::modals();
				print('<div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">FocusView </div>
                <div class="list-group list-group-flush">
                    <a href="pedidos.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-envelope"></i>
                        Pedidos</a>
                    <a href="productos.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-shopping-cart"></i>
                        Productos</a>
                    <a href="categorias.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-list"></i>
                        Categorías</a>
                    <a href="clientes.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-users"></i>
                        Clientes</a>
                    <a class="list-group-item list-group-item-action bg-light nav-link dropdown-toggle" href="usuarios.php"
                        id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-users-cog"></i> Usuarios </a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="usuarios.php">Gestionar usuarios</a>
                        <a class="dropdown-item" href="tipo-usuarios.php">Tipos de usuario</a>
                    </div>
                </div>
            </div>
                    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle"><i class="fa fa-bars"></i></button>

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="inicio.php"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="perfil.php">Editar perfil</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-cog"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Ayuda</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="index.php">Cerrar sesión</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        ');
            } else {
                header('location: inicio.php');
            }
        } else {
            $filename = basename($_SERVER['PHP_SELF']);
            if ($filename != 'inicio.php' && $filename != 'register.php') {
                header('location: inicio.php');
            }
        }
    }

public static function footerTemplate($controller)
	{
		print('<script src="../../resources/js/jquery.min.js"></script>
        <script src="../../resources/js/estilo-dash.js"></script>
        <script src="../../resources/js/font-awesome.js"></script>
        <script src="../../resources/js/bootstrap.bundle.min.js"></script>
        <script src="../../resources/js/sweetalert.min.js"></script>

        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
        ');
    }
}

            