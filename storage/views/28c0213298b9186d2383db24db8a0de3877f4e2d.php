<div class="row <?php echo e($nomSection); ?> m-0">
  <div class="col-12 px-4 py-3">
    <div class="row">
      <div class="">
        <div class=" z-index-999">
          <ul class="nav nav-tabs nav-tabs-per bg-white"
              id="tabs-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="tabs-graficas-tab"
                 data-toggle="tab"
                 href="#ComparativaInterlaboratorioGraficas" role="tab"
                 aria-controls="tabs-graficas"
                 aria-selected="true">Gráficas</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="tabs-mesurandos-tab" data-toggle="tab"
                 href="#ComparativaInterlaboratorioMesurandos" role="tab"
                 aria-controls="tabs-mesurandos"
                 aria-selected="false">Mensurandos</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="tabs-metricas-sigma-tab" data-toggle="tab"
                 href="#ComparativaInterlaboratorioMetricasSigma" role="tab"
                 aria-controls="tabs-metricas-sigma"
                 aria-selected="false">Metricas sigma</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="tabs-percentiles-tab" data-toggle="tab"
                 href="#ComparativaInterlaboratorioPercentiles" role="tab"
                 aria-controls="tabs-percentiles"
                 aria-selected="false">Percentiles</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="tabs-error-analitico-tab"
                 data-toggle="tab"
                 href="#ComparativaInterlaboratorioErrorAnalitico" role="tab"
                 aria-controls="tabs-error-analitico"
                 aria-selected="false">Error analítico</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="tabs-reporte-tab" data-toggle="tab"
                 href="#ComparativaInterlaboratorioReportes" role="tab" aria-controls="tabs-reporte"
                 aria-selected="false">Generación de reportes</a>
            </li>
          </ul>
        </div>
        <div data-spy="" class="">
          <div class="bg-white tab-content cont-tab-pane-per h-100" id="tabs-tabContent">
            <div class="comparativa-interlaboratorio-tab tab-pane tab-pane-per fade show active"
                 id="ComparativaInterlaboratorioGraficas" role="tabpanel"
                 aria-labelledby="tabs-graphics-tab">
              
            </div>
            <div class="comparativa-interlaboratorio-tab tab-pane tab-pane-per fade" id="ComparativaInterlaboratorioMesurandos"
                 role="tabpanel"
                 aria-labelledby="tabs-mesurandos-tab">
              
            </div>
            <div class="comparativa-interlaboratorio-tab tab-pane tab-pane-per fade" id="ComparativaInterlaboratorioMetricasSigma"
                 role="tabpanel"
                 aria-labelledby="tabs-metricas-sigma-tab">
              
            </div>
            <div class="comparativa-interlaboratorio-tab tab-pane tab-pane-per fade" id="ComparativaInterlaboratorioPercentiles"
                 role="tabpanel"
                 aria-labelledby="tabs-percentiles-tab">
              
            </div>
            <div class="comparativa-interlaboratorio-tab tab-pane tab-pane-per fade" id="ComparativaInterlaboratorioErrorAnalitico"
                 role="tabpanel"
                 aria-labelledby="tabs-error-analitico-tab">
              
            </div>
            <div class="comparativa-interlaboratorio-tab tab-pane tab-pane-per fade" id="ComparativaInterlaboratorioReportes"
                 role="tabpanel"
                 aria-labelledby="tabs-reporte-tab">
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php echo $__env->make('comparativo-interlaboratorio.filtros-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="btn-flotantes">
      <button title="Editar los filtros de búsqueda" type='button'
              class='btn-circular btn-circular-azul btnEvent'
              data-toggle="modal"
              data-target="#filtros-modal" data-whatever="@mdo">
      <span>
      <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
           viewBox="0 0 24 24" fill="none"
           stroke="currentColor" stroke-width="2" stroke-linecap="round"
           stroke-linejoin="round" class="align-middle">
      <line x1="8" y1="6" x2="21" y2="6"></line>
      <line x1="8" y1="12" x2="21" y2="12"></line>
      <line x1="8" y1="18" x2="21" y2="18"></line>
      <line x1="3" y1="6" x2="3.01" y2="6"></line>
      <line x1="3" y1="12" x2="3.01" y2="12"></line>
      <line x1="3" y1="18" x2="3.01" y2="18"></line>
      </svg>
      </span>
      </button>
    </div>
  </div>
</div>
<script type="application/javascript">
  $("<?php echo e($nomSection); ?>").ready(function () {
    onFiltersChange();
    loadComparativaInterlaboratorioTabs();
  });

  function loadComparativaInterlaboratorioTabs() {
    const filters = getFiltersData();
    const tabs = document.getElementsByClassName("comparativa-interlaboratorio-tab");
    tabs.forEach(function (tab) {
      getTabContent(tab.id, filters)
    });
  }

  function getTabContent(id, filters) {
    $.get(
      `/${id}`,
      {
        _token: $('meta[name="csrf-token"]').attr('content'),
        filters: JSON.stringify(filters)
      }
    ).done(function (data) {
      $('#' + id).html(data);
      // console.log(id, document.querySelectorAll(id))
      // document.querySelectorAll(id).innerHTML = data;
    }).fail(function (response) {
      if (gestionErroresBackend(response)) {
      } else {
        notificacion("normal", "error", "Error al cargar la sección de " + id);
      }
    });
  }

  function onFiltersChange() {
    const doSearchButton = document.querySelector('#do-search');
    doSearchButton.addEventListener('click', function () {
      loadComparativaInterlaboratorioTabs();
    });
  }

</script>
<?php /**PATH /var/www/html/resources/views/comparativo-interlaboratorio/comparativa-interlaboratorio.blade.php ENDPATH**/ ?>