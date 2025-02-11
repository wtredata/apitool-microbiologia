function exportacionReporte(elementEvent, id_referecia) {

    var uniqnumber = uniqid();
    notificacion("show", "info", "Espere un momento, se está generando un reporte en formato PDF...", "", uniqnumber);
    gestionEnvioForm(elementEvent, "deshabilitar");

    $.post(
        "reporte_final",
        {
            _token: $('meta[name="csrf-token"]').attr('content'),
            id: id_referecia,
            base64_grafico_B1: $("#base64_grafico_B1").val(),
            base64_grafico_B2: $("#base64_grafico_B2").val(),
            base64_grafico_B3: $("#base64_grafico_B3").val(),
            base64_grafico_B4: $("#base64_grafico_B4").val(),
        }).done(function (id_document) {
        window.open("SeeReport?referencia=" + id_document, '_blank');
    }).fail(function (response) {
        if (gestionErroresBackend(response)) {
        } else {
            notificacion("normal", "error", "Error al generar el reporte en PDF");
        }
    }).always(function (cscsdfergq) {
        gestionEnvioForm(elementEvent, "habilitar");
        notificacion("hide", "info", null, null, uniqnumber);
    });

}
