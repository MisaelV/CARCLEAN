<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BD
 *
 * @author ALEXIS
 */
class BD {
    //conexion con base de datos
    var $cadena = "mysql:host=127.0.0.1;dbname=carclean";  
    var $user = "root"; 
    var $password = "";
    var $conn;
    var $depuracion = true;
    
    //Abre la conexión
    function open() {
        try {
            $this->conn = new PDO($this->cadena, $this->user, $this->password);
            $this->conn->exec("set character set utf8");
        } catch (PDOException $e) {
            if ($this->depuracion)
                echo $e->getMessage();
            $this->conn = NULL;
            die();
        }
    }
    
    //Cierra la conexion
    function CerrarConexion() {
        $this->conn = NULL;
    }
    
  //Ests función consulta a partir de la sintaxis que se ingresa en modelo junto con los parametros
    function ConsultaPreparada($sql, $parametros) {
        if ($this->conn == NULL)
            $this->open();
        $sentencia = $this->conn->prepare($sql);
        //echo $sql;
        if ($sentencia->execute($parametros)) {
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        } else {
            if ($this->depuracion)
                echo var_dump($sentencia->errorInfo());
            return null;
        }
        $this->CerrarConexion(); //cerramos conexion
    }

    //Esta función inserta los registros a partir de la sintaxis sql y los parametros agregados en modelo
    public function InsertarRegistrosPreparada($sql, $parametros) {
        if ($this->conn == NULL)
            $this->open();
        $sentencia = $this->conn->prepare($sql);
        if ($sentencia->execute($parametros)) {
            return TRUE;
        } else {
            if ($this->depuracion)
            //var_dump($sentencia->errorInfo());
                return FALSE;
        }
    }
   
    //Esta funcion modifica los registros en la base de datos a  partir de la sintaxis y parametros agregados en modelo
    public function ModificarRegistrosPreparada($sql, $parametros) {
        if ($this->conn == NULL)
            $this->open();

        $sentencia = $this->conn->prepare($sql);
        if ($sentencia->execute($parametros)) {
            return TRUE;
        } else {
            if ($this->depuracion)
            // echo var_dump($sentencia->errorInfo());
                return FALSE;
        }
        $this->CerrarConexion();//cerramos conexion
    }
    
    //Esta funcion elimina los registros en la base de datos a partir de la sintaxis y parametros insertados en modelo
        public function EliminarRegistro($sql,$parametros) {
        if ($this->conn == NULL)
            $this->open();
        $sentencia = $this->conn->prepare($sql);
        if ($sentencia->execute($parametros)) {
            return TRUE;
        } else {
            if ($this->depuracion)
            // echo var_dump($sentencia->errorInfo());
                return FALSE;
        }
        $this->CerrarConexion();//cerramos conexion
    }
    
    //Esta función consulta a partir de la tabla agregada en modelo y los parametros
    function ConsultaAsociativaOrdenada($tabla, $parametros) {
        if ($this->conn == NULL)
            $this->open(); //abre la conexión
        $sentencia = $this->conn->prepare("SELECT *FROM " . $tabla);
        if ($sentencia->execute($parametros)) {
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        } else {
            if ($this->depuracion)
                echo var_dump($sentencia->errorInfo());
            return null;
        }
        
    }
}
?>
