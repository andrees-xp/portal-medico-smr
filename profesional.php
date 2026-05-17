<!--NUMERO 7-->
<!DOCTYPE html> <!--APARTADO PARA EL REGISTRO DE LOS DOCTORES-->
<html lang="es">
<head><meta charset="UTF-8" >
<title>Bienvenido DOC</title>
<link href="estilopro.css?v=1.1" type=text/css rel="stylesheet">
</head>
<body>
    
    <form action= "validar_profesional.php" method="POST">

    <table cellspacing="10" cellpadding="10" borde="3" >
        <tr>
            <th colspan="2" style="background-color:#5BCAEB;">Introduzca sus datos</th>
        </tr>
        <tr>
            <td><b>Nombre</b></td>
            <td><input type="text" name="nombre" required></td>
        </tr>
        <tr>
            <td><b>Apellido</b></td>
            <td><input type="text" name="apellido" required></td>
        </tr>
        <tr>
            <td><b>Clave</b></td>
            <td><input type="password" name="clave" required></td>
        </tr>
        <tr>
            <td colspan="2" alig="center">
                <input type="submit" value="Acceder al panel">
            </td>
        </tr>
    </table>
     </form>
</body>
</html>
