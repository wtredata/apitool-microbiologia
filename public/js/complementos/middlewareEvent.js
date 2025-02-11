function middlewareEvent(elementsEvent) {
  $.each(elementsEvent, function (key) { // Para cada uno de los elementos hace un recorrido

    var elementEvent = elementsEvent.eq(key),
      eventos = (typeof elementEvent.data("event") == "undefined") ? undefined : elementEvent.data("event").split("&&&"); // El separador &&& indica que hay mas de un evento

    // Según el número de eventos que se encuenten en el DATA-EVENT se realiza un bucle
    $.each(eventos, function (indexEvent) { // Recorre cada uno de los eventos asociados a un elemento
      var tipeEvent = eventos[indexEvent]; // Indica el evento a manejar actualmente (click, dblclick, submit, change, etc.)
      // Elimina el mismo evento asociado previamente
      elementEvent.off(tipeEvent, asignarEvento);
      // Creación del evento
      elementEvent.on(tipeEvent, asignarEvento);
    }); // Cierre de bucle
  });
}


// Función de asignación de elementos
function asignarEvento(e) {
  if ($(e.delegateTarget).data("mantener_predeterminados") == true) {
    // ...
  } else {
    e.preventDefault();
  }
  eventosGenerales(e); // Asigna la función principal de Ajax
}


