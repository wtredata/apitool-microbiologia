<?php switch($campo):
    case ("nom_usuario"): ?>
      <?php echo e($usuario->nom_usuario); ?>

    <?php break; ?>

    <?php case ("rol"): ?>
      <?php echo e($usuario->nom_rol); ?>

    <?php break; ?>

    <?php case ("nombres"): ?>
      <?php echo e($usuario->nombres); ?>

    <?php break; ?>

    <?php case ("apellidos"): ?>
      <?php echo e($usuario->apellidos); ?>

    <?php break; ?>
    
    <?php case ("correo"): ?>
      <?php echo e($usuario->correo); ?>

    <?php break; ?>
    
<?php endswitch; ?><?php /**PATH /var/www/html/resources/views/usuario/usuarioShow.blade.php ENDPATH**/ ?>