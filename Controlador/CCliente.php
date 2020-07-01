<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CCliente
 *
 * @author Nicolás
 */
include_once 'Modelo/Cliente.php';

class CCliente {
    private $clientes = [];

    public function getClientes(){
        return $this->clientes;
    }
    
    public function agregarCliente(Cliente $cliente) {
        array_push($this->clientes, $cliente);
    }
}
//Crear controlador cliente y cuenta administrador, solo una vez
$ccliente = new CCliente();
$admin = new Cliente(11112222, "admin", "admin");
$ccliente->agregarCliente($admin);
$a = new Cliente(3, "a", "a");
$ccliente->agregarCliente($a);

//Registrar usuario
if(isset($_POST["telefonoN"])){
    $telefonoNuevo = $_POST["telefonoN"];
    $nombreNuevo = $_POST["nombreN"];
    $passNueva = $_POST["passN"];
    $clienteNuevo = new Cliente($telefonoNuevo, $nombreNuevo, $passNueva);
    $ccliente->agregarCliente($clienteNuevo);
}

//Iniciar sesión
if(isset($_POST["telefono"])){
    foreach ($ccliente->getClientes() as $value) {
        if($value->getTelefono() == $_POST["telefono"] && $value->getPass() == $_POST["pass"]){
            $_SESSION["user"] = serialize($value);
            break;
        }else{
            echo 'No es un usuario valido';
        }
    }
}

foreach ($ccliente->getClientes() as $a){
    echo ($a->getTelefono());
}

