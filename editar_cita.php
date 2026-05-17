<?php
session_start();
include("conexion_bd.php");
if (!isset($_SESSION["usuario_id"])){
    header("Location:profesional.php");
    exit();
}
if(!isset($_GET["id"])){
    echo "ID de cita no proporcionado.";
    exit();
}
$id_cita = $_GET["id"];
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nueva_fecha=$_POST["fecha"];
    $nueva_hora=$_POST["hora"];
    $sql_update="UPDATE `citas` SET `fecha`=$nueva_fecha, `hora`=$nueva_hora WHERE `id`=$id_cita";
    if(mysqli_query($conexion,$sql_update)){
        echo "<script>alert(`Cita actualizada con exito`); window.location=`panel_profesional.php`;</script>";
    } else {
        echo "Error al actrualizar: " . mysqli_error($conexion);
    }
}
$sql_consulta = "SELECT * FROM `citas` WHERE `id`=$id_cita";
$resultado = mysqli_query($conexion,$sql_consulta);
$cita = mysqli_fetch_assoc($resultado);
if(!$cita){
    echo "Cita no encontrada.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Editar cita</title>
        <link rel="stylesheet" href="panel.css" >
    </head>
    <body>
        <div class="contenedor-editar">
            <h2>Modificar cita</h2>
            <p>Paciente:<strong><?php echo $cita[`nombre_paciente`]; ?></strong></p>
            <form method="POST">
                <label>Nueva fecha:</label>
                <input type=`date` name=`fecha` value="<?php echo $cita[`fecha`];?>" required>
                <label>Nueva hora:</label>
                <input type=`time` name=`hora` value="<?php echo $cita[`hora`];?>" required>
                <input type="submit" value="Guardar cambios" class="btn-guardar">
                <a href="panel_profesional.php" class="btn-cancelar">Cancelar</a>
            </form>
        </div>
    </body>
</html>