<!--NUMERO 3-->
<!DOCTYPE html> <!--PRIMERA ENTRADA (LOGIN DE USUARIOS)-->
<html lang="es">
<head><meta charset="UTF-8">
<title>Iniciar sesion</title>
<link href="iniciar_sesion.css?v=1.1" type=text/css rel="stylesheet">
</head>
<body>
    
    <h2>IDENTIFICACIÓN DE USUARIO</h2>
    
    <form action="validar.php" method="POST">
        <p>DNI: <input type="text" name="dni" required></p>
        <p>Clave: <input type="password" name="clave" required></p>
        <button type="submit">ENTRAR</button>
    </form>
</body>
</html>