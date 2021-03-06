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
  //INICIA EL CODIGO DEL CLIENTE
    //Inicia agregar CLIENTE
    if(isset($_POST['agregarCliente'])){
        $nombre= $_POST['nombre'];
        $email=$_POST['email'];
        $password= md5($_POST["password"]);
        $estado=$_POST['estado'];
        $telefono=$_POST["telefono"];
        
        $this->modelo->agregarCliente($nombre, $email, $password, $estado, $telefono);
        header('location:clientes.php');
    }
    //Inicia el agregado de cliente
    //Iniciar modificar CLIENTE
      if(isset($_POST['modificarCliente'])){
        $id=$_POST['idCliente'];
        $nombre= $_POST['nombre'];
        $password= md5($_POST['password']);
        $telefono=$_POST["telefono"];
        $email=$_POST["email"];
        $this->modelo->modificarCliente($nombre, $password, $email, $telefono, $id);
        header('location:clientes.php');
    }
    //Termina modificar CLIENTE
    //Iniciar eliminar CLIENTE
    if(isset($_POST['eliminarCliente'])){
        $id=$_POST['idCliente'];
        $this->modelo->deleteCliente($id);
         header('location:clientes.php');
    }
    //Termina el eliminado del CLIENTE
    //TERMINA EL CODIGO DEL CLIENTE

    
    //INICIA CODIGO PARA EL INVENTARIO
        //inicia agregar al INVENTARIO
        if(isset($_POST['agregarInventario']))
            {
            $nombreProducto=$_POST['nombre'];
            $tipo_producto=$_POST['tipo_producto'];
            $modo_empleo=$_POST['modo_empleo'];
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
                    $rutaEnServidor = "../../assets/images/administracion/img-inventario/".$_FILES['imagen']['name'];
                    $ruta = "http://localhost/CARCLEAN/assets/images/administracion/img-inventario/". $_FILES['imagen']['name'];
                if(!file_exists($ruta)){
                    $resultado = move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaEnServidor);
                    if($resultado){
                       $this->modelo->agregarProducto($nombreProducto, $tipo_producto, $modo_empleo, $proveedor, $ruta);
                    }
                }
            }
            }
            
        }
        //termina agregar INVENTARIO
        //inicia el modificado para el inventario
        if(isset($_POST['modificarInventario'])){
            $id=$_POST['idProducto'];
            $nombre=$_POST['name'];
            $tipo_producto=$_POST['tipoProducto'];
            $modo_empleo=$_POST['modoEmpleo'];
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
                    $rutaEnServidor = "../../assets/images/administracion/img-inventario/".$_FILES['imagen']['name'];
                    $ruta = "http://localhost/CARCLEAN/assets/images/administracion/img-inventario/". $_FILES['imagen']['name'];
                if(!file_exists($ruta)){
                    $resultado = move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaEnServidor);
                    if($resultado){
                       $this->modelo->modificarProducto($nombre, $tipo_producto, $modo_empleo, $proveedor, $ruta, $id);
                    }
                }
            }
            
            
        }
    }
    
        //termina el modificado para el inventario
        //inicia el eliminado del inventario    
        if(isset($_POST['eliminarInventario'])){
             $id=$_POST['idProducto'];
             $this->modelo->deleteProducto($id);
             header('location:inventario.php');
        }
        
    //TERMINA EL CODIGO DEL INVENTARIO INVENTARIO
        
        //INICIA AGREGAR SERVICIO
        if(isset($_POST['agregarServicio'])){
            $cliente = $_POST['cliente'];
            $automovil= $_POST['automovil'];
            $direccion = $_POST['direccion'];
            $tipo_lavado = $_POST['tipo_lavado'];
            $lavador = $_POST['lavador'];
            $precio = $_POST['precio'];
            
            $this->modelo->agregarServicio($cliente, $automovil, $direccion, $tipo_lavado, $lavador, $precio);
            
        }
        //Termina agregar SERVICIO
        //Inicia modificar SERVICIO
        if(isset($_POST['modificarServicio'])){
            $id=$_POST['idServicio'];
            $cliente=$_POST['nombre'];
            $automovil=$_POST['automovil'];
            $direccion = $_POST['direccion'];
            $tipo_lavado = $_POST['tipo_lavado'];
            $lavador = $_POST['lavador'];
            $precio = $_POST['precio'];
            $this->modelo->modificarServicio($cliente, $automovil, $direccion, $tipo_lavado, $lavador, $precio,$id);
            
        }
        //termine modificar SERVICIO
        if(isset($_POST['eliminarServicio'])){
            $id=$_POST['idServicio'];
            $this->modelo->deleteServicio($id);
        }
        
       
        //TERMINA EL DE AGREGAR SERVICIO
        
        //INICIO DE AGREGAR UN CARRO
        
        if(isset($_POST['agregarCoche'])){
            $marca =$_POST['marca'];
            $modelo =$_POST['modelo'];
            $color=$_POST['color'];
            $tipo =$_POST['tipo'];
            $placas =$_POST['placas'];
            $id_cliente = $_POST['id_cliente'];
            
            $this->modelo->agregarCarro($marca, $modelo, $color, $tipo, $placas, $id_cliente);
            
        }
    
    if(isset($_POST['eliminarWasher'])){
        $this->modelo->eliminarWasher($_POST['id']);
    }
}

 //Funciones de consulta
    //Inicia consulta para clientes
    public function consultarClientes(){
         $reg=$this->modelo->consultarClientes();
         $acu="";
         foreach ($reg as $r) {
             $acu.=' <tr>
                                                <td>'.$r['id_cliente'].'</td>
                                                <td>'.$r['nombre'].'</td>
                                                <td>'.$r['email'].'</td>
                                                <td>'.$r['telefono'].'</td>
                                                <td class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <b class="caret hidden-sm hidden-xs"></b>
                                                        <span class="notification hidden-sm hidden-xs">Opciones</span>
                                                        <p class="hidden-lg hidden-md">
                                                            <b class="caret"></b>
                                                        </p>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#modalInformacion" data-toggle="modal">Más información</a></li>
                                                        <li><a href="#modalModificar" data-toggle="modal" onClick="modificarCliente('.$r["id_cliente"].',\''.$r["nombre"].'\',\''.$r["password"].'\',\''.$r["email"].'\',\''.$r["telefono"].'\')">Modificar</a></li>
                                                        <li><a href="#modalEliminar" data-toggle="modal" onClick="deleteCliente('.$r["id_cliente"].')">Eliminar</a></li>
                                                        <li><a href="#modalAgregarCoche" data-toggle="modal">Agregar Coche</a></li>
                                                    </ul>
                                                </td>
                                            </tr>';
         }
     return $acu;
    }
    //Termina consulta para clientes
    //Inicia consulta para productos
    public function consultarProducto(){
        $reg= $this->modelo->consultarProducto();
        $acu="";
        foreach ($reg as $r) {
            $acu.='<tr>
                                            <td>'.$r['id_producto'].'</td>
                                            <td>'.$r['nombreProducto'].'</td>
                                            <td>'.$r['tipo_producto'].'</td>
                                            <td>'.$r['modo_empleo'].'</td>
                                                <td>'.$r['proveedor'].'</td>
                                            <td class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <b class="caret hidden-sm hidden-xs"></b>
                                                    <span class="notification hidden-sm hidden-xs">Opciones</span>
                                                    <p class="hidden-lg hidden-md">
                                                    <b class="caret"></b>
                                                    </p>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#modalModificar" data-toggle="modal"onClick="modificarInventario('.$r["id_producto"].',\''.$r["nombreProducto"].'\',\''.$r["tipo_producto"].'\',\''.$r["modo_empleo"].'\',\''.$r["proveedor"].'\')">Modificar</a></li>
                                                    <li><a href="#modalEliminar" data-toggle="modal"onClick="deleteInventario('.$r["id_producto"].')">Eliminar</a></li>

                                                </ul>
                                            </td>
                                        </tr>';
            
        }
        return $acu;
    }
    //Termina consulta para productos
    //Inicia consulta para servicios
    
    public function consultarServicios(){
        $reg= $this->modelo->consultarServicio();
        $acu= "";
        foreach ($reg as $r) {
            $acu.='<tr>
                                                <td>'.$r['id_servicio'].'</td>
                                                <td>'.$r['cliente'].'</td>
                                                <td>'.$r['automovil'].'</td>
                                                <td>'.$r['direccion'].'</td>
                                                <td>'.$r['tipo_lavado'].'</td>
                                                <td>'.$r['lavador'].'</td>
                                                <td>'.$r['precio'].'</td>
                                                 <td class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                                    <b class="caret hidden-sm hidden-xs"></b>
                                                    <span class="notification hidden-sm hidden-xs">Opciones</span>
                                                    <p class="hidden-lg hidden-md">
                                                        
                                                        <b class="caret"></b>
                                                    </p>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#modalModificar" data-toggle="modal" onClick="updateServicio('.$r["id_servicio"].',\''.$r["cliente"].'\',\''.$r["automovil"].'\',\''.$r["direccion"].'\',\''.$r["tipo_lavado"].'\',\''.$r["lavador"].'\',\''.$r["precio"].'\')">Modificar</a></li>
                                                    <li><a href="#modalEliminar" data-toggle="modal" onClick="deleteServicio('.$r["id_servicio"].')">Eliminar</a></li>

                                                </ul>
                                            </td>
                                            </tr>';
            
        }
        return $acu;
    }

}

