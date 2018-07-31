<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of controlador-pagina
 *
 * @author Alexis
 */
class controladorPagina extends BD {
     private $modelo;
    
    public function __construct() {
    $this->modelo= new modeloPagina();
    
   if(isset($_POST['agregarUsuario'])){
       $nombre= $_POST['nombre'];
       $email= $_POST['email'];
       $password= md5($_POST['password']);
       $estado= $_POST['estado'];
       $telefono= $_POST['telefono'];
       
       $this->modelo->agregarRegistro($nombre, $email, $password, $estado, $telefono);
       header('location:index.php');
       
        
   }
    
    }
    
    //METODO QUE AUTENTIFICA AL USUARIO EL LA BASE DE DATOS 
     public function autentificarUsuario(){
         //SI LOS INPUTS CON LOS NOMBRES EMAIL Y PASSWORD EXITEN 
        if(isset($_POST['email']) && isset($_POST['password'])){
            //ME LOS GUARDA EN VARIBLES
            $email=$_POST['email'];
            $password= md5($_POST['password']);
            //LE PASO LAS VARIBLES ANTERIORES A MI CONSULTA
            $email=$this->modelo->ConsultarUsuario($email, $password);
            //SI EXISTE MI USUARIO EN LA BASE DE DATOS ME LO VERIFICA
            if(isset($email)){
                $_SESSION['email']= $email;
                echo "<script>alert('si entra al usuario')</script>";
            }
            
    }
}
}
