function modificarCliente(id, nombre, apellidos, email, telefono){
    $("#idCliente").val(id);
   $("#cNombre").val(nombre);
    $("#cApellidos").val(apellidos);
     $("#cEmail").val(email);
      $("#cTelefono").val(telefono);
    
};

function modificarInventario(id,name,proveedor,cantidad){
    $("#idProducto").val(id);
    $("#pNombre").val(name);
    $("#pProveedor").val(proveedor);
    $("#pCantidad").val(cantidad);
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




