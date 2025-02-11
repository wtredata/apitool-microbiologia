function presenteContinuo(siVerbo,palabra){

    if(siVerbo == true){
        switch(palabra.toLowerCase()) {
            case "acceder":
                return "accediendo";
            case "guardar":
                return "guardando";
            case "registrar":
                return "registrando";
            case "exportar":
                return "exportando";
            case "asignar":
                return "asignando";
            case "actualizar":
                return "actualizando";
            case "agregar lote":
                return "agregando lote";
            case "agregar analito":
                return "agregando analito";
            case "agregar nuevo aps":
                return "agregando APS";
            case "agregar nuevo valor diana":
                return "agregando valor DIANA";
        }
    } else {
        switch(palabra.toLowerCase()) {
            case "accediendo":
                return "acceder";
            case "exportando":
                return "Exportar";
            case "guardando":
                return "guardar";
            case "actualizando":
                return "Actualizar";
            case "registrando":
                return "registrar";
            case "asignando":
                return "asignar";
            case "agregando lote":
                return "agregar lote";
            case "agregando analito":
                return "agregar analito";
            case "agregando aps":
                return "agregar nuevo aps";
            case "agregando valor diana":
                return "agregar nuevo valor DIANA";
        }
    }
    
}