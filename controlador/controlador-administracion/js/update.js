function modificarCliente(id, nombre,password,email, telefono){
    $("#idCliente").val(id);
   $("#cNombre").val(nombre);
   $("#cPass").val(password);
     $("#cEmail").val(email);
      $("#cTelefono").val(telefono);
    
};

function modificarInventario(id,name,tipo,modo,proveedor){
    $("#idProducto").val(id);
    $("#pNombre").val(name);
    $("#pTipo").val(tipo);
    $("#pEmpleo").val(modo);
    $("#pProveedor").val(proveedor);
}

function updateServicio(id,cliente,automovil,direccion,tipo_lavado,lavador,precio){
    $("#idServicio").val(id);
    $("#sCliente").val(cliente);
    $("#sAutomovil").val(automovil);
    $("#sDireccion").val(direccion);
    $("#sTipo_lavado").val(tipo_lavado);
    $("#sLavador").val(lavador);
    $("#sPrecio").val(precio);
}




