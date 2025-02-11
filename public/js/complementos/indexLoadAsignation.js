function indexLoadAsignation(moduleEvent, tableLiged) {

    var modulo = moduleEvent.split("_")[0],
        tablaAsignada = moduleEvent.split("_")[1],
        contTable = $(".SeeSection" + modulo + " .Cont_Table_" + modulo + tablaAsignada),
        routeEventClear = "SeeIndexAsignation" + modulo + tablaAsignada,
        uniqnumber = uniqid(),
        form = contTable.parents(".card").find(".formLiged");

    if(contTable.length == 0){ // Si no encuentra el modulo, busca de otra manera
        var contTable = $(".SeeSection" + tablaAsignada + " .Cont_Table_" +  modulo + tablaAsignada),
            form = contTable.parents(".card").find(".formLiged");
    }

    notificacion("show","info","Listando información relacionada para la asignación de " + nomLegibleSection(moduleEvent) + "...",null,uniqnumber);

    $.get(
        routeEventClear,
        {
            _token: $('meta[name="csrf-token"]').attr('content'),
            idFilter: form.find(".idFilter").val()
        }
    ).done(function (response) {

        contTable.html(response);
        middlewareEvent(contTable.find("table .btnEvent"));
        
        tablaDinamica(
            contTable.find(".dinamicTable")
        );

    }).fail(function (response) {
        if(gestionErroresBackend(response)){
        } else {
            notificacion("normal","error","Error listando la información relacionada con " + nomLegibleSection(moduleEvent));
        }
    }).always(function (sdcsdFsdfsdF) {

        notificacion("hide","info",null,null,uniqnumber);

    });
}