// Función general de procesamiento
function eventosGenerales(e) {

  var containerMax = $("#containerMax"),
    tipeEvent = e.type,
    elementEvent = $(e.delegateTarget);

  nx = elementEvent.data("event").split("&&&").indexOf(tipeEvent),
    routeEvent = (typeof elementEvent.data("route") == "undefined") ? "" : elementEvent.data("route").split("&&&")[nx],
    subRoutesEvent = (typeof routeEvent == "") ? [""] : routeEvent.split("|||"),
    tablesLiged = (typeof elementEvent.data("tables_liged") == "undefined") ? undefined : elementEvent.data("tables_liged").toString().split("&&&"),
    noms = (typeof elementEvent.data("nom") == "undefined") ? undefined : elementEvent.data("nom").toString().split("&&&"),
    estados = (typeof elementEvent.data("estado") == "undefined") ? undefined : elementEvent.data("estado").toString().split("&&&"),
    references = (typeof elementEvent.data("reference") == "undefined") ? undefined : elementEvent.data("reference").toString().split("&&&"),
    fields = (typeof elementEvent.data("field") == "undefined") ? undefined : elementEvent.data("field").toString().split("&&&"),
    actionsSave = (typeof elementEvent.data("action_save") == "undefined") ? undefined : elementEvent.data("action_save").toString().split("&&&"),
    tablesLiged = (typeof tablesLiged == "undefined") ? undefined : tablesLiged[nx].toString().split("|||"); // Indica distintas tablas a actualizar por evento en dado caso de ser requerido

  if (!elementEvent.hasClass("disabled")) {
    for (incrRoute = 0; incrRoute < subRoutesEvent.length; incrRoute++) { // Bucle para las sub-rutas

      var routeEventClear = subRoutesEvent[incrRoute].split("_").join(""),
        functionEvent = subRoutesEvent[incrRoute].split("_")[0],
        moduleEvent = subRoutesEvent[incrRoute].replace(functionEvent + "_", "");

      switch (functionEvent) {
        case "SeeSection":
          (function () {

            data_temporal_off = elementEvent.data("temporal_off");
            data_menu_item_select = elementEvent.data("menu_item_select");
            data_reference = elementEvent.data("reference");
            data_elements_changed = elementEvent.data("elements_changed");

            seeSection(containerMax, routeEventClear, moduleEvent, data_temporal_off, data_menu_item_select, data_reference, data_elements_changed, null, elementEvent);

          }());
          break;

        case "SeeIndex": // Se paso a una funcion externa por ser llamada muchas veces
          (function () {

            if (tipeEvent == "change") { // Si el evento fue un change
              indexLoad(moduleEvent, tablesLiged, elementEvent.data("objjson"));
            } else if (tipeEvent == "click") { // Si el evento fue un click
              indexLoad(moduleEvent, tablesLiged);
            } else if (tipeEvent == "submit") { // Si el evento fue un change
              indexLoad(moduleEvent, tablesLiged, elementEvent.data("objjson"));
            } else {
              alert("Evento no identificado...");
            }
          }());
          break;

        case "FilterCapGraph": // Se paso a una funcion externa por ser llamada muchas veces
          (function () {
            filterCapGraph(elementEvent);
          }());
          break;


        case "AddFilaResultados": // Se paso a una funcion externa por ser llamada muchas veces
          (function () {
            if (typeof window.analito_node != "undefined") {
              agregarFilaResultados();
            } else {
              notificacion("normal", "warning", "Debe seleccionar primero un analito...");
            }
          }());
          break;
        case "AddFilaResultadosCualitativo": // Se paso a una funcion externa por ser llamada muchas veces
          (function () {
            if (typeof window.analito_node != "undefined") {
              agregarFilaResultadosCualitativo();
            } else {
              notificacion("normal", "warning", "Debe seleccionar primero un analito...");
            }
          }());
          break;

        case "DinamicModal":
          dinamicModal(
            elementEvent.data("reference"),
            moduleEvent,
            elementEvent,
            elementEvent.data("modal_movible"),
            elementEvent.data("modal_tamanodinamico"),
            elementEvent.data("nivel_analito")
          );
          break;

        case "ToggleInput":
          let campoFinal = $(elementEvent.data("campofinal"));
          campoFinal.val("");

          if (campoFinal.prop("disabled")) { // Si el campo final esta deshabilitado
            campoFinal.prop("disabled", false);
          } else {
            campoFinal.prop("disabled", true);
          }
          break;

        case "AddFila":
          (function () {
            switch (moduleEvent) {
              case "ResultadoCorrida":
                addFilaTable(
                  $("#tbl_gestion_resultados tbody tr:last"),
                  "ResultadoCorrida"
                );
                break;

              case "Result":
                agregarFilaResult();
                break;
            }
          }());
          break;

        case "FiltrarAsignaciones":
          (function () {
            let filter = elementEvent.val();
            let elementosLista = elementEvent.parents(".cont-asignacion").find(".custom-control");

            elementosLista.removeClass("d-none");

            for (sdf = 0; sdf < elementosLista.length; sdf++) {
              let nom_item = elementosLista.eq(sdf).find("label").text();
              if (!(nom_item.toLowerCase().indexOf(filter.toLowerCase()) > -1)) {
                elementosLista.eq(sdf).addClass("d-none");
              }
            }

          }());
          break;

        case "CancelModal":
          (function () {

            if (elementEvent.data("preguntaantes") == true) {
              Swal.fire({
                title: "¿Seguro de cerrar la ventana? Puede que los cambios no se guarden",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: 'rgba(78, 87, 93, 0.81)',
                confirmButtonText: 'Si, cerrar ventana',
                focusConfirm: false,
                focusCancel: true
              }).then((result) => {
                if (result.value) {
                  eliminarModal($(elementEvent.data("modalselected")));
                }
              });
            } else {
              eliminarModal($(elementEvent.data("modalselected")));
            }
          }());
          break;

        case "RemoveTempFileTable":

          Swal.fire({
            title: '¿Está seguro de eliminar ' + noms[nx] + '?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: 'rgba(78, 87, 93, 0.81)',
            confirmButtonText: 'Si, eliminar!',
            focusConfirm: false,
            focusCancel: true
          }).then((result) => {
            if (result.value) {
              elementEvent.parents("tr").remove();
            }
          });

          break;

        case "SeeIndexAsignation":
          (function () {
            var tableLiged = elementEvent.data("table_liged");
            indexLoadAsignation(moduleEvent, tableLiged);
          }());
          break;


        case "NavegarAnalito":
          (function () {
            let arbol = $("#tree_resultados");
            let node = arbol.fancytree("getActiveNode");
            if (typeof window.analito_node != "undefined") {

              switch (moduleEvent) {
                case "Anterior":
                  let node_ant = node.getPrevSibling();
                  if (node_ant != null) {
                    // node.getPrevSibling().setActive();
                    $(node.getPrevSibling().span).dblclick();
                  } else {
                    notificacion("normal", "warning", "No hay más analitos previos al que se encuentra...");
                  }
                  break;

                case "Siguiente":
                  let node_sig = node.getNextSibling();
                  if (node_sig != null) {
                    $(node.getNextSibling().span).dblclick();
                    // node.getNextSibling().setActive()
                  } else {
                    notificacion("normal", "warning", "No hay más analitos siguientes al que se encuentra...");
                  }
                  break;
              }
            } else {
              notificacion("normal", "warning", "Debe seleccionar primero un analito...");
            }
          }());
          break;

        case "SeeGrafica":
          (function () {

            var filtrosActivos = $(".filtrosGrafica:checked").length;

            if (filtrosActivos == 0) { // Si no hay ni una gráfica activa
              elementEvent.prop("checked", true); // Activar el elemento nuevamente
              notificacion("normal", "info", "Debe haber por lo menos una gráfica activa");
            }

            var input_liged = $(elementEvent.data("input_liged"));

            if (elementEvent.prop("checked") == true) { // Si el elemento esta activado, active el contenedor relacionado
              input_liged.show();
            } else {
              input_liged.hide(); // Si no esta activado que lo oculte

            }
          }());
          break;

        case "Store":
          (function () {

            var form = elementEvent, // El mismo elemento del evento es el form
              descCampNew,
              formSzArray = form.serializeArray(),
              dataHTTP = {};
            gestionEnvioForm(form, "deshabilitar");

            descCampNew = descCampGet(form, moduleEvent);

            $(formSzArray).each(function (index, obj) {
              dataHTTP[obj.name] = obj.value;
            });

            dataHTTP._token = $('meta[name="csrf-token"]').attr('content');

            $.post(
              routeEventClear,
              dataHTTP
            ).done(function (response) {

              var elementForm = form.find("select").add(form.find("input")).add(form.find("textarea"));
              notificacion("normal", "success", "Registro exitoso", "Nuevo campo de " + nomLegibleSection(moduleEvent) + ": '" + descCampNew + "'");

              if (typeof tablesLiged != "undefined") {
                indexLoad(moduleEvent, tablesLiged, elementEvent.data("objjson"));
              }

              // Si la funcion lo require, cerrar el modal
              if (elementEvent.data("close_modal") == true) {
                eliminarModal($("#sectionModalsD .modal"));
              }

              form.find(".contMessage").html(""); // Vaciar todos los mensajes de validación
              form.find("select").add(form.find("input")).add(form.find("textarea")).removeClass("is-invalid");

              // Vaciar cada uno de los elementos del formulario correspondiente
              elementForm.each(function (index, val) {

                if (elementForm.eq(index).hasClass("notClear") || elementForm.eq(index).attr("name") == "_token") {
                  // No realizar la limpieza
                } else {
                  if (elementForm.eq(index).get(0).tagName == "SELECT") {
                    elementForm.eq(index).find("option").eq(0).prop("selected", true);
                    elementForm.eq(index).change();
                  } else {
                    elementForm.eq(index).val("");
                  }
                }
              });

              let fancyliged = elementEvent.data("fancyliged");

              if (fancyliged != null && typeof fancyliged != "undefined") {

                if (typeof elementEvent.data('fancydirection') != 'undefined') {
                  recargarSegmentoFancyTree($("#" + fancyliged), elementEvent.data('fancydirection'));
                } else {
                  recargarSegmentoFancyTree($("#" + fancyliged));

                }

              }

            }).fail(function (response) {
              if (gestionErroresBackend(response)) {
              } else if (response.status == 422) {
                impresionError(form, response, "registrar");
              } else {
                notificacion("normal", "error", "Registro fallido", "No se ha podido registrar '" + descCampNew + "' como " + nomLegibleSection(moduleEvent));
              }
            }).always(function (responseAjax) {
              gestionEnvioForm(form, "habilitar");
            });
          }());
          break;

        case "UpdateModal": // Actualizacion desde modal
          (function () {

            var form = elementEvent, // El mismo elemento del evento es el form
              descCampNew,
              formSzArray = form.serializeArray(),
              dataHTTP = {};

            gestionEnvioForm(form, "deshabilitar");

            descCampNew = descCampGet(form, moduleEvent);

            $(formSzArray).each(function (index, obj) {
              dataHTTP[obj.name] = obj.value;
            });

            dataHTTP._token = $('meta[name="csrf-token"]').attr('content');
            dataHTTP.id = elementEvent.data("reference");

            $.ajax({
              url: routeEventClear,
              type: 'put',
              data: dataHTTP
            }).done(function (response) {

              var elementForm = form.find("select").add(form.find("input")).add(form.find("textarea"));
              notificacion("normal", "success", "Actualización exitosa", "Se ha actualizado la información para " + noms[nx]);

              if (typeof tablesLiged != "undefined") {
                indexLoad(moduleEvent, tablesLiged, elementEvent.data("objjson"));
              }

              // Si la funcion lo require, cerrar el modal
              if (elementEvent.data("close_modal") == true) {
                eliminarModal($("#sectionModalsD .modal"));
              }

              form.find(".contMessage").html(""); // Vaciar todos los mensajes de validación
              form.find("select").add(form.find("input")).add(form.find("textarea")).removeClass("is-invalid");

              // Vaciar cada uno de los elementos del formulario correspondiente
              elementForm.each(function (index, val) {

                if (elementForm.eq(index).hasClass("notClear")) {
                  // No realizar la limpieza
                } else {
                  if (elementForm.eq(index).get(0).tagName == "SELECT") {
                    elementForm.eq(index).find("option").eq(0).prop("selected", true);
                    elementForm.eq(index).change();
                  } else {
                    elementForm.eq(index).val("");
                  }
                }
              });

            }).fail(function (response) {
              if (gestionErroresBackend(response)) {
              } else if (response.status == 422) { // Validaciones Backend
                impresionError(form, response, "registrar");
              } else {
                notificacion("normal", "error", "Registro fallido", "No se ha podido actualizar '" + descCampNew + "' como " + nomLegibleSection(moduleEvent));
              }

            }).always(function (responseAjax) {
              gestionEnvioForm(form, "habilitar");
            });
          }());
          break;

        case "ChangeResult":
          (function () {
            let trPadre = elementEvent.parents("tr");
            trPadre.find(".fa-pen").remove(); // Eliminar el elemento de edicion si existe
            trPadre.find("td").eq(0).append($('<i class="ml-2 text-primary fas fa-pen"></i>'));
            trPadre.removeClass("tr_modificar"); // Eliminar clase si existe
            trPadre.addClass("tr_modificar");
          }());
          break;

        case "ComentarioSerie":
          (function () {
            let comentarioTemp = elementEvent.siblings(".comentario-temp");
            let comentarioBD = elementEvent.siblings(".comentario-bd");
            let idxComentario = $("#contenedor-resultados .btn-comentario").index(elementEvent);

            $("#cont-modal-original-comentarios .idx_element_coment").val(idxComentario);
            $("#cont-modal-original-comentarios .caja_comentarios_previos").val(comentarioBD.val());

            let modalTemp = $("#cont-modal-original-comentarios .comentario-serie").clone();
            $("#sectionModalsD").html(modalTemp);
            $("#sectionModalsD .modal-content").draggable();
            $("#sectionModalsD .modal-content").resizable();
            $("#sectionModalsD .modal").modal({backdrop: 'static', keyboard: false, show: true});
            $(".modal-backdrop").eq(1).addClass("bg-transparent");
            $("#sectionModalsD .cont-comentario-temp").val(comentarioTemp.val());
            middlewareEvent($("#sectionModalsD .btnEvent"));
          }());
          break;
        case "ComentarioSerieCualitativo":
          (function () {
            let comentarioTemp = elementEvent.siblings(".comentario-temp");
            let comentarioBD = elementEvent.siblings(".comentario-bd");
            let idxComentario = $("#contenedor-resultados-cualitativo .btn-comentario").index(elementEvent);

            $("#cont-modal-original-comentarios-cualitativo .idx_element_coment").val(idxComentario);
            $("#cont-modal-original-comentarios-cualitativo .caja_comentarios_previos").val(comentarioBD.val());

            let modalTemp = $("#cont-modal-original-comentarios-cualitativo .comentario-serie").clone();
            $("#sectionModalsD").html(modalTemp);
            $("#sectionModalsD .modal-content").draggable();
            $("#sectionModalsD .modal-content").resizable();
            $("#sectionModalsD .modal").modal({backdrop: 'static', keyboard: false, show: true});
            $(".modal-backdrop").eq(1).addClass("bg-transparent");
            $("#sectionModalsD .cont-comentario-temp").val(comentarioTemp.val());
            middlewareEvent($("#sectionModalsD .btnEvent"));
          }());
          break;

        case "SaveTempComentario":
          (function () {

            let comentarioTemp = $("#sectionModalsD .cont-comentario-temp").val();
            let idxElementComent = $("#sectionModalsD .idx_element_coment").val();

            if (comentarioTemp.length < 5 || comentarioTemp.length > 400) { // Validacion en frontEnd
              Swal.fire({
                title: 'Verifique el comentario',
                text: 'El comentario debe tener entre 5 a 400 carácteres de longitud',
                icon: 'warning',
                confirmButtonColor: '#d33',
                confirmButtonText: 'Entendido',
                focusConfirm: true
              });
            } else {
              let btnComentarioIdx = $("#contenedor-resultados .btn-comentario").eq(idxElementComent);
              let inputComentTemp = btnComentarioIdx.siblings(".comentario-temp");
              inputComentTemp.val(comentarioTemp);
              inputComentTemp.change();
              eliminarModal($("#sectionModalsD .modal"));
            }

          }());
          break;
        case "SaveTempComentarioCualitativo":
          (function () {

            let comentarioTemp = $("#sectionModalsD .cont-comentario-temp").val();
            let idxElementComent = $("#sectionModalsD .idx_element_coment").val();

            if (comentarioTemp.length < 5 || comentarioTemp.length > 400) { // Validacion en frontEnd
              Swal.fire({
                title: 'Verifique el comentario',
                text: 'El comentario debe tener entre 5 a 400 carácteres de longitud',
                icon: 'warning',
                confirmButtonColor: '#d33',
                confirmButtonText: 'Entendido',
                focusConfirm: true
              });
            } else {
              let btnComentarioIdx = $("#contenedor-resultados-cualitativo .btn-comentario").eq(idxElementComent);
              let inputComentTemp = btnComentarioIdx.siblings(".comentario-temp");
              inputComentTemp.val(comentarioTemp);
              inputComentTemp.change();
              eliminarModal($("#sectionModalsD .modal"));
            }

          }());
          break;

        case "StoreResults":
          (function () {

            var form = elementEvent, // El mismo elemento del evento es el form
              descCampNew,
              dataHTTP = {
                registro: [],
                modificacion: []
              },
              trs = form.find("table tbody tr"),
              continueValidate = true;

            $.each(trs, function (index, val) {

              let trActual = trs.eq(index);

              if (trActual.hasClass("tr_registrar") || trActual.hasClass("tr_modificar")) {

                let fecha = trActual.find(".fecha"),
                  resultado_m1c1 = trActual.find(".resultado_m1c1"),
                  resultado_m1c2 = trActual.find(".resultado_m1c2"),
                  resultado_m2c1 = trActual.find(".resultado_m2c1"),
                  resultado_m2c2 = trActual.find(".resultado_m2c2");

                if (trActual.hasClass("tr_registrar")) {
                  if (validarResultadoComparacion(resultado_m1c1, resultado_m1c2, resultado_m2c1, resultado_m2c2)) { // Si la validacion es exitosa
                    dataHTTP.registro.push({
                      id: null,
                      id_corrida_analito: trActual.parents("table").data("reference_corrida"),
                      fecha: fecha.val(),
                      resultado_m1c1: resultado_m1c1.val(),
                      resultado_m1c2: resultado_m1c2.val(),
                      resultado_m2c1: resultado_m2c1.val(),
                      resultado_m2c2: resultado_m2c2.val()
                    });
                  } else {
                    return continueValidate = false;
                  }
                } else if (trActual.hasClass("tr_modificar")) {
                  if (validarResultadoComparacion(resultado_m1c1, resultado_m1c2, resultado_m2c1, resultado_m2c2)) { // Si la validacion es exitosa
                    dataHTTP.modificacion.push({
                      id: trActual.data("reference"),
                      id_corrida_analito: trActual.parents("table").data("reference_corrida"),
                      fecha: fecha.val(),
                      resultado_m1c1: resultado_m1c1.val(),
                      resultado_m1c2: resultado_m1c2.val(),
                      resultado_m2c1: resultado_m2c1.val(),
                      resultado_m2c2: resultado_m2c2.val()
                    });
                  } else {
                    return continueValidate = false;
                  }
                }
              }
            });


            if (continueValidate) {
              gestionEnvioForm(form, "deshabilitar");
              dataHTTP._token = $('meta[name="csrf-token"]').attr('content');
              $.post(
                routeEventClear,
                dataHTTP
              ).done(function (response) {

                notificacion("normal", "success", "Registro exitoso", "Se han ingresado los resultados satisfactoriamente");
                eliminarModal($("#sectionModalsD .modal"));

              }).fail(function (response) {
                if (gestionErroresBackend(response)) {
                } else {
                  notificacion("normal", "error", "Registro fallido", "No se han podido almacenar los resultados, por favor intente nuevamente...");
                }
              }).always(function (responseAjax) {
                gestionEnvioForm(form, "habilitar");
              });
            }

          }());
          break;

        case "ExportReport":

          exportacionReporte(elementEvent, elementEvent.data("reference"));
          break;

        case "StoreAsignation":
          (function () {

            var form = elementEvent, // El mismo elemento del evento es el form
              descCampNew,
              formElements = form.find("select[name]").add(form.find("input[name]")),
              dataHTTP = {};

            $(formElements).each(function (index, obj) {
              dataHTTP[obj.name] = formElements.eq(index).val()
            });


            gestionEnvioForm(form, "deshabilitar");

            dataHTTP._token = $('meta[name="csrf-token"]').attr('content');

            descCampNew = descCampGet(form, moduleEvent);

            $.post(
              routeEventClear,
              dataHTTP
            ).done(function (response) {

              notificacion("normal", "success", "Asignación exitosa", "Se han asignado un@ o más " + nomLegibleSection(moduleEvent));
              var tableLiged = elementEvent.data("table_liged");
              indexLoadAsignation(moduleEvent, tableLiged);

              form.find(".contMessage").html(""); // Vaciar todos los mensajes de validación
              form.find(".clearVal").val([]).change();

              form.find("select").add(form.find("input")).add(form.find("textarea")).removeClass("is-invalid");

            }).fail(function (response) {
              if (gestionErroresBackend(response)) {
              } else if (response.status == 422) { // Validaciones Backend
                impresionError(form, response, "registrar");
              } else {
                notificacion("normal", "error", "Registro fallido", "No se ha podido registrar '" + descCampNew + "' como " + nomLegibleSection(moduleEvent));
              }
            }).always(function (responseAjax) {
              gestionEnvioForm(form, "habilitar");
            });
          }());

          break;

        case "CambioValorResultado":
          (function () {
            let trFila = elementEvent.parents("tr");
            if (trFila.data("tipo_fila") != "registro") { // Si el tr es agregado con jQuery
              let trFila = elementEvent.parents("tr");

              trFila.attr("data-tipo_fila", "modificacion");
              primerTd = trFila.find("td").eq(0);

              primerTd.find("svg").remove();
              primerTd.append($(
                '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle ml-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>'
              ));
            }

            // Asignar valor float
            if (elementEvent.hasClass("resultado")) {
              var valor = elementEvent.val();
              if (valor == "" || valor == null || typeof valor == "undefined" || isNaN(parseFloat(valor.replace(",", ".")))) {
                elementEvent.val("");
              } else {
                var entrada = parseFloat(valor.replace(",", "."));
                var float = entrada.toFixed(3);
                elementEvent.val(float);
              }

            }

          }());
          break;

        case "CambioValorResultadoCualitativo":
          (function () {
            let trFila = elementEvent.parents("tr");
            if (trFila.data("tipo_fila") != "registro") { // Si el tr es agregado con jQuery
              let trFila = elementEvent.parents("tr");

              trFila.attr("data-tipo_fila", "modificacion");
              primerTd = trFila.find("td").eq(0);

              primerTd.find("svg").remove();
              primerTd.append($(
                '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle ml-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>'
              ));
            }

          }());
          break;

        case "CambioValorHeadCualitativo":
          (function () {
            let trFila = elementEvent.parents("tr");
            if (trFila.data("tipo_fila") != "registro") { // Si el tr es agregado con jQuery
              let trFila = elementEvent.parents("tr");

              trFila.attr("data-tipo_fila", "modificacion");
              primerTd = trFila.find("#action_cualitativo").eq(0);

              primerTd.find("svg").remove();
              primerTd.append($(
                '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle ml-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>'
              ));
            }

          }());
          break;

        case "CambioValorComentario":
          (function () {
            let trFila = elementEvent.parents("tr");

            if (trFila.data("tipo_fila") != "registro") { // Si el tr es agregado con jQuery
              trFila.attr("data-tipo_fila", "modificacion");
              primerTd = trFila.find("td").eq(0);
              primerTd.find("svg").remove();
              primerTd.append($(
                '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle ml-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>'
              ));
            }

            // Actualizacion de imagen segun el comentario
            elementEvent.siblings(".btn-comentario").find("img").prop("src", "img/comentario_lleno.png");
          }());

          break;


        case "Exportar":
          (function () {
            let control_laboratorio;
            let f_inicial;
            let f_final;

            switch (moduleEvent) {
              case "GraficosIntegrados":
                let contenedorExp = $(".cont_exportacion");
                control_laboratorio = contenedorExp.find(".lote").val();
                f_inicial = contenedorExp.find(".fecha_inicial").val();
                f_final = contenedorExp.find(".fecha_final").val();
                window.open('exportarGraficaIntegrada?control_laboratorio=' + control_laboratorio + '&' + 'fecha_inicial=' + f_inicial + '&fecha_final=' + f_final, '_blank');
                break;
              case "GraficosCualitativo":
                let contenedorExpCualitativo = $(".cont_exportacion");
                control_laboratorio = contenedorExpCualitativo.find(".lote").val();
                f_inicial = contenedorExpCualitativo.find(".fecha_inicial").val();
                f_final = contenedorExpCualitativo.find(".fecha_final").val();
                window.open('exportarGraficaCualitativo?control_laboratorio=' + control_laboratorio + '&' + 'fecha_inicial=' + f_inicial + '&fecha_final=' + f_final, '_blank');
                break;
              case "GraficoSigmometria":
                if ($("#sigmometria-lote").val() == "") {
                  notificacion("normal", "warning", "Debe seleccionar primero un lote...");
                } else {
                  control_laboratorio = $("#sigmometria-lote").val();
                  f_inicial = $("#sigmometria-f-inicial").val();
                  f_final = $("#sigmometria-f-final").val();
                  window.open('exportarGraficaSigmometria?control_laboratorio=' + control_laboratorio + '&' + 'fecha_inicial=' + f_inicial + '&fecha_final=' + f_final, '_blank');
                }
                break;
              case "GraficaAuditoria":
                laboratorio = $("#auditoria_laboratorio").val();
                accion = $("#auditoria_accion").val();
                accion = accion ? accion : "-1";
                f_inicial = $("#auditoria_fecha_inicial").val();
                f_final = $("#auditoria_fecha_final").val();
                window.open('ExportarGraficaAuditoria?laboratorio=' + laboratorio + '&accion=' + accion + '&fecha_inicial=' + f_inicial + '&fecha_final=' + f_final, '_blank');
            }
          }());
          break;

        case "ActualizarGraficaIntegrada": // Filtrado de fecha desde panel de grafica
          (function () {
            if (typeof window.analito_node != "undefined") {
              if (elementEvent.data("tipofecha") == "fecha_inicial") {
                window.fecha_inicial = elementEvent.val();
              } else if (elementEvent.data("tipofecha") == "fecha_final") {
                window.fecha_final = elementEvent.val();
              }
              informacionAnalito($("#informacion_analito_grafica"), data_reference);
              informacionValoresEstadisticos($("#contenedor-valores-estadisticos-grafica"), false, data_reference);
              generarGraficaIntegrada(data_reference);
            } else {
              notificacion("normal", "warning", "Debe seleccionar primero un analito...");
            }
          }());
          break;

        case "ActualizarModuloSigmometria": // Filtrado de fecha desde panel de grafica
          (function () {
            generarModuloSigmometria();
          }());
          break;
        case "ListarValoresEstadisticos":
          (function () {
            if (typeof window.analito_node != "undefined") {
              if (elementEvent.data("tipofecha") == "fecha_inicial") {
                window.fecha_inicial = elementEvent.val();
              } else if (elementEvent.data("tipofecha") == "fecha_final") {
                window.fecha_final = elementEvent.val();
              }
              informacionValoresEstadisticos($("#contenedor-valores-estadisticos"));
            } else {
              notificacion("normal", "warning", "Debe seleccionar primero un analito...");
            }
          }());
          break;
        case "ListarValoresEstadisticosCualitativo":
          (function () {
            if (typeof window.analito_node != "undefined") {
              if (elementEvent.data("tipofecha") == "fecha_inicial") {
                window.fecha_inicial = elementEvent.val();
              } else if (elementEvent.data("tipofecha") == "fecha_final") {
                window.fecha_final = elementEvent.val();
              }
              informacionValoresEstadisticosCualitativo($("#contenedor-valores-estadisticos-cualitativo"));
            } else {
              notificacion("normal", "warning", "Debe seleccionar primero un analito...");
            }
          }());
          break;

        case "ChangeStatus":
          (function () {
            Swal.fire({
              title: 'Confirmación de cambio de estado',
              text: '¿Está seguro de cambiar el estado de ' + noms[nx] + ' a ' + estados[nx] + '?',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: 'rgba(78, 87, 93, 0.81)',
              confirmButtonText: 'Si, actualizar!',
              focusConfirm: false,
              focusCancel: true
            }).then((result) => {
              if (result.value) {
                (function () {
                  $.ajax({
                    url: routeEventClear,
                    type: 'put',
                    data: {
                      id: references[nx],
                      _token: $('meta[name="csrf-token"]').attr('content')
                    }
                  }).done(function () {
                    notificacion("normal", "warning", "Actualización de estado exitosa", "Se ha actualizado a " + estados[nx] + " para " + noms[nx]);

                    indexLoad(moduleEvent, tablesLiged, elementEvent.data("objjson"), null, elementEvent.data("fancyliged"));
                  }).fail(function (response) {
                    if (gestionErroresBackend(response)) {
                    } else {
                      notificacion("normal", "error", "Actualización de estado fallida", "No se ha podido actualizar a " + estados[nx] + " para " + noms[nx]);
                    }
                  }).always(function (sdsgdg) {
                  });
                }());
              }
            })
          }());
          break;

        case "AsignacionPredeterminado":
          asignarPredeterminado(moduleEvent, elementEvent, tablesLiged, elementEvent.data("objjson"));
          break;

        case "Destroy":
          (function () {

            Swal.fire({
              title: '¿Está seguro de eliminar ' + noms[nx] + '?',
              text: "TODA la información que se encuentre relacionada también se borrará!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: 'rgba(78, 87, 93, 0.81)',
              confirmButtonText: 'Si, eliminar!',
              focusConfirm: false,
              focusCancel: true
            }).then((result) => {
              if (result.value) {
                (function () {
                  $.ajax({
                    url: routeEventClear,
                    type: 'delete',
                    data: {
                      id: references[nx],
                      _token: $('meta[name="csrf-token"]').attr('content')
                    }
                  }).done(function () {

                    notificacion("normal", "warning", "Eliminación exitosa", "Se eliminó toda la información relacionada de " + noms[nx] + ", como " + nomLegibleSection(moduleEvent));
                    indexLoad(moduleEvent, tablesLiged, elementEvent.data("objjson"), elementEvent.parents("tr"));

                    let fancyliged = elementEvent.data("fancyliged");

                    if (fancyliged != null && typeof fancyliged != "undefined") {
                      recargarSegmentoFancyTree($("#" + fancyliged));
                    }

                    switchDestroy(moduleEvent);

                  }).fail(function (response) {
                    if (gestionErroresBackend(response)) {
                    } else {
                      notificacion("normal", "error", "Eliminación fallida", "Para el campo de " + nomLegibleSection(moduleEvent) + ": " + noms[nx]);
                    }
                  }).always(function (ewfwefsf) {
                  });
                }());
              }
            });
          }());
          break;


        case "SaveResults":

          (function () {
            if (typeof window.analito_node != "undefined") {
              guardarResultados(elementEvent);
            } else {
              notificacion("normal", "warning", "Debe seleccionar primero un analito...");
            }
          }());

          break;

        case "SaveResultsCualitativo":

          (function () {
            if (typeof window.analito_node != "undefined") {
              guardarResultadosCualitativo(elementEvent);
            } else {
              notificacion("normal", "warning", "Debe seleccionar primero un analito...");
            }
          }());

          break;


        case "SaveAsignacion":
          SaveAsignacion(moduleEvent, routeEventClear, elementEvent);
          break;


        case "DestroySerie":
          (function () {

            Swal.fire({
              title: '¿Está seguro de eliminar los resultados de la fila?',
              text: "Esta accion se ejecuta de inmediato...",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: 'rgba(78, 87, 93, 0.81)',
              confirmButtonText: 'Si, eliminar!',
              focusConfirm: false,
              focusCancel: true
            }).then((result) => {
              if (result.value) {
                (function () {

                  if (typeof references != "undefined") {
                    $.ajax({
                      url: routeEventClear,
                      type: 'delete',
                      data: {
                        id: references[nx],
                        _token: $('meta[name="csrf-token"]').attr('content')
                      }
                    }).done(function () {

                      notificacion("normal", "warning", "Eliminación exitosa", "Se eliminó la fila de resultados");
                      eporte_final
                      // Eliminar fila de la tabla
                      elementEvent.parents("tr").remove();

                      informacionValoresEstadisticos($("#contenedor-valores-estadisticos"));

                    }).fail(function (response) {
                      if (gestionErroresBackend(response)) {
                      } else {
                        notificacion("normal", "error", "Eliminación fallida", "No se pudo realizar la eliminación de la fila de resultados, por favor intente nuevamente...");
                      }
                    }).always(function (ewfwefsf) {
                    });
                  } else {
                    notificacion("normal", "warning", "Eliminación exitosa", "Se eliminó la fila de resultados");
                    elementEvent.parents("tr").remove();
                  }

                }());
              }
            });
          }());
          break;

          case "DestroySerieCualitativa":
          (function () {

            Swal.fire({
              title: '¿Está seguro de eliminar los resultados de la fila?',
              text: "Esta accion se ejecuta de inmediato...",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: 'rgba(78, 87, 93, 0.81)',
              confirmButtonText: 'Si, eliminar!',
              focusConfirm: false,
              focusCancel: true
            }).then((result) => {
              if (result.value) {
                (function () {

                  if (typeof references != "undefined") {
                    $.ajax({
                      url: routeEventClear,
                      type: 'delete',
                      data: {
                        id: references[nx],
                        _token: $('meta[name="csrf-token"]').attr('content')
                      }
                    }).done(function () {

                      notificacion("normal", "warning", "Eliminación exitosa", "Se eliminó la fila de resultados");
                      
                      // Eliminar fila de la tabla
                      elementEvent.parents("tr").remove();

                      informacionValoresEstadisticosCualitativo($("#contenedor-valores-estadisticos-cualitativo"));

                    }).fail(function (response) {
                      if (gestionErroresBackend(response)) {
                      } else {
                        notificacion("normal", "error", "Eliminación fallida", "No se pudo realizar la eliminación de la fila de resultados, por favor intente nuevamente...");
                      }
                    }).always(function (ewfwefsf) {
                    });
                  } else {
                    notificacion("normal", "warning", "Eliminación exitosa", "Se eliminó la fila de resultados");
                    elementEvent.parents("tr").remove();
                  }

                }());
              }
            });
          }());
          break;

        case "NavegacionResultados":
          navegacionResultados(elementEvent, e.keyCode);
          break;

        case "DestroyAsignation":
          (function () {

            Swal.fire({
              title: '¿Está seguro de eliminar ' + noms[nx] + '?',
              text: "TODA la información que se encuentre relacionada también se borrará!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: 'rgba(78, 87, 93, 0.81)',
              confirmButtonText: 'Si, eliminar!',
              focusConfirm: false,
              focusCancel: true
            }).then((result) => {
              if (result.value) {
                (function () {

                  $.ajax({
                    url: routeEventClear,
                    type: 'delete',
                    data: {
                      id: references[nx],
                      _token: $('meta[name="csrf-token"]').attr('content')
                    }
                  }).done(function () {

                    notificacion("normal", "warning", "Eliminación exitosa", "Se eliminó toda la información relacionada de " + noms[nx] + ", como " + nomLegibleSection(moduleEvent));

                    var tableLiged = elementEvent.data("table_liged");
                    indexLoadAsignation(moduleEvent, tableLiged);

                  }).fail(function (response) {
                    if (gestionErroresBackend(response)) {
                    } else {
                      notificacion("normal", "error", "Eliminación fallida", "Para el campo de " + nomLegibleSection(moduleEvent) + ": " + noms[nx]);
                    }
                  }).always(function (ewfwefsf) {
                  });
                }());
              }
            });
          }());
          break;

        case "SeeEdit":
          (function () {
            var loader = $(
              '<div class="spinner-border spinner-border-sm text-secondary" role="status">' +
              '<span class="sr-only">Loading...</span>' +
              '</div>'
            );

            var originalField = elementEvent.html();
            var originalFieldText = elementEvent.text();

            elementEvent.html(loader);

            $.ajax({
              url: routeEventClear,
              type: 'get',
              data: {
                id: references[nx],
                campo: fields[nx],
                _token: $('meta[name="csrf-token"]').attr('content')
              }
            }).done(function (response) {

              // Se agrega clase de edición
              elementEvent.addClass("editingForm");

              // Se imprime el input editable
              elementEvent.html(response);

              // elementEvent.find("select").not(".exceptionSelect2").select2(); // Activar busqueda para selects

              // Enfocar el primer elemento de entrada del formulario
              elementEvent.find("input").add(elementEvent.find("select")).eq(0).focus();

              // Elementos a actualizar
              var elementsUpdate = $(".SeeSection" + moduleEvent + " .btnEvent").add($(".SeeSection" + moduleEvent + " .formEvent"));
              elementsUpdate = elementsUpdate.not(".editingForm");

              // Se actualiza la seleccion de eventos
              middlewareEvent(elementsUpdate);

              inputDates(); // Verifica cada uno de los inputs que se encuentren dentro del section

              // Se asigna el valor predeterminado para luego poder ser utilizado
              elementEvent.data("original_field", originalField);
              elementEvent.data("original_field_text", originalFieldText);

              // Se elimina el evento para ver mientras se esta editando
              elementEvent.off(tipeEvent);


              let selectInterno = elementEvent.find("select");

              for (xdsd = 0; xdsd < selectInterno.length; xdsd++) {

                selectInd = $(selectInterno[xdsd]);

                if (selectInd.data("isselect2")) {

                  switchSelect2(
                    selectInd,
                    selectInd.data("modulo_select2")
                  );
                }
              }

            }).fail(function (response) {
              if (gestionErroresBackend(response)) {
              } else {
                notificacion("normal", "error", "Modo de edición fallido", "No pudo activar el modo para " + originalFieldText + " como " + nomLegibleSection(moduleEvent));
              }

              // Se reestablece contenido del item
              elementEvent.html(originalField);

            }).always(function (saddf) {
            });

          }());
          break;

        case "Update":
          (function () {

            if ((tipeEvent == "keyup" && e.which == 27) || actionsSave[nx] == "false") {

              show("html", elementEvent.parents("td"), tipeEvent); // Listar el valor guardado previamente en el DOM HTML

            } else if ((tipeEvent == "submit" || tipeEvent == "click") && actionsSave[nx] == "true") {

              var td_cambio = elementEvent.parents("td"),
                form = elementEvent.add(elementEvent.parents("form")).eq(0),
                elementTdFather = elementEvent.parents("td"),
                formSzArray = form.serializeArray(),
                dataHTTP = {},
                elementForm = form.find("select").add(form.find("input")).add(form.find("textarea")).eq(0),
                tipeSelectionEntry = elementForm.get(0).tagName,
                campUpgrade = (tipeSelectionEntry == "SELECT") ? elementForm.find("option[value='" + formSzArray[0]["value"] + "']").text() : formSzArray[0]["value"];

              $(formSzArray).each(function (index, obj) {
                dataHTTP[obj.name] = obj.value;
              });

              dataHTTP._token = $('meta[name="csrf-token"]').attr('content'),
                dataHTTP.id = references[nx],
                dataHTTP.campo = fields[nx];

              $.ajax({
                url: routeEventClear,
                type: 'put',
                data: dataHTTP
              }).done(function () {

                elementTdFather.html(elementTdFather.data("original_field"));

                notificacion("normal", "success", "Actualización exitosa", "Se actualizó el campo " + dataHTTP.campo + " de " + elementTdFather.data("original_field_text") + " a " + campUpgrade + ", como " + nomLegibleSection(moduleEvent));

                // Eliminar la clase de formulario en edición
                elementEvent.removeClass("editingForm");

                if (elementEvent.data("trcompleto")) {
                  show("ajax", elementTdFather, tipeEvent, "trcompleto");
                } else {
                  show("ajax", elementTdFather, tipeEvent);
                }

                let fancyliged = elementEvent.data("fancyliged");

                if (fancyliged != null && typeof fancyliged != "undefined") {
                  recargarSegmentoFancyTree($("#" + fancyliged));
                }

                switchUpdate(moduleEvent, fields[nx]);

              }).fail(function (response) {
                if (gestionErroresBackend(response)) {
                } else if (response.status == 422) { // Validaciones Backend
                  impresionError(form, response, "modificar");
                } else {
                  notificacion("normal", "error", "Actualización fallida", "No se pudo actualizar el campo " + dataHTTP.campo + " de " + elementTdFather.data("original_field_text") + " a " + dataHTTP.valor_cambio + ", como " + nomLegibleSection(moduleEvent));
                  show("html", elementTdFather, tipeEvent); // Listar el valor guardado previamente en el DOM HTML
                }
              }).always(function (wefesws) {
              });
            }
          }());
          break;

        case "SeeList":
          seeList(moduleEvent, elementEvent, incrRoute, routeEventClear);
          break;

        case "graficaCualitativo":
          alert('graficaCualitativo')
          break;
        default:
          break;
      }
    }
  }
}
