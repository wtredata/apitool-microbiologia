function abrirAnalito(node){

    if ($("body tr[data-tipo_fila=registro]").add($("body tr[data-tipo_fila=modificacion]")).length > 0) {
        Swal.fire({
            title: "¿Está seguro de continuar?",
            text: "Puede que los cambios del analito en pantalla, no se guarden...",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: 'rgba(78, 87, 93, 0.81)',
            confirmButtonText: 'Estoy seguro',
            focusConfirm: false,
            focusCancel: true
        }).then((result) => {
            if (result.value) {
                continuacionFlujoAbrirAnalito(node);
            }
        });
    } else {
        continuacionFlujoAbrirAnalito(node);
    }
}


function continuacionFlujoAbrirAnalito(node){
    window.analito_node = node;
    node.setActive();
    let informacion_guardada = true;
    if(informacion_guardada){ // Verificar si hay informacion por guardar mas adelante
        informacionAnalito($("#informacion_analito"));
        informacionTituloResultados();
        informacionResultados();
        informacionValoresEstadisticos($("#contenedor-valores-estadisticos"));
        $("#panel-lateral-analitos").modal("hide");
        $("#resultado_analito_node").val(window.analito_node.key);
    }
}

function abrirAnalitoCualitativo(node){

    if ($("body tr[data-tipo_fila=registro]").add($("body tr[data-tipo_fila=modificacion]")).length > 0) {
        Swal.fire({
            title: "¿Está seguro de continuar?",
            text: "Puede que los cambios del analito en pantalla, no se guarden...",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: 'rgba(78, 87, 93, 0.81)',
            confirmButtonText: 'Estoy seguro',
            focusConfirm: false,
            focusCancel: true
        }).then((result) => {
            if (result.value) {
                continuacionFlujoAbrirAnalitoCualitativo(node);
            }
        });
    } else {
        continuacionFlujoAbrirAnalitoCualitativo(node);
    }
}


function continuacionFlujoAbrirAnalitoCualitativo(node){
    window.analito_node = node;
    node.setActive();
    let informacion_guardada = true;
    if(informacion_guardada){ // Verificar si hay informacion por guardar mas adelante
        informacionAnalito($("#informacion_analito_cualitativo"));
        informacionTituloResultadosCualitativo();
        informacionResultadosCualitativo();
        informacionValoresEstadisticosCualitativo($("#contenedor-valores-estadisticos-cualitativo"));
        $("#panel-lateral-analitos").modal("hide");
        $("#resultado_analito_node").val(window.analito_node.key);
    }
}