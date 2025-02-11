<?php switch($campo):
    case ("institucion"): ?>
      <?php echo e($sede->nom_institucion); ?>

    <?php break; ?>
    
    <?php case ("ciudad"): ?>
      <?php echo e($sede->nom_ciudad); ?>

    <?php break; ?>
    
    <?php case ("nombre"): ?>
      <?php echo e($sede->nom_sede); ?>

    <?php break; ?>
    
    <?php case ("nom_contacto"): ?>
      <?php echo e($sede->nom_contacto); ?>

    <?php break; ?>
    
    <?php case ("tel_contacto"): ?>
      <?php echo e($sede->tel_contacto); ?>

    <?php break; ?>
    
    <?php case ("correo_contacto"): ?>
      <?php echo e($sede->correo_contacto); ?>

    <?php break; ?>
    
    <?php case ("direccion"): ?>
      <?php echo e($sede->direccion); ?>

    <?php break; ?>
<?php endswitch; ?><?php /**PATH /var/www/html/resources/views/sede/sedeShow.blade.php ENDPATH**/ ?>