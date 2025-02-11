<?php $__currentLoopData = $data_by_mesurando; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


  <div class="row px-3 mt-3">
    <div class="col-12">
      <div class='pre-contenedor-graficos-sigmometria'>
        <h3>Detalle Mesurandos</h3>
      </div>
      <div class="contenedor-detalle-sigmometria overflow-auto">
        <div class="cont-tabla-analitos overflow-auto" style='max-height:630px;'>
          <table class='table table-sm table-bordered text-center table-info-siget'>
            <thead style='background-color: #e8ecef'>
            <tr style="width: 100%">
              <td style='width: 17.75%' colspan='27' class='font-weight-bold'>Constante
                Z: <?php echo e($i["constante_z"]); ?></td>
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
            <?php $__currentLoopData = $i["valores_estadisticos"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tbody>
              <tr style="width: 100%">
                <td colspan='1'><?php echo e($data["indice"]); ?></td>
                <td colspan='1'><?php echo e($data["sede"]); ?></td>
                <td colspan='1'><?php echo e($data["ciudad"]); ?></td>
                <td colspan='1'><?php echo e($data["analizador"]); ?></td>
                <td colspan='1'><?php echo e($data["num_lab"]); ?></td>
                <td colspan='1'><?php echo e($data["lote"]); ?></td>
                <td colspan='1'><?php echo e($data["fecha_caducidad"]); ?></td>
                <td colspan='1'><?php echo e($data["analito"]); ?></td>
                <td colspan='1'><?php echo e($data["nivel"]); ?></td>
                <td colspan='1'><?php echo e($data["unidades"]); ?></td>
                <td colspan='1'><?php echo e(round($data["valor_limite"], 2)); ?></td>
                <td colspan='1'><?php echo e(round($data["cv_mp"],2)); ?></td>
                <td colspan='1'><?php echo e(round($data["sesgo_mp"], 2)); ?></td>
                <td colspan='1'><?php echo e(round($data["diana"], 2)); ?></td>
                <td colspan='1'><?php echo e(round($data["sesgo_por"], 2)); ?></td>
                <td colspan='1'><?php echo e(round($data["sesgo"], 2)); ?></td>
                <td colspan='1'><?php echo e(round($data["ap_lab"], 2)); ?></td>
                <td colspan='1'><?php echo e(round($data["media"], 2)); ?></td>
                <td colspan='1'><?php echo e(round($data["cv"], 2)); ?></td>
                <td colspan='1'><?php echo e($data["puntos_a"]); ?></td>
                  <td colspan='1'><?php echo e($data["nper3"]); ?></td>
                <td colspan='1'><?php echo e($data["per3"]); ?></td>
                <td colspan='1'><?php echo e(round($data["de"], 2)); ?></td>
                <td colspan='1'><?php echo e(round($data["cvr"], 2)); ?></td>
                <td colspan='1'><?php echo e(round($data["sr"], 2)); ?></td>
                <td colspan='1'><?php echo e(round($data["iet"], 2)); ?></td>

                <?php if(round($data["sigma"], 2) >= 5): ?>
                  <td colspan='1'
                      style="background-color: #C2FFCEFF;"><?php echo e(round($data["sigma"], 2)); ?></td>
                <?php elseif(3 <= round($data["sigma"], 2) && round($data["sigma"], 2) < 5): ?>
                  <td colspan='1'
                      style="background-color: #FFF1C2FF;"><?php echo e(round($data["sigma"], 2)); ?></td>
                <?php elseif($i["constante_z"] <= round($data["sigma"], 2) && round($data["sigma"], 2) < 3 ): ?>
                  <td colspan='1'
                      style="background-color: #C2D3FFFF;"><?php echo e(round($data["sigma"], 2)); ?></td>
                <?php elseif($i["constante_z"] > round($data["sigma"], 2)): ?>
                  <td colspan='1'
                      style="background-color: #FFC2C2FF;"><?php echo e(round($data["sigma"], 2)); ?></td>
                <?php endif; ?>
              </tr>
              </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
        </div>
      </div>
    </div>
  </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php /**PATH /var/www/html/resources/views/comparativo-interlaboratorio/mesurandos.blade.php ENDPATH**/ ?>