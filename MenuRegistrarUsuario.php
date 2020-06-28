<?php
?>

<h2>Registrar Usuario Nuevo</h2>
<form action="Controlador/CCliente.php" method="GET">
    <div>Ingrese su número de teléfono:</div>
    <input type="number" name="telefonoN">
    <div>Ingrese el nombre del usuario:</div>
    <input type="text" name="nombreN">
    <div>Ingrese la contraseña:</div>
    <input type="password" name="passN">
    <div>Ingrese de nuevo la contraseña:</div>
    <input type="password" name="passNConfirm">
    <input type="submit" value="Registrarme">
</form>
<a href="index.php">Volver al Inicio</a>
