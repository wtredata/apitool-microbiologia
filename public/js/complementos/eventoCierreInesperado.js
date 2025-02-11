function eventoCierreInesperado(accion = true){
    $(window).off("beforeunload",ventanaEmergente); // Eliminar eventos repetidos en dado caso que existan
    if(accion === true){
        $(window).on("beforeunload",ventanaEmergente);
        
        function ventanaEmergente() {
            if($("body tr[data-tipo_fila=registro]").add($("body tr[data-tipo_fila=modificacion]")).length > 0){ // Si existen inputs dentro del cuerpo del documento
                return "¿Está seguro de cerrar la página?, recuerde que puede perder información";
            }
        }
    }   
}