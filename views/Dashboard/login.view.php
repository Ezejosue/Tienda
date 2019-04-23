<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <title>Iniciar sesion</title>
</head>

<body>
    <h1>Iniciar Sesión</h1>
    <!-- Formulario con metodo de envio -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" , class='form' name='login'>
        <div>
            <input type="text" name="usuario" placeholder="Usuario">
        </div>
        <div>
            <br>
            <input type="password" name="password" placeholder="clave">
            <br>
            <!-- Boton con evento onclick -->
            <button type="button" onclick="login.submit()">Iniciar Sesión</button>
        </div>
        <br>
        <?php if (!empty($error)): ?>
        <div>
            <ul>
                <?php echo $error; ?>
            </ul>
        </div>
        <?php endif; ?>
    </form>
    <!-- Mensajes de error -->
    <p>
        <a href="../../core/api/registrate.php">Registrate</a>
    </p>
    <script src="../../resources/js/jquery.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="../../resources/js/popper.min.js"></script>
    <script src="../../resources/js/bootstrap.bundle.min.js"></script>
    <script src="../../resources/js/font-awesome.js"></script>
</body>

</html>