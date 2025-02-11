function generarNovedadResultados(){

    let trs = $("#contenedor-resultados tr");
    let array_novedad_resultados = [];

    $.each(
        trs,
        function(index,val){
            if(typeof trs.eq(index).data("tipo_fila") != "undefined"){
                
                let serie = {};
                serie["tipo"] = trs.eq(index).data("tipo_fila");
                serie["comentario"] = trs.eq(index).find(".comentario-temp").val();
                serie["id_serie"] = ((typeof trs.eq(index).data("id_serie") == "undefined") ? null : (trs.eq(index).data("id_serie")));
                serie["fecha"] = trs.eq(index).find(".fecha").val();
                serie["resultados"] = [];
                
                let inputsResultado = trs.eq(index).find(".resultado");
                $.each(
                    inputsResultado,
                    function(index_sub, val_sub){
                        let resultado_sub = {};
                        resultado_sub["concentracion"] = inputsResultado.eq(index_sub).val();
                        resultado_sub["nivel"] = inputsResultado.eq(index_sub).data("nivel"); 
                        estadoVal = inputsResultado.eq(index_sub).next().prop("checked");
                        resultado_sub["estado"] = ((estadoVal == true) ? 1 : 0)                    
                        serie["resultados"].push(resultado_sub);
                    }
                );
                array_novedad_resultados.push(serie);

            }
        }
    );

    return array_novedad_resultados;
}

function generarNovedadResultadosCualitativo(){

    let trs = $("#contenedor-resultados-cualitativo tr");
    let array_novedad_resultados = [];

    $.each(
        trs,
        function(index,val){
            if(typeof trs.eq(index).data("tipo_fila") != "undefined"){
                
                let serie = {};
                serie["tipo"] = trs.eq(index).data("tipo_fila");
                serie["comentario"] = trs.eq(index).find(".comentario-temp").val();
                serie["id_serie"] = ((typeof trs.eq(index).data("id_serie") == "undefined") ? null : (trs.eq(index).data("id_serie")));
                serie["fecha"] = trs.eq(index).find(".fecha").val();
                serie["resultados"] = [];
                
                let inputsResultado = trs.eq(index).find(".resultado");
                $.each(
                    inputsResultado,
                    function(index_sub, val_sub){
                        let resultado_sub = {};
                        resultado_sub["concentracion"] = inputsResultado.eq(index_sub).val();
                        resultado_sub["nivel"] = inputsResultado.eq(index_sub).data("nivel"); 
                        estadoVal = inputsResultado.eq(index_sub).next().prop("checked");
                        resultado_sub["estado"] = ((estadoVal == true) ? 1 : 0)                    
                        serie["resultados"].push(resultado_sub);
                    }
                );
                array_novedad_resultados.push(serie);

            }
        }
    );
    return array_novedad_resultados;
}

function generarNovedadDefectoCualitativo(){

    let trs = $("#contenedor-titulos-resultados-cualitativo tr");
    let array_novedad_resultados = [];

    $.each(
        trs,
        function(index,val){
            if(typeof trs.eq(index).data("tipo_fila") != "undefined"){
                
                let analito_lab = {};
                analito_lab["tipo"] = trs.eq(index).data("tipo_fila");
  
                
                let inputsResultado = trs.eq(index).find(".resultado");
                const temp = [];
                $.each(
                    inputsResultado,
                    function(index_sub, val_sub){           
                        temp.push(inputsResultado.eq(index_sub).val());
                    }
                );
                    
                analito_lab["defecto_cualitativo"] = temp.join("*");

                array_novedad_resultados.push(analito_lab);

            }
        }
    );

    return array_novedad_resultados;
}