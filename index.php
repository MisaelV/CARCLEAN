<!DOCTYPE html>
<?php
include_once './modelo/BD.php';
include_once './modelo/modelo-pagina/modelo-pagina.php';
include_once './controlador/controlador-pagina/controlador-pagina.php';
/**
  INICIALIZA CONTROLADOR
 */
$controlador = new controladorPagina();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CARECLEAN</title>
        <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
        <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="vista/page/css/jquery.bxslider.css">
        <link rel="stylesheet" type="text/css" href="vista/page/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="vista/page/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="vista/page/css/animate.css">
        <link rel="stylesheet" type="text/css" href="vista/page/css/style.css">

    </head>

    <body>
        <!--#025A9  Color de página-->
        <div class="loader"></div>
        <div id="myDiv">
            <!--HEADER-->
            <div class="header">
                <div class="bg-color">
                    <header id="main-header">
                        <nav class="navbar navbar-default navbar-fixed-top">
                            <div class="container">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <!-- Logo de la pagina-->
                                    <a class="navbar-brand" href="#">CAR<span class="logo-dec">CLEAN</span></a>
                                    <!---->
                                </div>
                                <!-- Barra de menu general, que enlaza a diferentes paginas del proyecto o externas.-->
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a href="#main-header">INICIO</a></li>
                                        <li class=""><a href="#servicios">SERVICIOS</a></li>
                                        <li class=""><a href="#beneficios">Beneficios</a></li>
                                        <li class=""><a href="#modalIniciarSesion" data-toggle="modal" >Inicar Sesion</a></li>
                                    </ul>
                                </div>
                                <!---->
                            </div>
                        </nav>
                    </header>
                    <!-- SLOGAN DE LA PAGINA "CARECLEAN"-->



                    <div class="wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="banner-info text-center wow fadeIn delay-05s">                                 
                                    <!--SLAIDER DE IMAGENES QUE REPRESENTEN EL TRABAJO O SERVICIOS OFRECIDOS POR LA EMPRESA RECIENTEMENTE-->
                                    <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
                                        <div class="container">
                                            <div class="row">

                                                <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
                                                    <!-- Overlay -->
                                                    <div class="overlay"></div>

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner">
                                                        <div class="item slides active">
                                                            <div class="slide-1"></div>
                                                            <div class="hero">
                                                                <hgroup>
                                                                    <h1 >CON CARCLEAN SIEMPRE TENDRÁS TU AUTO LIMPIO, DESDE LA COMODIDAD DE TU HOGAR U OFICINA.</h1>        

                                                                </hgroup>

                                                            </div>
                                                        </div>
                                                        <div class="item slides">
                                                            <div class="slide-2"></div>
                                                            <div class="hero">        
                                                                <hgroup>
                                                                    <h1>¡OBTEN UN DESCUENTO EN TU PRIMER SERVICIO DE AUTOLAVADO!</h1>
                                                                    <h3>La próxima vez que lavemos tu auto, asegúrate de pedir una tarjeta de miembro del Club de descuentos.</h3>
                                                                </hgroup>       

                                                            </div>
                                                        </div>
                                                        <div class="item slides">
                                                            <div class="slide-3"></div>
                                                            <div class="hero">        
                                                                <hgroup>
                                                                    <h1>¡ACUMULA 10 LAVADAS Y LA SIGUIENTE ES GRATIS!</h1>
                                                                </hgroup>

                                                            </div>
                                                        </div>
                                                        <div class="item slides">
                                                            <div class="slide-3"></div>
                                                            <div class="hero">        
                                                                <hgroup>
                                                                    <h1>¡NUESTRO LAVADO DE AUTOS TIENE UNA VARIEDAD DE SERVICIOS DE ALTA CALIDAD QUE LE ENCANTARÁ A SU AUTOMÓVIL (Y SU BILLETERA)!</h1>
                                                                </hgroup>

                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>

                                                <!--boton de registro-->       
                                                <div class="brn-btn">
                                                    <a  class=" btn btn-more" href="#modalRegistrarse" data-toggle="modal" > Registrarme</a>
                                                </div>

                                                </section>                                     
                                            </div>

                                        </div>
                                        <div class="overlay-detail">
                                            <a href="#feature"><i class="fa fa-angle-down"></i></a>
                                        </div>                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---->
                    <!-- APARTADO DE SERVICIOS  DE LA PAGINA -->
                    <section id="servicios" class="section-padding wow fadeIn delay-05s">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h2 class="service-title pad-bt15">Nuestros servicios</h2>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="wrap-item text-center">
                                        <div class="item-img">
                                            <!--ICONO REPRESENTATIVO DE EL SERVICIO OFRECIDO-->
                                            <img src="vista/page/ImagenesCW/Exterior.jpg">
                                        </div>
                                        <h3 class="pad-bt15">Lavado completo del exterior</h3>
                                        <p>Cuando conduce su automóvil sin una limpieza por mucho tiempo, no pasará mucho tiempo hasta que alguien escriba "Láveme" en él. Para evitar eso y hacer un mantenimiento adecuado para el aspecto de su auto, ¡asegúrese de lavar regularmente el exterior!.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="wrap-item text-center">
                                        <div class="item-img">
                                            <!--ICONO REPRESENTATIVO DE EL SERVICIO OFRECIDO-->
                                            <img src="vista/page/ImagenesCW/interiror.jpg">
                                        </div>
                                        <h3 class="pad-bt15">Lavado completo de interiores</h3>
                                        <p>Limpiar el interior de su vehículo es tan importante como hacer el mantenimiento exterior, si no más. Esto significa que cuando ha pasado demasiado tiempo desde la última vez que ordenó realizar una limpieza, ¡es hora de hacerlo ahora mismo!</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="wrap-item text-center">
                                        <div class="item-img">
                                            <!--ICONO REPRESENTATIVO DE EL SERVICIO OFRECIDO-->
                                            <img src="vista/page/ImagenesCW/encerado.jpg">
                                        </div>
                                        <h3 class="pad-bt15">Encerado</h3>
                                        <p>Cuando hablamos de cuidar adecuadamente su vehículo, los detalles automáticos vienen a la mente de inmediato. Es una de las partes más importantes de este servicio de cuidado del automóvil y está diseñada para hacer que la superficie de su coche sea nítida y bien pulida, ¡tan brillante como brillante!</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </section>
                    <!---->

                    <!--APARTADO DE BENEFICIOS-->
                    <section id="beneficios" class="section-padding wow fadeInUp delay-05s">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h2 class="service-title pad-bt15">Nuestros Beneficios</h2>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="service-item">
                                        <img src="vista/page/ImagenesCW/006-servicio-al-cliente.png">
                                        <h3>Reserva facil.</h3>
                                        <p>Lo primero es que tendrá que reservar una cita con nosotros.</p>

                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="service-item">
                                        <img src="vista/page/ImagenesCW/007-mantenimiento.png">
                                        <h3>Perfecto Servicio</h3>
                                        <p>Cuando su auto ya esté en nuestras manos, todo lo que tendrá que hacer es esperar un poco hasta que quede todo brillante y limpio.</p>

                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="service-item">
                                        <img src="vista/page/ImagenesCW/005-servicio.png">
                                        <h3>Servicios adicionales</h3>
                                        <p>Además de proporcionar los mejores servicios de lavado exterior e interior a domicilio. ¡También ofrecemos encerado!</p>

                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="service-item">
                                        <img src="vista/page/ImagenesCW/004-etiqueta-del-precio.png">
                                        <h3>Precios increibles</h3>
                                        <p>
                                            Con todos nuestros servicios siendo realmente de primera categoría, aquí también está la última alegría: ¡El mejor precio!.</p>                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!---->

                    <!--APARTADO DE CONTACTO-->
                    <section id="contact" class="service">
                        <div class="container">
                            <div class="row">

                                <div class="col-md-4">

                                </div>
                                <div class="col-md-4">                                  
                                    <div class="col-md-2">
                                        <div class="circulo"><i class="fab fa-facebook-square"></i></div>                            
                                    </div>
                                    <div class="col-md-2">
                                        <div class="circulo"><i class="fab fa-twitter"></i></div>                            
                                    </div>

                                    <div class="col-md-2">
                                        <div class="circulo"><i class="fab fa-instagram"></i></div>                            
                                    </div>
                                </div>
                                <div class="col-md-4">

                                </div>
                                <footer id="footer">
                                    <div class="container">
                                        <div class="row text-center">

                                        </div>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </section>
                    <!---->
                    <!--APARTADO DE MODALES -->
                </div>
                <div class="modal fade" id="modalIniciarSesion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background: #0F76Ca  ;  ">
                                <button type="button" style="color: #ffffff;" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <p style="color: #ffffff;">Inicio de sesion  <i class="pe-7s-plus"></i></p>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="app-personal.php">
                                    <input type="hidden" name="inicioSesion"  value="1">
                                    <input type="hidden" name="idP" id="idP" value="">
                                    <div class="container aspirante">
                                        <div class="row" style="color: red;">
                                            <div class="form-group" style="width:400px;">
                                                <label>Usuario:</label>                                                
                                                <input required="" type="text"   value="" id="idNombre"  name="nombre"  class="form-control" aria-describedby="sizing-addon3" style="border-color: black; color: black" >
                                            </div>
                                            <div class="form-group "style="width:400px;">
                                                <label>Contraseña:</label>
                                                <input required=""  type="text"  name="contraseña" id="idContraseña" class="form-control" aria-describedby="sizing-addon3"style="border-color: black; color: black">
                                            </div>
                                        </div>
                                        <div class="form-group center-block" >   
                                            <input type="submit"   value="Iniciar secion" class="btn btn-success" >
                                            <input type="submit"   value="Cancelar" class="btn btn-primary" data-dismiss="modal" aria-label="Close" >
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
                </body>
                <script src="vista/page/js/jquery.min.js"></script>
                <script src="vista/page/js/jquery.easing.min.js"></script>
                <script src="vista/page/js/bootstrap.min.js"></script>
                <script src="vista/page/js/wow.js"></script>
                <script src="vista/page/js/jquery.bxslider.min.js"></script>
                <script src="vista/page/js/custom.js"></script>
                <script src="vista/page/contactform/contactform.js"></script>

                </body>
                </html>
