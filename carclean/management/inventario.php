<?php
include_once '../../modelo/BD.php';
include_once '../../controlador/controlador-administracion/controlador-administracion.php';
include_once '../../modelo/modelo-administracion/modelo-administracion.php';
$controlador = new controladorAdministracion();
?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Inventario</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    CarClean
                </a>
            </div>
           <ul class="nav">
                        <li>
                            <a href="servicios.php">
                                <i class="pe-7s-car"></i>
                                <p>Inicio</p>
                            </a>
                        </li>
                        <li>
                            <a href="clientes.php">
                                <i class="pe-7s-user"></i>
                                <p>Clientes</p>
                            </a>
                        </li>
                        <li class="active">
                            <a href="inventario.php">
                                <i class="pe-7s-albums"></i>
                                <p>Inventario</p>
                            </a>
                        </li>
                        <li>
                            <a href="washer.php">
                                <i class="pe-7s-users"></i>
                                <p>Lavadores</p>
                            </a>
                        </li>
                        <li class="active-pro">
                            <a href="index.php">
                                <i class="pe-7s-power"></i>
                                <p>Salir</p>
                            </a>
                        </li>
           </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Catálogo de productos</a>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="administracion-inicio.html" class="btn btn-default">
                                <p>Inicio</p>
                            </a>
                        </li>
                        <li>
                            <a href="#modalAgregar" data-toggle="modal" class="btn btn-primary">
                                <p>Agregar <i class="pe-7s-plus"></i></p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Inventario</h4>
                                <p class="category">Tabla de almacen.</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <th>ID</th>
                                    <th>Nombre del Producto</th>
                                    <th>Tipo De Producto</th>
                                    <th>Modo de Empleo</th>
                                    <th>Proveedor</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        echo $controlador->consultarProducto();
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
        </div>
    </div>
</div>
                     </div>
                   <footer class="footer" style="background-color: #515151    ;" >
                    <div class="container-fluid" >
                        <p class="copyright pull-right">
                            &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">CarClean</a>
                        </p>
                    </div>
                </footer>
    </div>
</div>
    
    <!--VENTANAS EMERGENTES-->
    
    <!--Codigo para la ventana emergente de agregar-->
    <div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: #025A9B  ;  ">
                        <button type="button" style="color: #ffffff;" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" >&times;</span>
                        </button>
                        <p style="color: #ffffff;">Agregar Producto  <i class="pe-7s-plus"></i></p>
                    </div>
                    <form method="POST" action="inventario.php" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="agregarInventario" value="1">
                            <div class="form-group">
                                <label for="name" class="col-form-label">Nombre Producto:</label>
                                <input required="" type="text"   value=""   name="nombre"  class="form-control" aria-describedby="sizing-addon3" >
                            </div>
                            <div class="form-group ">
                                <label for="proveedor" class="col-form-label">Tipo Producto:</label>
                                <input  type="text"  name="tipo_producto"  class="form-control" aria-describedby="sizing-addon3">
                            </div>
                            <div class="form-group ">
                                <label for="proveedor" class="col-form-label">Modo Empleo:</label>
                                <textarea  type="text"  name="modo_empleo"  class="form-control" aria-describedby="sizing-addon3"></textarea>
                            </div>
                            <div class="form-group ">
                                <label for="canridad" class="col-form-label">Proveedor:</label>
                                <input required=""  type="text"  name="proveedor" class="form-control" aria-describedby="sizing-addon3">
                            </div>
                            <div class="form-group">
                                <label for="">imagen</label>
                                <div class="card">
                                    <div class="card-block">
                                        <h3 class="card-title">Imagen</h3> 
                                        <output id="list" >
                                            
                                        </output>
                                    </div>
                                </div>
                                <label for="" class="col-form-label btn btn-default center-block">
                                    Subir Archivo
                                    <input class="btn btn-file form-control"type="file" id="files"  name="imagen"> 
                                </label>
                                
                            </div>
                        </div>
                        <div class="modal-footer" >   
                            <input type="submit"   value="Aceptar" class="btn btn-success">
                            <button value="Cancelar" class="btn btn-primary" data-dismiss="modal" aria-label="Close" > </button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
    <!--Codigo para la ventana emergente de modificar-->
    <div class="modal fade" id="modalModificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: scrollbar;  ">
                        <button type="button" style="color: #ffffff;" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color:#000;">&times;</span>
                        </button>
                        <p style="color: black;">Modificar Producto  <i class="pe-7s-tools"></i></p>
                    </div>
                    <form method="post" action="inventario.php" enctype="multipart/form-data">
                    <div class="modal-body">
                            <input type="hidden" name="modificarInventario"  value="1">
                            <input type="hidden" name="idProducto" id="idProducto" value="">
                            
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Nombre del producto:</label>
                                    <input required="" type="text"  id="pNombre"  name="name"  class="form-control" aria-describedby="sizing-addon3" >
                                </div>
                            
                             <div class="form-group">
                                    <label for="name" class="col-form-label">Tipo Producto:</label>
                                    <input required="" type="text"  id="pTipo"  name="tipoProducto"  class="form-control" aria-describedby="sizing-addon3" >
                                </div>
                            
                             <div class="form-group">
                                    <label for="name" class="col-form-label">Modo de Empleo:</label>
                                    <textarea required="" type="text"  id="pEmpleo"  name="modoEmpleo"  class="form-control" aria-describedby="sizing-addon3" ></textarea>
                                </div>
                            <div class="form-group ">
                                <label for="proveedor" class="col-form-label">Proveedor:</label>
                                    <input required=""  type="text"  name="proveedor" id="pProveedor" class="form-control" aria-describedby="sizing-addon3">
                                    </div>
                            <div class="form-group ">
                                <label for="" class="col-form-label btn btn-default center-block">
                                    Subir Archivo
                                    <input class="btn btn-file form-control" type="file"   name="imagen"> 
                                </label>
                             </div>
                              <div class="modal-footer" >   
                                <input type="submit"   value="Aceptar" class="btn btn-success">
                                <input type="submit"   value="Cancelar" class="btn btn-primary" data-dismiss="modal" aria-label="Close" >
                            </div>
                     
                    </div>
                    </form>
                </div>
            </div>
    <!--Codigo para la ventana emergente de eliminar-->
    <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: #C80000  ;  ">
                        <button type="button" style="color: #ffffff;" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p style="color: #ffffff;">Eliminar Producto  <i class="pe-7s-delete-user"></i></p>
                    </div>
                    <form method="post" action="clientes.php">
                        <div class="modal-body">
                            <input type="hidden" name="eliminarInventario"  value="1">
                            <input type="hidden" name="idProducto" id="idP">
                            <p>¿Desea realmente eliminar este producto?</p>
                            <div class="modal-footer" >   
                                <input type="submit"   value="Aceptar" class="btn btn-success">
                                <input type="submit"   value="Cancelar" class="btn btn-primary" data-dismiss="modal" aria-label="Close" >
                            </div>
                        </div>
                         </form>
                </div>
            </div>
        </div>
</body>
<script src="../../controlador/controlador-administracion/js/funcion-img.js"></script>
<script src="../../controlador/controlador-administracion/js/delete.js" type="text/javascript"></script>
<script src="../../controlador/controlador-administracion/js/update.js" type="text/javascript"></script>
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/chartist.min.js"></script>
<script src="assets/js/bootstrap-notify.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

</html>
