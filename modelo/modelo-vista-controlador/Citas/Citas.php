<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Citas
 *
 * @author Omar
 */
class Citas {
     private $data_base;
    private $Citas;
 
    public function __construct(){
        $this->data_base=Conectar::conexion();
        $this->Citas=array();
    }
    public function get_personas(){
        $consulta=$this->db->query("select * from citas;");
        while($filas=$consulta->fetch_assoc()){
            $this->Citas[]=$filas;
        }
        return $this->Citas;
    }
}
?>
