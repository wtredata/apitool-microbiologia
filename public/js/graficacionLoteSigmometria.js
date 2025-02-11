$(function(){
    var datainfo = {
        id: $("#id_control_laboratorio").val(),
        fecha_inicial: $("#fecha_inicial").val(),
        fecha_final: $("#fecha_final").val()
    }
    
    $.get(
        "GetValoresSigmometria",
        datainfo
    ).done(function (response) {
        generarGraficaSigmometria(response);
        auxGenerarGraficaSigmometria();
    }).fail(function (response) {
        if(gestionErroresBackend(response)){
        } else {
            notificacion("normal", "error", "Error al generar las gráficas integradas de control de calidad", "Por favor intente nuevamente...");
        }
    }).always(function (response) {
    });    
});


function auxGenerarGraficaSigmometria(){
    let text_area_grafico = $("#textarea-grafica-sigmometria"); 
    let id_referecia = $("#id_control_laboratorio").val();
    text_area_grafico.val($("#cont_graph_sigm")[0].toDataURL());

    $.post(
        "reporteFinalGraficaSigmometria",
        { 
            _token: $('meta[name="csrf-token"]').attr('content'),
            id: id_referecia,
            grafico: text_area_grafico.val(),
            fecha_inicial: $("#fecha_inicial").val(),
            fecha_final: $("#fecha_final").val()
        }
    ).done(function(id_document){
        window.location.href = "SeeReportGraficaSigmometria?referencia=" + id_document;
    }).fail(function(response){
        if(gestionErroresBackend(response)){
        } else {
            notificacion("normal", "error", "Error al generar el reporte en PDF");
        }
    }).always(function(cscsdfergq){
    });
}