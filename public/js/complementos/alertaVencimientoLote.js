function alertaVencimientoLote(response){
    let fecha_caducidad = moment(response.fecha_caducidad);
    let fecha_actual = moment(moment().format('YYYY-MM-DD'));
    let dias_diferencia = fecha_caducidad.diff(fecha_actual, 'days');
    
    if(dias_diferencia > 0 && dias_diferencia <= 15){ // Si aun no ha vencido el lote
        notificacion("normal", "warning", "Vencimiento de lote", 'Atención: Falta(n) ' + dias_diferencia + ' día(s) para el que lote venza y quede con permisos de lectura. Por favor cambie de lote lo más pronto posible');
    } else if(dias_diferencia < 0) { // Si el ya venció
        notificacion("normal", "warning", "Vencimiento de lote", "El lote ya venció, por lo cual ahora sólo tiene permisos de lectura");

        if($('#new_coment_rf1').length > 0){ 
            $('#new_coment_rf1').prop("hidden", true);
        }

        if($('#acept_coment_rf1').length > 0){ 
            $('#acept_coment_rf1').prop("hidden", true);
        }
        
        if($('#save_coment_rf1').length > 0){ 
            $('#save_coment_rf1').prop("hidden", true);
        }
        
        if($('#addrow_coment_rf1').length > 0){ 
            $('#addrow_coment_rf1').prop("hidden", true);
        }
    } else {
        if($('#new_coment_rf1').length > 0){ 
            $('#new_coment_rf1').prop("hidden", false);
        }

        if($('#acept_coment_rf1').length > 0){ 
            $('#acept_coment_rf1').prop("hidden", false);
        }
        
        if($('#save_coment_rf1').length > 0){ 
            $('#save_coment_rf1').prop("hidden", false);
        }
        
        if($('#addrow_coment_rf1').length > 0){ 
            $('#addrow_coment_rf1').prop("hidden", false);
        }
    }
}