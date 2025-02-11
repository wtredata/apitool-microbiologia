<div class="<?php echo e($nomSection); ?>" id="<?php echo e($nomSection); ?>">
  <div class="observacion-numerica shadow-none border">
    <div class="numero">*</div>
    <div class="contenido">
      <div class="row">
        <div class="col-4">
          <div>
            <span class="pr-2">Constante Z: </span>
            <span class="font-weight-bold text-dark shadow-none">
              <?php echo e($constante_z); ?>

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
          <canvas style="height: 30rem;" id="comparativa-interlaboratorio_metricas_por_sigma"
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
                  id="comparativa-interlaboratorio_metricas_por_sigma_barras">
          </canvas>
        </div>
      </div>
    </div>
  </section>
  <script type="application/javascript">
    data_metricas_sigma = <?php echo json_encode($datos_metrica_sigma, JSON_HEX_TAG); ?>;
    datos_conteo_metrica_sigma = <?php echo json_encode($datos_conteo_metrica_sigma, JSON_HEX_TAG); ?>;
    constante_z = <?php echo json_encode($constante_z, JSON_HEX_TAG); ?>;
    max_sigma = <?php echo json_encode($max_sigma, JSON_HEX_TAG); ?>;
    min_sigma = <?php echo json_encode($min_sigma, JSON_HEX_TAG); ?>;

    // GRAFICA 1
    sigma_metricas_sigma = data_metricas_sigma.sigma || [];
    labels_metricas_sigma = data_metricas_sigma.labels || [];
    comparativa_metricas_por_sigma = document.getElementById(
      'comparativa-interlaboratorio_metricas_por_sigma'
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
                y: min_sigma <= 0 ? min_sigma : 0,
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

    // GRAFICA 2
    comparativa_interlaboratorio_metricas_por_sigma_barras = document.getElementById(
      'comparativa-interlaboratorio_metricas_por_sigma_barras'
    );
    comparativa_interlaboratorio_metricas_por_sigma_barras_chart
      = new Chart(comparativa_interlaboratorio_metricas_por_sigma_barras, {
      type: 'bar',
      data: {
        labels: Object.keys(datos_conteo_metrica_sigma),
        datasets: [
          {
            label: 'Sigmometría',
            data: Object.values(datos_conteo_metrica_sigma),
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
              let total_muestras = sigma_metricas_sigma.length;
              let porcentaje = Math.round((point / total_muestras) * 10000) / 100;
              return `Analitos: ${point} - Porcentaje: ${porcentaje}%`;
            },
            label: function (tooltipItem, data) {
              let point = data.datasets[0].data[tooltipItem.index];
              let total_muestras = sigma_metricas_sigma.length;
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

<?php /**PATH /var/www/html/resources/views/comparativo-interlaboratorio/metricas-sigma.blade.php ENDPATH**/ ?>