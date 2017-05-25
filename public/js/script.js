

$(function() {
    // Punto 1.
    // Crear código para filtrar pacientes por nombre.
   
    // Punto 1.
    // 
    // Crear código para filtrar pacientes por nombre.	
    //                   	
              //hace la búsqueda
                                                                                  
                                                                               
      var textoBusqueda = $("input#patient_filter").val();
  
    if (textoBusqueda != "") {
        $.post("buscar.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            $("#resultado").html(mensaje);
        }); 
    } else { 
        ("#resultado").html('vacio');
         
}
 });


    
