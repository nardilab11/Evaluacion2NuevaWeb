<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
include_once 'Controlador/CCliente.php';
include_once 'Modelo/Cliente.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tienda Online</title>
        <meta name="author" content="Nicolás Ardila">
    </head>
    <body>
        <h1>Mi Tienda Online</h1>
        <?php
        //Validar para poder ingresar un producto
        if(isset($_SESSION["user"])){
                if(unserialize($_SESSION["user"])->getTelefono() == 11112222){
                    ?> <a href="MenuRegistrarProducto.php">Ingresar producto</a> <?php
            }
        }
        //Sesión iniciada?
        if(!(isset($_SESSION["user"]))){
            ?> <a href="MenuInicioSesion.php">Iniciar Sesión</a>
            <a href="MenuRegistrarUsuario.php">Registrar Usuario</a>  <?php
        }else{
            ?> <a href="Controlador/CSalirSesion.php" >Salir de la Sesión</a> <?php
        }
        if(isset($_SESSION["user"])){
            echo ("Bienveindo, ".unserialize($_SESSION["user"])->getNombre());
        }
        ?>
    </body>
</html>
