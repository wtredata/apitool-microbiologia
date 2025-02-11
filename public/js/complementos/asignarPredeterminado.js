function asignarPredeterminado(moduleEvent, elementEvent, tablesLiged, objjson){

    Swal.fire({
        title: '¿Está seguro de definir un nuevo valor predeterminado como ' + nomLegibleSection(moduleEvent) + '?',
        text: "Esto actualizará los valores estadísticos del analito especificado",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: 'rgba(78, 87, 93, 0.81)',
        confirmButtonText: 'Si, predefinir!',
        focusConfirm: false,
        focusCancel: true
    }).then((result) => {
        if (result.value) {
            uniqnumber = uniqid();
            notificacion("show","info","Asignando valor predeterminado como " + nomLegibleSection(moduleEvent) + "...",null,uniqnumber);
            
            $.post(
                "AsignarPredeterminado" + moduleEvent,
                {
                    id: elementEvent.data("reference"),
                    _token: $('meta[name="csrf-token"]').attr('content')
                }
            ).done(function (response) {
        
                switch(moduleEvent){
                    case "Error":
                        informacionValoresEstadisticos($("#contenedor-valores-estadisticos"));
                        indexLoad(moduleEvent, tablesLiged, objjson);
                        break;
                    case "DIANA":
                        informacionValoresEstadisticos($("#contenedor-valores-estadisticos"));
                        indexLoad(moduleEvent, tablesLiged, objjson);
                        break;
                }
        
            }).fail(function (response) {
                if(gestionErroresBackend(response)){
                } else {
                    notificacion("normal","error","Error asignando un valor predeterminado como " + nomLegibleSection(moduleEvent));
                }
            }).always(function (sdcsdFsdfsdF) {
                notificacion("hide","info",null,null,uniqnumber);
            }); 
        }
    });
}