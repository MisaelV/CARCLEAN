<?php
include_once '../modelo/BD.php';/** se incluye la conexipon a la BD */
include_once '../controlador/controlador-pagina/controlador-pagina.php';/** se incluye el controlador */
include_once '../modelo/modelo-pagina/modelo-pagina.php';/** se incluye el modelo */
/**
  INICIALIZA CONTROLADOR
 */
$FE = new controladorPagina();
?>
<html lang="es">
    <head>
        <title>Inicio de Sesión</title>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="images/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
        <link rel="stylesheet" type="text/css" href="../carclean/management/assets/css/util.css">
        <link rel="stylesheet" type="text/css" href="../carclean/management/assets/css/main.css">
        <link rel="stylesheet" type="text/css" href="../settings/style-web/css.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    </head>
    <body>
        <!--Inicia el cuerpo del contenido-->
        <div class="container-login100" style="background-image: url('https://ideasdenegocios.net/wp-content/uploads/2018/04/negocio-lavado-auto.png');">
            <!--Inicia el recuadro de login-->
            <div class="content cuadro col-md-4 body">
                <div class="form-group col-lg-12" >
                    <center>
                        <img src="../assets/images/administracion/logo.png" style="width: 6rem;">
                        <br>
                        <h4 class="">Crea una cuenta</h4>
                    </center>
                    <form class="needs-validation" action="register.php" method="post">
                        <input type="hidden" name="agregarUsuario">
                        <div class="form-row">
                            <div class="col-md-12 mb-6">
                                <label for="name">Nombre Completo:</label>
                                <div class="input-group">
                                    <input type="text" name="nombre" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                </div>
                                <label for="validationTooltipUsername">Correo electrónico:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                    </div>
                                    <input type="email" name="email" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="validationTooltip01">Contraseña:</label>
                                <input type="password" name="password" class="form-control" id="validationTooltip01"  required>
                                <div class="valid-tooltip">
                                    Muy bien!
                                </div>
                            </div>
                            
                            <!--<div class="col-md-6 mb-6">
                                <label for="validationTooltip01">Repite contraseña:</label>
                                <input type="password" name="password" class="form-control" id="validationTooltip01"  required>
                                <div class="valid-tooltip">
                                    Muy bien!
                                </div>
                            </div>-->
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-6">
                                <label for="validationTooltip03">Estado</label>
                                <select class="custom-select" name="estado">
                                    <option selected>Selecciona tu estado</option>
                                    <option value="1">Puebla</option>
                                    <option value="2">Querétaro</option>
                                    <option value="3">Jalisco</option>
                                </select>
                                <div class="invalid-tooltip">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="validationTooltip04">Teléfono móvil:</label>
                                <input type="text" name="telefono" class="form-control" id="validationTooltip04" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group col-lg-12 ">
                            <center>
                                <button type="submit" class="btn btn-primary" >Registrarte</button>
                            </center>
                        </div>
                        <center>
                            <p style="font-family: sans-serif;">© 2018 <a href="../index.php" style="font-family: sans-serif;" >Carclean.</a></p>
                        </center>
                    </form>
                </div>

                <!--Termina el recuadro de login-->
            </div>
            <!--Termina el cuerpo del contenido-->
            <div class="limpiar"></div>

    </body>
</html>