<?php
include_once '../../modelo/BD.php';
include_once '../../modelo/modelo-administracion/modelo-administracion.php';
include_once '../../controlador/controlador-administracion/controlador-administracion.php';
$constructor = new controladorAdministracion();
?>

<html>
    <body>
        <form method="post" action="comprobacion.php">
            <input type="text" name="name">
            <input type="text" name="cantidad">
            <input type="text" name="proveedor">
            <input type="submit" value="Aceptar">
        </form>
    </body>
</html>