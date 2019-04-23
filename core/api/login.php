<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header('location: index.php');  
}

$error = '';

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password = hash('sha512', $password);


    try {
        $conexion = new PDO('mysql:host=localhost;dbname=focusview', 'root', '');
    } catch (PDOException $e) {
        echo "error: " .$e->getMessage();
    } 

    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE Nombre = :usuario AND Clave = :password');
    $statement->execute(array(
		':usuario' => $usuario, 
		':password' => $password
    ));
    
    $resultado = $statement ->fetch();
    if ($resultado!== false) {
        $_SESSION['usuario'] = $usuario;
        header('location: index.php');
    }else {
      $error = '<li>Datos incorrectos</li>';
    }
}
require_once('../../views/Dashboard/login.view.php');

?>