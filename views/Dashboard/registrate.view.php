<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <title>Registrate</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Registrate</h1>
                <!-- Formulario con metodo de envio -->
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class='formulario' name='login'>
                    <div class="form-group">    
                        <input type="text" name="usuario"  placeholder="Usuario"> <br><br>
                    </div>
                    <div>
                        <input type="password" name="password" class="password" placeholder="Clave"> <br><br>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password2" class="password_btn" placeholder="Confirmar clave">
                        <br><br>
                        <!-- Boton con evento onclick -->
                        <button type="button" onclick="login.submit()">Registrate</button>
                    </div>
                    <!--Mensaje de error -->
                    <?php if(!empty($error)): ?>
                    <div>
                        <ul>
                            <?php echo $error; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </form>
                <p>
                    ¿Ya tienes cuenta?
                    <a href="../../core/api/login.php">Iniciar Sesion</a>
                </p>
            </div>
        </div>
    </div>
    <script src="../../resources/js/jquery.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="../../resources/js/popper.min.js"></script>
    <script src="../../resources/js/bootstrap.bundle.min.js"></script>
    <script src="../../resources/js/font-awesome.js"></script>
</body>

</html>