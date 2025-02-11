function switchUpdate(moduleEvent, campo){
    switch(moduleEvent){
        case "Error":
            switch(campo){
                case "valor_limite":
                    informacionValoresEstadisticos($("#contenedor-valores-estadisticos"));
                    break;
            }
            break;
        case "DIANA":
            switch(campo){
                case "valor":
                    informacionValoresEstadisticos($("#contenedor-valores-estadisticos"));
                    break;
            }
            break;
    }
}