<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of data-base
 *
 * @author Omar
 */
//aun no esa creada la base de datos por lo cual la classe no funciona
//cuando la base de datos este diseñada se adaptaran las clases para su correcto funcionamiento
class data_base{
        public static function conexion(){
        $conexion=new mysqli("localhost", "root", "", "mvc");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>