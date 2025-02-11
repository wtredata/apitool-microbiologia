function dinamicModal(id_reference, routeEventClear, elementEvent = null, modal_movible = false, modal_tamanodinamico = false, nivel_analito = null) {


    if ($("#sectionModalsD").html() != "") {
        $("#sectionModalsD").html("");
    }

    var uniqnumberModal = uniqid();

    if (elementEvent != null) {
        elementEvent.prop("disabled", true);
        elementEvent.addClass("disabled");
    }

    
    notificacion("show", "info", "Cargando información de ventana emergente ...", "", uniqnumberModal);
    
    $.get(
        "GetDinamicModal" + routeEventClear, {
            _token: $('meta[name="csrf-token"]').attr('content'),
            id_reference: id_reference,
            nivel_analito: nivel_analito
        }
    ).done(function (htmlModal) {

        $("#sectionModalsD").html(htmlModal);
        if(modal_movible) { $("#sectionModalsD .modal-content").draggable();}
        if(modal_tamanodinamico){ $("#sectionModalsD .modal-content").resizable();}
        middlewareEvent($("#sectionModalsD .btnEvent").add($("#sectionModalsD .formEvent")));
        switchDinamicModal(routeEventClear);

    }).fail(function (response) {
        if(gestionErroresBackend(response)){
        } else {
            notificacion("normal", "error", "Error al cargar la ventana emergente...");
        }
    }).always(function (sazxz) {
        notificacion("hide", "info", null, null, uniqnumberModal);
        if (elementEvent != null) {
            elementEvent.prop("disabled", false);
            elementEvent.removeClass("disabled");
        }

    });
}
