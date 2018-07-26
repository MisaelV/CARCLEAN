<?php 
include_once '../../modelo/BD.php';
include_once '../../modelo/modelo-administracion/modelo-administracion.php';
include_once '../../controlador/controlador-administracion/controlador-administracion.php';
$controlador= new controladorAdministracion();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Washer's</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/animate.min.css" rel="stylesheet"/>
        <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
        <link href="assets/css/demo.css" rel="stylesheet" />
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.css" rel="stylesheet">
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
                        <li>
                            <a href="inventario.php">
                                <i class="pe-7s-albums"></i>
                                <p>Inventario</p>
                            </a>
                        </li>
                        <li class="active">
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
                            <a class="navbar-brand" href="#">Ver Washer's</a>
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
                                        <h4 class="title">Washer's</h4>
                                        <p class="category">Tabla de Washer's.</p>
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
                                               <?php 
                                               echo $controlador->consultarLavador();
                                               ?>
                                                   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer" style="background-color: #515151 ;" >
                    <div class="container-fluid" >
                        <p class="copyright pull-right">
                            &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">CarClean</a>
                        </p>
                    </div>
                </footer>
            </div>
        </div>

        <!--Inicia modal agregar -->
        <div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: #025A9B  ;  ">
                        <button type="button" style="color: #ffffff;" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p style="color: #ffffff;">Agregar Washer  <i class="pe-7s-plus"></i></p>
                    </div>
                    <form method="post" action="washer.php" enctype="multipart/form-data">
                        <div class="modal-body ">
                            <input type="hidden" name="agregarWasher"  value="1">
                            <div class="form-group col-lg-12">
                                <label for="name" class="col-form-label" >Nombre Completo:</label>
                                <input required="" type="text"   value="" id="wNombre"  name="nombre"  class="form-control" aria-describedby="sizing-addon3" >
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="year old" class="col-form-label">Fecha Nacimiento:</label>
                                <input required="" type="date"   value="" id="wNacimiento"  name="fnacimiento"  class="form-control" aria-describedby="sizing-addon3" >
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="telefone" class="col-form-label">Teléfono cel:</label>
                                <input required="" type="tel"   value="" id="wTelefono"  name="telefono"  class="form-control" aria-describedby="sizing-addon3" >
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="grade" class="col-form-label">Escolaridad:</label>
                                <select class="form-control" name="escolaridad">
                                    <option value="Primaria incompleta" selected="selected">Primaria incompleta</option>
                                    <option value="Primaria completa">Primaria completa</option>
                                    <option value="Secundaria incompleta">Secundaria incompleta</option>
                                    <option value="Secundaria completa">Secundaria completa</option>
                                    <option value="Preparatoria incompleta">Preparatoria incompleta</option>
                                    <option value="Preparatoria completa">Preparatoria completa</option>
                                    <option value="Profesional">Profesional</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6" >
                                <label for="direction" class="col-form-label">Dirección:</label>
                                <input required="" type="text"   value="" id="idNombre"  name="direccion"  class="form-control" aria-describedby="sizing-addon3" >
                            </div>
                            <div class="form-group col-lg-6" >
                                <label for="email" class="col-form-label">Email:</label>
                                <input required="" type="email"   value="" id="idNombre"  name="email"  class="form-control" aria-describedby="sizing-addon3" >
                            </div> 
                                   <div class="form-group col-lg-6">
                                <label for="grade" class="col-form-label">Estado civil:</label>
                                <select class="form-control" name="estadoCivil">
                                    <option value="Soltero" selected="selected">Soltero</option>
                                    <option value="Casado">Casado</option>
                                    <option value="Divorciado">Divorciado</option>
                                    <option value="Viudo">Viudo</option>
                                </select>
                            </div>
                          <div class="form-group">
                                  <label>Referencia personal 1:</label>
                                <div class="fileinput fileinput-new col-md-12 " data-provides="fileinput">
                                    <span class="btn btn-primary btn-file"><span class="pe-7s-copy-file"></span><input type="file" name="referencia1" /></span>
                                    <span class="fileinput-filename"></span><span class="fileinput-new">No se escogió archivo</span>
                                </div>
                            </div>
                            <div class="form-group "> 
                                  <label>Referencia personal 2:</label>
                                <div class="fileinput fileinput-new col-md-12" data-provides="fileinput">
                                    <span class="btn btn-primary btn-file"><span class="pe-7s-copy-file"></span><input type="file" name="referencia2"/></span>
                                    <span class="fileinput-filename"></span><span class="fileinput-new">No se escogió archivo</span>
                                </div>
                            </div>  
                            <div class="form-group">
                                  <label>Identificación:</label>
                                <div class="fileinput fileinput-new col-md-12" data-provides="fileinput">
                                    <span class="btn btn-primary btn-file"><span class="pe-7s-copy-file"></span><input type="file" name="ine"/></span>
                                    <span class="fileinput-filename"></span><span class="fileinput-new">No se escogió archivo</span>
                                </div>
                            </div>
                            <div class="form-group"> 
                                  <label>Comprobante domiciliario:</label>
                                <div class="fileinput fileinput-new col-md-12" data-provides="fileinput">
                                    <span class="btn btn-primary btn-file"><span class="pe-7s-copy-file"></span><input type="file" name="comprobante"/></span>
                                    <span class="fileinput-filename"></span><span class="fileinput-new">No se escogió archivo</span>
                                </div>
                            </div> 
                        </div>
                        <br>
                        <div class="modal-footer ">
                            <input type="submit"   value="Aceptar" class="btn btn-success">
                            <input type="submit"   value="Cancelar" class="btn btn-primary" data-dismiss="modal" aria-label="Close" >
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Termina modal agregar -->
        
        <!--Inicia modal Modificar-->
        <div class="modal fade" id="modalModificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: #85099B;  ">
                        <button type="button" style="color: #ffffff;" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p style="color: #ffffff;">Modificar Washer <i class="pe-7s-plus"></i></p>
                    </div>
                    <form method="post" action="app-personal.php">
                        <div class="modal-body">
                            <input type="hidden" name="modificarPersonal"  value="1">
                            <input type="hidden" name="idP" id="idP" value="">
                            <div class="form-group">
                                <label for="name" class="col-form-label" >Nombre Completo:</label>
                                <input required="" type="text"   value="" id="idNombre"  name="nombre"  class="form-control" aria-describedby="sizing-addon3" >
                            </div>
                            <div class="form-group">
                                <label for="year old" class="col-form-label">Edad:</label>
                                <input required="" type="number"   value="" id="idNombre"  name="edad"  class="form-control" aria-describedby="sizing-addon3" >
                            </div>
                            <div class="form-group">
                                <label for="telefone" class="col-form-label">Teléfono cel:</label>
                                <input required="" type="tel"   value="" id="idNombre"  name="telefono"  class="form-control" aria-describedby="sizing-addon3" >
                            </div>
                            <div class="form-group">
                                <label for="grade" class="col-form-label">Escolaridad:</label>
                                <select class="form-control" name="departamento">
                                    <option value="Primaria incompleta" selected="selected">Primaria incompleta</option>
                                    <option value="Primaria completa">Primaria completa</option>
                                    <option value="Secundaria incompleta">Secundaria incompleta</option>
                                    <option value="Secundaria completa">Secundaria completa</option>
                                    <option value="Preparatoria incompleta">Preparatoria incompleta</option>
                                    <option value="Preparatoria completa">Preparatoria completa</option>
                                    <option value="Profesional">Profesional</option>
                                </select>
                            </div>
                            <div class="form-group" >
                                <label for="direction" class="col-form-label">Dirección:</label>
                                <input required="" type="text"   value="" id="idNombre"  name="direccion"  class="form-control" aria-describedby="sizing-addon3" >
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-form-label">Email:</label>
                                <input required="" type="email"   value="" id="idNombre"  name="email"  class="form-control" aria-describedby="sizing-addon3" >
                            </div> 
                            <div class="form-group">
                                <label>Referencia personal 1:</label>
                                <label  class=" col-12 btn btn-primary center-block" >
                                    Subir Archivo (JPG o PNG)<i class="pe-7s-copy-file"></i><input  type="file" class=" col-12 btn btn-facebook center-block"  style = "display: none;" id="files" name="referencia1">
                                </label>
                            </div>
                            <div class="form-group" >
                                <label>Referencia personal 2:</label>
                                <label  class=" col-12 btn btn-primary center-block" >
                                    Subir Archivo (JPG o PNG)<i class="pe-7s-copy-file"></i><input  type="file" class=" col-12 btn btn-facebook center-block"  style = "display: none;" id="files" name="referencia2">
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Identificación:</label>
                                <label  class=" col-12 btn btn-primary   center-block" >
                                    Subir Archivo (JPG o PNG)<i class="pe-7s-copy-file"></i><input  type="file"  style = "display: none;" id="files" name="ine">
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Comprobante domiciliario:</label>
                                <label  class=" col-12 btn btn-primary center-block" >
                                    Subir Archivo (JPG o PNG)<i class="pe-7s-copy-file"></i><input  type="file" class=" col-12 btn btn-facebook center-block"  style = "display: none;" id="files" name="comprobante">
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit"   value="Aceptar" class="btn btn-success">
                            <input type="submit"   value="Cancelar" class="btn btn-primary" data-dismiss="modal" aria-label="Close" >
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Termina modal modificar -->
        
        <!--Inicia modal eliminar-->
        <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: #C80000  ;  ">
                        <button type="button" style="color: #ffffff;" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p style="color: #ffffff;">Eliminar washer  <i class="pe-7s-delete-user"></i></p>
                    </div>
                        <form method="post" action="app-personal.php">
                              <div class="modal-body">
                            <input type="hidden" name="modificarPersonal"  value="1">
                            <input type="hidden" name="idP" id="idP" value="">
                                    <p>¿Desea realmente elminar este lavador?</p>
                                <div class="modal-footer" >   
                                    <input type="submit"   value="Aceptar" class="btn btn-success">
                                    <input type="submit"   value="Cancelar" class="btn btn-primary" data-dismiss="modal" aria-label="Close" >
                                </div>
                            </div>
                              </div>
                        </form>
                    </div>
                </div>
        <!--Termina modal eliminar-->
    </body>
   
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/chartist.min.js"></script>
    <script src="assets/js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.js" type="text/javascript"></script>
</html>
