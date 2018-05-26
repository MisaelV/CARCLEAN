<!DOCTYPE html>
<?php
include_once './modelo/BD.php';
include_once './modelo/modelo-pagina/modelo-pagina.php';
include_once './controlador/controlador-pagina/controlador-pagina.php';
/**
INICIALIZA CONTROLADOR
 */
$controlador= new controladorPagina();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Baker Bootstrap Theme</title>
        <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
        <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
        <link rel="stylesheet" type="text/css" href="vista/page/css/jquery.bxslider.css">
        <link rel="stylesheet" type="text/css" href="vista/page/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="vista/page/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="vista/page/css/animate.css">
        <link rel="stylesheet" type="text/css" href="vista/page/css/style.css">
        <!-- =======================================================
          Theme Name: Baker
          Theme URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
          Author: BootstrapMade.com
          Author URL: https://bootstrapmade.com
        ======================================================= -->
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
                                    <a class="navbar-brand" href="#">CARE<span class="logo-dec">CLEAN</span></a>
                                    <!---->
                                </div>
                                <!-- Barra de menu general, que enlaza a diferentes paginas del proyecto o externas.-->
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a href="#main-header">Home</a></li>
                                        <li class=""><a href="vista/page/">About</a></li>
                                        <li class=""><a href="#service">Services</a></li>
                                        <li class=""><a href="#contact">Contact Us</a></li>
                                        <li class=""><a href="#contact">Sing in</a></li>
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
                                    <h1 class="bnr-title">We are CARECLEAN</h1>
                                    <h2 class="bnr-sub-title">Our Recent Works</h2>
                                    <!--SLAIDER DE IMAGENES QUE REPRESENTEN EL TRABAJO O SERVICIOS OFRECIDOS POR LA EMPRESA RECIENTEMENTE-->
                                    <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
                                        <div class="container">
                                            <div class="row">

                                                <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                                                    <figure>
                                                        <img src="vista/page/ImagenesCW/02.jpg" class="img-responsive">
                                                        <figcaption>
                                                            <h2>Project For Everyone</h2>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                                                    <figure>
                                                        <img src="vista/page/ImagenesCW/03.jpg" class="img-responsive">
                                                        <figcaption>
                                                            <h2>Project For Everyone</h2>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                                                    <figure>
                                                        <img src="vista/page/ImagenesCW/04.jpg" class="img-responsive">
                                                        <figcaption>
                                                            <h2>Project For Everyone</h2>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                                                    <figure>
                                                        <img src="vista/page/ImagenesCW/05.jpg" class="img-responsive">
                                                        <figcaption>
                                                            <h2>Project For Everyone</h2>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                                                    <figure>
                                                        <img src="vista/page/ImagenesCW/06.jpg" class="img-responsive">
                                                        <figcaption>
                                                            <h2>Project For Everyone</h2>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
                                                    <figure>
                                                        <img src="vista/page/ImagenesCW/08.jpg" class="img-responsive">
                                                        <figcaption>
                                                            <h2>Project For Everyone</h2>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </div>
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
            <section id="feature" class="section-padding wow fadeIn delay-05s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="service-title pad-bt15">What We Do?</h2>
                            <p class="sub-title pad-bt15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore magna aliqua.</p>
                            <hr class="bottom-line">
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="wrap-item text-center">
                                <div class="item-img">
                                    <!--ICONO REPRESENTATIVO DE EL SERVICIO OFRECIDO-->
                                    <img src="vista/page/ImagenesCW/003-lavado-de-coches_1.png">
                                </div>
                                <h3 class="pad-bt15">Lavado</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="wrap-item text-center">
                                <div class="item-img">
                                    <!--ICONO REPRESENTATIVO DE EL SERVICIO OFRECIDO-->
                                    <img src="vista/page/ImagenesCW/004-barita-magica_1.png">
                                </div>
                                <h3 class="pad-bt15">Encerado</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="wrap-item text-center">
                                <div class="item-img">
                                    <!--ICONO REPRESENTATIVO DE EL SERVICIO OFRECIDO-->
                                    <img src="vista/page/ImagenesCW/001-soltar_1.png">
                                </div>
                                <h3 class="pad-bt15">Limpieza</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!---->
            
            <!--APARTADO DE COMENTARIOS SOBRE LA EXPERIENCIA DE NUESTROS SERVCICIOS -->
            <section id="testimonial" class="wow fadeInUp delay-05s">
                <div class="bg-testicolor">
                    <div class="container section-padding">
                        <div class="row">
                            <div class="testimonial-item">
                                <ul class="bxslider">
                                    <li>
                                        <blockquote>
                                            <img src="vista/page/img/thumb.png" class="img-responsive">
                                            <p>Come a day there won't be room for naughty men like us to slip about at all. This job goes south, there well may not be another. </p>
                                        </blockquote>
                                        <small>Shaun Paul, Client</small>
                                    </li>
                                    <li>
                                        <blockquote>
                                            <img src="vista/page/img/thumb.png" class="img-responsive">
                                            <p>So here is us, on the raggedy edge. Don't push me, and I won't push you. </p>
                                        </blockquote>
                                        <small>Marry Smith, Client</small>
                                    </li>
                                    <li>
                                        <blockquote>
                                            <img src="vista/page/img/thumb.png" class="img-responsive">
                                            <p>Come a day there won't be room for naughty men like us to slip about at all. This job goes south, there well may not be another.</p>
                                        </blockquote>
                                        <small>Vivek Singh, Client</small>
                                    </li>
                                    <li>
                                        <blockquote>
                                            <img src="vista/page/img/thumb.png" class="img-responsive">
                                            <p>So here is us, on the raggedy edge. Don't push me, and I won't push you.</p>
                                        </blockquote>
                                        <small>John Doe, Client</small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!---->
            
            <!--APARTADO DE CONTACTO "FOOTER"-->
            <section id="contact" class="section-padding wow fadeInUp delay-05s">
                <div class="container">
                    <div class="row">
                        <!--APARTADO PARA MANTENERCE EN CONTACTO -->
                        <div class="col-md-12 text-center white">
                            <h2 class="service-title pad-bt15">Keep in touch with us</h2>
                            <p class="sub-title pad-bt15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore magna aliqua.</p>
                            <hr class="bottom-line white-bg">
                        </div>
                        <!--INFORMACION DE CONTACTO -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="loction-info white">
                                <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>A99 Adam Street<br>Texas, TX 555072</p>
                                <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>info@baker.com</p>
                                <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+41 5787 2323</p>
                            </div>
                        </div>
                        <!--APARTADO PARA EL FORMULARIO -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-form">
                                <div id="sendmessage">Your message has been sent. Thank you!</div>
                                <div id="errormessage"></div>
                                <form action="" method="post" role="form" class="contactForm">
                                    <div class="col-md-6 padding-right-zero">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                            <div class="validation"></div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-submit">SEND NOW</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!---->
            
            <!--APARTADO DE DERECHOS RESERVADOS-->
            <footer id="footer">
                <div class="container">
                    <div class="row text-center">
                        <p>&copy; CARECLEAN Theme. All Rights Reserved.</p>
                        <div class="credits">
                            <!--
                              All the links in the footer should remain intact.
                              You can delete the links only if you purchased the pro version.
                              Licensing information: https://bootstrapmade.com/license/
                              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Baker
                            -->
                            Designed by <a href="#">Iovative Aplication</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!---->
        </div>
        <script src="vista/page/js/jquery.min.js"></script>
        <script src="vista/page/js/jquery.easing.min.js"></script>
        <script src="vista/page/js/bootstrap.min.js"></script>
        <script src="vista/page/js/wow.js"></script>
        <script src="vista/page/js/jquery.bxslider.min.js"></script>
        <script src="vista/page/js/custom.js"></script>
        <script src="vista/page/contactform/contactform.js"></script>

    </body>
</html>
