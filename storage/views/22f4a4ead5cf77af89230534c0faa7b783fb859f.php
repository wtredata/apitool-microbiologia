<?php switch($campo):
    case ("analito"): ?>
        <?php echo e($analito_laboratorio->nom_analito); ?>

    <?php break; ?>
    <?php case ("analizador"): ?>
        <?php echo e($analito_laboratorio->nom_analizador); ?>

    <?php break; ?>
    <?php case ("metodologia"): ?>
        <?php echo e($analito_laboratorio->nom_metodo); ?>

    <?php break; ?>
    <?php case ("reactivo"): ?>
        <?php echo e($analito_laboratorio->nom_reactivo); ?>

    <?php break; ?>
    <?php case ("unidades"): ?>
        <?php echo e($analito_laboratorio->nom_unidad); ?>

    <?php break; ?>
    <?php case ("temperatura"): ?>
        <?php echo e($analito_laboratorio->nom_temperatura); ?>

    <?php break; ?>
    <?php case ("gen_vitros"): ?>
        <?php echo e($analito_laboratorio->generacion_reactivo); ?>

    <?php break; ?>
<?php endswitch; ?><?php /**PATH /var/www/html/resources/views/analitoLaboratorio/analitoLaboratorioShow.blade.php ENDPATH**/ ?>