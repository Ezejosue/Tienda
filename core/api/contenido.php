<?php session_start();
if (isset($_SESSION['usuario'])) {
	require '../../views/Dashboard/contenido.view.php';
} else {
	header('location: login.php');
}
?>
