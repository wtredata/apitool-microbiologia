function switchSeeSection(moduleEvent, data_reference, node = null) {

    switch (moduleEvent) {
        case "Resultado":
            if($("#resultado_analito").val() != ""){
                abrirAnalito(window.analito_node);
            }
            tablaDinamica(
                $(".SeeSection" + moduleEvent + " .dinamicTable")
            );
            break;
        case "GraficaIntegrada":
            if($("#grafica_integrada_analito").val() != ""){
                informacionAnalito($("#informacion_analito_grafica"), data_reference);
                informacionValoresEstadisticos($("#contenedor-valores-estadisticos-grafica"), false, data_reference);
                generarGraficaIntegrada(data_reference);
                if(node != null) {
                    window.analito_node = node;
                }
            }
            tablaDinamica(
                $(".SeeSection" + moduleEvent + " .dinamicTable")
            );

            if(node != null){
                node.setActive();
            }
            break;

        case "Configuracion":
            $('.nav-tabs-per a').click(function(e){
                e.preventDefault();
                let contTabs = $(this).parents(".nav-tabs-per")
                let contTabsPane = contTabs.next(".cont-tab-pane-per");
                contTabsPane.find('.tab-pane-per').hide();
                contTabs.find("a.active").removeClass('active');
                $(this).addClass('active');
                var panel = $(this).attr('href');
                $(panel).fadeIn(200);
            });

            tablaDinamica($(".SeeSection" + moduleEvent + " .dinamicTable"));

            $.each($('.nav-tabs-per'),function(key, nav_tab_per){
                $(nav_tab_per).find("li").eq(0).find("a").click();
            });

            // Referescar campos de formualarios
            $(".ciudadPaisAssigned").change();
            $(".controlProveedorAssigned").change();
            $(".loteControlAssigned").change();
            $(".sedeInstitucionAssigned").change();
            $(".variabilidadBiologicaAnalitoAssigned").change();
            $(".analitoAreaAssigned").change();

            break;

        default:
            tablaDinamica(
                $(".SeeSection" + moduleEvent + " .dinamicTable")
            );
            break;
    }
}
