function SaveAsignacion(moduleEvent, routeEventClear, elementEvent){

    let obj_final = {};
    let dataHTTP = {};

    switch(moduleEvent){
        case "Analito":
            let contAsignacionesMetodos = $("#pills-metodos");
            let contAsignacionesUnidades = $("#pills-unidades");
            let contAsignacionesTemperaturas = $("#pills-temperaturas");
            
            let inputsAssigMetodos = contAsignacionesMetodos.find("input.custom-control-input:checked");
            let inputsAssigUnidades = contAsignacionesUnidades.find("input.custom-control-input:checked");
            let inputsAssigTemperaturas = contAsignacionesTemperaturas.find("input.custom-control-input:checked");

            let result_assig_metodos = [];
            let result_assig_unidades = [];
            let result_assig_temperaturas = [];

            $.each(inputsAssigMetodos, function(index, val){
                result_assig_metodos.push($(val).val());
            });
            
            $.each(inputsAssigUnidades, function(index, val){
                result_assig_unidades.push($(val).val());
            });
            
            $.each(inputsAssigTemperaturas, function(index, val){
                result_assig_temperaturas.push($(val).val());
            });

            obj_final = {
                "id_analito": $("#analito_asignacion_general").val(),
                "metodos": result_assig_metodos,
                "unidades": result_assig_unidades,
                "temperaturas": result_assig_temperaturas
            };

            dataHTTP = {};
            dataHTTP._token = $('meta[name="csrf-token"]').attr('content');
            dataHTTP.obj_json = obj_final;

            $("#btn-guardar-assig-analito").prop("disabled",true);
            $("#btn-guardar-assig-analito").text("Guardando...");
            
            $.post(
                routeEventClear,
                dataHTTP
            ).done(function (response) {

                // Si la funcion lo require, cerrar el modal
                if (elementEvent.data("close_modal") == true) {
                    eliminarModal($("#sectionModalsD .modal"));
                }

                notificacion("normal", "success", "Asignaciones realizadas de manera satisfactoria para el analito " + elementEvent.data("nom_analito"));

            }).fail(function (response) {

                if(gestionErroresBackend(response)){
                } else if (response.status == 422) { // Validaciones Backend
                    impresionError(form, response, "registrar");
                } else {
                    notificacion("normal", "error", "Almacenamiento fallido", "No se ha podido registrar la asingación de los valores");
                }

            }).always(function (responseAjax) {
                $("#btn-guardar-assig-analito").prop("disabled",false);
                $("#btn-guardar-assig-analito").text("Guardar");
            });

            break;

        case "Usuario":
            let contAsignacionesLaboratorios = $("#pills-laboratorios");
            
            let inputsAssigLaboratorios = contAsignacionesLaboratorios.find("input.custom-control-input:checked");
            
            let result_assig_laboratorios = [];
            
            $.each(inputsAssigLaboratorios, function(index, val){
                result_assig_laboratorios.push($(val).val());
            });
            

            obj_final = {
                "id_usuario": $("#usuario_asignacion_general").val(),
                "laboratorios": result_assig_laboratorios
            };

            dataHTTP = {};
            dataHTTP._token = $('meta[name="csrf-token"]').attr('content');
            dataHTTP.obj_json = obj_final;

            $("#btn-guardar-assig-analito").prop("disabled",true);
            $("#btn-guardar-assig-analito").text("Guardando...");
            
            $.post(
                routeEventClear,
                dataHTTP
            ).done(function (response) {

                // Si la funcion lo require, cerrar el modal
                if (elementEvent.data("close_modal") == true) {
                    eliminarModal($("#sectionModalsD .modal"));
                }

                notificacion("normal", "success", "Asignaciones realizadas de manera satisfactoria para el usuario " + elementEvent.data("nom_usuario"));

            }).fail(function (response) {
                if(gestionErroresBackend(response)){
                } else if (response.status == 422) { // Validaciones Backend
                    impresionError(form, response, "registrar");
                } else {
                    notificacion("normal", "error", "Almacenamiento fallido", "No se ha podido registrar la asingación de los valores");
                }

            }).always(function (responseAjax) {
                $("#btn-guardar-assig-analito").prop("disabled",false);
                $("#btn-guardar-assig-analito").text("Guardar");
            });

            break;
    }
}