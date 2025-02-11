<a onclick="crearPdfGeneral()" class="btn btn-outline-dark"> Exportaci&oacuten general</a>
<a onclick="pdfGraficas()" class="btn btn-outline-dark"> Exportar gr&aacuteficas</a>
<a onclick="pdfMesurandos()" class="btn btn-outline-dark"> Exportar Tabla Mensurands</a>
<div>
    {{--  <div class="col-12"><br></div>--}}
    {{--  <div class="border border-secondary border-left-0 border-right-0"--}}
    {{--       style="margin-top: 20px; margin-bottom: 20px">--}}
    {{--    <h1 style="text-align:center">Mensurands table</h1>--}}
    {{--  </div>--}}
    <div class="mt-3 card rounded border shadow-none py-2">
        <h1 class="text-primary h1 text-dark text-center m-0">Mensurands table</h1>
    </div>
    {{--  <div class="col-12"><br></div>--}}
    <div class="row px-3">
        <div class="col-12">
            <div class='pre-contenedor-graficos-sigmometria'>
                <h3>Detalle Mesurandos</h3>
            </div>
            <div class="contenedor-detalle-sigmometria overflow-auto">
                <div id="mesurandos_table" class="cont-tabla-analitos overflow-auto" style='max-height:600px;'>
                    <table class='table table-sm table-bordered text-center table-info-siget'>
                        <thead style='background-color: #e8ecef'>
                        <tr style="width: 100%">
                            <td style='width: 17.75%' colspan='27' class='font-weight-bold'>Constante
                                Z: {{$constante_z}}</td>
                        </tr>
                        <tr style="width: 100%">
                            <td style='width: 3%' class='font-weight-bold'>1</td>
                            <td style='width: 10%' class='font-weight-bold'>2</td>
                            <td style='width: 8%' class='font-weight-bold'>3</td>
                            <td style='width: 8%' class='font-weight-bold'>4</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>5</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>6</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>7</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>8</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>9</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>10</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>11</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>12</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>13</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>14</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>15</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>16</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>17</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>18</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>19</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>20</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>21</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>22</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>23</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>24</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>25</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>26</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>27</td>
                        </tr>
                        <tr style="width: 100%">
                            <td style='width: 3%' class='font-weight-bold'>#</td>
                            <td style='width: 10%' class='font-weight-bold'>Sede</td>
                            <td style='width: 8%' class='font-weight-bold'>Ciudad</td>
                            <td style='width: 8%' class='font-weight-bold'>Analizador</td>
                            <td style='width: 4.4375%' class='font-weight-bold'># Lab</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>Lote</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>Fecha de caducidad analito</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>Analito</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>Nivel</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>Unidad</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>APS</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>CV<sub>mp</sub></td>
                            <td style='width: 4.4375%' class='font-weight-bold'>SESGO<sub>mp</sub></td>
                            <td style='width: 4.4375%' class='font-weight-bold'>Valor DIANA</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>Sesgo %</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>Sesgo</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>AP lab</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>Media</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>CV</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>N</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>N-Per3</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>Per3</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>DE</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>CVR</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>SR</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>IET / API</td>
                            <td style='width: 4.4375%' class='font-weight-bold'>σ</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datos_reporte["labels"] as $data)
                            <tr style="width: 100%">
                                <td colspan='1'>{{$data["indice"]}}</td>
                                <td colspan='1'>{{$data["sede"]}}</td>
                                <td colspan='1'>{{$data["ciudad"]}}</td>
                                <td colspan='1'>{{$data["analizador"]}}</td>
                                <td colspan='1'>{{$data["num_lab"]}}</td>
                                <td colspan='1'>{{$data["lote"]}}</td>
                                <td colspan='1'>{{$data["fecha_caducidad"]}}</td>
                                <td colspan='1'>{{$data["analito"]}}</td>
                                <td colspan='1'>{{$data["nivel"]}}</td>
                                <td colspan='1'>{{$data["unidades"]}}</td>
                                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["valor_limite"], 2)}}</td>
                                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["cv_mp"],2)}}</td>
                                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["sesgo_mp"], 2)}}</td>
                                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["diana"], 2)}}</td>
                                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["sesgo_por"], 2)}}</td>
                                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["sesgo"], 2)}}</td>
                                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["ap_lab"], 2)}}</td>
                                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["media"], 2)}}</td>
                                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["cv"], 2)}}</td>
                                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': $data["puntos_a"]}}</td>
                                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': $data["nper3"] }}</td>
                                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': $data["per3"] }}</td>
                                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["de"], 2)}}</td>
                                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["cvr"], 2)}}</td>
                                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["sr"], 2)}}</td>
                                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["iet"], 2)}}</td>
                                @if($data["valor_limite"] == null)
                                    <td colspan='1'>N/A</td>
                                @else
                                    @if(round($data["sigma"], 2) >= 5)
                                        <td colspan='1'
                                            style="background-color: #C2FFCEFF;">{{round($data["sigma"], 2)}}</td>
                                    @elseif (3 <= round($data["sigma"], 2) && round($data["sigma"], 2) < 5)
                                        <td colspan='1'
                                            style="background-color: #FFF1C2FF;">{{round($data["sigma"], 2)}}</td>
                                    @elseif ($constante_z <= round($data["sigma"], 2) && round($data["sigma"], 2) < 3 )
                                        <td colspan='1'
                                            style="background-color: #C2D3FFFF;">{{round($data["sigma"], 2)}}</td>
                                    @elseif ($constante_z > round($data["sigma"], 2))
                                        <td colspan='1'
                                            style="background-color: #FFC2C2FF;">{{round($data["sigma"], 2)}}</td>
                                    @endif
                                @endif
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function pdfMesurandos() {
            var myWindow = window.open('', '_blank');
            var tableMesurandos = document.getElementById('mesurandos_table').innerHTML;

            myWindow.document.write(`<html><head>`);
            crearLinkParaEstilosDelReporte(myWindow);
            myWindow.document.write('<title>API Tool | Reporte Mesurando</title>');
            myWindow.document.write('</head><body>');
            crearEncabezadoDelReporte(myWindow, "Reporte Mesurandos");
            crearEstilosGeneralesDelReporte(myWindow);
            myWindow.document.write(`<table class="w-100">
                                          <thead><tr><td>
                                            <div class="header-space">&nbsp;</div>
                                          </td></tr></thead>
                                          <tbody><tr><td>
                                        <div class="content m-0 p-0">`);
            crearSeccionDeFiltros(myWindow)
            myWindow.document.write(`<h2 style="font-size: 2em;" class="h4 pb-0">Tabla de Mesurandos</h2>`)
            myWindow.document.write(`${tableMesurandos}`);
            myWindow.document.write(`</div>
                                        </td></tr></tbody>
                                     </table>
                                    `);

            myWindow.document.write('</body></html>');

            myWindow.document.close();
            myWindow.onload = function () {
                myWindow.onafterprint = window.close;
                myWindow.print();
                myWindow.focus();
                myWindow.onfocus = function () {
                    window.close();
                }
            };
        }
    </script>

