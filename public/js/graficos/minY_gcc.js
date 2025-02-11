function minY_gcc(r_procesados,lvl_i, window_response){

    let array_comparacion = [
        (function(){ // Obtiene el menor de los resultados
            if(typeof r_procesados != "undefined"){  
                let resultados = r_procesados.map(function(resultado){
                    return resultado.concentracion;
                });
                return (Math.min.apply(null, resultados));
            } else {
                return null;
            }
        }())
    ];

    if(
        window_response.valores_estadisticos[lvl_i].media != null &&
        window_response.valores_estadisticos[lvl_i].de != null
    ){
        array_comparacion.push(parseFloat((window_response.valores_estadisticos[lvl_i].media)) - (parseFloat(window_response.valores_estadisticos[lvl_i].de) * 3));
    }

    if(
        window_response.valores_estadisticos[lvl_i].diana != null &&
        window_response.limite_aps != null
    ){
        array_comparacion.push(parseFloat((window_response.valores_estadisticos[lvl_i].diana)) - ((parseFloat(window_response.limite_aps.valor_limite) / 100) * parseFloat(window_response.valores_estadisticos[lvl_i].diana)));
    }
    
    return getEscalaGraficoControlCalidad("min", array_comparacion);
}

