function nomLegibleSection(section){
    
    switch(section.toLowerCase()) {
        case "institucion":
            return "institución";
        case "ciudad":
            return "ciudad";
        case "segmentacion":
            return "segmentación";
        case "control":
            return "control";
        case "error":
            return "Valor de APS";
        case "controllaboratorio":
            return "Lote de laboratorio";
        case "analitolaboratorio":
            return "Analito de laboratorio";
        case "usuariopass":
            return "contraseña para el usuario especificado";
        case "lote":
            return "lote";
        case "analitoespecifico":
            return "analito";
        case "usuario_laboratorio":
            return "laboratorios de usuario";
        case "constante":
            return "constante Z";
        case "usuario_permiso":
            return "permisos de usuario";
        case "menuinput":
            return "analitos de laboratorio";
        case "institucion_funcionalidad":
            return "funcionalidades de institución";
        case "usuario":
            return "usuario";
        case "analito":
            return "analito";
        case "analito_control":
            return "Analito de control";
        case "corridaarea":
            return "proyecto";
        case "corridaanalito":
            return "Analito de comparación";
        case "sede":
            return "sede";
        case "usuario":
            return "usuario";
        default:
            return section;
    }
    
}