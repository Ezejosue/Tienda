<?php

session_start();

if (isset($_SESSION['usuario'])) {
    header('location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    
    $error = "";

    if (empty($usuario) or empty($password) or empty($password2)) {
        $error .= '<li>Por favor rellena todos los campos</li>';
    } else {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=focusview', 'root', '');
        } catch (PDOException $e) {
            echo "error: " .$e->getMessage();
        }    
    
        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE Nombre = :usuario LIMIT 1');
        $statement->execute(array(':usuario' => $usuario));
        $resultado = $statement->fetch();

        if ($resultado != false) {
            $error .= '<li>El nombre de usuario ya existe</li>';
        }

        $password = hash('sha512', $password);
        $password2 = hash('sha512', $password2);

        if ($password != $password2) {
        $error .= '<li>Las contraseñas no coinciden</li>';
        }
    }

    if ($error == '') {
        $statement = $conexion->prepare('INSERT INTO usuarios (id_usuario, Nombre, Clave) VALUES (null, :Nombre, :Clave)');
		$statement->execute(array(':Nombre' => $usuario, ':Clave' => $password));
        
        header('location: login.php');
    }

}
require_once('../../views/Dashboard/registrate.view.php');

?>

