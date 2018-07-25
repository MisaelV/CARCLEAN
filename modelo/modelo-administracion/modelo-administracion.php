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
    //INICIA INSERCIONES
    //Funcion agregar cliente a la base de datos
    public function agregarCliente($nombre,$apellidos,$email,$telefono,$fecha) {
        $this->InsertarRegistrosPreparada("INSERT INTO clientes (nombre, apellidos, email, telefono, fecha_alta) VALUES (?,?,?,?,?)", array($nombre,$apellidos,$email,$telefono,$fecha));
    }
    //Funcion agregar lavador a la base de datos
     public function agregarLavador($nombre,$apellidos,$email,$telefono) {
    }
    //Funcion agregar producto a la base de datos 
     public function agregarProducto($nombreProducto,$cantidad,$proveedor,$img) {
         $this->InsertarRegistrosPreparada("INSERT INTO productos(nombreProducto,cantidad,proveedor,img) VALUES(?,?,?,?)", array($nombreProducto,$cantidad,$proveedor,$img));    
    }
    //Funcion agregar servicio a la base de datos
     public function agregarServicio($cliente,$automovil,$direccion,$tipo_lavado,$lavador,$precio) {
        $this->InsertarRegistrosPreparada("INSERT INTO servicios (cliente,automovil,direccion,tipo_lavado,lavador,precio) VALUES (?,?,?,?,?,?)", array($cliente,$automovil,$direccion,$tipo_lavado,$lavador,$precio));
    }
    
    //Funcion agregar un carro a la base de datos
    public function agregarCarro($marca,$modelo,$color,$tipo,$placas,$id_cliente){
        $this->InsertarRegistrosPreparada("INSERT INTO auto (marca,modelo,color,tipo,placas,id_cliente) VALUES (?,?,?,?,?,? )", array($marca,$modelo,$color,$tipo,$placas,$id_cliente));
    }
    //TERMINA INSERCIONES
    
    //INICIAN CONSULTAS
    public function consultarClientes(){
        return $this->ConsultaPreparada("SELECT *FROM clientes", array(1));
       // return $this->ConsultaAsociativaOrdenada("clientes", array(1));
    }
    //TERMINAN CONSULTAS
    
    //INICIAN ACTUALIZACIONES
    public function modificarCliente($nombre,$apellidos,$email,$telefono,$id){
        $this->InsertarRegistrosPreparada("UPDATE  clientes SET  nombre=?, apellidos=?, email=?,telefono=? WHERE id_cliente=?", array($nombre,$apellidos,$email,$telefono,$id));
    }
    //TERMINAN ACTUALIZACIONES
   
    //INICIAN DELETE
    public function deleteCliente($id){
        $this->EliminarRegistro("DELETE FROM clientes WHERE id_cliente=?", array($id));
    }
    //TERMINAN DELETE
}
