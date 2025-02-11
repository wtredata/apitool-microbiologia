function menuAnalitos(){
    $("#tree_resultados").fancytree({
        extensions: ["contextMenu"],
        source: {
            url: "GetTreeConfig",
            cache: false
        },
        contextMenu: {
            menu: function(node){
                let tipo_nodo = node.data.tipo_nodo;
                switch(tipo_nodo){
                    case "laboratorio":
                        return {
                            "configurar_lotes": { "name": "Configurar lotes", "icon": "icon-configuracion" }
                        };
                    case "lote":
                        return {
                            "configurar_analitos": { "name": "Configurar analitos", "icon": "icon-configuracion" },
                            "duplicar_lote": { "name": "Copiado de lote", "icon": "icon-duplicate" },
                            "exportar_graficas_integradas": { "name": "PDF Gráficas Integradas y estadísticos", "icon": "icon-export" },
                            "exportar_graficas_cualitativo": { "name": "PDF Gráficas Cualitativo", "icon": "icon-export" },
                        };
                    case "analito_cuantitativo":
                        return {
                            "grafica_integrada_analito_cuantitativo": { "name": "Generar gráfica integrada", "icon": "icon-grafica-integrada"}
                        };
                }
            },
            actions: function(node, action, options) {
                
                let id_reference,
                    routeEventClear,
                    elementEvent,
                    modal_movible,
                    modal_tamanodinamico;
                
                switch(action){
                    case "configurar_lotes":
                        id_reference = node.data.id_reference;
                        routeEventClear = "ControlLaboratorio";
                        elementEvent = null;
                        modal_movible = true;
                        modal_tamanodinamico = false;
                        dinamicModal(id_reference, routeEventClear, elementEvent, modal_movible, modal_tamanodinamico);
                        break;

                    case "configurar_analitos":
                        id_reference = node.data.id_reference;
                        routeEventClear = "AnalitoLaboratorio";
                        elementEvent = null;
                        modal_movible = true;
                        modal_tamanodinamico = false;
                        dinamicModal(id_reference, routeEventClear, elementEvent, modal_movible, modal_tamanodinamico);
                        break;

                    case "duplicar_lote":
                        id_reference = node.data.id_reference;
                        routeEventClear = "CopiarLote";
                        elementEvent = null;
                        modal_movible = true;
                        modal_tamanodinamico = false;
                        dinamicModal(id_reference, routeEventClear, elementEvent, modal_movible, modal_tamanodinamico);
                        break;

                    case "exportar_graficas_integradas":
                        id_reference = node.data.id_reference;
                        routeEventClear = "ExportarGraficasIntegradas";
                        elementEvent = null;
                        modal_movible = true;
                        modal_tamanodinamico = false;
                        dinamicModal(id_reference, routeEventClear, elementEvent, modal_movible, modal_tamanodinamico);
                        break;

                    case "exportar_graficas_cualitativo":
                        id_reference = node.data.id_reference;
                        routeEventClear = "ExportarGraficasCualitativo";
                        elementEvent = null;
                        modal_movible = true;
                        modal_tamanodinamico = false;
                        dinamicModal(id_reference, routeEventClear, elementEvent, modal_movible, modal_tamanodinamico);
                        break;


                    case "grafica_integrada_analito_cuantitativo":
                        containerMax = $("#containerMax");
                        routeEventClear = "SeeSectionGraficaIntegrada";
                        moduleEvent = "GraficaIntegrada"
                        data_temporal_off = true;
                        data_menu_item_select = "#li_sidebar_grafica";
                        data_reference = node.data.id_reference;
                        data_elements_changed = "";
                        seeSection(containerMax, routeEventClear, moduleEvent, data_temporal_off, data_menu_item_select, data_reference, data_elements_changed, node);
                        $("#panel-lateral-analitos").modal("hide");
                        break;
                }
            }
        },
        lazyLoad: function (event, data) {
            var node = data.node;

            data.result = {
                url: "GetTreeConfig",
                data: {
                    id_reference: node.data.id_reference,
                    tipo_subitem: node.data.tipo_subitem
                }
            }
        },
        dblclick: function (event, data) {
            node = data.node;
            
            if (node.data.tipo_nodo == "analito_cuantitativo") {
                if($(".SeeSectionGraficaIntegrada").is(':visible')){ // Si el panel de grafico esta abierto
                    containerMax = $("#containerMax");
                    routeEventClear = "SeeSectionGraficaIntegrada";
                    moduleEvent = "GraficaIntegrada"
                    data_temporal_off = true;
                    data_menu_item_select = "#li_sidebar_grafica";
                    data_reference = node.data.id_reference;
                    data_elements_changed = "";
                    seeSection(containerMax, routeEventClear, moduleEvent, data_temporal_off, data_menu_item_select, data_reference, data_elements_changed, node);
                } else if($(".SeeSectionResultado").is(':visible')){ // Si el panel de grafico esta abierto
                    abrirAnalito(node);
                } if($(".SeeSectionResultadoCualitativo").is(':visible')){ // Si el panel de grafico esta abierto
                    abrirAnalitoCualitativo(node);
                }
            }
        }
    });  
}