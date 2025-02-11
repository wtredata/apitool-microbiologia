function switchDinamicModal(routeEventClear){
    switch (routeEventClear) {
        case "ControlLaboratorio":
            
            $("#sectionModalsD .modal").modal({backdrop: 'static',keyboard: false,show: true});

            $(".modal-backdrop").eq(1).addClass("bg-transparent");
            
            tablaDinamica(
                $("#sectionModalsD .dinamicTable"),
                { autoWidth: false, order: [], aaSorting: [], paging: false}
            );

            switchSelect2($("#control_lab_lote"), "ControlLaboratorio");

            break;
        
        case "ControlConfiguracionMedios":
            
            $("#sectionModalsD .modal").modal({backdrop: 'static',keyboard: false,show: true});

            $(".modal-backdrop").eq(1).addClass("bg-transparent");
            
            tablaDinamica(
                $("#sectionModalsD .dinamicTable"),
                { autoWidth: false, order: [], aaSorting: [], paging: false}
            );

            switchSelect2($("#control_lab_medio"), "ControlConfiguracionMedios");

            break;
        
        case "ControlConfiguracionTinciones":
            
            $("#sectionModalsD .modal").modal({backdrop: 'static',keyboard: false,show: true});

            $(".modal-backdrop").eq(1).addClass("bg-transparent");
                
            tablaDinamica(
                    $("#sectionModalsD .dinamicTable"),
                    { autoWidth: false, order: [], aaSorting: [], paging: false}
                );

                switchSelect2($("#control_lab_tincion"), "ControlConfiguracionTinciones");

            break;
        
        case "ControlConfiguracionPruebas":
            
            $("#sectionModalsD .modal").modal({backdrop: 'static',keyboard: false,show: true});
    
            $(".modal-backdrop").eq(1).addClass("bg-transparent");
                
            tablaDinamica(
                    $("#sectionModalsD .dinamicTable"),
                    { autoWidth: false, order: [], aaSorting: [], paging: false}
                );
    
                switchSelect2($("#control_lab_prueba"), "ControlConfiguracionPruebas");
    
                break;
                

        case "ControlConfiguracionMediosCepa":
            
            $("#sectionModalsD .modal").modal({backdrop: 'static',keyboard: false,show: true});

            $(".modal-backdrop").eq(1).addClass("bg-transparent");
            
            tablaDinamica(
                $("#sectionModalsD .dinamicTable"),
                { autoWidth: false, order: [], aaSorting: [], paging: false}
            );

            switchSelect2($("#control_lab_cepa"), "ControlConfiguracionMediosCepa");

            break;

    case "ControlConfiguracionTincionesCepa":
            
            $("#sectionModalsD .modal").modal({backdrop: 'static',keyboard: false,show: true});

            $(".modal-backdrop").eq(1).addClass("bg-transparent");
            
            tablaDinamica(
                $("#sectionModalsD .dinamicTable"),
                { autoWidth: false, order: [], aaSorting: [], paging: false}
            );

            switchSelect2($("#control_lab_cepa2"), "ControlConfiguracionTincionesCepa");

            break;

        case "AnalitoLaboratorio":
            
            $("#sectionModalsD .modal").modal({backdrop: 'static',keyboard: false,show: true});
            
            $(".modal-backdrop").eq(1).addClass("bg-transparent");

            tablaDinamica(
                $("#sectionModalsD .dinamicTable"),
                { autoWidth: false, order: [], aaSorting: [], paging: false}
            );

            switchSelect2($("#analito_lab_analito"), "AnalitoLaboratorio");
            switchSelect2($("#analito_lab_analizador"), "Analizador");
            switchSelect2($("#analito_lab_reactivo"), "Reactivo");
            switchSelect2($("#analito_lab_metodologia"));
            switchSelect2($("#analito_lab_unidades"));
            switchSelect2($("#analito_lab_temperatura"));

            break;

        case "Error":
        
            $("#sectionModalsD .modal").modal({backdrop: 'static',keyboard: false,show: true});
            
            $(".modal-backdrop").eq(1).addClass("bg-transparent");
            
            switchSelect2($("#aps_aps"));

            tablaDinamica(
                $("#sectionModalsD .dinamicTable"),
                { autoWidth: false, order: [], aaSorting: [], paging: false}
            );

            break;

        case "DIANA":
    
            $("#sectionModalsD .modal").modal({backdrop: 'static',keyboard: false,show: true});
            $(".modal-backdrop").eq(1).addClass("bg-transparent");

            tablaDinamica(
                $("#sectionModalsD .dinamicTable"),
                { autoWidth: false, order: [], aaSorting: [], paging: false}
            );

            break;

        case "AsignacionAnalito":

            $("#sectionModalsD .modal").modal({backdrop: 'static',keyboard: false,show: true});
            $(".modal-backdrop").eq(1).addClass("bg-transparent");

            break;

        case "AsignacionUsuario":

            $("#sectionModalsD .modal").modal({backdrop: 'static',keyboard: false,show: true});
            $(".modal-backdrop").eq(1).addClass("bg-transparent");
            
            break;

        case "ActualizacionPass":

            $("#sectionModalsD .modal").modal({backdrop: 'static',keyboard: false,show: true});
            $(".modal-backdrop").eq(1).addClass("bg-transparent");
            
            break;

        case "CopiarLote":

            $("#sectionModalsD .modal").modal({backdrop: 'static',keyboard: false,show: true});
            $(".modal-backdrop").eq(1).addClass("bg-transparent");
            switchSelect2($("#lote_nuevo_copiado_lote"));
            
            break;
        default:

            $("#sectionModalsD .modal").modal({backdrop: 'static',keyboard: false,show: true});
            $(".modal-backdrop").eq(1).addClass("bg-transparent");
            inputDates($("#sectionModalsD").find('.fecha_digitacion'),"basico_hora");
            break;
    }
}