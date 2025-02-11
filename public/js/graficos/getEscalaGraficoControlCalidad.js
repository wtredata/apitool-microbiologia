function getEscalaGraficoControlCalidad(tipo, arrayComparacion){
    
    switch(tipo){
        case "min":
            return Math.min.apply(null, arrayComparacion);
        case "max":
            return Math.max.apply(null, arrayComparacion);
    }
}