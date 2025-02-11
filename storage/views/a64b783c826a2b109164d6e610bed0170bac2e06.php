<div class="modal fade" id="filtros-modal" tabindex="-1" aria-labelledby="filtros-modal-label"
     aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title font-weight-bold text-primary h4" id="filtros-modal-label">
          Filtros</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2">
            <div class="form-group mb-3">
              <div>
                <label for="comparativa-sede" class="form-label font-weight-bold">
                  Sede
                </label>
              </div>
              <select
                  class="comparativa-interlaboratoio-select form-select btnEvent w-100 select2-hidden-accessible"
                  multiple name="comparativa-sede[]" id="comparativa-sede">
                <option selected value="all">Todos</option>
                <?php $__currentLoopData = $sedes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sede): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($sede->id_sede); ?>"><?php echo e($sede->nom_institucion); ?>

                    - <?php echo e($sede->nom_sede); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>

            <div class="form-group mb-3">
              <div>
                <label for="comparativa-laboratorio" class="form-label font-weight-bold">
                  Laboratorio
                </label>
              </div>
              <select
                  class="comparativa-interlaboratoio-select form-select btnEvent w-100 select2-hidden-accessible"
                  multiple name="comparativa-laboratiorio[]" id="comparativa-laboratorio">
                <option selected value="all">Todos</option>
                <?php $__currentLoopData = $laboratorios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $laboratorio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($laboratorio->id_laboratorio); ?>">
                    <?php echo e($laboratorio->num_laboratorio); ?> - <?php echo e($laboratorio->nom_laboratorio); ?>

                  </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>

            <div class="form-group mb-3">
              <div>
                <label for="control_laboratorio"
                       class="form-comparativa-label font-weight-bold">
                  Lote
                </label>
              </div>
              <select
                  class="comparativa-interlaboratoio-select form-select btnEvent w-100 select2-hidden-accessible"
                  multiple name="comparativa-control_laboratorio[]"
                  id="comparativa-control_laboratorio">
                <option selected value="all">Todos</option>
                <?php $__currentLoopData = $lotes_laboratorio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lote_laboratorio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option
                      value="<?php echo e($lote_laboratorio->id_control_laboratorio); ?>"><?php echo e($lote_laboratorio->cod_lote); ?>

                    - <?php echo e($lote_laboratorio->num_laboratorio); ?> <?php echo e($lote_laboratorio->nom_laboratorio); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>

            <div class="form-group mb-3">
              <div>
                <label for="comparativa-analito" class="form-label font-weight-bold">
                  Analito
                </label>
              </div>
              <select
                  class="comparativa-interlaboratoio-select form-select btnEvent w-100 select2-hidden-accessible"
                  multiple name="comparativa-analito[]" id="comparativa-analito">
                <option selected value="all">Todos</option>
                <?php $__currentLoopData = $analitos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $analito): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($analito->id_analito); ?>">
                    <?php echo e($analito->nom_analito); ?>

                  </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>

            <div class="form-group mb-3">
              <div>
                <label for="analizador"
                       class="form-comparativa-label font-weight-bold">
                  Analizador
                </label>
              </div>
              <select
                  class="comparativa-interlaboratoio-select form-select btnEvent w-100 select2-hidden-accessible"
                  multiple name="comparativa-analizador[]" id="comparativa-analizador">
                <option selected value="all">Todos</option>
                <?php $__currentLoopData = $analizadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $analizador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($analizador->id_analizador); ?>">
                    <?php echo e($analizador->nom_analizador); ?>

                  </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>

            <div class="form-group mb-3">
              <div>
                <label for="comparativa-sigma" class="form-label font-weight-bold">
                  Sigma
                </label>
              </div>
              <select
                  class="comparativa-interlaboratoio-select form-select btnEvent w-100 select2-hidden-accessible"
                  multiple name="comparativa-sigma[]" id="comparativa-sigma">
                <option selected value="all">Todos</option>
                <option value="rojos">Rojos</option>
                <option value="amarillos">Amarillos</option>
                <option value="verdes">Verdes</option>
                <option value="azules">Azules</option>
              </select>
            </div>
            <div class="form-group mb-3">
              <div>
                <label for="comparativa-ciudad" class="form-label font-weight-bold">
                  Ciudad
                </label>
              </div>
              <select
                  class="comparativa-interlaboratoio-select form-select btnEvent w-100 select2-hidden-accessible"
                  multiple name="comparativa-ciudades[]" id="comparativa-ciudad">
                <option selected value="all">Todos</option>
                <?php $__currentLoopData = $ciudades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ciudad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($ciudad->id_ciudad); ?>">
                    <?php echo e($ciudad->nom_pais); ?> - <?php echo e($ciudad->nom_ciudad); ?>

                  </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
              <div class="form-group mb-3">
                  <div>
                      <label for="comparativa-per3" class="form-label font-weight-bold">
                          Per3
                      </label>
                  </div>
                  <select
                      class="comparativa-interlaboratoio-select form-select btnEvent w-100 select2-hidden-accessible"
                      multiple name="comparativa-per3[]" id="comparativa-per3">
                      <option selected value="all">Todos</option>
                      <option value="5">5</option>
                      <option value="10">10</option>
                      <option value="20">20</option>
                      <option value="30">30</option>
                      <option value="40">40</option>
                      <option value="50">50</option>
                      <option value="60">60</option>
                      <option value="70">70</option>
                      <option value="80">80</option>
                      <option value="90">90</option>
                      <option value="95">95</option>
                  </select>
              </div>
          </div>
          <div class="row row-cols-1 row-cols-sm-2">
            <div class="form-group mb-3">
              <div>
                <label for="comparativa-fecha_inicial" class="form-label font-weight-bold">
                  Fecha inicial
                </label>
              </div>
              <input type="date" class="comparativa-interlaboratoio-input form-control btnEvent height-input"
                     id="comparativa-fecha_inicial"
                     value="<?php echo e($fecha_inicial); ?>">
            </div>
            <div class="form-group mb-3">
              <div>
                <label for="comparativa-fecha_final" class="form-label font-weight-bold">
                  Fecha final
                </label>
              </div>
              <input type="date" class="comparativa-interlaboratoio-input form-control btnEvent height-input"
                     id="comparativa-fecha_final"
                     value="<?php echo e($fecha_final); ?>">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" id="do-search" class="btn btn-primary" data-dismiss="modal">Realizar
          búsqueda
        </button>
      </div>
    </div>
  </div>
</div>

<script type="application/javascript">
  function getFiltersData() {
    const filters = {}
    const filterBySelect = document.getElementsByClassName("comparativa-interlaboratoio-select");
    const filterByInput = document.getElementsByClassName('comparativa-interlaboratoio-input');
    filterBySelect.forEach(function (select) {
      filters[getName(select.id)] = pushToArray(select.id)
    });
    filterByInput.forEach(function (input) {
      filters[getName(input.id)] = input.value
    });
    return filters
  }

  function pushToArray(id) {
    const array = []
    $('#' + id).find('option:selected').each(function () {
      array.push($(this).val());
    });
    return array;
  }

  function getName(name) {
    return name.split('-')[1];
  }
</script>
<?php /**PATH /var/www/html/resources/views/comparativo-interlaboratorio/filtros-modal.blade.php ENDPATH**/ ?>