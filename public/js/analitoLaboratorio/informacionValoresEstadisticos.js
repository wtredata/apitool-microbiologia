function informacionValoresEstadisticos(contenedorValoresEstadisticos, eventos = true, data_reference){

    if($(".SeeSectionResultado:visible").length == 1){
        var fecha_inicial = $("#valores-estadisticos-f-inicial").val();
        var fecha_final = $("#valores-estadisticos-f-final").val();
    } else if($(".SeeSectionGraficaIntegrada:visible").length == 1){
        var fecha_inicial = $("#valores-estadisticos-f-inicial-grafica").val();
        var fecha_final = $("#valores-estadisticos-f-final-grafica").val();
    }

    let datainfo = {
        id: ((data_reference == null || typeof data_reference == "undefined") ? window.analito_node.data.id_reference : data_reference),
        fecha_inicial: fecha_inicial,
        fecha_final: fecha_final,
        eventos: (eventos == true) ? 1 : 0
    };

    let spinner_ld = $('<div class="col-12"><span class="spinner-border spinner-border-sm text-primary" role="status"></span></div>');
    let msg_error = $('<div class="col-12"><span class="text-danger" role="status">Error</span></div>');
    contenedorValoresEstadisticos.html(spinner_ld.clone());

    $.get(
        "ShowValoresEstadisticosAnalitoLaboratorio",
        datainfo
    ).done(function(response){

        contenedorValoresEstadisticos.html(response);
        middlewareEvent($("#contenedor-valores-estadisticos .btnEvent").add($("#contenedor-valores-estadisticos .formEvent")));

    }).fail(function(response){
        if(gestionErroresBackend(response)){
        } else {
            notificacion("normal", "error", "Error al listar los valores estadísticos del laboratorio", "Por favor intente nuevamente...");
        }

        contenedorValoresEstadisticos.html(msg_error.clone());
    }).always(function(response){
    });

    
}

function informacionValoresEstadisticosCualitativo(contenedorValoresEstadisticos, eventos = true, data_reference = null){

    if($(".SeeSectionResultadoCualitativo:visible").length == 1){
        var fecha_inicial = $("#valores-estadisticos-f-inicial-cualitativo").val();
        var fecha_final = $("#valores-estadisticos-f-final-cualitativo").val();
    } 
    // else if($(".SeeSectionGraficaIntegrada:visible").length == 1){
    //     var fecha_inicial = $("#valores-estadisticos-f-inicial-grafica").val();
    //     var fecha_final = $("#valores-estadisticos-f-final-grafica").val();
    // }

    let datainfo = {
        id: ((data_reference == null || typeof data_reference == "undefined") ? window.analito_node.data.id_reference : data_reference),
        fecha_inicial: fecha_inicial,
        fecha_final: fecha_final,
        eventos: (eventos == true) ? 1 : 0
    };

    let spinner_ld = $('<div class="col-12"><span class="spinner-border spinner-border-sm text-primary" role="status"></span></div>');
    let msg_error = $('<div class="col-12"><span class="text-danger" role="status">Error</span></div>');
    contenedorValoresEstadisticos.html(spinner_ld.clone());

    $.get(
        "ShowValoresEstadisticosAnalitoLaboratorioCualitativo",
        datainfo
    ).done(function(response){

        contenedorValoresEstadisticos.html(response);
        middlewareEvent($("#contenedor-valores-estadisticos-cualitativo .btnEvent").add($("#contenedor-valores-estadisticos-cualitativo .formEvent")));

    }).fail(function(response){
        if(gestionErroresBackend(response)){
        } else {
            notificacion("normal", "error", "Error al listar los valores estadísticos del laboratorio", "Por favor intente nuevamente...");
        }

        contenedorValoresEstadisticos.html(msg_error.clone());
    }).always(function(response){
    });

    
}