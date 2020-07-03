<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
include_once 'Modelo/Cliente.php';
include_once 'Controlador/CCliente.php';
include_once 'Controlador/CProducto.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tienda Online</title>
        <meta name="author" content="Nicolás Ardila">
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
        <link href="CSS/CSSIndex.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Mi Tienda Online</h1>
        <?php
        //Validar si es cuenta admin (num: 11112222 U: admin C: admin para poder registrar productos
        if(isset($_SESSION["user"])){?>
            <!-- Mensaje que reconoce al usuario -->
            <div id="mensajeBienvenida" ><?php
                echo ("Bienvenido, ".unserialize($_SESSION["user"])->getNombre());?>
            </div> <br>
            <?php
                if(unserialize($_SESSION["user"])->getTelefono() == 11112222){?>
                    <div id="btnRegistrarProducto">
                        <a href="MenuRegistrarProducto.php">Ingresar producto</a>
                    </div><br><?php
            }
        }
        //Sesión iniciada? Sí: Mostrar "Salir Sesión" No: Mostrar "Iniciar Sesión y Registrar Usuario"
        if(!(isset($_SESSION["user"]))){?>
            <div id="btnIniciarSesion">
                <a href="MenuInicioSesion.php">Iniciar Sesión</a>
            </div> <br>
            <div id="btnRegistrarUsuario">
                <a href="MenuRegistrarUsuario.php">Registrar Usuario</a>
            </div><?php
        }else{?> 
            <div id="btnSalirSesion">
                <a href="Controlador/CSalirSesion.php" >Salir de la Sesión</a>
            </div><?php 
        }?> 
        <!-- Catalogo de productos -->
        <div id="catalogo"><?php
            foreach (unserialize($_SESSION["catalogo"])->getCatalogo() as $prod){?>
            <div class="producto"><?php
                echo ($prod->getNombre());?><br>
                <img src="Img/box.png" alt="" width=100" height="100"/> <br><?php
                echo ("Precio: ".$prod->getPrecio());?> <br> <?php
                echo ("En stock: ".$prod->getCantidad());?>
            </div><?php
            }?>
        </div>
    </body>
</html>
