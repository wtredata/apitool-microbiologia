function validacionResultados(){
    
    let trs = $("#contenedor-resultados tr");
    let trAct;

    for(i=0; i<trs.length; i++){

        trAct = trs.eq(i);

        if(verificarFilaVacia(trAct)){ // Verificación de que minimo un campo este diligenciado
            return false;
        } else if(verificarLimite(trAct)) { // Validacion de limites de enteros y decimales
            return false;
        } 
    }

    return true;
}

function validacionResultadosCualitativo(){
    
    let trs = $("#contenedor-resultados-cualitativo tr");
    let trAct;

    for(i=0; i<trs.length; i++){

        trAct = trs.eq(i);

        if(verificarFilaVaciaCualitativo(trAct)){ // Verificación de que minimo un campo este diligenciado
            return false;
        }
    }

    return true;
}

function verificarFilaVaciaCualitativo(fila){
    let inputsVacios = 0;
    let inputsResultados = fila.find(".resultado");

    for(xf=0; xf<inputsResultados.length; xf++){
        if(inputsResultados.eq(xf).val() == ""){
            inputsVacios++;
        }
    }

    if(inputsVacios == inputsResultados.length && inputsVacios != 0){
        enfocarGestionCualitativo(fila, inputsResultados.eq(0));
        notificacion("normal", "warning", "Serie vacía", "Debe ingresar mínimo un resultado por cada fila o serie");
        return true;
    }
}


function verificarFilaVacia(fila){
    let inputsVacios = 0;
    let inputsResultados = fila.find(".resultado");

    for(xf=0; xf<inputsResultados.length; xf++){
        if(inputsResultados.eq(xf).val() == ""){
            inputsVacios++;
        }
    }

    if(inputsVacios == inputsResultados.length && inputsVacios != 0){
        enfocarGestion(fila, inputsResultados.eq(0));
        notificacion("normal", "warning", "Serie vacía", "Debe ingresar mínimo un resultado por cada fila o serie");
        return true;
    }
}

/*function verificarNumerosNegativos(fila){

    let inputsResultados = fila.find(".resultado");

    for(xf=0; xf<inputsResultados.length; xf++){
        if(parseFloat(inputsResultados.eq(xf).val()) < 0){
            enfocarGestion(fila, inputsResultados.eq(xf));
            notificacion("normal", "warning", "Valor negativo", "Debe ingresar un valor positivo");
            return true;
        }
    }
}*/

function verificarLimite(fila){
/*
    let inputsResultados = fila.find(".resultado");

    for(xf=0; xf<inputsResultados.length; xf++){

        if(parseFloat(inputsResultados.eq(xf).val()) > 99999){

            enfocarGestion(fila, inputsResultados.eq(xf));
            notificacion("normal", "warning", "Valor demasiado grande", "El valor máximo es 99999");
            return true;
        }
    }
*/

}


function enfocarGestion(filaDeterminada, campo) {
    campo.focus();
    filaDeterminada.addClass("validado-error");
    campo.addClass("input-validado-error");
    eventoEliminarFocoTR();
}


function eventoEliminarFocoTR(){
    var trAct = $("#contenedor-resultados .validado-error");
    var inputs = trAct.find(".btnEvent");
    inputs.on("change", eliminarEnfoque);

    function eliminarEnfoque() {
        trAct.removeClass("validado-error");
        inputs.removeClass("input-validado-error");
        inputs.off("change", eliminarEnfoque);
    } 
}

function enfocarGestionCualitativo(filaDeterminada, campo) {
    campo.focus();
    filaDeterminada.addClass("validado-error");
    campo.addClass("input-validado-error");
    eventoEliminarFocoTRCualitativo();
}


function eventoEliminarFocoTRCualitativo(){
    var trAct = $("#contenedor-resultados-cualitativo .validado-error");
    var inputs = trAct.find(".btnEvent");
    inputs.on("change", eliminarEnfoque);

    function eliminarEnfoque() {
        trAct.removeClass("validado-error");
        inputs.removeClass("input-validado-error");
        inputs.off("change", eliminarEnfoque);
    } 
}