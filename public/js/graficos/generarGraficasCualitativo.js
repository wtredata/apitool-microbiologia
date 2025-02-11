
function generarGraficasCualitativo() {


    let fecha_inicial = $("#fecha_inicial").val();
    let fecha_final = $("#fecha_final").val();
    let all_information = $("#all_information").val();
    let id_control_laboratorio = $("#id_control_laboratorio").val();
    console.log("generarGraficasCualitativo ~ all_information:", all_information)


        var datainfo = {
            fecha_inicial: fecha_inicial,
            fecha_final: fecha_final,
            control_laboratorio: id_control_laboratorio,
            all_information: all_information,
            _token: $("input[name=_token]").val()

        }

        $.ajax(
            {
                type : "POST",
                cache: false,
                url: "reporteFinalGraficasCualitativo",
                data: datainfo 
            }
        ).done(function(id_document){
            window.location.href = "SeeReportGraficasCualitativo?referencia=" + id_document;
        }).fail(function(response){
            if(gestionErroresBackend(response)){
            } else {
                notificacion("normal", "error", "Error al generar el reporte en PDF");
            }
        }).always(function(response){
            
        });

}
