<?php include("Conexion.php");

    Conexion::conectarDb();
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $query = "SELECT nom_usuario,clave FROM usuario";

    echo $usuario . " " . $clave;
?>