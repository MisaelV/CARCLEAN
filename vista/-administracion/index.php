<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Inicio de Sesión</title>
        <meta charset="UTF-8">
         <link rel="icon" type="image/png" href="../assets/images/icono.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
        <link rel="stylesheet" type="text/css" href="../-administracion/assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../-administracion/assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../-administracion/assets/fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="../-administracion/assets/vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="../-administracion/assets/vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="../-administracion/assets/vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="../-administracion/assets/vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="../-administracion/assets/vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="../-administracion/assets/css/util.css">
        <link rel="stylesheet" type="text/css" href="../-administracion/assets/css/main.css">
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100" style="background-image: url('../assets/images/img_index.jpg');">
                <div class="wrap-login100">
                    <form   action="index.php"  name="form" method="POST">
                        <input name="consultarAdmin" value="1" type="hidden">
                        <span class="login100-form-logo">
                            <i class="zmdi zmdi-lock"></i>
                        </span>
                        <span class="login100-form-title p-b-34 p-t-27">
                            Inicio de Sesión
                        </span>
                        <div class="wrap-input100 validate-input" data-validate = "Enter username">
                            <input class="input100" required="" type="text" name="username" placeholder="Nombre de usuario">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" required="" name="pass" placeholder="Contraseña">
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit">
                                Iniciar Sesión
                            </button>
                        </div>

                        <div class="text-center p-t-90">
                            ¿No tienes cuenta de usuario?  
                            <a class="txt1" href="registro-administrador.php">
                                Crear cuenta
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="dropDownSelect1"></div>
        <script src="../-administracion/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="../-administracion/assets/vendor/animsition/js/animsition.min.js"></script>
        <script src="../-administracion/assets/vendor/bootstrap/js/popper.js"></script>
        <script src="../-administracion/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="../-administracion/assets/vendor/select2/select2.min.js"></script>
        <script src="../-administracion/assets/vendor/daterangepicker/moment.min.js"></script>
        <script src="../-administracion/assets/vendor/daterangepicker/daterangepicker.js"></script>
        <script src="../-administracion/assets/vendor/countdowntime/countdowntime.js"></script>
        <script src="../-administracion/assets/js/main.js"></script>
    </body>
</html>