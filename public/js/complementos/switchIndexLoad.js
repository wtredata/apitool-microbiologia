function switchIndexLoad(section, dinamicTable){
    switch(section){
        case "ControlLaboratorio":
            tablaDinamica(
                dinamicTable,
                { autoWidth: false, order: [], aaSorting: [], paging: false}
            );
            
            break;
        case "AnalitoLaboratorio":
            tablaDinamica(
                dinamicTable,
                { autoWidth: false, order: [], aaSorting: [], paging: false}
            );  
            break;
        case "Error":
            tablaDinamica(
                dinamicTable,
                { autoWidth: false, order: [], aaSorting: [], paging: false}
            );

            informacionValoresEstadisticos($("#contenedor-valores-estadisticos"));

            break;
        case "DIANA":
            tablaDinamica(
                dinamicTable,
                { autoWidth: false, order: [], aaSorting: [], paging: false}
            );
            informacionValoresEstadisticos($("#contenedor-valores-estadisticos"));

            break;
        case "Institucion":
            seeListLite($(".sedeInstitucionAssigned"), null, "Institucion", "SeeListInstitucion");
            tablaDinamica(
                dinamicTable
            );
            break;

        case "Sede":
            seeListLite($(".laboratorioSedeAssigned"), null, "Sede", "SeeListSede");
            tablaDinamica(
                dinamicTable
            );
            break;
        case "Matriz":
            seeListLite($(".controlMatrizAssigned"), null, "Matriz", "SeeListMatriz");
            tablaDinamica(
                dinamicTable
            );
            break;
        case "Pais":
            seeListLite($(".ciudadPaisAssigned"), null, "Pais", "SeeListPais");
            tablaDinamica(
                dinamicTable
            );
            break;
        case "Proveedor":
            seeListLite($(".controlProveedorAssigned"), null, "Proveedor", "SeeListProveedor");
            tablaDinamica(
                dinamicTable
            );
            break;
        case "Control":
            seeListLite($(".loteControlAssigned"), null, "Control", "SeeListControl");
            tablaDinamica(
                dinamicTable
            );
            break;

        case "Ciudad":
            seeListLite($(".sedeCiudadAssigned"), null, "Ciudad", "SeeListCiudad");
            tablaDinamica(
                dinamicTable
            );
            break;
        case "FuenteETMP":
            seeListLite($(".variabilidadBiologicaFuenteETMPAssigned"), null, "FuenteETMP", "SeeListFuenteETMP");
            tablaDinamica(
                dinamicTable
            );
            break;

        case "Analito":
            seeListLite($(".variabilidadBiologicaAnalitoAssigned"), null, "Analito", "SeeListAnalito");
            tablaDinamica(
                dinamicTable
            );
            break;
        default:
            tablaDinamica(
                dinamicTable
            );
            break;
    }
}