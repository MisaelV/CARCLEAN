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
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Title -->
        <title>Carclean</title>

        <!-- Favicon -->
        <link rel="icon" href="img/blanco1.png">

        <!-- Core Stylesheet -->
        <link href="style.css" rel="stylesheet">

        <!-- Responsive CSS -->
        <link href="css/responsive.css" rel="stylesheet">

    </head>

    <body>
        <!--  <div id="preloader">
            <div class="colorlib-load"></div>
        </div> -->
       

        <!-- ***** Header Area Start ***** -->
        <header class="header_area animated " style=" background-color: rgba(5, 68, 103,0.8 );" >
            <div class="container-fluid " >
                <div class="row align-items-center">
                    <!-- Menu Area Start -->
                    <div class="col-12 col-lg-10">
                        <div class="menu_area">
                            <nav class="navbar navbar-expand-lg navbar-light" >
                                <img src="img/blanco1.png" style="width:7%; height: 15%;"> 
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                                <!-- Menu Area -->
                                <div class="collapse navbar-collapse" id="ca-navbar">
                                    <ul class="navbar-nav ml-auto" id="nav">
                                        <li class="nav-item active"><a class="nav-link" href="#home">Inicio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#about">Nosotros</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#BENEFICIOS">Beneficios</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#VENTAJAS">Ventajas</a></li>                                                                        
                                    </ul>
                                    <div class="sing-up-button d-lg-none">
                                        <a href="customer/index.php">Iniciar sesión</a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- Signup btn -->
                    <div class="col-12 col-lg-2">
                        <div class="sing-up-button d-none d-lg-block">
                            <a href="customer/index.php">Iniciar sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->

        <!-- ***** Wellcome Area Start ***** -->
        <section class="wellcome_area clearfix" id="home" style=" background-color: #0C96D7;">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption d-none d-block well">           
                        FÁCIL, RÁPIDO Y DE ALTA CALIDAD!
                    </div>
               <img class="d-block w-100" src="img/Diapositiva1.JPG ">
                </div>
                 <div class="carousel-item">
                    <img class="d-block w-100" src="img/Diapositiva2.JPG ">
                     <div class="carousel-caption d-none d-block well">               
                    </div>
                </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/Diapositiva3.JPG ">
                     <div class="carousel-caption d-none d-block well">               
                    </div>
                </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/Diapositiva4.JPG ">
                </div>  <div class="carousel-item">
                    <img class="d-block w-100" src="img/Diapositiva5.JPG ">
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> 
            <div class="overlay-detail">
                <a href="#feature"><i class="fa fa-angle-down"></i></a>
            </div>                                        
        </div>          
            <!-- Welcome thumb -->
            <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.5s" >
                <img src="http://pluspng.com/img-png/mercedes-benz-png-2017-superbowl-amg-gt-coupe-gt-d-png-1440.png" alt="">
            </div>
        </section>
        <!-- ***** Wellcome Area End ***** -->

        <!-- ***** Special Area Start ***** -->
        <section class="special-area bg-white section_padding_100" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Section Heading Area -->
                        <div class="section-heading text-center">
                            <h2 style=" color: #0C96D7;">Nosotros</h2>

                            <h2 style="font-size:30px; color: #0C96D7">“No lavamos tu coche, te damos comodidad”</h2>
                            <div class="line-shape"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Single Special Area -->
                    <div class="col-12 col-md-4">
                        <div class="single-special text-center wow fadeInUp" data-wow-delay="0.8s">
                            <div class="single-icon">
                                <i class="ti-mobile" aria-hidden="true" style="color:#B20CD7;"></i>
                            </div>
                            <h4 style=" color: #0C96D7;">Tu auto siempre limpio desde la comodidad de tu casa u oficina.</h4>

                        </div>
                    </div>
                    <!-- Single Special Area -->
                    <div class="col-12 col-md-4">
                        <div class="single-special text-center wow fadeInUp" data-wow-delay="0.8s">
                            <div class="single-icon" >
                                <i  class="ti-ruler-pencil" aria-hidden="true" style="color: #0E7FB3;"></i>
                            </div>
                            <h4 style=" color: #0C96D7;">Contribuyes al cuidado del agua.</h4>

                        </div>
                    </div>
                    <!-- Single Special Area -->
                    <div class="col-12 col-md-4">
                        <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                            <div class="single-icon">
                                <i class="ti-settings" aria-hidden="true" style="color: #0E7FB3;"></i>
                            </div>
                            <h4 style=" color: #0C96D7;">Ahorras tiempo y dinero.</h4>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Special Description Area -->
            <div class="special_description_area mt-150">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="special_description_content">
                                <h2 style="font-size: 30px; color: #0C96D7;">CarClean es una empresa 100% Mexicana que nació con la finalidad de contribuir al cuidado del agua,  tiempo y ahorro de combustible brindando el más optimizado y revolucionado lavado de auto ecológico a domicilio.</h2>
                            </div>                            
                        </div>
                    </div>
                    <div class="row">                        
                        <div class="col-lg-6">
                            <div class="special_description_img">
                                <img src="https://static.wixstatic.com/media/8491cd_cf9b081686d841158f74392ae824cea8.png_srz_1382_659_85_22_0.50_1.20_0.00_png_srz" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5 ml-xl-auto">
                            <div class="special_description_content">                                
                                <p>Misión: Brindar el mejor servicio de auto lavado ecológico a domicilio, no desperdiciar agua, utilizar el negocio para inspirar e implementar soluciones para el problema ambiental.</p>
                                <p>Visión: Ser la empresa de auto lavado ecológico a domicilio preferido de todos. </p>
                                <p>Valores: Transparencia,  Trabajo en equipo, Responsabilidad, Lealtad, Honestidad, Confianza y seguridad.</p>
                                <div class="app-download-area">
                                    <div class="app-download-btn wow fadeInUp" data-wow-delay="0.2s">
                                        <!-- Google Store Btn -->
                                        <a href="#">
                                            <i class="fa fa-android"></i>
                                            <p class="mb-0"><span>available on</span> Google Store</p>
                                        </a>
                                    </div>
                                    <div class="app-download-btn wow fadeInDown" data-wow-delay="0.4s">
                                        <!-- Apple Store Btn -->
                                        <a href="#">
                                            <i class="fa fa-apple"></i>
                                            <p class="mb-0"><span>available on</span> Apple Store</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Special Area End ***** -->

        <!-- ***** Awesome Features Start ***** -->
        <section class="awesome-feature-area bg-white section_padding_0_50 clearfix" id="BENEFICIOS">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Heading Text -->
                        <div class="section-heading text-center">
                            <h2 style="color: #0C96D7;">Beneficios</h2>
                            <div class="line-shape"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Single Feature Start -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-feature">
                            <i class="ti-user" aria-hidden="true"></i>
                            <h5 style="color: #0C96D7;">¡PERFECTO SERVICIO!</h5>
                            <p>Cuando su auto ya esté en nuestras manos, todo lo que tendrá que hacer es esperar un poco hasta que quede todo brillante y limpio.
                            </p>
                        </div>
                    </div>
                    <!-- Single Feature Start -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-feature">
                            <i class="ti-pulse" aria-hidden="true"></i>
                            <h5 style="color: #0C96D7;">¡ACUMULA 10 LAVADAS Y LA SIGUIENTE ES GRATIS!</h5>
                            <p>Por cada 10 servicios pagados, CARCLEAN te regala un servicio totalmente gratis.</p>
                        </div>
                    </div>
                    <!-- Single Feature Start -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-feature">
                            <i class="ti-dashboard" aria-hidden="true"></i>
                            <h5 style="color: #0C96D7;">¡OBTEN UN DESCUENTO EN TU PRIMER SERVICIO!</h5>
                            <p>Solo regístrate con Facebook o tu correo electrónico y recibe un descuento en tu primera lavada.</p>
                        </div>
                    </div>
                    <!-- Single Feature Start -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-feature">
                            <i class="ti-palette" aria-hidden="true"></i>
                            <h5 style="color: #0C96D7;">PLAN CARCLEAN</h5>
                            <p>Con CARCLEAN podrá programar las lavadas de tu vehículo de todo un mes, así tendrás siempre tu coche limpio a la hora que lo necesites.</p>
                        </div>
                    </div>
                    <!-- Single Feature Start -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-feature">
                            <i class="ti-crown" aria-hidden="true"></i>
                            <h5 style="color: #0C96D7;">¡PRECIOS INCREÍBLES!</h5>
                            <p>Con todos nuestros servicios siendo realmente de primera categoría, aquí también está la última alegría. ¡El mejor precio!</p>
                        </div>
                    </div>
                    <!-- Single Feature Start -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-feature">
                            <i class="ti-headphone" aria-hidden="true"></i>
                            <h5 style="color: #0C96D7;">¡AYUDAS AL CUIDADO DEL AGUA!</h5>
                            <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ***** Awesome Features End ***** -->

        <!-- ***** Video Area Start ***** -->
        <div class="video-section" >
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Video Area Start -->
                        <div class="video-area" style="background-image: url(http://hogaressauce.com.mx/wp-content/uploads/2015/08/microfibra1-e1459199620289.jpg);">
                            <div class="video-play-btn">
                                <a href="https://www.youtube.com/watch?v=ClPqIZxcrpw" class="video_btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Video Area End ***** -->

        <!-- ***** Cool Facts Area Start ***** -->
        <section class="cool_facts_area " style="background-color: #0C96D7!important;">
            <div class="container" >
                <div class="row">                                      
                    <!-- Single Cool Fact-->
                    <div class="col-12 col-md-4 col-lg-4" >
                        <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                            <div class="counter-area">
                                <h3><span class="counter">120</span></h3>
                            </div>
                            <div class="cool-facts-content">
                                <i class="ion-happy-outline"></i>
                                <p>Clientes <br> Felices</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Cool Fact-->
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.6s">
                            <div class="counter-area">
                                <h3><span class="counter">40</span></h3>
                            </div>
                            <div class="cool-facts-content">
                                <i class="ion-person"></i>
                                <p>Cuentas <br>Activas</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Cool Fact-->
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.8s">
                            <div class="counter-area">
                                <h3><span class="counter">10</span></h3>
                            </div>
                            <div class="cool-facts-content">
                                <i class="ion-ios-star-outline"></i>
                                <p>Total <br>Aps</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Cool Facts Area End ***** -->

        <!-- ***** App Screenshots Area Start ***** -->
        <section class="app-screenshots-area bg-white section_padding_0_100 clearfix" id="comofunciona">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <!-- Heading Text  -->
                        <div class="section-heading">
                            <h2 style="color: #0C96D7;">¿Como funciona?</h2>
                            <div class="line-shape"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- App Screenshots Slides  -->
                        <div class="app_screenshots_slides owl-carousel">
                            <div class="single-shot">
                                <img src="img/scr-img/app-1.jpg" alt="">
                            </div>
                            <div class="single-shot">
                                <img src="img/scr-img/app-2.jpg" alt="">
                            </div>
                            <div class="single-shot">
                                <img src="img/scr-img/app-3.jpg" alt="">
                            </div>
                            <div class="single-shot">
                                <img src="img/scr-img/app-4.jpg" alt="">
                            </div>
                            <div class="single-shot">
                                <img src="img/scr-img/app-5.jpg" alt="">
                            </div>
                            <div class="single-shot">
                                <img src="img/scr-img/app-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** App Screenshots Area End *****====== -->

        <!-- ***** Pricing Plane Area Start *****==== -->
        <section class="pricing-plane-area section_padding_100_70 clearfix" id="servicios">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Heading Text  -->
                        <div class="section-heading text-center">
                            <h2 style="color: #0C96D7;">Servicios</h2>
                            <div class="line-shape"></div>
                        </div>
                    </div>
                </div>

                <div class="row no-gutters">
                    <div class="col-12 col-md-8 col-lg-4">
                        <!-- Package Price  -->
                        <div class="single-price-plan  active text-center">
                            <!-- Package Text  -->
                            <div class="package-plan" style="background-color: #0C96D7;">
                                <h5> EXPRESS </h5>
                                <div class=" d-flex justify-content-center">                                
                                    <h4 style="font-size: 20px;"><span>$</span>69.00 Auto/SUV</h4>                                                                    
                                </div>
                                <div class=" d-flex justify-content-center">                                

                                    <h4 style="font-size: 20px;"><span>$</span>85.00 Camioneta grande/Pick Up</h4>

                                </div>
                            </div>
                            <div class="package-description">
                                <p>Lavado de exterior.</p>
                                <p>Limpieza de neumáticos.</p>
                                <p></p>
                                <p></p>
                                <p></p>
                            </div>
                            <!-- Plan Button  -->
                            <div class="plan-button" >
                                <a href="#" style="background-color: #0C96D7;">Seleccionar Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-4">
                        <!-- Package Price  -->
                        <div class="single-price-plan  active text-center " >
                            <!-- Package Text  -->
                            <div class="package-plan" style="background-color: #0C96D7;">
                                <h5>MEDIO</h5>
                                <div class=" d-flex justify-content-center">                                      
                                    <h4 style="font-size: 20px;"><span>$</span>99 Auto/SUV</h4>                                    
                                </div>
                                <div class=" d-flex justify-content-center">                                      
                                    <h4 style="font-size: 20px;"><span>$</span>119 Camioneta Grande/Pick Up</h4>                                    
                                </div>
                            </div>
                            <div class="package-description">
                                <p>Lavado de exterior</p>
                                <p>Aspirado de interiores</p>
                                <p>Aspirado de cajuela</p>
                                <p>Limpieza de neumáticos</p>

                            </div>
                            <!-- Plan Button  -->
                            <div class="plan-button" >
                                <a href="#" style="background-color: #0C96D7;">Seleccionar Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-4">
                        <!-- Package Price  -->
                        <div class="single-price-plan active text-center">
                            <!-- Package Text  -->
                            <div class="package-plan"style="background-color: #0C96D7;">
                                <h5>Completo</h5>
                                <div class="d-flex justify-content-center">
                                    <span>$</span>
                                    <h4 style="font-size: 20px;">129.00 Auto/SUV</h4>
                                </div>
                                <div class="d-flex justify-content-center">

                                    <h4 style="font-size: 20px;"><span>$</span>139.00 Camioneta Grande/Pick Up</h4>
                                </div>
                            </div>
                            <div class="package-description">
                                <p>Lavado de exterior</p>
                                <p>Aspirado de cajuela</p>
                                <p>Aspirado de interiores</p>
                                <p>Limpieza de neumáticos</p>
                                <p>Aplicación de cera abrillantadora.</p>
                            </div>
                            <!-- Plan Button  -->
                            <div class="plan-button" >
                                <a href="#" style="background-color: #0C96D7;">Seleccionar Plan</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ***** Pricing Plane Area End ***** -->       
        <!-- ***** Our Team Area Start ***** -->
        <section class="our-Team-area bg-white section_padding_100_50 clearfix" id="VENTAJAS">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <!-- Heading Text  -->
                        <div class="section-heading">
                            <h2 style="color: #0C96D7;">Ventajas</h2>
                            <div class="line-shape"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-team-member">
                            <div class="member-image">
                                <img src="img/team-img/team-2.jpg" alt="">
                                <div class="team-hover-effects">
                                    <div class="team-social-icon">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="member-text">
                                <h4 style="color: #0C96D7;">En cualquier lugar</h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-team-member">
                            <div class="member-image">
                                <img src="img/team-img/team-3.jpg" alt="">
                                <div class="team-hover-effects">
                                    <div class="team-social-icon">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="member-text">
                                <h4 style="color: #0C96D7;">Cualquier tipo de auto</h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-team-member">
                            <div class="member-image">
                                <img src="img/team-img/team-4.jpg" alt="">
                                <div class="team-hover-effects">
                                    <div class="team-social-icon">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="member-text">
                                <h4 style="color: #0C96D7;">Precios accesibles</h4>                                
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-team-member">
                            <div class="member-image">
                                <img src="img/team-img/team-1.jpg" alt="">
                                <div class="team-hover-effects">
                                    <div class="team-social-icon">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="member-text">
                                <h4 style="color: #0C96D7;">Comodidad</h4>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-team-member">
                            <div class="member-image">
                                <img src="img/team-img/team-1.jpg" alt="">
                                <div class="team-hover-effects">
                                    <div class="team-social-icon">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="member-text">
                                <h4 style="color: #0C96D7;">Seguro y confiable</h4>                                
                            </div>
                        </div>
                    </div>
                     <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-team-member">
                            <div class="member-image">
                                <img src="img/team-img/team-1.jpg" alt="">
                                <div class="team-hover-effects">
                                    <div class="team-social-icon">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="member-text">
                                <h4 style="color: #0C96D7;">Rapidez</h4>                                
                            </div>
                        </div>
                    </div>
                     <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-team-member">
                            <div class="member-image">
                                <img src="img/team-img/team-1.jpg" alt="">
                                <div class="team-hover-effects">
                                    <div class="team-social-icon">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="member-text">
                                <h4 style="color: #0C96D7;">Cuidado del planeta</h4>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single-team-member">
                            <div class="member-image">
                                <img src="img/team-img/team-1.jpg" alt="">
                                <div class="team-hover-effects">
                                    <div class="team-social-icon">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="member-text">
                                <h4 style="color: #0C96D7;">La mejor calidad</h4>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Our Team Area End ***** -->

        <!-- ***** Contact Us Area Start ***** -->
        <section class="footer-contact-area section_padding_100 clearfix" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Heading Text  -->
                        <div class="section-heading">
                            <h2 style="color: #0C96D7;">Contactanos</h2>
                            <div class="line-shape"></div>
                        </div>
                        <div class="footer-text">
                            <p>We'll send you epic weekly blogs, whitepapers and things to make your app startup thrive, all FREE!</p>
                        </div>
                        <div class="address-text" style="color: #0C96D7;">
                            <p><span style="color: #0C96D7;">DIRECCION:</span> 40 Baria Sreet 133/2 NewYork City, US</p>
                        </div>
                        <div class="phone-text" style="color: #0C96D7;">
                            <p><span style="color: #0C96D7;">TELEFONO:</span> +52-238-102-37-60</p>
                        </div>
                        <div class="email-text" style="color: #0C96D7;">
                            <p><span style="color: #0C96D7;">E-mail:</span> carclean@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Form Start-->
                        <div class="contact_from">
                            <form action="#" method="post">
                                <!-- Message Input Area Start -->
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Single Input Area Start -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="NOMBRE" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder=" E-mail" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="TELEFONO" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="MENSAJE" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12">
                                            <button type="submit" class="btn submit-btn">ENVIAR</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Message Input Area End -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Contact Us Area End ***** -->

        <!-- ***** Footer Area Start ***** -->
        <footer class="footer-social-icon text-center section_padding_70 clearfix">
            <!-- footer logo -->
            <div class="footer-text">
                <h2 style="color: #0C96D7;">CARCLEAN</h2>
            </div>
            <!-- social icon-->
            <div class="footer-social-icon">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="active fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            </div>
            
            <!-- Foooter Text-->
            <div class="copyright-text">
                <!-- ***** Removing this text is now allowed! This template is licensed under CC BY 3.0 ***** -->
                <p>Copyright ©2018 CARCLEAN </p>
            </div>
        </footer>
        <!-- ***** Footer Area Start ***** -->

        <!-- Jquery-2.2.4 JS -->
        <script src="js/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap-4 Beta JS -->
        <script src="js/bootstrap.min.js"></script>
        <!-- All Plugins JS -->
        <script src="js/plugins.js"></script>
        <!-- Slick Slider Js-->
        <script src="js/slick.min.js"></script>
        <!-- Footer Reveal JS -->
        <script src="js/footer-reveal.min.js"></script>
        <!-- Active JS -->
        <script src="js/active.js"></script>
    </body>

</html>
