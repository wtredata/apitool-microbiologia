<?php switch($campo):
    case ("proveedor"): ?>
      <?php echo e($control->nom_proveedor); ?>

    <?php break; ?>
    
    <?php case ("matriz"): ?>
      <?php echo e($control->nom_matriz); ?> 
    <?php break; ?>
    
    <?php case ("nombre"): ?>
      <?php echo e($control->nom_control); ?>

    <?php break; ?>
    
    <?php case ("numNiveles"): ?>
      <?php echo e($control->num_niveles); ?>

    <?php break; ?>
<?php endswitch; ?><?php /**PATH /var/www/html/resources/views/control/controlShow.blade.php ENDPATH**/ ?>