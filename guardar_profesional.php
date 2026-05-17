<?php
session_start();
include("conexion_bd.php");

// Seguridad: Si alguien intenta entrar a este archivo sin loguearse, lo mandamos al login
if (!isset($_SESSION["usuario"])) {
    header("Location: profesional.php");
    exit();
}

    // Guardamos el nombre que escribió el usuario en una variable
    // mysqli_real_escape_string evita que metan símbolos raros o hackeos
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre_profesional']);
    $apellido = mysqli_real_escape_string($conexion, $_POST['apellido_profesional']);
    $clave = mysqli_real_escape_string($conexion, $_POST['clave_profesional']);
    
    // Creamos la orden para la base de datos (revisa si tu tabla se llama 'profesionales')
    $sql = "INSERT INTO `profesionales` (`nombre`,`apellido`,`clave`) VALUES ('$nombre','$apellido','$clave')";
    
    // Le decimos a la base de datos que ejecute la orden
    mysqli_query($conexion, $sql);


// AL FINALIZAR: Volvemos corriendo al panel principal
header("Location: panel_profesional.php");
exit();
?>