function seeList(moduleEvent, elementEvent, incrRoute, routeEventClear){
    var id_filtro;

    if (elementEvent.data("ligamiento_select_padre") == undefined) { // Si no es necesario que sus resultados estén filtrados
        id_filtro = undefined;
    } else if (elementEvent.parents("form").find("." + elementEvent.data("select_padre")).eq(0).val() == "") { // Si es necesario filtrar mediante un selector padre, pero este tiene una opnción sin valor
        id_filtro = "0";
    } else { // Si desde el DOM se especifica que los resultados son filtrados
        id_filtro = elementEvent.parents("form").find("." + elementEvent.data("select_padre")).eq(0).val()
    }

    let selectsLiged = elementEvent.data("select_liged").split("&&&"); // Obtiene un array con los elementos dependientes del padre
    let selectLigedSub = selectsLiged[incrRoute];

    var uniqnumber = uniqid();
    notificacion("show", "info", "Cargando contenido de la lista de " + nomLegibleSection(moduleEvent) + "...", "", uniqnumber);

    $.get(
        routeEventClear, {
            id: id_filtro,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        function () {}
    ).done(function (httpRP) {

        elementEvent.parents("form").find("." + selectLigedSub).html(httpRP);
        if (elementEvent.data("force_change") == true) {
            elementEvent.parents("form").find("." + selectLigedSub).change();
        }

        switchSelect2(elementEvent.parents("form").find("." + selectLigedSub));

    }).fail(function (response) {
        if(gestionErroresBackend(response)){
        } else {
            notificacion("normal", "error", "Error al referescar el contenido de la lista de " + nomLegibleSection(moduleEvent));
        }

    }).always(function (cscsdfergq) {

        notificacion("hide", "info", null, null, uniqnumber);
    });
}