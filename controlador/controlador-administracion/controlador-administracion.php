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
public function _construc(){
    $this->modelo= new modeloAdministracion();

    //Inicia agregarWasher
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
        
        if(isset($_POST['name'])){
            $nombre=$_POST['name'];
            $cantidad=$_POST['cantidad'];
            $proveedor=$_POST['proveedor'];
            var_dump();
            $this->modelo->agregarProducto($nombre,$cantidad,$proveedor);
        }
        
    
    if(isset($_POST['eliminarWasher'])){
        $this->modelo->eliminarWasher($_POST['id']);
    }
}


}
