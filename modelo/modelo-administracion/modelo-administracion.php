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
    public function agregarCliente($nombre,$email,$password,$estado,$telefono) {
        $this->InsertarRegistrosPreparada("INSERT INTO clientes(nombre,email,password,estado,telefono) VALUES (?,?,?,?,?)", array($nombre,$email,$password,$estado,$telefono));
    }
    
    
    //Funcion agregar lavador a la base de datos
     public function agregarLavador($nombre,$apellidos,$email,$telefono) {
    }
    //Funcion agregar producto a la base de datos 
     public function agregarProducto($nombreProducto,$tipo_producto,$modo_empleo,$proveedor,$img) {
         $this->InsertarRegistrosPreparada("INSERT INTO productos(nombreProducto,tipo_producto,modo_empleo,proveedor,img) VALUES(?,?,?,?,?)", array($nombreProducto,$tipo_producto,$modo_empleo,$proveedor,$img));    
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
    
    public function consultarProducto(){
        return $this->ConsultaPreparada("SELECT *FROM productos", array(1));
    }
    
    public function consultarServicio(){
        return $this->ConsultaPreparada("SELECT *FROM servicios", array(1));
    }

    //TERMINAN CONSULTAS
    
    //INICIAN ACTUALIZACIONES
    public function modificarCliente($nombre,$password,$email,$telefono,$id){
        $this->InsertarRegistrosPreparada("UPDATE  clientes SET  nombre=?, password=?, email=?,telefono=? WHERE id_cliente=?", array($nombre,$password,$email,$telefono,$id));
    }
    
    public function modificarProducto($nombre,$tipo_producto,$modo_empleo,$proveedor,$img,$id){
        $this->InsertarRegistrosPreparada("UPDATE productos SET nombreProducto=?, tipo_producto=?, modo_empleo=?,proveedor=?,img=? WHERE id_producto=?", array($nombre,$tipo_producto,$modo_empleo,$proveedor,$img,$id));
    }
    
    public function modificarServicio($cliente,$automovil,$direccion,$tipo_lavado,$lavador,$precio,$id){
        $this->ModificarRegistrosPreparada("UPDATE servicios SET cliente=?, automovil=?, direccion=?, tipo_lavado=?, lavador=?, precio=? WHERE id_servicio=?", array($cliente,$automovil,$direccion,$tipo_lavado,$lavador,$precio,$id));
    }

    //TERMINAN ACTUALIZACIONES
   
    //INICIAN DELETE
    public function deleteCliente($id){
        $this->EliminarRegistro("DELETE FROM clientes WHERE id_cliente=?", array($id));
    
    }
    
    public function deleteProducto($id){
        $this->EliminarRegistro("DELETE FROM productos WHERE id_producto=?", array($id));
    }
    
    public function deleteServicio($id){
        $this->EliminarRegistro("DELETE FROM servicios WHERE id_servicio=?", array($id));
    }


    //TERMINAN DELETE
}
