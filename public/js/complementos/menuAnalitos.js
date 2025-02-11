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
                            "configurar_lotes": { "name": "Configurar lotes", "icon": "icon-configuracion" },
                            "configurar_medios": { "name": "Configurar medios", "icon": "icon-configuracion" },
                            "configurar_tinciones": { "name": "Configurar tinciones", "icon": "icon-configuracion" },
                            "configurar_Pruebas": { "name": "Configurar pruebas", "icon": "icon-configuracion" }
                        };
                    case "lote":
                        return {
                            "configurar_analitos": { "name": "Configurar analitos", "icon": "icon-configuracion" },
                            "duplicar_lote": { "name": "Copiado de lote", "icon": "icon-duplicate" },
                            "exportar_graficas_integradas": { "name": "PDF Gráficas Integradas y estadísticos", "icon": "icon-export" },
                            "exportar_graficas_cualitativo": { "name": "PDF Gráficas Cualitativo", "icon": "icon-export" },
                        };
                    case "medio":
                        return {
                            "configurar_cepa": { "name": "Configurar cepa", "icon": "icon-configuracion" }
                        };
                    case "tincion":
                        return {
                            "configurar_cepa2": { "name": "Configurar cepa2", "icon": "icon-configuracion" }
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
                    case "configurar_medios":
                        id_reference = node.data.id_reference;
                        routeEventClear = "ControlConfiguracionMedios";
                        elementEvent = null;
                        modal_movible = true;
                        modal_tamanodinamico = false;
                        dinamicModal(id_reference, routeEventClear, elementEvent, modal_movible, modal_tamanodinamico);
                        break;
                    case "configurar_cepa":
                        id_reference = node.data.id_reference;
                        routeEventClear = "ControlConfiguracionMediosCepa";
                        elementEvent = null;
                        modal_movible = true;
                        modal_tamanodinamico = false;
                        dinamicModal(id_reference, routeEventClear, elementEvent, modal_movible, modal_tamanodinamico, node.data.id_laboratorio);
                        break;
                    case "configurar_tinciones":
                        id_reference = node.data.id_reference;
                        routeEventClear = "ControlConfiguracionTinciones";
                        elementEvent = null;
                        modal_movible = true;
                        modal_tamanodinamico = false;
                        dinamicModal(id_reference, routeEventClear, elementEvent, modal_movible, modal_tamanodinamico);
                        break;
                    case "configurar_cepa2":
                            id_reference = node.data.id_reference;
                            routeEventClear = "ControlConfiguracionTincionesCepa";
                            elementEvent = null;
                            modal_movible = true;
                            modal_tamanodinamico = false;
                            dinamicModal(id_reference, routeEventClear, elementEvent, modal_movible, modal_tamanodinamico, node.data.id_laboratorio);
                            break;
                    case "configurar_Pruebas":
                        id_reference = node.data.id_reference;
                        routeEventClear = "ControlConfiguracionPruebas";
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
                    id_laboratorio: node.data?.id_laboratorio,
                    tipo_subitem: ($(".SeeSectionResultadoMicrobiologia").length > 0 && $(".SeeSectionResultadoMicrobiologia").is(":visible")) ? "medios" : $(".SeeSectionResultadoTinciones").length > 0 ? "tinciones" : node.data.tipo_subitem
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

            if (node.data.tipo_nodo == "cepa") {
                window.analito_node = node;
                
                node.setActive();
                cont_info_analito = $("#informacion_cepa");

                let spinner_ld = $('<span class="spinner-border spinner-border-sm text-primary" role="status"></span>');
                let msg_error = $('<span class="text-danger" role="status">Error</span>');

                cont_info_analito.find(".laboratorio").html(spinner_ld.clone());
                cont_info_analito.find(".medio").html(spinner_ld.clone());
                cont_info_analito.find(".cepa").html(spinner_ld.clone());
                cont_info_analito.find(".lote").html(spinner_ld.clone());
                cont_info_analito.find(".fecha").html(spinner_ld.clone());

                
                $("#panel-lateral-analitos").modal("hide");

                $.get(
                    "ShowInfoCepaLaboratorio",
                    {
                        "id_reference": node.data.id_reference
                    }
                ).done(function(response){
            
                    if($(".SeeSectionResultado").is(':visible')){ // Si el panel de resultado esta abierto
                        alertaVencimientoLote(response);
                    }

                    cont_info_analito.find(".laboratorio").html(response.laboratorio);
                    cont_info_analito.find(".medio").html(response.medio);
                    cont_info_analito.find(".cepa").html(response.cepa);
                    cont_info_analito.find(".lote").html(response.lote);
                    cont_info_analito.find(".fecha").html(response.fecha);
            
                }).fail(function(response){
                    if(gestionErroresBackend(response)){
                    } else {
                        notificacion("normal", "error", "Error al listar la información del analito", "Por favor intente nuevamente...");
                    }
            
                    cont_info_analito.find(".laboratorio").html(msg_error.clone());
                    cont_info_analito.find(".area").html(msg_error.clone());
                    cont_info_analito.find(".matriz").html(msg_error.clone());
                    cont_info_analito.find(".control").html(msg_error.clone());
                    cont_info_analito.find(".lote").html(msg_error.clone());
                    cont_info_analito.find(".fecha_caducidad").html(msg_error.clone());
                    cont_info_analito.find(".analito").html(msg_error.clone());
                    cont_info_analito.find(".analizador").html(msg_error.clone());
                    cont_info_analito.find(".unidades").html(msg_error.clone());
                    cont_info_analito.find(".metodologia").html(msg_error.clone());
                    cont_info_analito.find(".reactivo").html(msg_error.clone());
                    cont_info_analito.find(".temperatura").html(msg_error.clone());
            
                }).always(function(response){
                });
            }
        }
    });  
}