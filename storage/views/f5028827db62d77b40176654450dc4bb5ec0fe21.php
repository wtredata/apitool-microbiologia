<?php switch($campo):
    case ("codigo"): ?>
      <?php echo e($analito->cod_analito); ?>

    <?php break; ?>

    <?php case ("nombre"): ?>
      <?php echo e($analito->nom_analito); ?>

    <?php break; ?>

    <?php case ("cualitativo"): ?>
      <?php if($analito->cualitativo == 1): ?>
          <span class="font-weight-bold text-primary">Cualitativo</span>
      <?php else: ?>
          <span class="">Cuantitativo</span>
      <?php endif; ?>
    <?php break; ?>
<?php endswitch; ?><?php /**PATH /var/www/html/resources/views/analito/analitoShow.blade.php ENDPATH**/ ?>