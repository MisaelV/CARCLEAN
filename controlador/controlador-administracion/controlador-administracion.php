<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of controlador-administracion
 *
 * @author Alexis
 */
class controladorAdministracion {
private $modelo;
public function __construct() {
    $this->modelo= new modeloAdministracion();
    //Inicia agregarWasher
    if(isset($_POST['agregarCliente'])){
        $nombre= $_POST['nombre'];
        $apellidos=$_POST["apellidos"];
        $telefono=$_POST["telefono"];
        $email=$_POST["email"];
        $fecha=$_POST["fecha"];
        $this->modelo->agregarCliente($nombre,$apellidos,$email,$telefono,$fecha);
        unset($_POST);
    }
    if (isset($_POST['agregarWasher'])){
                  $nombre=$_POST["nombre"];
                  $fnacimiento=$_POST["fnacimiento"];
                  $telefono=$_POST['telefono'];
                  $escolaridad=$_POST['escolaridad'];
                  $direccion=$_POST['direccion'];
                  $email=$_POST['email'];
                  $estadoCivil=$_POST['estadoCivil'];
                  var_dump($_POST['referencia1']);
            define('LIMITE', 5000000);
            define('ARREGLO', serialize(array('image/jpg', 'image/jpeg', 'image/gif', 'image/png')));
            $PERMITIDOS = unserialize(ARREGLO); //Usar unserialize para obtener el arreglo
            if ($_FILES["referencia1"]["error"] > 0) {
                echo'<script type="text/javascript">
                        alert("Error de FILE Selecciona un Archivo");
                        window.location="washer.php"
                        </script>';
            }
            if ($_FILES["referencia2"]["error"] > 0) {
                echo'<script type="text/javascript">
                        alert("Error de FILE Selecciona un Archivo");
                        window.location="washer.php"
                        </script>';
            }
            if ($_FILES["ine"]["error"] > 0) {
                echo'<script type="text/javascript">
                        alert("Error de FILE Selecciona un Archivo");
                        window.location="washer.php"
                        </script>';
            }
            if ($_FILES["comprobante"]["error"] > 0) {
                echo'<script type="text/javascript">
                        alert("Error de FILE Selecciona un Archivo");
                        window.location="washer.php"
                        </script>';
            }else {
                if (in_array($_FILES['imagen']['type'], $PERMITIDOS) && $_FILES['imagen']['size'] <= LIMITE * 1024) {
                    $rutaEnServidor = "../../Vista/assets/images/" . $_FILES['imagen']['name'];
                    $ruta = "http://localhost:8081/CARCLEAN/assets/images/" . $_FILES['imagen']['name'];
                    
                    
                    if (!file_exists($ruta)) {
                        $resultado = move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaEnServidor);
                        if ($resultado) {
                            $fechaN=  date('Y-m-d');
                            $this->modelo->insertarNoticia($ruta, $titulo, $descripcion, $fechaN);
                          header("location:app.php");
                        }
                    }
                }
            }
        }
   //Termina agregarProducto
         //INICIA AGREGAR INVENTARIO
        if(isset($_POST['agregar']))
            {
            $nombre=$_POST['name'];
            $cantidad=$_POST['cantidad'];
            $proveedor=$_POST['proveedor'];
            define('LIMITE', 5000000);
            define('ARREGLO', serialize(array('image/jpg', 'image/jpeg', 'image/gif', 'image/png')));
            $PERMITIDOS = unserialize(ARREGLO);
            
            if($_FILES["imagen"]["error"]>0){
                 echo'<script type="text/javascript">
                        alert("Error de FILE Selecciona un Archivo");
                        window.location="inventario.php"
                        </script>';
            }else{
                if(in_array($_FILES['imagen']['type'], $PERMITIDOS) && $_FILES['imagen']['size']<= LIMITE * 1024){
                    $rutaEnServidor = "../../vista/-administracion/assets/img/".$_FILES['imagen']['name'];
                    $ruta = "http://localhost/CARCLEAN/vista/-administracion/assets/img/". $_FILES['imagen']['name'];
                if(!file_exists($ruta)){
                    $resultado = move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaEnServidor);
                    if($resultado){
                       $this->modelo->agregarProducto($nombre,$cantidad,$proveedor,$ruta);
                    }
                }
            }
            }
            
        }
        
        //TERMINA AGREGAR INVENTARIO
        
        //INICIA AGREGAR SERVICIO
        if(isset($_POST['agregarservicio'])){
            $cliente = $_POST['cliente'];
            $automovil= $_POST['automovil'];
            $direccion = $_POST['direccion'];
            $tipo_lavado = $_POST['tipo_lavado'];
            $lavador = $_POST['lavador'];
            $precio = $_POST['precio'];
            
            $this->modelo->agregarServicio($cliente, $automovil, $direccion, $tipo_lavado, $lavador, $precio);
            
        }
       
        //TERMINA EL DE AGREGAR SERVICIO
        
    
    if(isset($_POST['eliminarWasher'])){
        $this->modelo->eliminarWasher($_POST['id']);
    }
}

   

}