</div>

<div>
    {{--  <div class="col-12"><br></div>--}}
    {{--  <div class="border border-secondary border-left-0 border-right-0"--}}
    {{--       style="margin-top: 20px; margin-bottom: 20px">--}}
    {{--    <h1 style="text-align:center">Metric Sigma Charts</h1>--}}
    {{--  </div>--}}
    <div class="mt-5 card rounded border shadow-none py-2">
        <h1 class="text-primary h1 text-dark text-center m-0">Metric Sigma Charts</h1>
    </div>
    {{--  <div class="col-12"><br></div>--}}
    <div class="{{$nomSection}}" id="{{$nomSection}}">
        <div class="observacion-numerica shadow-none border">
            <div class="numero">*</div>
            <div class="contenido">
                <div class="row">
                    <div class="col-4">
                        <div>
                            <span class="pr-2">Constante Z: </span>
                            <span class="font-weight-bold text-dark shadow-none">
                                {{$constante_z}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="pt-3 row gap-x-1">
            <div class="col-12  col-md">
                <div class="card shadow-none border rounded-lg">
                    <div class="pre-contenedor-graficos-sigmometria">
                        <h3 class="font-weight-bold h4 text-primary pb-2">
                            Métrica Sigma
                        </h3>
                    </div>
                    <div class="contenedor-detalle-sigmometria" style="height: 30rem;">
                        <canvas style="height: 30rem;" id="comparativa-interlaboratorio_metricas_por_sigma_r"
                                class="w-100">
                        </canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md">
                <div class="card shadow-none border rounded-lg">
                    <div class="pre-contenedor-graficos-sigmometria">
                        <h3 class="font-weight-bold h4 text-primary pb-2">
                            Métrica por rango
                        </h3>
                    </div>
                    <div class="contenedor-detalle-sigmometria" style="height: 30rem;">
                        <canvas class="w-100" style="height: 30rem;"
                                id="comparativa-interlaboratorio_metricas_por_sigma_barras_r">
                        </canvas>
                    </div>
                </div>
            </div>
        </section>
        <script type="application/javascript">
            data_reporte_r = {!! json_encode($datos_reporte_sigma, JSON_HEX_TAG) !!};
            datos_conteo_metrica_r = {!! json_encode($datos_conteo_metrica, JSON_HEX_TAG) !!};
            constante_z = {!! json_encode($constante_z, JSON_HEX_TAG) !!};
            max_sigma_r = {!! json_encode($max_sigma, JSON_HEX_TAG) !!};
            min_sigma_r = {!! json_encode($min_sigma, JSON_HEX_TAG) !!};

            // GRAFICA 1
            sigma_metricas_sigma_r = data_reporte_r.sigma || [];
            labels_metricas_sigma_r = data_reporte_r.labels || [];
            comparativa_metricas_por_sigma_r = document.getElementById(
                'comparativa-interlaboratorio_metricas_por_sigma_r'
            );

            options_metricas_sigma_r = {
                responsive: true,
                plugins: {
                    datalabels: {
                        backgroundColor: "#ffffff",
                        clip: true,
                        font: {
                            size: 11,
                            weight: 'bold'
                        },
                        padding: {
                            top: 2.2,
                            left: 2.2,
                            right: 2.6,
                            bottom: 2.2
                        },
                        borderColor: "#555555",
                        borderWidth: 0.5,
                        borderRadius: 2,
                        color: '#444444',
                        formatter: function (value, context) {
                            if (context.dataset.label == "Resultados") {
                                return context.chart.data.datasets[0].data[context.dataIndex].indice;
                            }
                            return null;
                        }
                    },
                },
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                legend: {
                    display: false
                },
                tooltips: {
                    enabled: true,
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
                    mode: 'single',
                    intersect: true,
                    caretPadding: 10,
                    callbacks: {
                        title: function (tooltipItems, data) {
                            let point = data.datasets[0].data[tooltipItems[0].index];
                            if (tooltipItems[0].datasetIndex == "0") {
                                return point.analito + " " + point.nivel;
                            }
                            return "...";
                        },
                        label: function (tooltipItem, data) {
                            let point = data.datasets[0].data[tooltipItem.index];
                            if (tooltipItem.datasetIndex == "0") {
                                return [
                                    point.analizador,
                                    point.unidades,
                                    point.metodologia,
                                    "-------",
                                    "APS: " + round(point.valor_limite, 1000) + "%",
                                    "Fuente: " + point.nom_fuente_etmp,
                                    "Sesgo: " + round(point.sesgo, 1000),
                                    "CV: " + round(point.cv, 1000),
                                    "Sigma: " + round(point.sigma, 1000),
                                    "Laboratorio: " + point.laboratorio,
                                    "Sede: " + point.sede,

                                ];
                            }
                            return null;
                        },
                        footer: function (tooltipItem, data) {
                            return "";
                        }
                    }
                },
                scales: {
                    xAxes: [{
                        type: "linear",
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        grid: {
                            display: true
                        },
                        display: true,
                        scaleLabel: {
                            labelString: "Analito",
                            display: true
                        }
                    }],
                    yAxes: [
                        {
                            type: "linear",
                            scaleLabel: {
                                labelString: "Sigma",
                                display: true
                            }
                        }
                    ]
                },
            };
            comparativa_metricas_por_sigma_chart_r = new Chart(comparativa_metricas_por_sigma_r, {
                type: 'line',
                data: {
                    datasets: [
                        {
                            label: "Resultados",
                            lineTension: 0,
                            fill: false,
                            pointRadius: 3,
                            borderColor: "rgba(0, 0, 0, 0, 0)",
                            pointBackgroundColor: "rgba(100, 100, 100, 0)",
                            pointBorderColor: "rgba(0, 0, 0, 0)",
                            pointHoverRadius: 4,
                            pointHitRadius: 10,
                            pointBorderWidth: 0,
                            borderWidth: 1,
                            showLine: false,
                            data: labels_metricas_sigma_r.map(e => {
                                    return {
                                        x: e.indice,
                                        y: e.sigma,
                                        indice: e.indice,
                                        analizador: e.analizador,
                                        analito: e.analito,
                                        laboratorio: e.laboratorio,
                                        sede: e.sede,
                                        nivel: e.nivel,
                                        unidades: e.unidades,
                                        metodologia: e.metodologia,
                                        valor_limite: e.valor_limite,
                                        nom_fuente_etmp: e.nom_fuente_etmp,
                                        sesgo: e.sesgo,
                                        cv: e.cv,
                                        sigma: e.sigma
                                    }
                                }
                            ),
                        },
                        {
                            label: "Rojo",
                            pointRadius: 0,
                            pointHitRadius: 0,
                            fill: true,
                            lineTension: 0,
                            backgroundColor: "rgb(255,194,194)",
                            borderColor: "rgba(0,200,0,0.0)",
                            data: labels_metricas_sigma_r.map(e => {
                                return {
                                    x: e.indice,
                                    y: min_sigma_r <= 0 ? min_sigma_r : 0,
                                }
                            }),
                            order: 5
                        },
                        {
                            label: "Rojo",
                            pointRadius: 0,
                            pointHitRadius: 0,
                            fill: true,
                            lineTension: 0,
                            backgroundColor: "rgb(255,194,194)",
                            borderColor: "rgba(0,200,0,0.0)",
                            data: labels_metricas_sigma_r.map(e => {
                                return {
                                    x: e.indice,
                                    y: constante_z,
                                }
                            }),
                            order: 4
                        },
                        {
                            label: "Azul",
                            pointRadius: 0,
                            pointHitRadius: 0,
                            fill: true,
                            lineTension: 0,
                            backgroundColor: "rgb(194,211,255)",
                            borderColor: "rgba(0,200,0,0.0)",
                            data: labels_metricas_sigma_r.map(e => {
                                return {
                                    x: e.indice,
                                    y: 3,
                                }
                            }),
                            order: 3
                        },
                        {
                            label: "Amarillo",
                            pointRadius: 0,
                            pointHitRadius: 0,
                            fill: true,
                            lineTension: 0,
                            backgroundColor: "rgb(255,241,194)",
                            borderColor: "rgba(0,200,0,0.0)",
                            data: labels_metricas_sigma_r.map(e => {
                                return {
                                    x: e.indice,
                                    y: 5,
                                }
                            }),
                            order: 2
                        },
                        {
                            label: "Verde",
                            pointRadius: 0,
                            pointHitRadius: 0,
                            fill: true,
                            lineTension: 0,
                            backgroundColor: "rgba(194, 255, 206 ,1.0)",
                            borderColor: "rgba(0,200,0,0.0)",
                            data: labels_metricas_sigma_r.map(e => {
                                return {
                                    x: e.indice,
                                    y: max_sigma_r ? max_sigma_r : 16,
                                }
                            }),
                            order: 1
                        },
                    ]
                },
                options: options_metricas_sigma_r
            });

            // GRAFICA 2
            comparativa_interlaboratorio_metricas_por_sigma_barras = document.getElementById(
                'comparativa-interlaboratorio_metricas_por_sigma_barras_r'
            );
            comparativa_interlaboratorio_metricas_por_sigma_barras_chart
                = new Chart(comparativa_interlaboratorio_metricas_por_sigma_barras, {
                type: 'bar',
                data: {
                    labels: Object.keys(datos_conteo_metrica_r),
                    datasets: [
                        {
                            label: 'Sigmometría',
                            data: Object.values(datos_conteo_metrica_r),
                            backgroundColor: [
                                "rgba(194, 255, 206 ,1.0)",
                                "rgb(255,241,194)",
                                "rgb(194,211,255)",
                                "rgb(255,194,194)",
                                "rgb(202,202,202)",
                            ],
                            borderColor: [
                                "rgb(163,232,176)",
                                "rgb(213,197,143)",
                                "rgb(150,169,218)",
                                "rgb(179,179,179)",
                            ],
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        datalabels: {
                            backgroundColor: "#ffffff",
                            clip: true,
                            font: {
                                size: 11,
                                weight: 'bold'
                            },
                            padding: {
                                top: 2.2,
                                left: 2.2,
                                right: 2.6,
                                bottom: 2.2
                            },
                            borderColor: "#555555",
                            borderWidth: 0.5,
                            borderRadius: 2,
                            color: '#444444'
                        },
                    },
                    maintainAspectRatio: false,
                    layout: {
                        padding: {
                            left: 10,
                            right: 25,
                            top: 25,
                            bottom: 0
                        }
                    },
                    tooltips: {
                        enabled: true,
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
                        mode: 'single',
                        intersect: true,
                        caretPadding: 10,
                        callbacks: {
                            title: function (tooltipItems, data) {
                                let point = data.datasets[0].data[tooltipItems[0].index];
                                let total_muestras = sigma_metricas_sigma_r.length;
                                let porcentaje = Math.round((point / total_muestras) * 10000) / 100;
                                return `Analitos: ${point} - Porcentaje: ${porcentaje}%`;
                            },
                            label: function (tooltipItem, data) {
                                let point = data.datasets[0].data[tooltipItem.index];
                                let total_muestras = sigma_metricas_sigma_r.length;
                                let porcentaje = Math.round((point / total_muestras) * 10000) / 100;
                                return [
                                    "-------",
                                    "Analitos: " + point,
                                    "Porcentaje: " + porcentaje + "%",
                                    "Total: " + total_muestras,
                                ];
                            },
                            footer: function (tooltipItem, data) {
                                return "";
                            }
                        }
                    },
                }
            });
        </script>
    </div>
    <script>
        function pdfGraficas() {
            var myWindow = window.open('', '_blank');

            myWindow.document.write(`<html><head>`);
            crearLinkParaEstilosDelReporte(myWindow);
            myWindow.document.write('<title>API Tool | Reporte Gráficas</title>');
            myWindow.document.write('</head><body>');
            crearEncabezadoDelReporte(myWindow, "Reporte de Gráficas");
            crearEstilosGeneralesDelReporte(myWindow);
            myWindow.document.write(`<table class="w-100">
                                          <thead><tr><td>
                                            <div class="header-space">&nbsp;</div>
                                          </td></tr></thead>
                                          <tbody><tr><td>
                                        <div class="content m-0 p-0">`);
            crearSeccionDeFiltros(myWindow);
            crearImagenesDeLasGraficasParaElReporte(myWindow);
            myWindow.document.write(`</div>
                                        </td></tr></tbody>
                                        </table>
                                    `);
            myWindow.document.write('</body></html>');
            myWindow.document.close();
            myWindow.onload = function () {
                myWindow.onafterprint = window.close;
                myWindow.print();
                myWindow.focus();
                myWindow.onfocus = function () {
                    window.close();
                }
            };
        }
    </script>
</div>


<div>
    {{--  <div class="col-12"><br></div>--}}
    {{--  <div class="border border-secondary border-left-0 border-right-0"--}}
    {{--       style="margin-top: 20px; margin-bottom: 20px">--}}
    {{--    <h1 style="text-align:center">Analitycal error chart</h1>--}}
    {{--  </div>--}}
    <div class="card rounded border shadow-none py-2">
        <h1 class="text-primary h1 text-dark text-center m-0">Analitycal error chart</h1>
    </div>
    {{--  <div class="col-12"><br></div>--}}
    <div class="{{$nomSection}}" id="$nomSection">
        <section class="pt-3 row gap-x-1">
            <div class="col-12  col-md">
                <div class="card shadow-none border rounded-lg">
                    <div class="pre-contenedor-graficos-sigmometria">
                        <h3 class="font-weight-bold h4 text-primary pb-2">
                            Comparative Analysis Performance-Laboratory Network ET Lab
                        </h3>
                    </div>
                    <div class="contenedor-detalle-sigmometria" style="height: 30rem;">
                        <canvas style="height: 30rem;" id="comparative_analito_aps_r"
                                class="w-100">
                        </canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md">
                <div class="card shadow-none border rounded-lg">
                    <div class="pre-contenedor-graficos-sigmometria">
                        <h3 class="font-weight-bold h4 text-primary pb-2">
                            Comparative Analysis Performance-Laboratory Network CV
                        </h3>
                    </div>
                    <div class="contenedor-detalle-sigmometria" style="height: 30rem;">
                        <canvas class="w-100" style="height: 30rem;"
                                id="comparative_analitos_cv_r">
                        </canvas>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card shadow-none border rounded-lg">
                    <div class="pre-contenedor-graficos-sigmometria">
                        <h3 class="font-weight-bold h4 text-primary pb-2">
                            Comparative Analysis Performance-Laboratory Network BIAS
                        </h3>
                    </div>
                    <div class="contenedor-detalle-sigmometria" style="height: 30rem;">
                        <canvas class="w-100" style="height: 30rem;"
                                id="comparative_analitos_sesgo_r">
                        </canvas>
                    </div>
                </div>
            </div>
        </section>
        <script>

            data_error = {!! json_encode($datos_reporte, JSON_HEX_TAG) !!};
            filters = {!! json_encode($data_of_filters, JSON_HEX_TAG) !!};

            aps = [];
            ap_lab = [];
            contador = 0;
            x1 = [];
            x2 = [];
            x3 = [];
            cv = [];
            cvmp = [];
            sesgo = [];
            sesp = [];

            label = data_error.labels;
            label.forEach(
                valores_estadisticos => {
                    if (valores_estadisticos.valor_limite != 0) {
                        aps.push(valores_estadisticos.valor_limite);
                        ap_lab.push(valores_estadisticos.ap_lab);
                        x1.push("Numero analito: " + valores_estadisticos.indice + "\nSede: " + valores_estadisticos.sede + "\nAnalito: " + valores_estadisticos.analito);
                    }
                    if (valores_estadisticos.cv_mp != 0) {
                        cv.push(valores_estadisticos.cv);
                        cvmp.push(valores_estadisticos.cv_mp);
                        x2.push("Numero analito: " + valores_estadisticos.indice + "\nSede: " + valores_estadisticos.sede + "\nAnalito: " + valores_estadisticos.analito);
                    }
                    if (valores_estadisticos.sesgo_mp !=null) {
                        sesgo.push(valores_estadisticos.sesgo_mp);
                        sesp.push(valores_estadisticos.sesgo_por);
                        x3.push("Numero analito: " + valores_estadisticos.indice + "\nSede: " + valores_estadisticos.sede + "\nAnalito: " + valores_estadisticos.analito);
                    }
                }
            );

            /* data_error.forEach(
                sede =>{
                    sede.valores_estadisticos.forEach(
                        valores_estadisticos => {
                            aps.push(valores_estadisticos.valor_limite);
                            ap_lab.push(valores_estadisticos.ap_lab);
                            cv.push(valores_estadisticos.cv);
                            cvmp.push(valores_estadisticos.cv_mp);
                            sesgo.push(valores_estadisticos.sesgo);
                            sesp.push(valores_estadisticos.sesgo_por);
                            contador++;
                            x.push("Numero analito: " + contador  + "\nSede: " + valores_estadisticos.sede + "\nAnalito: " + valores_estadisticos.analito);
                        }
                    )
                }
            ); */

            comparative_analito_aps_element = document.getElementById("comparative_analito_aps_r");

            comparative_analito_aps_chart = new Chart(comparative_analito_aps_element, {
                type: 'line',
                data: {
                    labels: x1,
                    datasets: [
                        {
                            label: 'APS',
                            pointRadius: 3,
                            pointBorderWidth: 0.5,
                            borderWidth: 1,
                            fill: false,
                            lineTension: 0,
                            backgroundColor: "rgba(28,80,164,1.0)",
                            borderColor: "rgba(28,80,164,1.0)",
                            pointStyle: "triangle",
                            data: aps,
                            order: 1
                        },
                        {
                            label: 'AP Lab',
                            pointRadius: 3,
                            pointBorderWidth: 0.5,
                            borderWidth: 1.5,
                            fill: false,
                            lineTension: 0,
                            backgroundColor: "rgba(0,0,0,1.0)",
                            borderColor: "rgba(255,249,50,1.0)",
                            data: ap_lab,
                            order: 2
                        }
                    ]
                },
                options: {
                    plugins: {
                        datalabels: {
                            display: false
                        },
                        title: {
                            display: true
                        },
                        legend: {
                            display: false
                        }
                    },
                    maintainAspectRatio: false,
                    layout: {
                        padding: {
                            left: 10,
                            right: 25,
                            top: 10,
                            bottom: 0
                        }
                    },
                    scales: {
                        xAxes: [{
                            ticks: {
                                autoSkip: true,
                                maxTicksLimit: 2,
                                display: false
                            },
                            grid: {
                                display: true
                            },
                            display: true,
                            scaleLabel: {
                                labelString: "Analito",
                                display: true
                            }
                        }],
                    }
                }
            });

            comparative_analitos_cv_element = document.getElementById("comparative_analitos_cv_r");

            comparative_analito_cv_chart = new Chart(comparative_analitos_cv_element, {
                type: 'line',
                data: {
                    labels: x2,
                    datasets: [
                        {
                            label: 'Cvmp',
                            pointRadius: 3,
                            pointBorderWidth: 0.5,
                            borderWidth: 1,
                            fill: false,
                            lineTension: 0,
                            backgroundColor: "rgba(28,80,164,1.0)",
                            borderColor: "rgba(28,80,164,1.0)",
                            pointStyle: "triangle",
                            data: cvmp,
                            order: 1
                        },
                        {
                            label: 'CV',
                            pointRadius: 3,
                            pointBorderWidth: 0,
                            borderWidth: 0,
                            fill: false,
                            lineTension: 0,
                            backgroundColor: "rgba(0,0,0,1.0)",
                            borderColor: "rgba(0,0,0,0.0)",
                            data: cv,
                            order: 2
                        }
                    ]
                },
                options: {
                    plugins: {
                        datalabels: {
                            display: false
                        },
                        title: {
                            display: true
                        },
                        legend: {
                            display: false
                        }
                    },
                    maintainAspectRatio: false,
                    layout: {
                        padding: {
                            left: 10,
                            right: 25,
                            top: 10,
                            bottom: 0
                        }
                    },
                    scales: {
                        xAxes: [{
                            ticks: {
                                autoSkip: true,
                                maxTicksLimit: 2,
                                display: false
                            },
                            grid: {
                                display: true
                            },
                            display: true,
                            scaleLabel: {
                                labelString: "Analito",
                                display: true
                            }
                        }],
                    }
                }
            });

            comparative_analitos_sesgo_element = document.getElementById("comparative_analitos_sesgo_r");

            comparative_analitos_sesgo_chart = new Chart(comparative_analitos_sesgo_element, {
                type: 'line',
                data: {
                    labels: x3,
                    datasets: [
                        {
                            label: 'Sesgo',
                            pointRadius: 3,
                            pointBorderWidth: 0.5,
                            borderWidth: 1,
                            fill: false,
                            lineTension: 0,
                            backgroundColor: "rgba(28,80,164,1.0)",
                            borderColor: "rgba(28,80,164,1.0)",
                            pointStyle: "triangle",
                            data: sesgo,
                            order: 1
                        },
                        {
                            label: 'Sesgo %',
                            pointRadius: 3,
                            pointBorderWidth: 0,
                            borderWidth: 0,
                            fill: false,
                            lineTension: 0,
                            backgroundColor: "rgba(0,0,0,1.0)",
                            borderColor: "rgba(0,0,0,0.0)",
                            data: sesp,
                            order: 2
                        }
                    ]
                },
                options: {
                    plugins: {
                        datalabels: {
                            display: false
                        },
                        title: {
                            display: true
                        },
                        legend: {
                            display: false
                        }
                    },
                    maintainAspectRatio: false,
                    layout: {
                        padding: {
                            left: 10,
                            right: 25,
                            top: 10,
                            bottom: 0
                        }
                    },
                    scales: {
                        xAxes: [{
                            ticks: {
                                autoSkip: true,
                                maxTicksLimit: 2,
                                display: false
                            },
                            grid: {
                                display: true
                            },
                            display: true,
                            scaleLabel: {
                                labelString: "Analito",
                                display: true
                            }
                        }],
                    }
                }
            });
        </script>
    </div>
</div>

<!-- Percentil -->
<div>
<div class="card rounded border shadow-none py-2">
        <h1 class="text-primary h1 text-dark text-center m-0">Percentils chart</h1>
    </div>
<section class="pt-3 row gap-x-1">
        <div class="col-12  col-md">
            <div class="card shadow-none border rounded-lg">
                <div class="pre-contenedor-graficos-sigmometria">
                    <h3 class="font-weight-bold h4 text-primary pb-2">
                        3.1 Comparative Analysis Performance-Laboratory Network Per3
                    </h3>
                </div>
                <div class="contenedor-detalle-sigmometria" style="height: 30rem;">
                    <canvas style="height: 30rem;" id="chart-per3-report"
                            class="w-100">
                    </canvas>
                </div>
            </div>
        </div>
        <div class="col-12 col-md">
            <div class="card shadow-none border rounded-lg">
                <div class="pre-contenedor-graficos-sigmometria">
                    <h3 class="font-weight-bold h4 text-primary pb-2">
                        3.2 Comparative Sigma Metric vrs Per3
                    </h3>
                </div>
                <div class="contenedor-detalle-sigmometria" style="height: 30rem;">
                    <canvas class="w-100" style="height: 30rem;"
                            id="chart-sigma-vs-per3-report">
                    </canvas>
                </div>
            </div>
        </div>
    </section>

    <script>
         data_error = {!! json_encode($datos_reporte, JSON_HEX_TAG) !!};
         constante_z = {!! json_encode($constante_z, JSON_HEX_TAG) !!};
         labels = data_error.labels || [];
        data_x = [];
        labels1 = [];

        labels.forEach(
            label => {
                if (label.per3 != 'N/A') {
                    labels1.push(label);
                    data_x.push("Número analito:" + label.indice
                        + "\nSede: " + label.sede + "\nAnalito: " + label.analito);
                }
            }
        )
        comparativa_per3 = document.getElementById('chart-per3-report');

        comparativa_per3_chart = new Chart(comparativa_per3, {
            type: 'line',
            data: {
                labels: data_x,
                datasets: [
                    {
                        label: "Resultados",
                        pointRadius: 1,
                        fill: false,
                        label: "Percentil",
                        lineTension: 0,
                        backgroundColor: "rgba(0,0,0,1.0)",
                        borderColor: "rgba(0,0,0,0.0)",
                        data: labels1.map(e => {
                            return {
                                x: e.indice,
                                y: e.per3
                            }
                        }),
                        order: 1
                    },
                    {
                        label: "Verde",
                        pointRadius: 0,
                        pointHitRadius: 0,
                        fill: true,
                        lineTension: 0,
                        backgroundColor: "rgba(194, 255, 206,1.0)",
                        borderColor: "rgba(0,200,0,0)",
                        data: labels1.map(e => {
                            return {
                                x: e.indice,
                                y: 20
                            }
                        }),
                        order: 4
                    },
                    {
                        label: "Amarillo",
                        pointRadius: 0,
                        pointHitRadius: 0,
                        fill: true,
                        lineTension: 0,
                        backgroundColor: "rgba(250, 255, 194,1.0)",
                        borderColor: "rgba(255,249,50,0)",
                        data: labels1.map(e => {
                            return {
                                x: e.indice,
                                y: 50
                            }
                        }),
                        order: 3
                    },
                    {
                        label: "Azul",
                        pointRadius: 0,
                        pointHitRadius: 0,
                        fill: true,
                        lineTension: 0,
                        backgroundColor: "rgba(194, 218, 255,1.0)",
                        borderColor: "rgba(70,200,210,0)",
                        data: labels1.map(e => {
                            return {
                                x: e.indice,
                                y: 80
                            }
                        }),
                        order: 4
                    },
                    {
                        label: "Rojo",
                        pointRadius: 0,
                        pointHitRadius: 0,
                        fill: true,
                        lineTension: 0,
                        backgroundColor: "rgba(255, 126, 143,1.0)",
                        borderColor: "rgba(255,100,70,0)",
                        data: labels1.map(e => {
                            return {
                                x: e.indice,
                                y: 100
                            }
                        }),
                        order: 5
                    }],

            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            stepSize: 10,
                            min: 0,
                            max: 100
                        }
                    }],
                    xAxes: [{
                        grid: {
                            display: false
                        },
                        display: false
                    }]
                },
                plugins: {
                    datalabels: {
                        display: false,
                        formatter: function (value, context) {
                            if (context.dataset.label == "Resultado") {
                                return context.chart.data.datasets[0].data[context.dataIndex].indice;
                            }
                            return null;
                        }
                    },
                    legend: {
                        display: false
                    }
                },
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        rigth: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                legend: {
                    display: false
                }

            }
        });

    </script>

    <!--Grafica 2-->
    <script>
        data_error = {!! json_encode($datos_reporte, JSON_HEX_TAG) !!};
        labels = data_error.labels || [];



        var barra1 = [{y: 30, x: 5}, {y: 30, x: 16}];
        var barra2 = [{y: 30, x: 3}, {y: 30, x: 5}];
        var barra3 = [{y: 70, x: -4}, {y: 70, x: 16}];
        var barra4 = [{y: 30, x: -4}, {y: 30, x: 3}];
        var barra5 = [{y: 100, x: 5}, {y: 100, x: 16}];
        var barra6 = [{y: 100, x: 3}, {y: 100, x: 5}];
        var barra7 = [{y: 100, x: -4}, {y: 100, x: 3}];

        comparativa_sigma_per3 = document.getElementById('chart-sigma-vs-per3-report');

        comparativa_sigma_per3_chart = new Chart(comparativa_sigma_per3, {
            type: "line",
            data: {
                labels: [-4, -2, 0, 2, 3, 4, 5, 6, 8, 10, 12, 14, 16],
                datasets: [
                            {
                                type: "scatter",
                                pointRadius: 1,
                                fill: false,
                                lineTension: 0,
                                backgroundColor: 'rgba(0,0,0,1.0)',
                                borderColor: 'rgba(0,0,0,0.0)',
                                pointStyle: 'square',
                                data: labels.map(e=>{
                                    return {
                                        x: e.sigma,
                                        y: e.per3
                                    }
                                }),
                                order: 1
                            },
                            {
                                //verde
                                type: 'line',
                                pointRadius: 0,
                                fill: true,
                                lineTension: 0,
                                backgroundColor: "rgba(194, 255, 206,1.0)",
                                borderColor: "rgba(0,200,0,0.0)",
                                data: barra1,

                            },
                            {
                                //crema
                                type: "line",
                                pointRadius: 0,
                                fill: true,
                                lineTension: 0,
                                backgroundColor: "rgba(250, 255, 194,1.0)",
                                borderColor: "rgba(255,249,50,0.0)",
                                data: barra2,

                            },
                            {
                                //rojo claro
                                type: "line",
                                pointRadius: 0,
                                fill: true,
                                lineTension: 0,
                                backgroundColor: "rgba(255, 126, 143,1.0)",
                                borderColor: "rgba(255,100,70,0.0)",
                                data: barra4,

                            },
                            {
                                //azul
                                type: "line",
                                pointRadius: 0,
                                fill: true,
                                lineTension: 0,
                                backgroundColor: "rgba(194, 218, 255,1.0)",
                                borderColor: "rgba(70,200,210,0.0)",
                                data: barra3,

                            },
                            {
                                //rojo fuerte
                                type: "line",
                                pointRadius: 0,
                                fill: true,
                                lineTension: 0,
                                backgroundColor: "rgba(155, 8, 13,0.8)",
                                borderColor: "rgba(255,100,70,0.0)",
                                data: barra5,

                            },
                            {
                                //rosado
                                type: "line",
                                pointRadius: 0,
                                fill: true,
                                lineTension: 0,
                                backgroundColor: "rgba(255, 126, 143,1.0)",
                                borderColor: "rgba(255,100,70,0.0)",
                                data: barra6,

                            },
                            {
                                //naranja
                                type: "line",
                                pointRadius: 0,
                                fill: true,
                                lineTension: 0,
                                backgroundColor: "rgba(244, 147, 80,1.0)",
                                borderColor: "rgba(255,100,70,0.0)",
                                data: barra7,

                            }

                        ]
            },
            options: {
                plugins: {
                datalabels: {
                            display:false
                        },
                        legend: {
                            display: false
                        }
            },
            scales: {
                yAxes: [{
                        ticks: {
                            stepSize: 10,
                            min: 0,
                            max: 100
                        }
                    }],
                    xAxes: [{
                        type: 'linear',
                        ticks: {
                            stepSize: 2,
                            min: -4,
                            max: 16
                        }
                    }]
            },
            maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        rigth: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                legend: {
                    display: false
                }
            }

        });
    </script>
