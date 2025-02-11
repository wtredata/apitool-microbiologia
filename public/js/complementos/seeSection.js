function seeSection(containerMax, routeEventClear, moduleEvent, data_temporal_off, data_menu_item_select, data_reference, data_elements_changed, node, elementEvent = null){

    if(
        routeEventClear == "SeeSectionGraficaIntegrada" && 
        typeof data_reference == "undefined" &&
        typeof window.analito_node != "undefined"
    ){
        data_reference = window.analito_node.data.id_reference; // Cuando se desea generar la gráfica integrada desde el menu lateral
    } else if(
        routeEventClear == "SeeSectionResultado" &&
        typeof data_reference == "undefined" &&
        typeof window.analito_node != "undefined"
    ){
        data_reference = window.analito_node.data.id_reference;
    }


    if (
        routeEventClear == "SeeSectionResultado" &&
        $("body tr[data-tipo_fila=registro]").add($("body tr[data-tipo_fila=modificacion]")).length > 0
    ) { // Si el panel de resultados se encuentra activo y tiene información almacenada
        Swal.fire({
            title: "¿Está seguro de continuar?",
            text: "Abrir un nueva parrilla de datos, y existe un analito abierto que tiene información sin guardar...",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: 'rgba(78, 87, 93, 0.81)',
            confirmButtonText: 'Estoy seguro',
            focusConfirm: false,
            focusCancel: true
        }).then((result) => {
            if (result.value) {
                continuarFlujoSeeSection();
            } else {
                // Ocultar todos los items
                containerMax.children("div").hide();
                // Seleccionar el ítem indicado
                containerMax.find("." + routeEventClear).show();

                let sidebar_nav = $(".sidebar-nav");
                sidebar_nav.find("li.active").removeClass("active");
                sidebar_nav.find(data_menu_item_select).addClass("active");
                
                // La variable global debe ser igual a la del analito de la parrilla de datos
                window.analito_node = $("#tree_resultados").fancytree("getTree").getNodeByKey($("#resultado_analito_node").val());
            }
        });
    } else {
        continuarFlujoSeeSection();
    }


    
    function continuarFlujoSeeSection(){
        // Si existe el item indicado en la barra de navegacion y no se quiere recargar un modal
        if (containerMax.find("." + routeEventClear).length > 0 && data_temporal_off != true) {

            // Ocultar todos los items
            containerMax.children("div").hide();
            // Seleccionar el ítem indicado
            containerMax.find("." + routeEventClear).show();

            let sidebar_nav = $(".sidebar-nav");
            sidebar_nav.find("li.active").removeClass("active");
            sidebar_nav.find(data_menu_item_select).addClass("active");

        } else { // Si se desea recargar una seccion o dicha seccion NO existe

            containerMax.find("." + routeEventClear).remove();

            var uniqnumber = uniqid();
            notificacion("show", "info", "Cargando sección de " + nomLegibleSection(moduleEvent) + "...", "", uniqnumber);
            
            if(elementEvent != null){
                elementEvent.prop("disabled", true);
                elementEvent.addClass("cursor-cargando").addClass("disabled");
            }

            $.get(
                routeEventClear, {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    id_reference: data_reference,
                    id_analito_frontend: (typeof window.analito_node == "undefined") ? null : window.analito_node.data.id_reference,
                    fecha_inicial: window.fecha_inicial, 
                    fecha_final: window.fecha_final
                }
            ).done(function (response) {

                // Ocultar todos los items
                containerMax.children("div").hide();
                // Crea un sectino con la información
                containerMax.append(response);
                // Seleccionar el elemento deseado
                containerMax.find("." + routeEventClear).show();

                containerMax.find("." + routeEventClear).find("select").not(".exceptionSelect2").select2();
                containerMax.find("." + routeEventClear + " .formCreate").find("select").not(".exceptionSelect2").select2();

                middlewareEvent(containerMax.find("." + routeEventClear + " .btnEvent").add(containerMax.find("." + routeEventClear + " .formEvent")));

                eliminarModal($("#sectionModalsD .modal"));

                inputDates(); // Aciva los inputs tipo fecha

                // Si se requiere seleccionar un item del menu lateral
                let sidebar_nav = $(".sidebar-nav");
                sidebar_nav.find("li.active").removeClass("active");
                sidebar_nav.find(data_menu_item_select).addClass("active");

                // Activar los tooltips
                $("[data-bs-toggle='tooltip']").tooltip();
                switchSeeSection(moduleEvent, data_reference, node);

            }).fail(function (response) {
                if(gestionErroresBackend(response)){
                } else {
                    notificacion("normal", "error", "Error al cargar la sección de " + nomLegibleSection(moduleEvent));
                }

            }).always(function (sasas) {

                let elementsRefresh = data_elements_changed;
                if (elementsRefresh) {
                    arrayElements = elementsRefresh.split("&&&");
                    for (xs = 0; xs < arrayElements.length; xs++) {
                        $("#" + arrayElements[xs]).change();
                    }
                }

                notificacion("hide", "info", null, null, uniqnumber);
                
                if(elementEvent != null){
                    elementEvent.prop("disabled", false);
                    elementEvent.removeClass("cursor-cargando").removeClass("disabled");
                }
            });
        }
    }
}