<?php 
    include("Conexion.php");

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave1'];
    $correo = $_POST['correo'];
    $alias = $_POST['nombre'];

    $db = Conexion::conectarDb();

    $query = "INSERT INTO usuario(nom_usuario,clave,correo,alias) 
    VALUES ('$usuario','$clave','$correo','$alias')";

    $result = $db->query($query);

    if(!$result) {
        die("Hubo un error");
    } else {
        echo "Se creo correctamente";
    
    $db = null;
    }   
?>
