<!--NUMERO 9-->
<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: profesional.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Gestión Médica</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Panel de Administración: Bienvenido <?php echo $_SESSION['usuario']; ?></h1>
    
    <div class="menu-gestion">
        <h2>¿Qué desea hacer hoy?</h2>
        <ul>
            <li><a href="ver_citas.php">Visualizar y Cancelar Citas</a></li>
            
            <li><a href="crear_cita.php">Registrar Nueva Cita</a></li>
            
            <li><a href="logout.php">Cerrar Sesión</a></li>
        </ul>
    </div>
</body>
</html>