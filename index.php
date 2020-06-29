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
        //Crear controlador cliente y cuenta administrador
        $ccliente = new CCliente();
        $admin = new Cliente(11112222, "admin", "admin");
        $ccliente->agregarCliente($admin);
        $mensajeSesion = "No hay sesión iniciada.";
        //Iniciar sesión
        if(isset($_GET["telefono"])){
            foreach ($ccliente->getClientes() as $value) {
                if($value->getTelefono() == $_GET["telefono"] && $value->getPass() == $_GET["pass"]){
                    $_SESSION["u".strval($_GET["telefono"])] = $_GET["pass"];
                    $mensajeSesion = "Sesion iniciada correctamente.";
                    break;
                }else{
                    $mensajeSesion = "Datos no válidos. Sesión no iniciada.";
                }
            }
        }
        //Validar para poder ingresar un producto
        if(array_key_exists("u11112222", $_SESSION)){
                if($_SESSION["u11112222"] == "admin"){
                    ?> <a href="MenuRegistrarProducto.php">Ingresar producto</a> <?php
            }
        }
        ?> <a href="MenuRegistrarUsuario.php">Registrar Usuario</a> <?php
        //Sesión iniciada?
        if($mensajeSesion == "No hay sesión iniciada." || $mensajeSesion == "Datos no válidos. Sesión no iniciada."){
            ?> <a href="MenuInicioSesion.php">Iniciar Sesión</a> <?php
        }else{
            ?> <a>Salir de la Sesión</a> <?php
        }
        echo ($mensajeSesion);
        ?>
    </body>
</html>
