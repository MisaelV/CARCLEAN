<?php 
include_once '../../modelo/BD.php';
include_once '../../controlador/controlador-administracion/controlador-administracion.php';
include_once '../../modelo/modelo-administracion/modelo-administracion.php';
$controlador = new controladorAdministracion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Clientes</title>
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
                    <li  class="active">
                        <a href="clientes.php">
                            <i class="pe-7s-user"></i>
                            <p>Clientes</p>
                        </a>
                    </li>
                    <li>
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
                        <a class="navbar-brand" href="#">Ver Clientes </a>
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
                                    <h4 class="title">Clientes</h4>
                                    <p class="category">Tabla de clientes guardados.</p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                        <th>ID</th>
                                        <th>Cliente</th>
                                        <th>Lavador</th>
                                        <th>Precio</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Alexis Mendez Bautista</td>
                                                <td>Omar Garcia Gonazales</td>
                                                <td>$434.00</td>
                                                <td class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                                        <b class="caret hidden-sm hidden-xs"></b>
                                                        <span class="notification hidden-sm hidden-xs">Opciones</span>
                                                        <p class="hidden-lg hidden-md">

                                                            <b class="caret"></b>
                                                        </p>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#modalModificar" data-toggle="modal">Modificar</a></li>
                                                        <li><a href="#modalEliminar" data-toggle="modal">Eliminar</a></li>
                                                        <li><a href="#modalCoche" data-toggle="modal">Agregar Coche</a></li>
                                                    </ul>
                                                </td>
                                            </tr
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
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
                    <div class="modal-header" style="background: #025A9B ;  ">
                        <button type="button" style="color: #ffffff;" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p style="color: #ffffff;">Agregar Cliente<i class="pe-7s-plus"></i></p>
                    </div>
                    <div class="modal-body ">
                        <form method="post" action="clientes.php">
                            <input type="hidden" name="agregarCliente"  value="1">
                                <input type="hidden" name="idP" id="idP" value="">
                                     <div class="container aspirante">
                        <div class="row">
                                <div class="form-group" style="width:570px;">
                                    <label>Nombre Completo:</label>
                                    <input required="" type="text"   value="" id="idNombre"  name="nombre"  class="form-control" aria-describedby="sizing-addon3" >
                                </div>
                              <div class="form-group" style="width:570px;">
                                    <label>Apellidos:</label>
                                    <input required="" type="text"   value="" id="idNombre"  name="apellidos"  class="form-control" aria-describedby="sizing-addon3" >
                                </div>
                          
                                     <div class="form-group" style="width:570px;">
                                    <label>Email:</label>
                                    <input required="" type="email"   value="" id="idNombre"  name="email"  class="form-control" aria-describedby="sizing-addon3" >
                                </div>
                            <div class="form-group" style="width:570px;">
                                    <label>Fecha:</label>
                                    <input required="" type="date"   value="" id="idNombre"  name="fecha"  class="form-control" aria-describedby="sizing-addon3" >
                                </div>
                                <div class="form-group "style="width:570px;">
                                    <label>Telefono:</label>
                                    <input required=""  type="text"  name="telefono" id="itelefono" class="form-control" aria-describedby="sizing-addon3">
                                    </div>
                             </div>
                                       
                                         <div class="form-group center-block" >   
                                <input type="submit"   value="Aceptar" class="btn btn-success">
                                <input type="submit"   value="Cancelar" class="btn btn-primary" data-dismiss="modal" aria-label="Close" >
                            </div>
                    </div>
                            </form>
                </div>
            </div>
        </div>
         </div>
    
     <!--Codigo para la ventana emergente de agregar coche-->
    <div class="modal fade" id="modalCoche" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: #025A9B ;  ">
                        <button type="button" style="color: #ffffff;" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p style="color: #ffffff;">Agregar Automovil<i class="pe-7s-plus"></i></p>
                    </div>
                    <form method="post" action="clientes.php">
                    <div class="modal-body ">
                        
                            <input type="hidden" name="agregarCoche"  value="1">
                                <input type="hidden" name="idP" id="idP" value="">
                                     <div class="container aspirante">
                       
                                <div class="form-group">
                                    <label class="col-form-label">Marca:</label>
                                    <input required="" type="text"   value="" id="idNombre"  name="nombre"  class="form-control" aria-describedby="sizing-addon3" >
                                </div>
                              <div class="form-group" >
                                    <label class="col-form-label">Modelo:</label>
                                    <input required="" type="text"   value="" id="idNombre"  name="apellidos"  class="form-control" aria-describedby="sizing-addon3" >
                                </div>
                          
                                     <div class="form-group" >
                                    <label class="col-form-label">Color:</label>
                                    <input required="" type="color"   value="" id="idNombre"  name="email"  class="form-control" aria-describedby="sizing-addon3" >
                                </div>
                            <div class="form-group">
                                    <label class="col-form-label">Fecha:</label>
                                    <input required="" type="date"   value="" id="idNombre"  name="fecha"  class="form-control" aria-describedby="sizing-addon3" >
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Telefono:</label>
                                    <input required=""  type="text"  name="telefono" id="itelefono" class="form-control" aria-describedby="sizing-addon3">
                                    </div>
                             </div>
                                       
                                         <div class="form-group center-block" >   
                                <input type="submit"   value="Aceptar" class="btn btn-success">
                                <input type="submit"   value="Cancelar" class="btn btn-primary" data-dismiss="modal" aria-label="Close" >
                            </div>
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
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p style="color: black;">Modificar Cliente  <i class="pe-7s-tools"></i></p>
                    </div>
                      <form method="post" action="app-personal.php">
                    <div class="modal-body">
                            <input type="hidden" name="modificarPersonal"  value="1">
                                <input type="hidden" name="idP" id="idP" value="">
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Nombre:</label>
                                    <input required="" type="text"   value="" id="idNombre"  name="nombre"  class="form-control" aria-describedby="sizing-addon3" >
                                </div>
                                
                                <div class="form-group">
                                    <label for="" class="col-form-label">Apellidos:</label>
                                    <input required="" type="text" value="" id="" name="apellidos" class=" form-control" aria-describedby="sizing-addon3">
                                </div>
                            <div class="form-group ">
                                <label for="proveedor" class="col-form-label">Email:</label>
                                <input required=""  type="email"  name="puesto" id="idPuesto" class="form-control" aria-describedby="sizing-addon3">
                                    </div>
                            <div class="form-group ">
                                <label for="cantidad" class="col-form-label">Numero de telefono:</label>
                                <input required=""  type="tel"  name="puesto" id="idPuesto" class="form-control" aria-describedby="sizing-addon3">
                                    </div>
                             </div>
                              <div class="modal-footer" >   
                                <input type="submit"   value="Aceptar" class="btn btn-success">
                                <input type="submit"   value="Cancelar" class="btn btn-primary" data-dismiss="modal" aria-label="Close" >
                            </div>
                      </form>
                    </div>
                </div>
            </div>
    <!--Codigo para la ventana emergente de eliminar-->
    <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: #DF3C04;  ">
                        <button type="button" style="color: #ffffff;" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p style="color: #ffffff;">Eliminar Cliente  <i class="pe-7s-trash"></i></p>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="app-personal.php">
                            <input type="hidden" name="modificarPersonal"  value="1">
                                <input type="hidden" name="idP" id="idP" value="">
                            <p>¿Desea realmente eliminar a este cliente?</p>
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
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/chartist.min.js"></script>
<script src="assets/js/bootstrap-notify.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
</html>
