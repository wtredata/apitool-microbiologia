// Array global para almacenar las graficas generadas
window.graficasQCI = [];

function generarGraficaIntegrada(data_reference) {

    let contG_integrada = $("#cont_grafica_integrada");

    let spinner_ld = $('<div class="spinner-border text-primary m-2" role="status"><span class="sr-only">Loading...</span></div>');
    let msg_error = $('<span class="text-danger">Error</span>');

    contG_integrada.html(spinner_ld.clone());

    var datainfo = {
        id: ((data_reference == null || typeof data_reference == "undefined") ? window.analito_node.data.id_reference : data_reference),
        fecha_inicial: $("#valores-estadisticos-f-inicial-grafica").val(),
        fecha_final: $("#valores-estadisticos-f-final-grafica").val()
    }
    
    $.get(
        "GetValoresGeneralesAnalitoLaboratorio",
        datainfo
    ).done(function (response) {

        contG_integrada.html("");

        window.response = response;
        let num_niveles = response.informacion_general.num_niveles;

        for (lvl_i = 1; lvl_i <= num_niveles; lvl_i++) {

            contG_integrada.append("<canvas id='cont_graph_qci_" + (lvl_i) + "' data-nivel='" + (lvl_i) + "'></canvas>"); // Agregar contenedor de la grafica
            let r_procesados = window.response.resultados_aprobados[lvl_i];

            let minY = minY_gcc(r_procesados, lvl_i, window.response);
            let maxY = maxY_gcc(r_procesados, lvl_i, window.response);

            let num_apro = r_procesados.length;

            setEscalaBasicos(window.response);
            setEscalaError(window.response);

            let options_graph = {
                responsive: true,
                maintainAspectRatio: false,
                animation: {
                    duration: 0
                },
                plugins: {
                    datalabels: {
                        formatter: function(value, context) {
                            return null;
                        }
                    }
                },
                layout: {
                    padding: {
                        left: 23,
                        right: 23,
                        top: 43,
                        bottom: 33
                    }
                },
                scales: {
                    xAxes: [{
                        type: 'time',
                        time: {
                            unit: 'hour',
                            //round: 'day',
                            displayFormats: {
                                hour: 'DD/MM/YY HH:mm'
                            }
                        },
                        ticks: {
                            autoSkip: true,
                            maxRotation: 60,
                            minRotation: 60,
                            maxTicksLimit: num_apro <15 ?num_apro*2: parseInt(num_apro/2)
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        scaleLabel: {
                            display: true,
                            labelString: "Periodo de tiempo"
                        }
                    }],
                    yAxes: [{
                            id: "basicos",
                            type: "escalaBasicos",
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                min: minY,
                                max: maxY,
                                scaleBeginAtZero: false,
                                callback: function (tick, index, arrayTicks) {

                                    switch (index) {
                                        case 0:
                                            return "+3DE: " + round(tick, 100);
                                        case 3:
                                            return "MEDIA: " + round(tick, 100);
                                        case 6:
                                            return "-3DE: " + round(tick, 100);
                                    }

                                    return tick;
                                }
                            },
                            scaleLabel: {
                                display: true,
                                labelString: "Gráfico de Levey-Jennings",
                            },
                            position: "left"
                        },
                        {
                            id: "lad",
                            type: "escalaErrores",
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                min: minY,
                                max: maxY,
                                scaleBeginAtZero: false,
                                callback: function (tick, index, arrayTicks) {

                                    switch (index) {
                                        case 0:
                                            return "LS: " + round(tick, 100);
                                        case 1:
                                            return "DIANA: " + round(tick, 100);
                                        case 2:
                                            return "LI: " + round(tick, 100);
                                    }

                                    return tick;
                                }
                            },
                            scaleLabel: {
                                display: true,
                                labelString: "Gráfico de APS",
                            },
                            position: "right"
                        },
                        {
                            id: "resultados",
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                min: minY,
                                max: maxY
                            },
                            display: false,
                        }
                    ],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: 'point',
                    caretPadding: 10
                },
                title: {
                    display: true,
                    position: "left",
                    fontSize: 12,
                    fontColor: "#000",
                    text: "Nivel " + lvl_i
                }
            }

            let data_graph = {
                labels: (function () {
                    if (typeof r_procesados != "undefined") { // Solo si esta definido el conjunto 
                        let labels = r_procesados.map(function (resultado) {
                            return resultado.fecha;
                        });
                        return labels;
                    } else {
                        return [];
                    }
                }()),
                datasets: [
                    {
                        label: "LIMITE ANALITICO DE DESEMPEÑO",
                        lineTension: 0,
                        fill: true,
                        yAxisID: "lad",
                        backgroundColor: "rgba(0,0,0,0)",
                        borderColor: "rgb(255, 0, 0)",
                        pointRadius: 0,
                        pointHoverRadius: 0,
                        pointHitRadius: 10,
                        pointBorderWidth: 0,
                        borderWidth: 1.5,
                        data: (function () {

                            if (typeof r_procesados == "undefined" || r_procesados.length < 2 || window.response.limite_aps == null) {
                                return [];
                            } else {
                                let lad_grap = [];
                                for (let i = 0; i <= r_procesados.length; i++) {

                                    if (i != r_procesados.length) {
                                        lad_grap.push({
                                            y: round(((parseFloat(window.response.valores_estadisticos[lvl_i].diana)) + ((parseFloat(window.response.limite_aps.valor_limite) / 100) * parseFloat(window.response.valores_estadisticos[lvl_i].diana))), 100),
                                            x: r_procesados[i].fecha
                                        });
                                    } else { // Si es el ultimo
                                        lad_grap.push({
                                            y: null,
                                            x: r_procesados[i - 1].fecha
                                        });
                                    }
                                }

                                for (let i = ((r_procesados.length) - 1); i >= 0; i--) {
                                    lad_grap.push({
                                        y: round(((parseFloat(window.response.valores_estadisticos[lvl_i].diana)) - ((parseFloat(window.response.limite_aps.valor_limite) / 100) * parseFloat(window.response.valores_estadisticos[lvl_i].diana))), 100),
                                        x: r_procesados[i].fecha
                                    });
                                }
                                return lad_grap;
                            }

                        }())
                    },
                    {
                        label: "Resultado",
                        lineTension: 0,
                        fill: false,
                        borderColor: "rgb(33, 97, 140)",
                        pointRadius: 3,
                        pointBorderColor: "rgb(21, 67, 96)",
                        pointBackgroundColor: "rgba(21, 67, 96, 0.8)",
                        pointHoverRadius: 5,
                        pointStyle: "circle",
                        pointHitRadius: 10,
                        pointBorderWidth: 1.5,
                        borderWidth: 1.6,
                        data: (function () {
                            if (typeof r_procesados != "undefined") { // Solo si esta definido el conjunto 
                                let resutados = r_procesados.map(function (resultado) {
                                    return resultado.concentracion;
                                });
                                return resutados;
                            } else {
                                return [];
                            }
                        }()),
                        yAxisID: "resultados"
                    },
                    {
                        label: "Diana",
                        lineTension: 0,
                        yAxisID: "lad",
                        fill: false,
                        borderColor: "rgb(26, 188, 156)",
                        pointRadius: 0,
                        pointHoverRadius: 0,
                        pointHitRadius: 10,
                        pointBorderWidth: 3,
                        borderWidth: 1.8,
                        data: (function () {
                            if (typeof r_procesados == "undefined" || r_procesados.length < 2) {
                                return [];
                            } else {
                                return convertirRepetitivo(
                                    (round(window.response.valores_estadisticos[lvl_i].diana, 100)),
                                    r_procesados.length
                                );
                            }

                        }())
                    },
                    {
                        label: "Media",
                        lineTension: 0,
                        fill: false,
                        borderColor: "rgb(53, 67, 81)",
                        pointRadius: 0,
                        pointHoverRadius: 0,
                        pointHitRadius: 10,
                        pointBorderWidth: 2,
                        borderWidth: 1.5,
                        data: (function () {

                            if (typeof r_procesados == "undefined" || r_procesados.length < 2) {
                                return [];
                            } else {
                                return convertirRepetitivo(
                                    (round(window.response.valores_estadisticos[lvl_i].media, 100)),
                                    r_procesados.length
                                );
                            }
                        }()),
                        yAxisID: "basicos"
                    },
                    {
                        label: "D.E. NV 1",
                        lineTension: 0,
                        backgroundColor: "rgb(242, 243, 244)",
                        fill: true,
                        borderDash: [3],
                        borderColor: "rgb(100, 100, 100)",
                        pointRadius: 0,
                        pointHoverRadius: 0,
                        pointHitRadius: 10,
                        pointBorderWidth: 0,
                        borderWidth: 0.5,
                        data: (function () {
                            if (typeof r_procesados == "undefined" || r_procesados.length < 2) {
                                return [];
                            } else {
                                let nivel_uno_de = [];
                                for (let i = 0; i <= r_procesados.length; i++) {
                                    if (i != r_procesados.length) {
                                        nivel_uno_de.push({
                                            y: round((parseFloat(window.response.valores_estadisticos[lvl_i].media) + parseFloat(window.response.valores_estadisticos[lvl_i].de)), 100),
                                            x: r_procesados[i].fecha
                                        });
                                    } else {
                                        nivel_uno_de.push({
                                            y: null,
                                            x: r_procesados[i - 1].fecha
                                        });
                                    }
                                }

                                for (let i = ((r_procesados.length) - 1); i >= 0; i--) {
                                    nivel_uno_de.push({
                                        y: round((parseFloat(window.response.valores_estadisticos[lvl_i].media) - parseFloat(window.response.valores_estadisticos[lvl_i].de)), 100),
                                        x: r_procesados[i].fecha
                                    });
                                }
                                return nivel_uno_de;
                            }
                        }()),
                        yAxisID: "basicos"
                    },
                    {
                        label: "D.E.  NV 2",
                        lineTension: 0,
                        fill: true,
                        borderDash: [3],
                        backgroundColor: "rgb(242, 243, 244)",
                        pointRadius: 0,
                        borderColor: "rgb(100, 100, 100)",
                        pointHoverRadius: 0,
                        pointHitRadius: 10,
                        pointBorderWidth: 2,
                        borderWidth: 0.5,
                        data: (function () {
                            if (typeof r_procesados == "undefined" || r_procesados.length < 2) {
                                return [];
                            } else {
                                let nivel_dos_de = [];
                                for (let i = 0; i <= r_procesados.length; i++) {

                                    if (i != r_procesados.length) {
                                        nivel_dos_de.push({
                                            y: round((parseFloat(window.response.valores_estadisticos[lvl_i].media) + (parseFloat(window.response.valores_estadisticos[lvl_i].de) * 2)), 100),
                                            x: r_procesados[i].fecha
                                        });
                                    } else { // Si es el ultimo
                                        nivel_dos_de.push({
                                            y: null,
                                            x: r_procesados[i - 1].fecha
                                        });
                                    }
                                }

                                for (let i = ((r_procesados.length) - 1); i >= 0; i--) {
                                    nivel_dos_de.push({
                                        y: round((parseFloat(window.response.valores_estadisticos[lvl_i].media) - (parseFloat(window.response.valores_estadisticos[lvl_i].de) * 2)), 100),
                                        x: r_procesados[i].fecha
                                    });
                                }
                                return nivel_dos_de;
                            }
                        }()),
                        yAxisID: "basicos"
                    },
                    {
                        label: "D.E.  NV 3",
                        lineTension: 0,
                        fill: true,
                        borderDash: [3],
                        backgroundColor: "rgb(215, 219, 221)",
                        borderColor: "rgb(100, 100, 100)",
                        pointRadius: 0,
                        pointHoverRadius: 0,
                        pointHitRadius: 10,
                        pointBorderWidth: 2,
                        borderWidth: 0.5,
                        data: (function () {
                            if (typeof r_procesados == "undefined" || r_procesados.length < 2) {
                                return [];
                            } else {
                                let nivel_tres_de = [];
                                for (let i = 0; i <= r_procesados.length; i++) {
                                    if (i != r_procesados.length) {
                                        nivel_tres_de.push({
                                            y: round((parseFloat(window.response.valores_estadisticos[lvl_i].media) + (parseFloat(window.response.valores_estadisticos[lvl_i].de) * 3)), 100),
                                            x: r_procesados[i].fecha
                                        });
                                    } else { // Si es el ultimo
                                        nivel_tres_de.push({
                                            y: null,
                                            x: r_procesados[i - 1].fecha
                                        });
                                    }
                                }

                                for (let i = ((r_procesados.length) - 1); i >= 0; i--) {
                                    nivel_tres_de.push({
                                        y: round((parseFloat(window.response.valores_estadisticos[lvl_i].media) - (parseFloat(window.response.valores_estadisticos[lvl_i].de) * 3)), 100),
                                        x: r_procesados[i].fecha
                                    });
                                }
                                return nivel_tres_de;
                            }
                        }()),
                        yAxisID: "basicos"
                    }
                ],
            }

            let contextoLvl = $("#cont_graph_qci_" + (lvl_i));
            if (typeof window.graficasQCI["cont_graph_qci_" + (lvl_i)] != "undefined") { // Eliminar el grafico en dado caso de existir
                window.graficasQCI["cont_graph_qci_" + (lvl_i)].clear();
                window.graficasQCI["cont_graph_qci_" + (lvl_i)].destroy();
                window.graficasQCI["cont_graph_qci_" + (lvl_i)] = null;
            }

            window.graficasQCI["cont_graph_qci_" + (lvl_i)] = new Chart(contextoLvl, {
                type: "line",
                data: data_graph,
                options: options_graph
            });
        }

    }).fail(function (response) {
        if(gestionErroresBackend(response)){
        } else {
            notificacion("normal", "error", "Error al generar las gráficas integradas de control de calidad", "Por favor intente nuevamente...");
        }

        contG_integrada.html(msg_error.clone());
    }).always(function (response) {
    });
}
