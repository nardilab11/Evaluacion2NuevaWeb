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
