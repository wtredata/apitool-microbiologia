<div class="<?php echo e($nomSection); ?>" id="<?php echo e($nomSection); ?>">
    <a onclick="reporteGraficas()" class="btn btn-outline-primary" >Exportar graficas</a>


    <section class="pt-3 row gap-x-1">
        <div class="col-12  col-md">
            <div class="card shadow-none border rounded-lg">
                <div class="pre-contenedor-graficos-sigmometria">
                    <h3 class="font-weight-bold h4 text-primary pb-2">
                        3.1 Comparative Analysis Performance-Laboratory Network Per3
                    </h3>
                </div>
                <div class="contenedor-detalle-sigmometria" style="height: 30rem;">
                    <canvas style="height: 30rem;" id="chart-per3"
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
                            id="chart-sigma-vs-per3">
                    </canvas>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-3 row gap-x-1" id="section_tablas">
        <div class="col-12 col-md" id='tabla_seccion_per3'>
            <table class='table table-sm table-bordered text-center table-info-siget'>
               <thead style='background-color: #1b4fa2'>
                <tr style="width: 100%">
                    <td style='color:white'>^ <= 20</td>
                    <td style='color:white'>20 < ^ <= 50</td>
                    <td style='color:white'>50 < ^ <= 80</td>
                    <td style='color:white'>80 < ^</td>
                    <td style='color:white'>Total</td>
                </tr>
               </thead>
               <tbody>
                   <tr style="width: 100%">
                        <td style="background-color: #c1fed2; color: black"><?php echo e($datos_conteo_percentil['verde']); ?></td>
                        <td style="background-color: #faffc0; color: black"><?php echo e($datos_conteo_percentil['amarillo']); ?></td>
                        <td style="background-color: #44c9d0; color: black"><?php echo e($datos_conteo_percentil['azul']); ?></td>
                        <td style="background-color: #fe7f94; color: black"><?php echo e($datos_conteo_percentil['rojo']); ?></td>
                        <td style="background-color: #c7c9c6; color: black"><?php echo e($datos_conteo_percentil['total']); ?></td>
                   </tr>
               </tbody>

            </table>
        </div>

        <div class="col-12 col-md" id='tabla_seccion_por_per3'>
        <table class='table table-sm table-bordered text-center table-info-siget' >
               <thead style='background-color: #1b4fa2'>
                <tr style="width: 100%">
                    <td style='color:white'>^ <= 20</td>
                    <td style='color:white'>20 < ^ <= 50</td>
                    <td style='color:white'>50 < ^ <= 80</td>
                    <td style='color:white'>80 < ^</td>
                    <td style='color:white'>Total</td>
                </tr>
               </thead>
               <tbody>
                   <tr style="width: 100%">
                        <td style="background-color: #c1fed2; color: black"><?php echo e($datos_conteo_percentil['por_verde']); ?>%</td>
                        <td style="background-color: #faffc0; color: black"><?php echo e($datos_conteo_percentil['por_amarillo']); ?>%</td>
                        <td style="background-color: #44c9d0; color: black"><?php echo e($datos_conteo_percentil['por_azul']); ?>%</td>
                        <td style="background-color: #fe7f94; color: black"><?php echo e($datos_conteo_percentil['por_rojo']); ?>%</td>
                        <td style="background-color: #c7c9c6; color: black">100%</td>
                   </tr>
               </tbody>

            </table>
        </div>
    </section>

    <!---Script primera grafica--->
    <script>
        data_percentil = <?php echo json_encode($data_by_percentil, JSON_HEX_TAG); ?>;
        constante_z = <?php echo json_encode($constante_z, JSON_HEX_TAG); ?>;
        filters = <?php echo json_encode($datos_filtros, JSON_HEX_TAG); ?>;

        labels = data_percentil.labels || [];
        data_x = [];

        labels.forEach(
            label => {
                data_x.push("Número analito:" + label.indice
                    + "\nSede: " + label.sede + "\nAnalito: " + label.analito);
            }
        )
        comparativa_per3 = document.getElementById('chart-per3');

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
                        data: labels.map(e => {
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
                        pointditRadius: 0,
                        fill: true,
                        lineTension: 0,
                        backgroundColor: "rgba(194, 255, 206,1.0)",
                        borderColor: "rgba(0,200,0,0)",
                        data: labels.map(e => {
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
                        pointditRadius: 0,
                        fill: true,
                        lineTension: 0,
                        backgroundColor: "rgba(250, 255, 194,1.0)",
                        borderColor: "rgba(255,249,50,0)",
                        data: labels.map(e => {
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
                        pointditRadius: 0,
                        fill: true,
                        lineTension: 0,
                        backgroundColor: "rgba(194, 218, 255,1.0)",
                        borderColor: "rgba(70,200,210,0)",
                        data: labels.map(e => {
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
                        pointditRadius: 0,
                        fill: true,
                        lineTension: 0,
                        backgroundColor: "rgba(255, 126, 143,1.0)",
                        borderColor: "rgba(255,100,70,0)",
                        data: labels.map(e => {
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
                        rigtd: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                legend: {
                    display: false
                }

            }
        });


        //Grafica #2


    </script>



    <script>

    data_percentil = <?php echo json_encode($data_by_percentil, JSON_HEX_TAG); ?>;

    labels = data_percentil.labels || [];




        var barra1 = [{y: 30, x: 5}, {y: 30, x: 16}];
        var barra2 = [{y: 30, x: 3}, {y: 30, x: 5}];
        var barra3 = [{y: 70, x: -4}, {y: 70, x: 16}];
        var barra4 = [{y: 30, x: -4}, {y: 30, x: 3}];
        var barra5 = [{y: 100, x: 5}, {y: 100, x: 16}];
        var barra6 = [{y: 100, x: 3}, {y: 100, x: 5}];
        var barra7 = [{y: 100, x: -4}, {y: 100, x: 3}];

        comparativa_sigma_per3 = document.getElementById('chart-sigma-vs-per3');

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
                        rigtd: 25,
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

        <!--Reporte graficas-->
    <script>


        function reporteGraficas(){

            var myWindow = window.open('', '_blank');
            var tabla1 = document.getElementById('tabla_seccion_per3').innerHTML;
            var tabla2 = document.getElementById('tabla_seccion_por_per3').innerHTML;
            var tablas = document.getElementById('section_tablas').innerHTML;
            var grafica1 = document.getElementById('chart-per3').toDataURL();
            var grafica2 = document.getElementById('chart-sigma-vs-per3').toDataURL();

            myWindow.document.write(`<html><head>`);
            crearLinkParaEstilosDelReporte(myWindow);
            myWindow.document.write('<title>API Tool | Reporte percentiles</title>');
            myWindow.document.write(`</head><body>`);
            crearEncabezadoDelReporte(myWindow, "Reporte graficas percentiles");
            crearEstilosGeneralesDelReporte(myWindow);
            myWindow.document.write(`<table class="w-100">
                                            <thead><tr><td>
                                                <div class="header-space">&nbsp;</div>
                                            </td></tr></thead>
                                            <tbody><tr><td>
                                            <div class="content m-0 p-0">`);
            crearSeccionDeFiltros(myWindow);
            myWindow.document.write(`<div style="width: 100vw;" class="d-print-table">
                                        <h2 class="h4 pb-0">Graficas Percentiles</h2>
                                        <div style="width: -moz-available; width: --webkit-fill-available;" class="d-flex flex-row justify-content-between">
                                            <div >
                                                <h3 style="font-size: 1.5em;" class="h4 pb-0">3.1 Comparative Analysis Performance-Laboratory Network Per3</h3>
                                                <img width="720px" src="${grafica1}">
                                            </div>
                                            <div>
                                                <h3 style="font-size: 1.5em;" class="h4 pb-0">3.2 Comparative Sigma Metric vrs Per3</h3>
                                                <img width="720px" src="${grafica2}">
                                            </div>
                                        </div>
                                    </div>`);

            myWindow.document.write(`<section class="pt-3 row gap-x-1">
                                        <div class="col-12 col-md" style="padding-left: 5.3em;">
                                            ${tabla1}
                                        </div>
                                        <div class="col-12 col-md" style="padding-left: 12.5em;">
                                            ${tabla2}
                                        </div>
                                     </section>`);


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

        function crearEncabezadoDelReporte(myWindow, title){
                myWindow.document.write(`<div class="header w-100 d-flex flex-row justify-content-between align-items-center">
                                            <img width="150px" src="<?php echo e(asset('img/logo-APITool-1.png')); ?>">
                                            <h1>${title}</h1>
                                            <img width="80px" src="<?php echo e(asset('img/logo-quik.png')); ?>">
                                        </div>`);
            }


            function crearLinkParaEstilosDelReporte(myWindow){
                myWindow.document.write(`<link rel="shortcut icon" type="image/jpg" href="img/faviconAPIT_v1.jpg">
                                 <link href="<?php echo e(asset('css/jquery.dataTables.min.css?v_beta')); ?>" rel="stylesheet">
                                 <link href="<?php echo e(asset('css/select2.css?v_beta')); ?>" rel="stylesheet">
                                 <link href="<?php echo e(asset('css/daterangepicker.css?v_beta')); ?>" rel="stylesheet">
                                 <link href="<?php echo e(asset('css/bootstrap.min.css?v_beta')); ?>" rel="stylesheet">
                                 <link href="<?php echo e(asset('css/admin_kit.css?v_beta')); ?>" rel="stylesheet">
                                 <link href="<?php echo e(asset('css/mdb.min.css?v_beta')); ?>" rel="stylesheet">
                                 <link href="<?php echo e(asset('css/toastr.min.css?v_beta')); ?>" rel="stylesheet">
                                 <link href="<?php echo e(asset('css/skin-win8/ui.fancytree.css?v_beta')); ?>" rel="stylesheet">
                                 <link href="<?php echo e(asset('js/jquery/jquery-ui/jquery-ui.css?v_beta')); ?>" rel="stylesheet">
                                 <link href="<?php echo e(asset('css/jquery.contextMenu.min.css?v_beta')); ?>" rel="stylesheet">
                                 <link href="<?php echo e(asset('css/home.css?v_beta')); ?>" rel="stylesheet">'`);
            }

            function crearEstilosGeneralesDelReporte(myWindow){
                myWindow.document.write(`<style>
                                        @page  {
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
                                        @media  print{
                                           div.saltopagina{
                                              display:block;
                                              page-break-before:always;
                                           }
                                        }
                                        </style>`);

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
    </script>


</div>
<?php /**PATH /var/www/html/resources/views/comparativo-interlaboratorio/percentiles.blade.php ENDPATH**/ ?>