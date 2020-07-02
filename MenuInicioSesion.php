<?php
session_start();
?>
<html>
    <head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link href="CSS/CSSInicioSesion.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <h2>Ingresar al Sistema</h2>
    <form id="formInicioSesion" action="index.php" method="POST">
        <input type="number" name="telefono" placeholder="Ingrese su teléfono"> <br> <br>
        <input type="password" name="pass" placeholder="Ingrese su contraseña"> <br> <br>
        <input type="submit" value="Iniciar Sesión">
    </form> <br>
    <div id="btnVolverInicioSesion">
        <a href="index.php">Volver al Inicio</a>
    </div>
</body>
</html>