<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
        <link href="CSS/CSSRegistrarUsuario.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h2>Registrar Usuario Nuevo</h2>
        <form id="formRegistrarUsuario" action="index.php" method="POST">
            <label>Ingrese su número de teléfono:</label>
            <input type="number" name="telefonoN" required maxlength="9"> <br> <br>
            <label>Ingrese el nombre del usuario:</label>
            <input type="text" name="nombreN" required maxlength="20"> <br> <br>
            <label>Ingrese la contraseña:</label>
            <input type="password" name="passN" required maxlength="20"> <br> <br>
            <label>Ingrese de nuevo la contraseña:</label>
            <input type="password" name="passNConfirm" required maxlength="20"> <br> <br>
            <input type="submit" value="Registrarme">
        </form> <br>
        <div id="btnVolverRegistrarUsuario">
            <a href="index.php">Volver al Inicio</a>
        </div>
    </body>
</html>