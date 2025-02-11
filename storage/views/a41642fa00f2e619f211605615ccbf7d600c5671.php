<div class="pt-5 py-4 px-5 <?php echo e($nomSection); ?>">

  <h1 class="h3 mb-3">Administración del sistema</h1>

  <div class="row">
    <div class="col-md-3 col-xl-2">

      <div class="card">
        <div class="list-group list-group-flush" role="tablist">
          <a class="list-group-item list-group-item-action active" data-toggle="list"
             href="#cliente"
             role="tab">
            Usuario
          </a>
          <a class="list-group-item list-group-item-action" data-toggle="list" href="#analitos"
             role="tab">
            Analito
          </a>
          <a class="list-group-item list-group-item-action" data-toggle="list" href="#controles"
             role="tab">
            Proveedor
          </a>
          <a class="list-group-item list-group-item-action" data-toggle="list" href="#aps"
             role="tab">
            APS
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-9 col-xl-10">
      <div class="tab-content bg-white">
        <div class="tab-pane fade show active" id="cliente" role="tabpanel">

          <ul class="nav nav-tabs nav-tabs-per" id="cliente-tab">
            <li class="nav-item">
              <a class="nav-link" id="cliente-tab-usuario" href="#cliente-item-usuario">Usuario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="cliente-tab-institucion" href="#cliente-item-institucion">Institución</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="cliente-tab-sede" href="#cliente-item-sede">Sede</a>
            </li>
              <li class="nav-item">
                  <a class="nav-link" id="cliente-tab-laboratorio" href="#cliente-item-laboratorio">Laboratorio</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" id="cliente-tab-pais" href="#cliente-item-pais">Pais</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="cliente-tab-ciudad" href="#cliente-item-ciudad">Ciudad</a>
            </li>
          </ul>

          <div class="tab-content cont-tab-pane-per" id="cliente-tab-content">
            <div class="tab-pane tab-pane-per" id="cliente-item-usuario">
              <?php echo $__env->make("usuario.usuarioSection", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="tab-pane tab-pane-per" id="cliente-item-institucion">
              <?php echo $__env->make("institucion.institucionSection", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="tab-pane tab-pane-per" id="cliente-item-sede">
              <?php echo $__env->make("sede.sedeSection", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="tab-pane tab-pane-per" id="cliente-item-laboratorio">
              <?php echo $__env->make("laboratorio.laboratorioSection", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="tab-pane tab-pane-per" id="cliente-item-pais">
              <?php echo $__env->make("pais.paisSection", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="tab-pane tab-pane-per" id="cliente-item-ciudad">
              <?php echo $__env->make("ciudad.ciudadSection", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
          </div>
        </div>


        <div class="tab-pane fade show" id="analitos" role="tabpanel">
          <ul class="nav nav-tabs nav-tabs-per" id="analitos-tab">
            <li class="nav-item">
              <a class="nav-link" id="analitos-tab-analito"
                 href="#analitos-item-analito">Analito</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="analitos-tab-analizador" href="#analitos-item-analizador">Analizador</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="analitos-tab-unidad_medicion"
                 href="#analitos-item-unidad_medicion">Unidades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="analitos-tab-metodologia" href="#analitos-item-metodologia">Metodología</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="analitos-tab-reactivo"
                 href="#analitos-item-reactivo">Reactivo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="analitos-tab-temperatura" href="#analitos-item-temperatura">Temperatura</a>
            </li>
          </ul>
          <div class="tab-content cont-tab-pane-per" id="analitos-tab-content">
            <div class="tab-pane tab-pane-per" id="analitos-item-analito">
              <?php echo $__env->make("analito.analitoSection", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="tab-pane tab-pane-per" id="analitos-item-analizador">
              <?php echo $__env->make("analizador.analizadorSection", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="tab-pane tab-pane-per" id="analitos-item-unidad_medicion">
              <?php echo $__env->make("unidad.unidadSection", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="tab-pane tab-pane-per" id="analitos-item-metodologia">
              <?php echo $__env->make("metodologia.metodologiaSection", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="tab-pane tab-pane-per" id="analitos-item-reactivo">
              <?php echo $__env->make("reactivo.reactivoSection", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="tab-pane tab-pane-per" id="analitos-item-temperatura">
              <?php echo $__env->make("temperatura.temperaturaSection", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
          </div>
        </div>


        <div class="tab-pane fade show" id="controles" role="tabpanel">
          <ul class="nav nav-tabs nav-tabs-per" id="controles-tab">
            <li class="nav-item">
              <a class="nav-link" id="controles-tab-lote" href="#controles-item-lote">Lote</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="controles-tab-control"
                 href="#controles-item-control">Control</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="controles-tab-matriz" href="#controles-item-matriz">Matriz</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="controles-tab-proveedor" href="#controles-item-proveedor">Proveedor</a>
            </li>
          </ul>
          <div class="tab-content cont-tab-pane-per" id="controles-tab-content">
            <div class="tab-pane tab-pane-per" id="controles-item-lote">
              <?php echo $__env->make("lote.loteSection", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="tab-pane tab-pane-per" id="controles-item-control">
              <?php echo $__env->make("control.controlSection", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="tab-pane tab-pane-per" id="controles-item-proveedor">
              <?php echo $__env->make("proveedor.proveedorSection", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="tab-pane tab-pane-per" id="controles-item-matriz">
              <?php echo $__env->make("matriz.matrizSection", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
          </div>
        </div>

        <div class="tab-pane fade show" id="aps" role="tabpanel">
          <ul class="nav nav-tabs nav-tabs-per" id="aps-tab">
            <li class="nav-item">
              <a class="nav-link" id="aps-tab-tabla_variabilidad"
                 href="#aps-item-tabla_variabilidad">Tabla de variabilidad</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="aps-tab-fuente_etmp" href="#aps-item-fuente_etmp">Fuente de
                error</a>
            </li>
          </ul>
          <div class="tab-content cont-tab-pane-per" id="aps-tab-content">
            <div class="tab-pane tab-pane-per" id="aps-item-tabla_variabilidad">
              <?php echo $__env->make("variabilidadBiologica.variabilidadBiologicaSection", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="tab-pane tab-pane-per" id="aps-item-fuente_etmp">
              <?php echo $__env->make("fuenteETMP.fuenteETMPSection", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</div>
<?php /**PATH /var/www/html/resources/views/configuracion.blade.php ENDPATH**/ ?>