function validarResultadoComparacion(resultado_m1c1, resultado_m1c2, resultado_m2c1, resultado_m2c2){
    
    $(".input-validado-error").removeClass("input-validado-error"); // Eliminar todas las clases de error

    if (resultado_m1c1.val().match("^([0-9]{1,3})$") == null && resultado_m1c1.val().match("^([0-9]{1,3}(\.[0-9]{1,3}))$") == null) {
        
        notificacion("normal", "warning", "Resultado incorrecto", "El valor del resultado debe ser un valor decimal, de máximo 3 enteros y 3 decimales");
        enfocarGestion(resultado_m1c1);
        return false;

    } else if(resultado_m1c2.val().match("^([0-9]{1,3})$") == null && resultado_m1c2.val().match("^([0-9]{1,3}(\.[0-9]{1,3}))$") == null) {
        
        notificacion("normal", "warning", "Resultado incorrecto", "El valor del resultado debe ser un valor decimal, de máximo 3 enteros y 3 decimales");
        enfocarGestion(resultado_m1c2);
        return false;
    } else if(resultado_m2c1.val().match("^([0-9]{1,3})$") == null && resultado_m2c1.val().match("^([0-9]{1,3}(\.[0-9]{1,3}))$") == null) {
        
        notificacion("normal", "warning", "Resultado incorrecto", "El valor del resultado debe ser un valor decimal, de máximo 3 enteros y 3 decimales");
        enfocarGestion(resultado_m2c1);
        return false;
    } else if(resultado_m2c2.val().match("^([0-9]{1,3})$") == null && resultado_m2c2.val().match("^([0-9]{1,3}(\.[0-9]{1,3}))$") == null) {
        
        notificacion("normal", "warning", "Resultado incorrecto", "El valor del resultado debe ser un valor decimal, de máximo 3 enteros y 3 decimales");
        enfocarGestion(resultado_m2c2);
        return false;
    } else {
        return true;
    }

}