<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../resources/css/login.css">
</head>
<body>
    <div class="card card-container">
        <img src="../../resources/img/FocusViewPng.png" class="img-fluid">
        <form class="form-signin" id="form-login">
            <span id="reauth-email" class="reauth-email"></span>
            <input type="text" id="Usuario" name="Usuario" class="form-control" placeholder="Usuario" required autofocus>
            <input type="password" id="Clave" name="Clave"class="form-control" placeholder="Contraseña" required>
            <br>
            <a href="#"> <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" id="form-sesion">Iniciar Sesión</button>
            </a>
            <a href="recuperar-contrasena.php" class="forgot-password">
                Olvidé mi contraseña
            </a>
        </form>
    </div>
</body>


<script src="../../resources/js/bootstrap.bundle.min.js"></script>
<script src="../../resources/js/jquery.min.js"></script>
<script src="../../core/controllers/dashboard/index.js"></script>
<script src="../../core/helpers/functions.js"></script>
</body>

</html>