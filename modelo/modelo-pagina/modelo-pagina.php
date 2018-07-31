<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of modelo-pagina
 *
 * @author VICTOR
 */
class modeloPagina extends BD {
        //FROND-END
    //INICIA EL REGISTRO DEL USUARIO
    public function agregarRegistro($nombre,$email,$password,$estado,$telefono) {
        $this->InsertarRegistrosPreparada("INSERT INTO clientes (nombre, email, password, estado, telefono) VALUES (?,?,?,?,?)", array($nombre,$email,$password,$estado,$telefono));
    }
    //TERMINA EL REGISTRO DEL USUARIO
    //INICIA CONSULTAR EL USUARIO
    public function ConsultarUsuario($email,$password) {
        return $this->ConsultaPreparada("SELECT * FROM clientes where EMAIL=? and PASSWORD=?", array($email,$password));
    }
    //TERMINA LA CONSULTA DEL USUARIO
}
