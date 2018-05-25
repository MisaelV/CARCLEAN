<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controlador
 *
 * @author Omar
 */
require_once("Modelo/Citas_Modelo.php");
$per=new Citas_Modelo();
$datos=$per->get_Citas();
 
//Llamada a la vista
require_once("vistas/Citas_Vitas.phtml");
?>