</div>

<script>
    function crearPdfGeneral() {
        var myWindow = window.open('', '_blank');
        var tableMesurandos = document.getElementById('mesurandos_table').innerHTML;

        myWindow.document.write(`<html><head>`);
        crearLinkParaEstilosDelReporte(myWindow);
        myWindow.document.write('<title>API Tool | Reporte General</title>');
        myWindow.document.write('</head><body>');
        crearEncabezadoDelReporte(myWindow, "Reporte General");
        crearEstilosGeneralesDelReporte(myWindow);
        myWindow.document.write(`<table class="w-100">
                                          <thead><tr><td>
                                            <div class="header-space">&nbsp;</div>
                                          </td></tr></thead>
                                          <tbody><tr><td>
                                        <div class="content m-0 p-0">`);
        crearSeccionDeFiltros(myWindow);
        myWindow.document.write(`<h2 style="font-size: 2em;" class="h4 pb-0">Tabla de Mesurandos</h2>`)
        myWindow.document.write(`${tableMesurandos}`);
        myWindow.document.write(`<div class="saltopagina"></div>`)
        crearImagenesDeLasGraficasParaElReporte(myWindow);
        myWindow.document.write(`</div>
                                        </td></tr></tbody>
                                     </table>
                                    `);

        myWindow.document.write('</body></html>');

        myWindow.document.close();
        myWindow.onload = function () {
            myWindow.onafterprint = window.close;
            myWindow.print();
            myWindow.focus();
            myWindow.onfocus = function () {
                window.close();
            }
        };
    }

