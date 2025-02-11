<?php switch($campo):
    case ("control"): ?>
        <?php echo e($lote->nom_control); ?> | <?php echo e($lote->nom_matriz); ?>

    <?php break; ?>
    
    <?php case ("fecha"): ?>
        <?php echo e(date("F d, Y",strtotime($lote->fecha_vencimiento))); ?>

    <?php break; ?>

    <?php case ("numLote"): ?>
        <?php echo e($lote->cod_lote); ?>

    <?php break; ?>
<?php endswitch; ?><?php /**PATH /var/www/html/resources/views/lote/loteShow.blade.php ENDPATH**/ ?>