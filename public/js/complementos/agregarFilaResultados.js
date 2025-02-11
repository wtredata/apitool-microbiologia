function agregarFilaResultados(){

    let tabla = $(".tabla-resultados").eq(0);
    let newTr = $("<tr data-tipo_fila='registro'></tr>");
    let tdConcentracion;
    let ancho_concentracion = 58 / window.analito_node.data.num_niveles;

    // Se insertan cada una de las columnas
    newTr.append("<td class='td-serie' style='width:8%'>-</td>"); // Serie
    newTr.append(
        "<td class='td-usuario' style='width:8%'>"+
            "Yo"+
            "<a href='#' class='btn-comentario align-middle btnEvent' data-event='click' data-route='ComentarioSerie' title='Ver y agregar comentarios'>"+
                "<img src='img/comentario.png'>"+
            "</a>"+
            "<input type='hidden' class='comentario-temp btnEvent' value='' data-event='change' data-route='CambioValorComentario'>"+
            "<input type='hidden' class='comentario-bd' value=''></input>"+
        "</td>"
    );
    newTr.append("<td class='td-fecha' style='width:18%'><input type='text' class='fecha btnEvent' data-mantener_predeterminados='true' data-event='keydown' data-route='NavegacionResultados'></td>"); // Fecha

    

    for(i=1; i<=window.analito_node.data.num_niveles; i++){
        
        newTr.append($(
            "<td class='td-resultado' style='width:"+ancho_concentracion+"%'>"+
                "<input type='text' class='resultado btnEvent' data-nivel='"+i+"' data-mantener_predeterminados='true' data-event='keydown&&&change' data-route='NavegacionResultados&&&CambioValorResultado'>"+
                "<input class='aprobacion form-check-input form-check-input-warning btnEvent' data-mantener_predeterminados='true' data-event='keydown' data-route='NavegacionResultados' type='checkbox' checked />"+
            "</td>")
        ); // Concentracion
    }

    newTr.append($("<td class='td-eliminacion' style='width:8%'>"+
        "<a href='#' title='Eliminar esta fila de resultados' class='eliminar btnEvent' data-event='click&&&keydown' data-route='DestroySerie&&&NavegacionResultados' data-mantener_predeterminados='true'>"+
            "<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none'" +
                "stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'" +
                "class='btn-eliminar align-middle'>" +
                "<polyline points='3 6 5 6 21 6'></polyline>" +
                "<path d='M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2'>" +
                "</path>" +
            "</svg>" +
        "</a>" +
    "</td>"));
    
    inputDates(newTr.find('.fecha'), "basico_hora", [{startDate: moment()}]);
    middlewareEvent(newTr.find(".btnEvent"));
    tabla.find("tbody").prepend(newTr);
}

function agregarFilaResultadosCualitativo(){
    var vecCualitativo = [];
    let tabla = $(".tabla-resultados-cualitativo").eq(0);
    $("select.resultado").eq(0).find("option").each(function(index, elemento) {
        var valorSeleccionado = $(elemento).val();
        vecCualitativo.push(valorSeleccionado);
    });

    let newTr = $("<tr data-tipo_fila='registro'></tr>");
    let tdConcentracion;
    let ancho_concentracion = 50 / window.analito_node.data.num_niveles;

    // Se insertan cada una de las columnas
    newTr.append("<td class='td-serie' style='width:8%'>-</td>"); // Serie
    newTr.append(
        "<td class='td-usuario' style='width:8%'>"+
            "Yo"+
        "</td>"
    );
    newTr.append(
        "<td class='td-usuario' style='width:8%'>"+
            "<a href='#' class='btn-comentario align-middle btnEvent' data-event='click' data-route='ComentarioSerie' title='Ver y agregar comentarios'>"+
                "<img src='img/comentario.png'>"+
            "</a>"+
            "<input type='hidden' class='comentario-temp btnEvent' value='' data-event='change' data-route='CambioValorComentario'>"+
            "<input type='hidden' class='comentario-bd' value=''></input>"+
        "</td>"
    );
    newTr.append("<td class='td-fecha' style='width:18%'><input type='text' class='fecha btnEvent' data-mantener_predeterminados='true' data-event='keydown' data-route='NavegacionResultados'></td>"); // Fecha

    //var vecCualitativo = ["NO REACTIVO1","REACTIVO","NEGATIVO","POSITIVO","PRESENTE","AUSENTE"]
    
    var options = "";
    for(vc=0; vc < vecCualitativo.length; vc++){
        options += "<option value='"+vecCualitativo[vc]+"'>"+vecCualitativo[vc]+"</option>";
    }

    for(i=1; i<=window.analito_node.data.num_niveles; i++){
        
        newTr.append($(
            "<td class='td-resultado' style='width:"+ancho_concentracion+"%'>"+
                "<select class='resultado btnEvent' data-nivel='"+i+"' data-mantener_predeterminados='true' data-event='keydown&&&change' data-route='NavegacionResultados&&&CambioValorResultadoCualitativo'>"+
                
                options+
                "</select>"+
                "<input class='aprobacion form-check-input form-check-input-warning btnEvent' data-mantener_predeterminados='true' data-event='keydown' data-route='NavegacionResultados' type='checkbox' checked />"+
            "</td>")
        ); // Concentracion
    }

    newTr.append($("<td class='td-eliminacion' style='width:8%'>"+
        "<a href='#' title='Eliminar esta fila de resultados' class='eliminar btnEvent' data-event='click&&&keydown' data-route='DestroySerie&&&NavegacionResultados' data-mantener_predeterminados='true'>"+
            "<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none'" +
                "stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'" +
                "class='btn-eliminar align-middle'>" +
                "<polyline points='3 6 5 6 21 6'></polyline>" +
                "<path d='M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2'>" +
                "</path>" +
            "</svg>" +
        "</a>" +
    "</td>"));
    
    inputDates(newTr.find('.fecha'), "basico_hora", [{startDate: moment()}]);
    middlewareEvent(newTr.find(".btnEvent"));
    tabla.find("tbody").prepend(newTr);
}

