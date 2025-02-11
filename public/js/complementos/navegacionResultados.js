function navegacionResultados(elementEvent, keyCode){
    switch(keyCode){
        case 13: // Tecla Enter
            elementoSiguiente = getInput("siguiente", elementEvent);
            if(elementoSiguiente != null){ // Selecciona el siguiente (fecha, resultado, aprobacion)
                elementoSiguiente.focus();
                if(elementoSiguiente.hasClass("resultado") || elementoSiguiente.hasClass("fecha")){elementoSiguiente.textrange("set") };
            } else if(!elementEvent.hasClass("eliminar")){ // Si no existen mas, se agregara una nueva fila
                agregarFilaResultados();
                elementoSiguiente = getInput("siguiente", elementEvent);
                elementoSiguiente.focus();
                if(elementoSiguiente.hasClass("resultado") || elementoSiguiente.hasClass("fecha")){elementoSiguiente.textrange("set") };
            }
            break;

        case 37: // Izquierda
            elementAnterior = getInput("izquierda", elementEvent);
            if(elementAnterior != null){ // Selecciona el siguiente
                elementAnterior.focus();
                if(elementAnterior.hasClass("resultado") || elementAnterior.hasClass("fecha")){elementAnterior.textrange("set") };
            }
            break;

        case 39: // Derecha
            elementDerecha = getInput("derecha", elementEvent);
            if(elementDerecha != null){ // Selecciona el siguiente
                elementDerecha.focus();
                if(elementDerecha.hasClass("resultado") || elementDerecha.hasClass("fecha")){elementDerecha.textrange("set") };
            }
            break;

        case 38: // Arriba
            elementArriba = getInput("arriba", elementEvent);
            if(elementArriba != null){ // Selecciona al de arriba
                elementArriba.focus();
                if(elementArriba.hasClass("resultado") || elementArriba.hasClass("fecha")){elementArriba.textrange("set") };
            }
            break;

        case 40: // Abajo
            elementAbajo = getInput("abajo", elementEvent);
            if(elementAbajo != null){ // Selecciona al de arriba
                elementAbajo.focus();
                if(elementAbajo.hasClass("resultado") || elementAbajo.hasClass("fecha")){elementAbajo.textrange("set") };
            }
            break;
    }
}


