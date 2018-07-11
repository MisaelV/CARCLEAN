<!DOCTYPE html>
<?php
include_once './modelo/BD.php';/** se incluye la conexipon a la BD */
include_once './modelo/modelo-pagina/modelo-pagina.php';/** se incluye el modelo */
include_once './controlador/controlador-pagina/controlador-pagina.php';/** se incluye el controlador */
/**
  INICIALIZA CONTROLADOR
 */
$controlador = new controladorPagina();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CARCLEAN</title>
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
        <link  rel="stylesheet" type="text/css" href="settings/style-web/css.css">

    </head>

    <body>
        <!--#025A9B  Color de página-->
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
                                        <li class=""><a href="#beneficios">BENEFICIOS</a></li>
                                        <li class=""><a href="#Paquetes">PAQUETES</a></li>
                                        <li class=""><a href="#nosotros">NOSOTROS</a></li>
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
                    <!--APARTADO DE PAQUETES-->
                    <section id="Paquetes" class=" section-padding wow fadeInUp delay-05s fir-paquetes">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h2 class="service-title pad-bt15 " style="color:#0F76CC ">Paquetes</h2>
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12 paquete">
                                    <div class="">
                                        <h1>BASICO</h1>
                                        <h3>$100.00 MN</h3>
                                        <br>
                                        <ul>
                                            <li><span class="viñeta">•</span>Lavado y Aspirado</li>
                                            <br>
                                            <li><span class="viñeta">•</span>Secado con tela Micro-fibra</li>
                                            <br>                                            
                                            <li><span class="viñeta">•</span>Limpieza de tablero y consola central</li> 
                                            <br>
                                            <li><span class="viñeta">•</span>Eliminacion de olores en su totalidad</li>
                                            <br>
                                            <li><span class="viñeta">•</span>Tiempo maximo de espera 50 minutos</li>

                                        </ul>

                                    </div>

                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 paquete">
                                    <div class="service-item">
                                        <h1>OPTIMO</h1>
                                        <h3>$150.00 MN</h3>
                                        <br>
                                        <ul>
                                            <li><span class="viñeta">•</span>Lavado y Aspirado</li>
                                            <br>
                                            <li><span class="viñeta">•</span>Secado con tela Micro-fibra</li> 
                                            <br>
                                            <li><span class="viñeta">•</span>Limpieza de tablero y consola central</li>
                                            <br>
                                            <li><span class="viñeta">•</span>Terminado de llantas y rines a mano</li>
                                            <br>
                                            <li><span class="viñeta">•</span>Eliminacion de olores en su totalidad</li>
                                            <br>                                            
                                            <li><span class="viñeta">•</span>Tiempo Maximo 40 Minutos</li>


                                        </ul>

                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 paquete">
                                    <div class="service-item">
                                        <h1>PRO</h1>
                                        <h3>$350.00 MN</h3>
                                        <br>
                                        <ul>
                                            <li><span class="viñeta">•</span>Lavado y Aspirado</li>
                                            <br>
                                            <li><span class="viñeta">•</span>Secado con tela Micro-fibra</li>
                                            <br>
                                            <li><span class="viñeta">•</span>Aplicacion de Cera liquida en el cecado</li>
                                            <br>
                                            <li><span class="viñeta">•</span>Limpieza de tablero y consola central a detalle</li>
                                            <br>
                                            <li><span class="viñeta">•</span>Terminado de llantas y rines a mano</li>
                                            <br>
                                            <li><span class="viñeta">•</span>Eliminacion de olores en su totalidad</li>
                                            <br>
                                            <li><span class="viñeta">•</span>Hidratacion de plassticos y asientos de piel</li>
                                            <br>
                                            <li><span class="viñeta">•</span>Tiempo Maximo 30 Minutos</li>


                                        </ul>

                                    </div>
                                </div>                               
                            </div>
                        </div>
                    </section>
                    <!---->
                    <!--APARTADO MISION VISION Y VALORES.-->
                    <section id="nosotros" class="section-padding wow fadeInUp delay-05s">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h2 class="service-title pad-bt15">POLITICAS</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="service-item">                                        
                                            <h3>Mision.</h3>


                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="service-item">                                        
                                            <h3>Vision.</h3>


                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="service-item">                                        
                                            <h3>Valores.</h3>


                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </section>
                    <!---->
                    <!--APPI google.-->
                    <section id="appi" class="section-appi delay-05s">                       

                        <div id="googleMap" style="width:100%;height:350px;"></div>

                        <script>
                            function myMap() {
                                var mapProp = {
                                    center: new google.maps.LatLng(18.493382, -97.412736),
                                    zoom: 15
                                };
                                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                            }
                        </script>

                        <script src="https://maps.googleapis.com/maps/api/js?AIzaSyBEhFN-RCL131EKWGvxb6i4zifjb-fgt-4&callback=myMap"></script>
                    </section>
                    <!---->
                    <!--APARTADO DE CONTACTO "FOOTER"-->
                    <section id="contact" class="caja-desc wow fadeInUp delay-05s">
                        <div class="container">
                            <div class="row">                        
                                <!--INFORMACION DE CONTACTO -->
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="loction-info">
                                        <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Callejón Benito Juárez, #430, Centro, C.P.75700<br>Tehuacan, Puebla, Mexico</p>
                                        <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>victor.misael@gmai..com</p>
                                        <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+52 238 102 3760</p>
                                    </div>
                                </div>
                                <!--APARTADO PARA EL FORMULARIO -->
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="contact-form">                                
                                        <div id="errormessage"></div>
                                        <form action="" method="post" role="form" class="contactForm">
                                            <div class="col-md-8 ">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Ingresa nombre completo " />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>                                    
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Ingresa E-mail" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" rows="3" data-rule="required" data-msg="Ingresa comebtario" placeholder="Mensaje" style=" border: solid 1px #0F76CC; color: #efefef!important"></textarea>
                                                    <div class="validation"></div>
                                                </div>
                                                <button type="submit" class="boton  btn-submit">Enviar</button>
                                            </div>
                                        </form>

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


                </div>
                <!--APARTADO DE MODALES -->
                <div class="modal fade" id="modalIniciarSesion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="b-modal modal-content">
                            <div class="modal-header colorHeader">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <p class="log">Login</p>
                            </div>
                            <div class="modal-body colorContainer">
                                <form method="post" action="">
                                    <div class="container ">
                                        <div class="row center-block">
                                            <div class=" form-group" style="width:400px;">
                                                <label>Usuario:</label>                                                
                                                <input required="" type="text"   value="" id="idNombre"  name="nombre"  class=" txt form-control" aria-describedby="sizing-addon3" >
                                            </div>
                                            <div class=" form-group "style="width:400px;">
                                                <label>Contraseña:</label>
                                                <input required=""  type="text"  name="contraseña" id="idContraseña" class=" txt form-control" aria-describedby="sizing-addon3">
                                            </div>
                                            <div class="form-group col-md-12" style="padding-left: 0px;" >   
                                                <button class="inicio-sesion"><b>Inicar sesion</b> </button>
                                            </div>
                                        </div>                                        
                                        <h5 class="o">Ó</h5>
                                        <div class="row center-block">                                           
                                            <button class="boton-facebook"><b>Inicar sesion con Facebook</b> </button>
                                        </div>
                                        <br>
                                        <div class="row center-block">                                           
                                            <button class="boton-google"><b>Inicar sesion con Google</b></button>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                            <div class=" registro-g modal-header ">                                
                                <h5>¿No tienes una cuenta? <span class="registro">Registrate</span></h5>
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
