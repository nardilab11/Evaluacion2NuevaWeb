<?php
session_start();
?>

<h2>Registrar Producto Nuevo</h2>
<form action="Controlador/CCliente.php" method="POST">
    <div>Ingrese el número de identificación:</div>
    <input type="number" name="idPN">
    <div>Ingrese el nombre:</div>
    <input type="text" name="nombrePN">
    <div>Ingrese el precio:</div>
    <input type="number" name="precioPN">
    <div>Ingrese la cantidad disponible:</div>
    <input type="number" name="cantidadPN">
    <input type="submit" value="Registrar producto">
</form>
<a href="index.php">Volver al Inicio</a>

