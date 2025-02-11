function generarModuloSigmometria(){
    var datainfo = {
        id: $("#sigmometria-lote").val(),
        fecha_inicial: $("#sigmometria-f-inicial").val(),
        fecha_final: $("#sigmometria-f-final").val()
    }

    let contG_sigmometria = $("#cont_grafica_sigmometria");
    let spinner_ld = $('<div class="spinner-border spinner-border-sm text-primary m-2" role="status"><span class="sr-only">Loading...</span></div>');
    let msg_error = $('<span class="text-danger">Error</span>');
    let info_control_lab = $("#informacion_control_sigmometria");
    let cont_detalle_sig = $("#cont_detalle_sigmometria tbody");

    contG_sigmometria.html(spinner_ld.clone());
    cont_detalle_sig.html(spinner_ld.clone());
    $('#conteo_siget_verde').html(spinner_ld.clone());
    $('#conteo_siget_amarillo').html(spinner_ld.clone());
    $('#conteo_siget_azul').html(spinner_ld.clone());
    $('#conteo_siget_rojo').html(spinner_ld.clone());
    $('#conteo_siget_total').html(spinner_ld.clone());
    $('#porcentaje_siget_verde').html(spinner_ld.clone());
    $('#porcentaje_siget_amarillo').html(spinner_ld.clone());
    $('#porcentaje_siget_azul').html(spinner_ld.clone());
    $('#porcentaje_siget_rojo').html(spinner_ld.clone());
    $("#conteo_iet_rojo").html(spinner_ld.clone());
    $("#conteo_iet_verde").html(spinner_ld.clone());
    $("#conteo_iet_azul").html(spinner_ld.clone());
    $("#porcentaje_iet_rojo").html(spinner_ld.clone());
    $("#porcentaje_iet_verde").html(spinner_ld.clone());
    $("#porcentaje_iet_azul").html(spinner_ld.clone());
    info_control_lab.find(".constante").html(spinner_ld.clone());
    info_control_lab.find(".institucion").html(spinner_ld.clone());
    info_control_lab.find(".sede").html(spinner_ld.clone());
    info_control_lab.find(".laboratorio").html(spinner_ld.clone());
    info_control_lab.find(".matriz").html(spinner_ld.clone());
    info_control_lab.find(".control").html(spinner_ld.clone());
    info_control_lab.find(".lote").html(spinner_ld.clone());
    info_control_lab.find(".fecha_caducidad").html(spinner_ld.clone());

    
    $.get(
        "GetValoresSigmometria",
        datainfo
        ).done(function (response) {
            generarGraficaSigmometria(response);
            generarConsensoSigmometria(response);
            generarInfoControlSigmometria(response);
            generarTablaSigmometria(response);
            
    }).fail(function (response) {
        if(gestionErroresBackend(response)){
        } else {
            notificacion("normal", "error", "Error al generar las gráficas integradas de control de calidad", "Por favor intente nuevamente...");
        }    
        
        contG_sigmometria.html(msg_error.clone());
        cont_detalle_sig.html(msg_error.clone());
        $('#conteo_siget_verde').html(msg_error.clone());
        $('#conteo_siget_amarillo').html(msg_error.clone());
        $('#conteo_siget_azul').html(msg_error.clone());
        $('#conteo_siget_rojo').html(msg_error.clone());
        $('#conteo_siget_total').html(msg_error.clone());
        $('#porcentaje_siget_verde').html(msg_error.clone());
        $('#porcentaje_siget_amarillo').html(msg_error.clone());
        $('#porcentaje_siget_azul').html(msg_error.clone());
        $('#porcentaje_siget_rojo').html(msg_error.clone());
        $("#conteo_iet_rojo").html(msg_error.clone());
        $("#conteo_iet_verde").html(msg_error.clone());
        $("#conteo_iet_azul").html(msg_error.clone());
        $("#porcentaje_iet_rojo").html(msg_error.clone());
        $("#porcentaje_iet_verde").html(msg_error.clone());
        $("#porcentaje_iet_azul").html(msg_error.clone());
        info_control_lab.find(".constante").html(msg_error.clone());
        info_control_lab.find(".institucion").html(msg_error.clone());
        info_control_lab.find(".sede").html(msg_error.clone());
        info_control_lab.find(".laboratorio").html(msg_error.clone());
        info_control_lab.find(".matriz").html(msg_error.clone());
        info_control_lab.find(".control").html(msg_error.clone());
        info_control_lab.find(".lote").html(msg_error.clone());
        info_control_lab.find(".fecha_caducidad").html(msg_error.clone()); 
    }).always(function (response) {
    });
}
