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



