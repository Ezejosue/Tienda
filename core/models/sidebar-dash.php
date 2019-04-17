<?php  
class sidebar
{

    public static function menu (){
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
</div>');
    }
    
}
?>