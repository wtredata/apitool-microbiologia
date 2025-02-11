function switchDestroy(moduleEvent){
    switch(moduleEvent){
        case "Error":
            informacionValoresEstadisticos($("#contenedor-valores-estadisticos"));
            break;
        case "DIANA":
            informacionValoresEstadisticos($("#contenedor-valores-estadisticos"));
            break;
    }
}