function getInput(direccion, elementEvent){


    switch(direccion){
        case "siguiente":
            if(elementEvent.hasClass("fecha")){
                return elementEvent.parent().next().find(".resultado");
            } else if(elementEvent.hasClass("resultado")){
                return elementEvent.next();
            } else if(elementEvent.hasClass("aprobacion")){
                concentracionSiguiente = elementEvent.parent().next().find(".resultado");
                if(concentracionSiguiente.length == 0){ // Seleccionar la fecha de arriba
                    fechaArriba = elementEvent.parent().parent().prev().find(".fecha").eq(0);
                    if(fechaArriba.length == 0){
                        return null;
                    } else {
                        return fechaArriba;
                    }
                } else {
                    return concentracionSiguiente;
                }
            }
            break;


            case "izquierda":
                if(elementEvent.hasClass("resultado")){
                    if(elementEvent.textrange().position == 0){
                        aprobacionAnterior = elementEvent.parent().prev().find(".aprobacion");   
                        if(aprobacionAnterior.length == 0){ // Si no hay ninguna aprobacion
                            return elementEvent.parent().prev().find(".fecha");
                        } else {
                            return aprobacionAnterior;
                        }
                    }
                } else if(elementEvent.hasClass("aprobacion")){
                    return elementEvent.prev();
                } else if(elementEvent.hasClass("eliminar")){
                    return elementEvent.parent().prev().find(".aprobacion");
                }
                break;


            case "derecha":
                if(elementEvent.hasClass("fecha")){
                    if(elementEvent.textrange().position == elementEvent.val().length){
                        return elementEvent.parent().next().find(".resultado");
                    }
                } else if(elementEvent.hasClass("resultado")){
                    if(elementEvent.textrange().position == elementEvent.val().length){
                        return elementEvent.next();
                    }
                } else if(elementEvent.hasClass("aprobacion")){
                    resultadoSiguiente = elementEvent.parent().next().find(".resultado");   
                    if(resultadoSiguiente.length == 0){ // Si no hay ninguna aprobacion
                        return elementEvent.parent().next().find(".eliminar");
                    } else {
                        return resultadoSiguiente;
                    }
                }
                break;


            case "arriba":
                if(elementEvent.hasClass("fecha")){
                    if(elementEvent.textrange().position == 0){
                        fechaArriba = elementEvent.parent().parent().prev().find(".fecha");   
                        if(fechaArriba.length != 0){ // Si no hay ninguna aprobacion
                            return fechaArriba;
                        }
                    }
                } else if(elementEvent.hasClass("resultado")){
                    if(elementEvent.textrange().position == 0){
                        camposResultado = elementEvent.parent().parent().find(".resultado");
                        index = camposResultado.index(elementEvent);
                        resultadoArriba = elementEvent.parent().parent().prev().find(".resultado").eq(index);   
                        if(resultadoArriba.length != 0){ // Si no hay ninguna aprobacion
                            return resultadoArriba;
                        }
                    }
                } else if(elementEvent.hasClass("aprobacion")){
                    camposAprobacion = elementEvent.parent().parent().find(".aprobacion");
                    index = camposAprobacion.index(elementEvent);
                    aprobacionArriba = elementEvent.parent().parent().prev().find(".aprobacion").eq(index);   
                    if(aprobacionArriba.length != 0){ // Si no hay ninguna aprobacion
                        return aprobacionArriba;
                    }
                } else if(elementEvent.hasClass("eliminar")){
                    eliminarArriba = elementEvent.parent().parent().prev().find(".eliminar");   
                    if(eliminarArriba.length != 0){ // Si no hay ninguna aprobacion
                        return eliminarArriba;
                    }
                }
                break;


            case "abajo":
                if(elementEvent.hasClass("fecha")){
                    if(elementEvent.textrange().position == elementEvent.val().length){
                        fechaAbajo = elementEvent.parent().parent().next().find(".fecha");   
                        if(fechaAbajo.length != 0){ // Si no hay ninguna aprobacion
                            return fechaAbajo;
                        }
                    }
                } else if(elementEvent.hasClass("resultado")){
                    if(elementEvent.textrange().position == elementEvent.val().length){
                        camposResultado = elementEvent.parent().parent().find(".resultado");
                        index = camposResultado.index(elementEvent);
                        resultadoAbajo = elementEvent.parent().parent().next().find(".resultado").eq(index);   
                        if(resultadoAbajo.length != 0){ // Si no hay ninguna aprobacion
                            return resultadoAbajo;
                        }
                    }
                } else if(elementEvent.hasClass("aprobacion")){
                    camposAprobacion = elementEvent.parent().parent().find(".aprobacion");
                    index = camposAprobacion.index(elementEvent);
                    aprobacionAbajo = elementEvent.parent().parent().next().find(".aprobacion").eq(index);   
                    if(aprobacionAbajo.length != 0){ // Si no hay ninguna aprobacion
                        return aprobacionAbajo;
                    }
                } else if(elementEvent.hasClass("eliminar")){
                    eliminarAbajo = elementEvent.parent().parent().next().find(".eliminar");   
                    if(eliminarAbajo.length != 0){ // Si no hay ninguna aprobacion
                        return eliminarAbajo;
                    }
                }
                break;
    }

        /*
    let conjuntoTd;
    let indiceTd;
    let trHermanoAnt;

        case "derecha":
            let hermanoSiguiente = $(".td-enfocado").nextAll().filter(".btnEvent").eq(0); 
            if(hermanoSiguiente.length > 0){ // Si existe un hermano al lado derecho
                return hermanoSiguiente
            } else {
                let trHermano = $(".td-enfocado").parents("tr").next("tr");
                if(trHermano.length > 0){ // Si existe un hermnano TR
                    return trHermano.find("td").filter(".btnEvent").eq(0); // Toma el primer td del tr
                } else {
                    return false; // No encontro nada acontinuacion
                }
            }
            break;
        case "izquierda":

            let hermanoAnterior = $(".td-enfocado").prevAll().filter(".btnEvent").eq(0);
            if(hermanoAnterior.length > 0){ // Si existe un hermano al lado izquierdo
                return hermanoAnterior
            } else {
                let trHermanoAnt = $(".td-enfocado").parents("tr").prev("tr");
                if(trHermanoAnt.length > 0){ // Si existe un hermnano anterior TR
                    let hijosHermAnt = trHermanoAnt.find("td").filter(".btnEvent");
                    return hijosHermAnt.eq((hijosHermAnt.length-1)); // Toma el primer td del tr
                } else {
                    return false; // No encontro nada acontinuacion
                }
            }
            break;

        case "arriba":
            conjuntoTd = $(".td-enfocado").parents("tr").find("td");
            indiceTd = conjuntoTd.index($(".td-enfocado"));
            trHermanoAnt = $(".td-enfocado").parents("tr").prev("tr");
            if(trHermanoAnt.length > 0){ // Si existe un hermnano anterior TR
                return trHermanoAnt.find("td").eq(indiceTd); // Toma el primer td del tr
            } else {
                return false; // No encontro nada acontinuacion
            }
            break;

        case "abajo":
            conjuntoTd = $(".td-enfocado").parents("tr").find("td");
            indiceTd = conjuntoTd.index($(".td-enfocado"));
            trHermano = $(".td-enfocado").parents("tr").next("tr");
            if(trHermano.length > 0){ // Si existe un hermnano anterior TR
                return trHermano.find("td").eq(indiceTd); // Toma el primer td del tr
            } else {
                return false; // No encontro nada acontinuacion
            }
            break;
    }
    */
}