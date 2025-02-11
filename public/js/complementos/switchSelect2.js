function switchSelect2(element, modulo) {
    switch (modulo) {
        case "ControlLaboratorio":
            if (element[0].id == 'control_laboratorio_edit_laboratorio') {
                element.select2({
                    placeholder: 'Busque por nombre de laboratorio',
                    minimumInputLength: 2,
                    ajax: {
                        url: "GetTopLaboratorio",
                        dataType: "json",
                        delay: 250,
                        data: function (params) {
                            return {
                                busqueda: params.term
                            }
                        },
                        processResults: function (data) {
                            return {
                                results: data
                            };
                        },
                        transport: function (params, success, failure) {
                            var $request = $.ajax(params);
    
                            $request.then(success);
                            $request.fail(failure);
    
                            return $request;
                        }
                    }
                });
            } else {
                element.select2({
                    placeholder: 'Busque por número de lote o nombre de control',
                    minimumInputLength: 2,
                    ajax: {
                        url: "GetTopLotes",
                        dataType: "json",
                        delay: 250,
                        data: function (params) {
                            return {
                                busqueda: params.term
                            }
                        },
                        processResults: function (data) {
                            return {
                                results: data
                            };
                        },
                        transport: function (params, success, failure) {
                            var $request = $.ajax(params);
    
                            $request.then(success);
                            $request.fail(failure);
    
                            return $request;
                        }
                    }
                });
            }
            break;

        case "AnalitoLaboratorio":
            if (element[0].id == 'analito_laboratorio_edit_control_lab') {
                element.select2({
                    placeholder: 'Busque por nombre de control',
                    minimumInputLength: 1,
                    ajax: {
                        url: "GetTopAnalitoLab",
                        dataType: "json",
                        delay: 250,
                        data: function (params) {
                            return {
                                busqueda: params.term,
                                id_reference: $("#analito_lab_control_laboratorio").val()
                            }
                        },
                        processResults: function (data) {
                            return {
                                results: data
                            };
                        },
                        transport: function (params, success, failure) {
                            var $request = $.ajax(params);
    
                            $request.then(success);
                            $request.fail(failure);
    
                            return $request;
                        }
                    }
                });
            } else {
                element.select2({
                    placeholder: 'Busque por nombre del analito',
                    minimumInputLength: 1,
                    ajax: {
                        url: "GetTopAnalitosByControlLaboratorio",
                        dataType: "json",
                        delay: 250,
                        data: function (params) {
                            return {
                                busqueda: params.term,
                                id_reference: $("#analito_lab_control_laboratorio").val()
                            }
                        },
                        processResults: function (data) {
                            return {
                                results: data
                            };
                        },
                        transport: function (params, success, failure) {
                            var $request = $.ajax(params);
    
                            $request.then(success);
                            $request.fail(failure);
    
                            return $request;
                        }
                    }
                });
            }
            break;

            case "Analizador":
            element.select2({
                placeholder: 'Busque por nombre del analizador',
                minimumInputLength: 1,
                ajax: {
                    url: "GetTopAnalizadores",
                    dataType: "json",
                    delay: 250,
                    data: function (params) {
                        return {
                            busqueda: params.term
                        }
                    },
                    processResults: function (data) {
                        return {
                            results: data
                        };
                    },
                    transport: function (params, success, failure) {
                        var $request = $.ajax(params);

                        $request.then(success);
                        $request.fail(failure);

                        return $request;
                    }
                }
            });
            break;

          case "Reactivo":
            element.select2({
                placeholder: 'Busque por nombre del reactivo',
                minimumInputLength: 1,
                ajax: {
                    url: "GetTopReactivos",
                    dataType: "json",
                    delay: 250,
                    data: function (params) {
                        return {
                            busqueda: params.term
                        }
                    },
                    processResults: function (data) {
                        return {
                            results: data
                        };
                    },
                    transport: function (params, success, failure) {
                        var $request = $.ajax(params);

                        $request.then(success);
                        $request.fail(failure);

                        return $request;
                    }
                }
            });
            break;

        default:
            element.select2();
            break;
    }
}
