<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Venta
 *
 * @author Nicolás
 */
class Venta {
    private int $fecha;
    private int $idProducto;
    private int $idCliente;
    
    public function __construct(int $fecha, int $idProducto, int $idCliente) {
        $this->setFecha($fecha);
        $this->setIdProducto($idProducto);
        $this->setIdCliente($idCliente);
    }
    
    public function getFecha(){
        return $this->fecha;
    }
    
    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }
    
    public function getIdProducto(){
        return $this->idProducto;
    }
    
    public function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }
    
    public function getIdCliente(){
        return $this->idCliente;
    }
    
    public function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }
}