function agregarFilaResultadosMicrobiologia() {
    var vecCualitativo = [];
    let tabla = $(".tabla-resultados-microbiologia").eq(0);
    $("select.resultado").eq(0).find("option").each(function(index, elemento) {
        var valorSeleccionado = $(elemento).val();
        vecCualitativo.push(valorSeleccionado);
    });

    let newTr = $("<tr data-tipo_fila='registro'></tr>");
    let tdConcentracion;
    let ancho_concentracion = 50 / (window.analito_node?.data.num_niveles ?? 2);

    // Se insertan cada una de las columnas
    newTr.append("<td class='td-serie' style='width:8%'>-</td>"); // Serie
    newTr.append(
        "<td class='td-usuario' style='width:8%'>"+
            "Yo"+
        "</td>"
    );
    newTr.append(
        "<td class='td-usuario' style='width:8%'>"+
            "<a href='#' class='btn-comentario align-middle btnEvent' data-event='click' data-route='ComentarioSerie' title='Ver y agregar comentarios'>"+
                "<img src='img/comentario.png'>"+
            "</a>"+
            "<input type='hidden' class='comentario-temp btnEvent' value='' data-event='change' data-route='CambioValorComentario'>"+
            "<input type='hidden' class='comentario-bd' value=''></input>"+
        "</td>"
    );
    newTr.append("<td class='td-fecha' style='width:18%'><input type='text' class='fecha btnEvent' data-mantener_predeterminados='true' data-event='keydown' data-route='NavegacionResultados'></td>"); // Fecha

    //var vecCualitativo = ["NO REACTIVO1","REACTIVO","NEGATIVO","POSITIVO","PRESENTE","AUSENTE"]
    
    var options = "";
    for(vc=0; vc < vecCualitativo.length; vc++){
        options += "<option value='"+vecCualitativo[vc]+"'>"+vecCualitativo[vc]+"</option>";
    }

    for(i=1; i<=2; i++){
        
        newTr.append($(
            "<td class='td-resultado' style='width:"+ancho_concentracion+"%'>"+
                "<select class='resultado btnEvent' data-nivel='"+i+"' data-mantener_predeterminados='true' data-event='keydown&&&change' data-route='NavegacionResultados&&&CambioValorResultadoCualitativo'>"+
                
                options+
                "</select>"+
                "<input class='aprobacion form-check-input form-check-input-warning btnEvent' data-mantener_predeterminados='true' data-event='keydown' data-route='NavegacionResultados' type='checkbox' checked />"+
            "</td>")
        ); // Concentracion
    }

    newTr.append($("<td class='td-eliminacion' style='width:8%'>"+
        "<a href='#' title='Eliminar esta fila de resultados' class='eliminar btnEvent' data-event='click&&&keydown' data-route='DestroySerie&&&NavegacionResultados' data-mantener_predeterminados='true'>"+
            "<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none'" +
                "stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'" +
                "class='btn-eliminar align-middle'>" +
                "<polyline points='3 6 5 6 21 6'></polyline>" +
                "<path d='M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2'>" +
                "</path>" +
            "</svg>" +
        "</a>" +
    "</td>"));
    
    inputDates(newTr.find('.fecha'), "basico_hora", [{startDate: moment()}]);
    middlewareEvent(newTr.find(".btnEvent"));
    tabla.find("tbody").prepend(newTr);
}