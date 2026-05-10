<!--NUMERO 7-->
<!DOCTYPE html> <!--APARTADO PARA EL REGISTRO DE LOS DOCTORES-->
<html lang="es">
<head><meta charset="UTF-8"><title>Bienvenido DOC</title></head>
<body>
    
    <form action= "validar_profesional.php" method="POST">
       
   
<thead>INTRODUZCA SUS DATOS</thead>
    <table cellspacing="10" cellpadding="10" borde="3">
        <tr>
            <th colspan="2" style="background-color:#5BCAEB;">Registro de profesional</th>
        </tr>
        <tr>
            <td><b>Nombre</b></td>
            <td><input type="text" name="nombre" required></td>
        </tr>
        <tr>
            <td><b>Apellido</b></td>
            <td><input type="password" name="apellido" required></td>
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
