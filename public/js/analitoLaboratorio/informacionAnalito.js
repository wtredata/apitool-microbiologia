function informacionAnalito(cont_info_analito, data_reference){

    let datainfo = {
        id: ((data_reference == null || typeof data_reference == "undefined") ? window.analito_node.data.id_reference : data_reference)
    };


    let spinner_ld = $('<span class="spinner-border spinner-border-sm text-primary" role="status"></span>');
    let msg_error = $('<span class="text-danger" role="status">Error</span>');

    cont_info_analito.find(".laboratorio").html(spinner_ld.clone());
    cont_info_analito.find(".area").html(spinner_ld.clone());
    cont_info_analito.find(".matriz").html(spinner_ld.clone());
    cont_info_analito.find(".control").html(spinner_ld.clone());
    cont_info_analito.find(".lote").html(spinner_ld.clone());
    cont_info_analito.find(".fecha_caducidad").html(spinner_ld.clone());
    cont_info_analito.find(".analito").html(spinner_ld.clone());
    cont_info_analito.find(".analizador").html(spinner_ld.clone());
    cont_info_analito.find(".unidades").html(spinner_ld.clone());
    cont_info_analito.find(".metodologia").html(spinner_ld.clone());
    cont_info_analito.find(".reactivo").html(spinner_ld.clone());
    cont_info_analito.find(".temperatura").html(spinner_ld.clone());

    $.get(
        "ShowInfoAnalitoLaboratorio",
        datainfo
    ).done(function(response){
    console.log(").done ~ response:", response)

        if($(".SeeSectionResultado").is(':visible')){ // Si el panel de resultado esta abierto
            alertaVencimientoLote(response);
        }

        cont_info_analito.find(".laboratorio").html(response.laboratorio);
        cont_info_analito.find(".area").html(response.area);
        cont_info_analito.find(".matriz").html(response.matriz);
        cont_info_analito.find(".control").html(response.control);
        cont_info_analito.find(".lote").html(response.lote);
        cont_info_analito.find(".fecha_caducidad").html(response.fecha_caducidad);
        cont_info_analito.find(".analito").html(response.analito);
        cont_info_analito.find(".analizador").html(response.analizador);
        cont_info_analito.find(".unidades").html(response.unidades);
        cont_info_analito.find(".metodologia").html(response.metodologia);
        cont_info_analito.find(".reactivo").html(response.reactivo);
        cont_info_analito.find(".temperatura").html(response.temperatura);
        $("#id_analito_lab_commit").val(response.id_analito_laboratorio)
        $("#info_laboratorio").val(response.laboratorio)
        $("#info_matriz").val(response.matriz)
        $("#info_control").val(response.control)
        $("#info_lote").val(response.lote)
        $("#info_fecha_caducidad").val(response.fecha_caducidad)
        $("#info_analito").val(response.analito)
        $("#info_analizador").val(response.analizador)
        $("#info_unidades").val(response.unidades)
        $("#info_metodologia").val(response.metodologia)
        $("#info_reactivo").val(response.reactivo)
        $("#info_temperatura").val(response.temperatura)

    }).fail(function(response){
        if(gestionErroresBackend(response)){
        } else {
            notificacion("normal", "error", "Error al listar la información del analito", "Por favor intente nuevamente...");
        }

        cont_info_analito.find(".laboratorio").html(msg_error.clone());
        cont_info_analito.find(".area").html(msg_error.clone());
        cont_info_analito.find(".matriz").html(msg_error.clone());
        cont_info_analito.find(".control").html(msg_error.clone());
        cont_info_analito.find(".lote").html(msg_error.clone());
        cont_info_analito.find(".fecha_caducidad").html(msg_error.clone());
        cont_info_analito.find(".analito").html(msg_error.clone());
        cont_info_analito.find(".analizador").html(msg_error.clone());
        cont_info_analito.find(".unidades").html(msg_error.clone());
        cont_info_analito.find(".metodologia").html(msg_error.clone());
        cont_info_analito.find(".reactivo").html(msg_error.clone());
        cont_info_analito.find(".temperatura").html(msg_error.clone());

    }).always(function(response){
    });
}