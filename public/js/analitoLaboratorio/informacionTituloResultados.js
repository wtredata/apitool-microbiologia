function informacionTituloResultados(){

    let datainfo = {
        id: window.analito_node.data.id_reference
    };

    let spinner_ld = $('<div class="spinner-border spinner-border-sm text-primary" role="status"><span class="sr-only">Loading...</span></div>');
    let msg_error = $('<span class="text-danger">Error</span>');
    let contenedorResultados = $("#contenedor-titulos-resultados");
    
    contenedorResultados.html(spinner_ld.clone());

    $.get(
        "ShowTitleResultadosAnalitoLaboratorio",
        datainfo
    ).done(function(response){

        contenedorResultados.html(response);

    }).fail(function(response){
        if(gestionErroresBackend(response)){
        }

        contenedorResultados.html(msg_error.clone());

    }).always(function(response){
    });
}

function informacionTituloResultadosCualitativo(){

    let datainfo = {
        id: window.analito_node.data.id_reference
    };

    let spinner_ld = $('<div class="spinner-border spinner-border-sm text-primary" role="status"><span class="sr-only">Loading...</span></div>');
    let msg_error = $('<span class="text-danger">Error</span>');
    let contenedorResultados = $("#contenedor-titulos-resultados-cualitativo");
    
    contenedorResultados.html(spinner_ld.clone());

    $.get(
        "ShowTitleResultadosAnalitoLaboratorioCualitativo",
        datainfo
    ).done(function(response){

        contenedorResultados.html(response);
        middlewareEvent(contenedorResultados.find(".btnEvent"));

    }).fail(function(response){
        if(gestionErroresBackend(response)){
        }

        contenedorResultados.html(msg_error.clone());

    }).always(function(response){
    });
}