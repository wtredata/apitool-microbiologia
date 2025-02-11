function generarGraficaSigmometria(response) {

  let contG_sigmometria = $("#cont_grafica_sigmometria");
  contG_sigmometria.html("<canvas id='cont_graph_sigm'></canvas>"); // Agregar contenedor de la grafica

  // let info_g = window.json_analito.info_general;
  siget_pc_constante = (100 / response.constante_z);
  siget_pc_sigma2 = (100 / 2);
  siget_pc_sigma3 = (100 / 3);
  siget_pc_sigma4 = (100 / 4);
  siget_pc_sigma5 = (100 / 5);
  siget_pc_sigma6 = (100 / 6);

  let options = {
    responsive: true,
    animation: {
      duration: 0
    },
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
            return context.chart.data.datasets[0].data[context.dataIndex].num_analito;
          }
          return null;
        }
      }
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
    scales: {
      xAxes: [
        {
          type: "linear",
          gridLines: {
            display: false,
            drawBorder: false
          },
          ticks: {
            callback: function (tick) {
              if (tick == 0) { // Si es la primera vez
                return "∞";
              } else if (siget_pc_constante > (tick - 1) && siget_pc_constante <= tick) { // Si es la constante
                return response.constante_z;
              } else if (siget_pc_sigma2 > (tick - 1) && siget_pc_sigma2 <= tick) { // Sigma 2
                return "2";
              } else if (siget_pc_sigma3 > (tick - 1) && siget_pc_sigma3 <= tick) { // Sigma 3
                return "3";
              } else if (siget_pc_sigma4 > (tick - 1) && siget_pc_sigma4 <= tick) { // Sigma 4
                return "4";
              } else if (siget_pc_sigma5 > (tick - 1) && siget_pc_sigma5 <= tick) { // Sigma 5
                return "5";
              } else if (siget_pc_sigma6 > (tick - 1) && siget_pc_sigma6 <= tick) { // Sigma 6
                return "6";
              } else {
                return null;
              }
            },
            min: 0,
            max: 50,
            stepSize: 1
          },
          scaleLabel: {
            labelString: "Imprecision (meas%)",
            display: true
          }
        }
      ],
      yAxes: [
        {
          type: "linear",
          ticks: {
            min: 0,
            max: 100,
            stepSize: 10
          },
          gridLines: {
            display: false,
            drawBorder: false
          },
          scaleLabel: {
            labelString: "Inexactitud (bias%)",
            display: true
          }
        }
      ],
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
          } else {
            return "...";
          }
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
              "Sigma: " + round(point.sigma, 1000)
            ];
          } else {
            return null;
          }
        },
        footer: function (tooltipItem, data) {
          return "";
        }
      }
    }
  }


  let data_graph = {
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
        borderWidth: 0,
        showLine: false,
        data: (function () {

          let data_points = [];

          for (xd = 0; xd < response.valores_estadisticos.length; xd++) {
            let mensurando_act = response.valores_estadisticos[xd];

            if (typeof mensurando_act.valor_limite == "number") { // Cuando los valores de sesgo ya esten definidos
              let sesgo_mp = mensurando_act.sesgo_mp;
              let cv_mp = mensurando_act.cv_mp;
              let etmp = parseFloat(mensurando_act.valor_limite);
              let cv = mensurando_act.cv;
              let sesgo = mensurando_act.sesgo;

              data_points.push({
                x: Math.abs((cv / etmp) * 100),
                y: Math.abs((sesgo / etmp) * 100),
                num_analito: mensurando_act.num_analito,
                analito: mensurando_act.analito,
                nivel: mensurando_act.nivel,
                analizador: mensurando_act.analizador,
                unidades: mensurando_act.unidades,
                metodologia: mensurando_act.metodologia,
                valor_limite: mensurando_act.valor_limite,
                nom_fuente_etmp: mensurando_act.nom_fuente_etmp,
                sesgo: mensurando_act.sesgo,
                cv: mensurando_act.cv,
                sigma: mensurando_act.sigma
              });
            } else if (typeof mensurando_act.valor_limite == "string") { // Cuando se deben calcular el SESGOmp y CVmp
              let sesgo_mp = parseFloat(mensurando_act.valor_limite) / 2;
              let cv_mp = sesgo_mp / (response.constante_z);
              let etmp = parseFloat(mensurando_act.valor_limite);
              let cv = mensurando_act.cv;
              let sesgo = mensurando_act.sesgo;

              data_points.push({
                x: Math.abs((cv / etmp) * 100),
                y: Math.abs((sesgo / etmp) * 100),
                num_analito: mensurando_act.num_analito,
                analito: mensurando_act.analito,
                nivel: mensurando_act.nivel,
                analizador: mensurando_act.analizador,
                unidades: mensurando_act.unidades,
                metodologia: mensurando_act.metodologia,
                valor_limite: mensurando_act.valor_limite,
                nom_fuente_etmp: mensurando_act.nom_fuente_etmp,
                sesgo: mensurando_act.sesgo,
                cv: mensurando_act.cv,
                sigma: mensurando_act.sigma
              });
            }
          }

          return data_points;

        }())
      },
      {
        label: "Sigma 6",
        lineTension: 0,
        fill: false,
        borderColor: "rgb(100, 100, 100)",
        pointRadius: 0,
        pointBackgroundColor: "rgba(78, 115, 223, 1)",
        pointBorderColor: "rgba(78, 115, 223, 1)",
        pointHoverRadius: 0,
        pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
        pointHoverBorderColor: "rgba(78, 115, 223, 1)",
        pointHitRadius: 10,
        borderWidth: 0.8,
        data: [
          {x: 0, y: 100},
          {x: (100 / 6), y: 0}
        ]
      },
      {
        label: "Sigma 5",
        lineTension: 0,
        fill: false,
        borderColor: "rgb(100, 100, 100)",
        pointRadius: 0,
        pointBackgroundColor: "rgba(78, 115, 223, 1)",
        pointBorderColor: "rgba(78, 115, 223, 1)",
        pointHoverRadius: 0,
        pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
        pointHoverBorderColor: "rgba(78, 115, 223, 1)",
        pointHitRadius: 10,
        borderWidth: 0.8,
        data: [
          {x: 0, y: 100},
          {x: (100 / 5), y: 0}
        ]
      },
      {
        label: "Sigma 4",
        lineTension: 0,
        fill: false,
        borderColor: "rgb(100, 100, 100)",
        pointRadius: 0,
        pointBackgroundColor: "rgba(78, 115, 223, 1)",
        pointBorderColor: "rgba(78, 115, 223, 1)",
        pointHoverRadius: 0,
        pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
        pointHoverBorderColor: "rgba(78, 115, 223, 1)",
        pointHitRadius: 10,
        borderWidth: 0.8,
        data: [
          {x: 0, y: 100},
          {x: (100 / 4), y: 0}
        ]
      },
      {
        label: "Sigma 3",
        lineTension: 0,
        fill: false,
        borderColor: "rgb(100, 100, 100)",
        pointRadius: 0,
        pointBackgroundColor: "rgba(78, 115, 223, 1)",
        pointBorderColor: "rgba(78, 115, 223, 1)",
        pointHoverRadius: 0,
        pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
        pointHoverBorderColor: "rgba(78, 115, 223, 1)",
        pointHitRadius: 10,
        borderWidth: 0.8,
        data: [
          {x: 0, y: 100},
          {x: (100 / 3), y: 0}
        ]
      },
      {
        label: "Sigma 2",
        lineTension: 0,
        fill: false,
        borderColor: "rgb(100, 100, 100)",
        pointRadius: 0,
        pointBackgroundColor: "rgba(78, 115, 223, 1)",
        pointBorderColor: "rgba(78, 115, 223, 1)",
        pointHoverRadius: 0,
        pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
        pointHoverBorderColor: "rgba(78, 115, 223, 1)",
        pointHitRadius: 10,
        borderWidth: 0.8,
        data: [
          {x: 0, y: 100},
          {x: (100 / 2), y: 0}
        ]
      },
      {
        label: "Constante",
        lineTension: 0,
        fill: false,
        borderColor: "rgb(100, 100, 100)",
        pointRadius: 0,
        pointBackgroundColor: "rgba(78, 115, 223, 1)",
        pointBorderColor: "rgba(78, 115, 223, 1)",
        pointHoverRadius: 0,
        pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
        pointHoverBorderColor: "rgba(78, 115, 223, 1)",
        pointHitRadius: 10,
        borderWidth: 1,
        data: [
          {x: 0, y: 100},
          {x: (100 / response.constante_z), y: 0}
        ]
      },
      {
        label: "Verde",
        lineTension: 0,
        backgroundColor: "rgb(164, 255, 164)",
        fill: true,
        borderColor: "rgb(164, 255, 164)",
        pointRadius: 0,
        pointBackgroundColor: "rgba(78, 115, 223, 1)",
        pointBorderColor: "rgba(78, 115, 223, 1)",
        pointHoverRadius: 0,
        pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
        pointHoverBorderColor: "rgba(78, 115, 223, 1)",
        pointHitRadius: 10,
        borderWidth: 0.6,
        data: [
          {x: 0, y: 0},
          {x: 0, y: 100},
          {x: (100 / 5), y: 0},
          {x: 0, y: 0}
        ]
      },
      {
        label: "Amarillo",
        lineTension: 0,
        backgroundColor: "rgb(255, 255, 34)",
        fill: true,
        borderColor: "rgb(255, 255, 34)",
        pointRadius: 0,
        pointBackgroundColor: "rgba(78, 115, 223, 1)",
        pointBorderColor: "rgba(78, 115, 223, 1)",
        pointHoverRadius: 0,
        pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
        pointHoverBorderColor: "rgba(78, 115, 223, 1)",
        pointHitRadius: 10,
        borderWidth: 0.6,
        data: [
          {x: (100 / 5), y: 0},
          {x: 0, y: 100},
          {x: (100 / 3), y: 0},
          {x: (100 / 5), y: 0}
        ]
      },
      {
        label: "Azul",
        lineTension: 0,
        backgroundColor: "rgb(204, 255, 255)",
        fill: true,
        borderColor: "rgb(204, 255, 255)",
        pointRadius: 0,
        pointBackgroundColor: "rgba(78, 115, 223, 1)",
        pointBorderColor: "rgba(78, 115, 223, 1)",
        pointHoverRadius: 0,
        pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
        pointHoverBorderColor: "rgba(78, 115, 223, 1)",
        pointHitRadius: 10,
        borderWidth: 0.6,
        data: [
          {x: (100 / 3), y: 0},
          {x: 0, y: 100},
          {x: (100 / response.constante_z), y: 0},
          {x: (100 / 3), y: 0}
        ]
      },
      {
        label: "Rojo",
        lineTension: 0,
        backgroundColor: "rgb(255, 102, 102)",
        fill: true,
        borderColor: "rgb(255, 102, 102)",
        pointRadius: 0,
        pointBackgroundColor: "rgba(78, 115, 223, 1)",
        pointBorderColor: "rgba(78, 115, 223, 1)",
        pointHoverRadius: 0,
        pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
        pointHoverBorderColor: "rgba(78, 115, 223, 1)",
        pointHitRadius: 10,
        borderWidth: 0.6,
        data: [
          {x: (100 / window.constante_z), y: 0},
          {x: 0, y: 100},
          {x: 100, y: 100},
          {x: 100, y: 0}
        ]
      }
    ],
  }


  let contextoLvl = $("#cont_graph_sigm");
  if (typeof window.graficaSigm != "undefined") { // Eliminar el grafico en dado caso de existir
    window.graficaSigm.clear();
    window.graficaSigm.destroy();
    window.graficaSigm = null;
  }

  window.graficaSigm = new Chart(contextoLvl, {
    type: "line",
    data: data_graph,
    options: options
  });
}