</script>
<script>
    function crearEstilosGeneralesDelReporte(myWindow){
        myWindow.document.write(`<style>
                                        @page {
                                          size: 15in 10in;
                                          margin: 9mm 17mm 9mm 17mm;
                                        }
                                        .header, .header-space {
                                          height: 70px;
                                        }
                                        .header {
                                          position: fixed;
                                          top: 0;
                                          border-bottom: solid 1px #1950A1;
                                        }
                                        .content{
                                            padding-top: 2rem;
                                            width: 100%;
                                        }
                                        @media print{
                                           div.saltopagina{
                                              display:block;
                                              page-break-before:always;
                                           }
                                        }
                                        </style>`);

    }

    function crearEncabezadoDelReporte(myWindow, title){
        myWindow.document.write(`<div class="header w-100 d-flex flex-row justify-content-between align-items-center">
                                    <img width="150px" src="{{asset('img/logo-APITool-1.png')}}">
                                    <h1>${title}</h1>
                                    <img width="80px" src="{{asset('img/logo-quik.png')}}">
                                 </div>`);
    }

    function crearImagenesDeLasGraficasParaElReporte(myWindow){
        var comparativa_interlaboratorio_metricas_por_sigma_r = document.getElementById('comparativa-interlaboratorio_metricas_por_sigma_r').toDataURL();
        var comparativa_interlaboratorio_metricas_por_sigma_barras_r = document.getElementById('comparativa-interlaboratorio_metricas_por_sigma_barras_r').toDataURL();
        var comparative_analito_aps_r = document.getElementById('comparative_analito_aps_r').toDataURL();
        var comparative_analitos_cv_r = document.getElementById('comparative_analitos_cv_r').toDataURL();
        var comparative_analitos_sesgo_r = document.getElementById('comparative_analitos_sesgo_r').toDataURL();
        var chart_per3_report = document.getElementById('chart-per3-report').toDataURL();
        var chart_sigma_vs_per3_report = document.getElementById('chart-sigma-vs-per3-report').toDataURL();

        myWindow.document.write(`<div style="width: 100vw;" class="d-print-table">
                                    <h2 style="font-size: 2em;" class="h4 pb-0">Métrica sigma gráficos</h2>
                                    <div style="width: -moz-available; width: --webkit-fill-available;" class="d-flex flex-row justify-content-between">
                                        <div >
                                            <h2 class="h4 pb-0">Métrica sigma</h2>
                                            <img width="720px" src="${comparativa_interlaboratorio_metricas_por_sigma_r}">
                                        </div>
                                        <div>
                                            <h2 class="h4 pb-0">Métrica por rango</h2>
                                            <img width="720px" src="${comparativa_interlaboratorio_metricas_por_sigma_barras_r}">
                                        </div>
                                    </div>
                                 </div>`);

        myWindow.document.write(`<div class="saltopagina"></div>`)

        myWindow.document.write(`<div style="width: 100vw;" class="d-print-table">
                                    <h2 style="font-size: 2em;" class="h4 pb-0">Error analítico</h2>
                                    <div style="width: -moz-available; width: --webkit-fill-available;" class="d-flex flex-row justify-content-between">
                                        <div >
                                            <h2 class="h4 pb-0">Comparative Analysis Performance-Laboratory Network ET Lab</h2>
                                            <img width="740px" src="${comparative_analito_aps_r}">
                                        </div>
                                        <div >
                                            <h2 class="h4 pb-0">Comparative Analysis Performance-Laboratory Network CV</h2>
                                            <img width="740px" src="${comparative_analitos_cv_r}">
                                        </div>
                                    </div>
                                 </div>`);

        myWindow.document.write(`<div class="saltopagina"></div>`)
        myWindow.document.write(`<div style="width: 100vw;" class="d-print-table">
                                    <div style="width: -moz-available; width: --webkit-fill-available;" class="d-flex flex-row justify-content-between">
                                        <div >
                                            <h2 class="h4 pb-0">Comparative Analysis Performance-Laboratory Network BIAS</h2>
                                            <img width="1500px" src="${comparative_analitos_sesgo_r}">
                                        </div>
                                     </div>
                                 </div>`);

        myWindow.document.write(`<div class="saltopagina"></div>`)
        myWindow.document.write(`<div style="width: 100vw;" class="d-print-table">
                                    <h2 style="font-size: 2em;" class="h4 pb-0">Gráfica de percentiles</h2>
                                    <div style="width: -moz-available; width: --webkit-fill-available;" class="d-flex flex-row justify-content-between">
                                        <div >
                                            <h2 class="h4 pb-0">3.1 Comparative Analysis Performance-Laboratory Network Per3</h2>
                                            <img width="740px" src="${chart_per3_report}">
                                        </div>
                                        <div >
                                            <h2 class="h4 pb-0">3.2 Comparative Sigma Metric vrs Per3</h2>
                                            <img width="740px" src="${chart_sigma_vs_per3_report}">
                                        </div>
                                    </div>
                                 </div>`);

    }

    function crearSeccionDeFiltros(myWindow){
                myWindow.document.write(`<div class="d-flex flex-row gap-x-1">
                                            <span><strong>Sedes seleccionadas:</strong> ${", ".concat(filters.sede)}</span>
                                            <span><strong>Analitos seleccionadas:</strong> ${", ".concat(filters.analito)}</span>
                                            <span><strong>Laboratorios seleccionados:</strong> ${", ".concat(filters.laboratorio)}</span>
                                            <span><strong>Per3 seleccionados:</strong> ${", ".concat(filters.per3)}</span>
                                            <span><strong>Sigma seleccionadas:</strong> ${", ".concat(filters.sigma)}</span>
                                            <span><strong>Fecha inicial seleccionada:</strong> ${(filters.fecha_inicial)}</span>
                                            <span><strong>Fecha final seleccionada:</strong> ${(filters.fecha_final)}</span>
                                        </div>`);
    }

    function crearLinkParaEstilosDelReporte(myWindow){
        myWindow.document.write(`<link rel="shortcut icon" type="image/jpg" href="img/faviconAPIT_v1.jpg">
                                 <link href="{{ asset('css/jquery.dataTables.min.css?v_beta') }}" rel="stylesheet">
                                 <link href="{{ asset('css/select2.css?v_beta') }}" rel="stylesheet">
                                 <link href="{{ asset('css/daterangepicker.css?v_beta') }}" rel="stylesheet">
                                 <link href="{{ asset('css/bootstrap.min.css?v_beta') }}" rel="stylesheet">
                                 <link href="{{ asset('css/admin_kit.css?v_beta') }}" rel="stylesheet">
                                 <link href="{{ asset('css/mdb.min.css?v_beta') }}" rel="stylesheet">
                                 <link href="{{ asset('css/toastr.min.css?v_beta') }}" rel="stylesheet">
                                 <link href="{{ asset('css/skin-win8/ui.fancytree.css?v_beta') }}" rel="stylesheet">
                                 <link href="{{ asset('js/jquery/jquery-ui/jquery-ui.css?v_beta') }}" rel="stylesheet">
                                 <link href="{{ asset('css/jquery.contextMenu.min.css?v_beta') }}" rel="stylesheet">
                                 <link href="{{ asset('css/home.css?v_beta') }}" rel="stylesheet">'`);
    }

</script>
