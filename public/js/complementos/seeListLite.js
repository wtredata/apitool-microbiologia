function seeListLite(selectsLiged, id_filtro, nomLegibleSection, routeEventClear){
    
    var uniqnumber = uniqid();
    notificacion("show", "info", "Cargando contenido de la lista de " + nomLegibleSection + "...", "", uniqnumber);

    $.get(
        routeEventClear, {
            id: id_filtro,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        function () {}
    ).done(function (httpRP) {
        selectsLiged.html(httpRP);
        selectsLiged.change();
    }).fail(function (response) {
        if(gestionErroresBackend(response)){
        } else {
            notificacion("normal", "error", "Error al referescar el contenido de la lista de " + nomLegibleSection);
        }
    }).always(function (cscsdfergq) {

        notificacion("hide", "info", null, null, uniqnumber);
    });
}