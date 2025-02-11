function informacionResultados(){

    let datainfo = {
        id: window.analito_node.data.id_reference
    };

    let spinner_ld = $('<div class="spinner-border text-primary my-2" role="status"><span class="sr-only">Loading...</span></div>');
    let msg_error = $('<span class="text-danger">Error</span>');
    let contenedorResultados = $("#contenedor-resultados");
    contenedorResultados.html(spinner_ld.clone());

    $.get(
        "ShowResultadosAnalitoLaboratorio",
        datainfo
    ).done(function(response){

        contenedorResultados.html(response);
        inputDates(contenedorResultados.find('.fecha'), "basico_hora");
        middlewareEvent(contenedorResultados.find(".btnEvent"));

    }).fail(function(response){
        
        if(gestionErroresBackend(response)){
        } else {
            notificacion("normal", "error", "Error al listar los resultados del analito", "Por favor intente nuevamente...");
        }

        contenedorResultados.html(msg_error.clone());
    }).always(function(response){
    });
}

function informacionResultadosCualitativo(){

    let datainfo = {
        id: window.analito_node.data.id_reference
    };

    let spinner_ld = $('<div class="spinner-border text-primary my-2" role="status"><span class="sr-only">Loading...</span></div>');
    let msg_error = $('<span class="text-danger">Error</span>');
    let contenedorResultados = $("#contenedor-resultados-cualitativo");
    contenedorResultados.html(spinner_ld.clone());

    $.get(
        "ShowResultadosAnalitoLaboratorioCualitativo",
        datainfo
    ).done(function(response){

        contenedorResultados.html(response);
        inputDates(contenedorResultados.find('.fecha'), "basico_hora");
        middlewareEvent(contenedorResultados.find(".btnEvent"));

    }).fail(function(response){
        
        if(gestionErroresBackend(response)){
        } else {
            notificacion("normal", "error", "Error al listar los resultados del analito", "Por favor intente nuevamente...");
        }

        contenedorResultados.html(msg_error.clone());
    }).always(function(response){
    });
}