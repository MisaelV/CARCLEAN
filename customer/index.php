<!DOCTYPE html>
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
                <div class="content cuadro col-md-4">
                <form>
                    <div class="form-group" >
                        <center>
                            <img src="../assets/images/administracion/logo.png" style="width: 7rem;">
                        <br><br>
                        <h4 class="login-heading">Iniciar Sesión</h4>
                        </center>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-form-label">Nombre de usuario o email: </label>
                        <input type="text" name="usuario" class="form-control" id="user" aria-describedby="emailHelp" placeholder="User or email" required="">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-form-label">Contraseña:</label>
                        <input type="password" name="contraseña" class="form-control" id="password" placeholder="Password" required="">
                    </div>

                    <div class="form-group col-md-12 ">
                        <center>
                    <button  type="button" class="btn btn-primary" onclick="location.href = 'account/profile.html'">Entrar</button>
                        </center>
                        <center>
                            <label class="col-form-label">¿No tienes una cuenta? <a href="register.php" style="color: #0370CB;font-family: sans-serif;"><h5>Crear una</h5></a></label>
                        </center>
                         <center>
                        <p style="text-">© 2018 <a href="#" >Carclean.</a></p>
                    </center>
                    </div>
                   
                </form>
            </div>
                 <!--Termina el recuadro de login-->
            </div>
        <!--Termina el cuerpo del contenido-->
             <div class="limpiar"></div>
  
    </body>
</html>