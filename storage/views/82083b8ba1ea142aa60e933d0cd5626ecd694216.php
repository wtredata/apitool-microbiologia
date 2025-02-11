<div class="<?php echo e($nomSection); ?>" id="<?php echo e($nomSection); ?>">
  <section class="pt-3 row gap-x-1">
    <div class="col-12  col-md">
      <div class="card shadow-none border rounded-lg">
        <div class="pre-contenedor-graficos-sigmometria">
          <h3 class="font-weight-bold h4 text-primary pb-2">
            Comparative Analysis Performance-Laboratory Network Sigma Metric
          </h3>
        </div>
        <div class="contenedor-detalle-sigmometria" style="height: 30rem;">
          <canvas style="height: 30rem;" id="comparativa_analitos_por_sigma"
                  class="w-100">
          </canvas>
        </div>
      </div>
    </div>
    <div class="col-12 col-md">
      <div class="card shadow-none border rounded-lg">
        <div class="pre-contenedor-graficos-sigmometria">
          <h3 class="font-weight-bold h4 text-primary pb-2">
            Comparative Analysis Performance-Laboratory Network ET Lab
          </h3>
        </div>
        <div class="contenedor-detalle-sigmometria" style="height: 30rem;">
          <canvas style="height: 30rem;" id="comparativa_analitos_por_aps"
                  class="w-100">
          </canvas>
        </div>
      </div>
    </div>
  </section>


  <script type="application/javascript">
    data_sigma = <?php echo json_encode($datos_sigma, JSON_HEX_TAG); ?>;
    constante_z = <?php echo json_encode($constante_z, JSON_HEX_TAG); ?>;
    max_sigma = <?php echo json_encode($max_sigm, JSON_HEX_TAG); ?>;

    aps = [];
    ap_lab = [];
    datos_x = [];
    // GRAFICA 1
    sigma_metricas_sigma = data_sigma.sigma;
    labels_metricas_sigma = data_sigma.labels;

    comparativa_metricas_por_sigma = document.getElementById(
      'comparativa_analitos_por_sigma'
    );

    options_metricas_sigma = {
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

    comparativa_metricas_por_sigma_chart = new Chart(comparativa_metricas_por_sigma, {
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
            data: labels_metricas_sigma.map(e => {
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
            data: labels_metricas_sigma.map(e => {
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
            data: labels_metricas_sigma.map(e => {
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
            data: labels_metricas_sigma.map(e => {
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
            data: labels_metricas_sigma.map(e => {
              return {
                x: e.indice,
                y: max_sigma ? max_sigma : 16,
              }
            }),
            order: 1
          },
        ]
      },
      options: options_metricas_sigma
    });


    labels_metricas_sigma.forEach(
      label => {
        aps.push(label.valor_limite);
        ap_lab.push(label.ap_lab);
        datos_x.push("Numero analito: " + label.indice + "\nSede: " + label.sede + "\nAnalito: " + label.analito);
      }
    );

    analitos_por_aps_element = document.getElementById('comparativa_analitos_por_aps');

    analitos_por_aps_chart = new Chart(analitos_por_aps_element, {
      type: 'line',
      data: {
        labels: datos_x,
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
          legend: {
            display: false
          }
        },
        maintainAspectRatio: false,
        layout: {
          padding: {
            left: 10,
            right: 25,
            top: 7,
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
              display: false
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
<?php /**PATH /var/www/html/resources/views/comparativo-interlaboratorio/graficas.blade.php ENDPATH**/ ?>