<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CProducto
 *
 * @author Nicolás
 */
include_once 'Modelo/Producto.php';

class CProducto {
    private $catalogo = [];
    private $carrito = [];
    
    public function getCatalogo() {
        return $this->catalogo;
    }
    
    public function getCarrito() {
        return $this->carrito;
    }
    
    public function agregarAlCatalogo(Producto $producto) {
        array_push($this->catalogo, $producto);
    }
    
    public function agregarAlCarrito(Producto $producto) {
        array_push($this->carrito, $producto);
    }
}
//Crear controlador producto solo una vez
if(!(isset($_SESSION["instanciaCProducto"]))){
    $cproducto = new CProducto();
    $productoNuevo = new Producto(112233, "Producto 1", 3000, 50);
    $cproducto->agregarAlCatalogo($productoNuevo);
    $_SESSION["catalogo"] = serialize($cproducto);
    $_SESSION["instanciaCProducto"] = "si";
}
//Registrar producto
if(isset($_POST["idPN"])){
    //Hacer validacion id único
    $idPNuevo = $_POST["idPN"];
    $nombrePNuevo = $_POST["nombrePN"];
    $precioPNuevo = $_POST["precioPN"];
    $cantidadPNuevo = $_POST["cantidadPN"];
    $productoNuevo = new Producto($idPNuevo, $nombrePNuevo, $precioPNuevo, $cantidadPNuevo);
    $cproductoT = unserialize($_SESSION["catalogo"]);
    $cproductoT->agregarAlCatalogo($productoNuevo);
    $_SESSION["catalogo"] = serialize($cproductoT);
}

if(isset($_POST["idCarrito"])){
    foreach (unserialize($_SESSION["catalogo"])->getCatalogo() as $prod){
        if($prod->getId() == $_POST["idCarrito"]){
            $cproductoT = unserialize($_SESSION["catalogo"]);
            $cproductoT->agregarAlCarrito($prod);
            $_SESSION["catalogo"] = serialize($cproductoT);
            break;
        }
    }
}