<div class="{{$nomSection}}" id="$nomSection">
  <div class="pt-3">
    <section class="row gap-x-1">
      <div class="col-12  col-md">
        <div class="card shadow-none border rounded-lg">
          <div class="pre-contenedor-graficos-sigmometria">
            <h3 class="font-weight-bold h4 text-primary pb-2">
              Comparative Analysis Performance-Laboratory Network ET Lab
            </h3>
          </div>
          <div class="contenedor-detalle-sigmometria" style="height: 30rem;">
            <canvas style="height: 30rem;" id="comparative_analito_aps"
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
                    id="comparative_analitos_cv">
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
                    id="comparative_analitos_sesgo">
            </canvas>
          </div>
        </div>
      </div>
    </section>

    <script>

      data_error = {!! json_encode($data_error, JSON_HEX_TAG) !!};
      aps = [];
      ap_lab = [];
      contador1 = 0;
      contador2 = 0;
      contador3 = 0;
      cv = [];
      cvmp = [];
      sesgo = [];
      sesp = [];
      x1 = [];
      x2 = [];
      x3 = [];
      data_error.forEach(
        sede => {
          sede.valores_estadisticos.forEach(
            valores_estadisticos => {
              if (valores_estadisticos.valor_limite != 0) {
                aps.push(valores_estadisticos.valor_limite);
                ap_lab.push(valores_estadisticos.ap_lab);
                contador1++;
                x1.push("Número analito: " + contador1 + "\nSede: " + valores_estadisticos.sede + "\nAnalito: " + valores_estadisticos.analito);
              }
              if (valores_estadisticos.cv_mp != 0) {
                cv.push(valores_estadisticos.cv);
                cvmp.push(valores_estadisticos.cv_mp);
                contador2++;
                x2.push("Número analito: " + contador2 + "\nSede: " + valores_estadisticos.sede + "\nAnalito: " + valores_estadisticos.analito);
              }
              if (valores_estadisticos.sesgo_mp !=null) {
                sesgo.push(valores_estadisticos.sesgo_mp);
                sesp.push(valores_estadisticos.sesgo_por);
                contador3++;
                x3.push("Número analito: " + contador3 + "\nSede: " + valores_estadisticos.sede + "\nAnalito: " + valores_estadisticos.analito);
              }
            }
          )
        }
      );

      comparative_analito_aps_element = document.getElementById("comparative_analito_aps");

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

      comparative_analitos_cv_element = document.getElementById("comparative_analitos_cv");

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

      comparative_analitos_sesgo_element = document.getElementById("comparative_analitos_sesgo");

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

