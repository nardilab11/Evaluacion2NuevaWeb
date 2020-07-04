<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
        <link href="CSS/CSSRegistrarProducto.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h2>Registrar Producto Nuevo</h2>
        <form id="fromRegistrarProducto" action="index.php" method="POST">
            <label>Ingrese el número de identificación:</label>
            <input type="number" name="idPN" required maxlength="9"> <br> <br>
            <label>Ingrese el nombre:</label>
            <input type="text" name="nombrePN" required maxlength="30"> <br> <br>
            <label>Ingrese el precio:</label>
            <input type="number" name="precioPN" required maxlength="7"> <br> <br>
            <label>Ingrese la cantidad disponible:</label>
            <input type="number" name="cantidadPN" required maxlength="4"> <br> <br>
            <input type="submit" value="Registrar producto"> 
        </form> <br>
        <div id="btnVolverRegistrarProducto">
            <a href="index.php">Volver al Inicio</a>
        </div>
    </body>
</html>