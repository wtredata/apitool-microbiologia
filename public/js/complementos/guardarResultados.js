function guardarResultados(elementEvent) {

    elementEvent.prop("disabled",true);

    if(validacionResultados()){
        let dataHTTP = {};
        let novedad_resultados = generarNovedadResultados();
        
        if(novedad_resultados.length > 0){
            dataHTTP._token = $('meta[name="csrf-token"]').attr('content');
            dataHTTP.id_analito_lab = window.analito_node.data.id_reference;
            dataHTTP.resultados = novedad_resultados;

            var uniqnumber = uniqid();
            notificacion("show", "info", "Guardando resultados...", "", uniqnumber);

            $.post(
                "guardarResultados",
                dataHTTP
            ).done(function (response) {
    
                notificacion("normal", "success", "Actualización exitosa", "Se ha actualizado la información de los resultados para el analito especificado");
                informacionResultados();
                informacionValoresEstadisticos($("#contenedor-valores-estadisticos"));
        
            }).fail(function (response) {
                if(gestionErroresBackend(response)){
                } else {
                    notificacion("normal", "error", "Actualización fallida", "No se han podido guardar los resultados, por favor intente nuevamente...");
                }
                
            }).always(function (responseAjax) {
                elementEvent.prop("disabled",false);
                notificacion("hide", "info", null, null, uniqnumber);
            });    
        } else {
            elementEvent.prop("disabled",false);
            notificacion("normal", "info", "No hay cambios por guardar...");
        }
    } else {
        elementEvent.prop("disabled",false);
    }
    



}

function guardarResultadosCualitativo(elementEvent) {

    elementEvent.prop("disabled",true);

    if(validacionResultadosCualitativo()){
        let dataHTTP = {};
        let dataHTTPTitle = {};
        let novedad_resultados = generarNovedadResultadosCualitativo();
        let novedad_titulos = generarNovedadDefectoCualitativo();

        if (novedad_titulos.length > 0) {
            dataHTTPTitle._token = $('meta[name="csrf-token"]').attr('content');
            dataHTTPTitle.id_analito_lab = window.analito_node.data.id_reference;
            dataHTTPTitle.resultados = novedad_titulos;

            $.post(
                "guardarResultadoDefectoCualitativo",
                dataHTTPTitle
            ).done(function (response) {
    
                notificacion("normal", "success", "Actualización exitosa", "Se ha actualizado la información por defecto para el analito especificado");
                informacionTituloResultadosCualitativo();
                informacionValoresEstadisticosCualitativo($("#contenedor-valores-estadisticos-cualitativo"));
        
            }).fail(function (response) {
                if(gestionErroresBackend(response)){
                } else {
                    notificacion("normal", "error", "Actualización fallida", "No se han podido guardar los valores por defecto, por favor intente nuevamente...");
                }
                
            });
        } else {
            elementEvent.prop("disabled",false);
            notificacion("normal", "info", "No hay cambios de valores por defecto por guardar...");
        }
        
        if(novedad_resultados.length > 0){
            dataHTTP._token = $('meta[name="csrf-token"]').attr('content');
            dataHTTP.id_analito_lab = window.analito_node.data.id_reference;
            dataHTTP.resultados = novedad_resultados;

            var uniqnumber = uniqid();
            notificacion("show", "info", "Guardando resultados...", "", uniqnumber);

            $.post(
                "guardarResultadosCualitativo",
                dataHTTP
            ).done(function (response) {
    
                notificacion("normal", "success", "Actualización exitosa", "Se ha actualizado la información de los resultados para el analito especificado");
                informacionResultadosCualitativo();
                informacionValoresEstadisticosCualitativo($("#contenedor-valores-estadisticos-cualitativo"));
        
            }).fail(function (response) {
                if(gestionErroresBackend(response)){
                } else {
                    notificacion("normal", "error", "Actualización fallida", "No se han podido guardar los resultados, por favor intente nuevamente...");
                }
                
            }).always(function (responseAjax) {
                elementEvent.prop("disabled",false);
                notificacion("hide", "info", null, null, uniqnumber);
            });    
        } else {
            elementEvent.prop("disabled",false);
            notificacion("normal", "info", "No hay cambios en resultado por guardar...");
        }
    } else {
        elementEvent.prop("disabled",false);
    }
    



}