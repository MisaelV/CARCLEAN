<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of modelo-administracion
 *
 * @author Alexis
 */
class modeloAdministracion extends BD {
    //Funcion agregar cliente a la base de datos
    public function agregarCliente($nombre,$apellidos,$email,$telefono,$fecha) {
        $this->InsertarRegistrosPreparada("INSERT INTO clientes (nombre, apellidos, email, telefono, fecha_alta)", array($nombre,$apellidos,$email,$telefono,$fecha));
    }
    //Funcion agregar lavador a la base de datos
     public function agregarLavador($param) {
        
    }
    //Funcion agregar producto a la base de datos 
     public function agregarProducto($nombreProducto,$cantidad,$proveedor) {
         $this->InsertarRegistrosPreparada("INSERT INTO productos(nombreProducto,cantidad,proveedor) VALUES(?,?,?)", array($nombreProducto,$cantidad,$proveedor));    
    }
    //Funcion agregar servicio a la base de datos
     public function agregarServicio($param) {
        
    }
}
