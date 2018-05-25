<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Modelo
 *
 * @author Omar
 */
class Citas_Modelo {
      private $data_base;
    private $Citas;
 
    public function __construct(){
        $this->data_baseb=Conectar::conexion();
        $this->Citas=array();
    }
    public function get_personas(){
        $consulta=$this->data_base->query("select * from personas;");
        while($filas=$consulta->fetch_assoc()){
            $this->Citas[]=$filas;
        }
        return $this->Citas;
    }
}
?>