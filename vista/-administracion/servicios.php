<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Servicios</title>
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
                        <li class="active">
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
                                <i class="pe-7s-user"></i>
                                <p>Inventario</p>
                            </a>
                        </li>
                        <li>
                            <a href="washer.php">
                                <i class="pe-7s-user"></i>
                                <p>Lavadores</p>
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
                    <a class="navbar-brand" href="#">Ver Servicios</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>Opciones	<b class="caret"></b>						</p>
                              </a>
                              <ul class="dropdown-menu">   
                                <li class="divider"></li>
                                <li><a href="index.php">Salir</a></li>
                              </ul>
                        </li>	
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                               <a href="administracion-inicio.html">
                                   <p>Inicio</p>
                            </a>
                        </li>
                </div>
            </div>
        </nav>
                     <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Servicios</h4>
                                <p class="category">Tabla de Servicios guardados.</p>
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
                                        	<td><a href="#" style="color: red;">Eliminar</a> <a href="#">Modificar</a></td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>Alejandro Mendez Reyes</td>
                                        	<td>Gustavo Gadiel Mendoza Paredes</td>
                                        	<td>$545.00</td>
                                        	<td><a href="#" style="color: red;">Eliminar</a> <a href="#">Modificar</a></td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                                <td>Rocio Bautista Hernadez</td>
                                                <td>Roberto Moron Gonzales</td>
                                                <td>$545.00</td>
                                        	<td><a href="#" style="color: red;">Eliminar</a> <a href="#">Modificar</a></td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>David Gonzales Perez</td>
                                                <td>Pancracia Gutierrez Gimenez</td>
                                                <td>$432.00</td>
                                        	<td><a href="#" style="color: red;">Eliminar</a> <a href="#">Modificar</a></td>
                                        </tr>
                                        <tr>
                                        	<td>5</td>
                                        	<td>Juan Manuel Hernadez Gonzales</td>
                                        	<td>Omar Alexis Gutirres Gonzales</td>
                                        	<td>$4564.00</td>
                                        	<td><a href="#" style="color: red;">Eliminar</a> <a href="#">Modificar</a></td>
                                        </tr>
                                        <tr>
                                        	<td>6</td>
                                        	<td>Miguel Lopez Cardenas</td>
                                        	<td>Josefina Gutierrez Perez</td>
                                        	<td>$435.00</td>
                                                <td><a href="#" style="color: red;">Eliminar</a> <a href="#">Modificar</a></td>
                                     
                                        </tr>
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
</body>
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/chartist.min.js"></script>
<script src="assets/js/bootstrap-notify.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
</html>