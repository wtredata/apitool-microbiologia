function show(originShow, elementTdFather, tipeEvent, trCompleto = null) {

    if (originShow == "html") {

        elementTdFather.html(elementTdFather.data("original_field"));
        elementTdFather.removeData("original_field");
        middlewareEvent(elementTdFather);

    } else if (originShow == "ajax") {

        var moduleEvent = elementTdFather.data("route").split("_")[1],
            loader = $(
                '<div class="spinner-border spinner-border-sm text-primary" role="status">' +
                '<span class="sr-only">Loading...</span>' +
                '</div>'
            );

        elementTdFather.html(loader);

        $.ajax({
            url: "Show" + moduleEvent,
            type: 'get',
            data: {
                id: elementTdFather.data("reference"),
                campo: elementTdFather.data("field"),
                _token: $('meta[name="csrf-token"]').attr('content')
            }
        }).done(function (response) {

            let trFatherIndex = elementTdFather.parents("tr");

            if(trCompleto == null){   
                elementTdFather.html(response);
                middlewareEvent(elementTdFather);
            } else {
                let trFatherIndex = elementTdFather.parents("tr");
                let newTR = $(response);
                trFatherIndex.after(newTR);
                trFatherIndex.remove();
                middlewareEvent(newTR.find(".btnEvent").add(newTR.find(".formEvent")));
            }
            
        }).fail(function (response) {
            if(gestionErroresBackend(response)){
            } else {
                notificacion("normal", "error", "Listado de campo actualizado fallido", "Es recomendable que actualice las tablas, para ver la información vigente...");
                elementTdFather.html(elementTdFather.data("original_field"));
                elementTdFather.removeData("original_field");
            }
        }).always(function (trgger) {
        });

    }
}
