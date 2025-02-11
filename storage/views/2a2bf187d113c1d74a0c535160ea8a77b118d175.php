<?php switch($campo):
    case ("sede"): ?>
      <?php echo $laboratorio->institucion  . " " . $laboratorio->sede; ?>

    <?php break; ?>
    
    <?php case ("num_laboratorio"): ?>
      <?php echo e($laboratorio->num_laboratorio); ?>

    <?php break; ?>
    
    <?php case ("nom_laboratorio"): ?>
      <?php echo e($laboratorio->nom_laboratorio); ?>

    <?php break; ?>
    
    <?php case ("tipo"): ?>
      <?php if($laboratorio->principal == 1): ?>
          <span class="font-weight-bold text-primary">Principal</span>
      <?php else: ?>
          <span class="">Secundario</span>
      <?php endif; ?>
    <?php break; ?>
<?php endswitch; ?><?php /**PATH /var/www/html/resources/views/laboratorio/laboratorioShow.blade.php ENDPATH**/ ?>