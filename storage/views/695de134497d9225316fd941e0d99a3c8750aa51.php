<?php $__env->startSection('extend_head'); ?>

<link rel="shortcut icon" type="image/jpg" href="img/faviconAPIT_v1.jpg">

<link href="<?php echo e(asset('css/jquery.dataTables.min.css?v_beta')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/select2.css?v_beta')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/daterangepicker.css?v_beta')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/bootstrap.min.css?v_beta')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/admin_kit.css?v_beta')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/mdb.min.css?v_beta')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/toastr.min.css?v_beta')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/skin-win8/ui.fancytree.css?v_beta')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('js/jquery/jquery-ui/jquery-ui.css?v_beta')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/jquery.contextMenu.min.css?v_beta')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/home.css?v_beta')); ?>" rel="stylesheet">

<title>API Tool | Exportación</title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<body>
    <div class="cont-graficas">
        <?php $__currentLoopData = $analitos_lab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $analito_lab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class='contenedor_graficos_integrados' data-id_analito_lab='<?php echo e($analito_lab->id_analito_lab); ?>'></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php echo csrf_field(); ?>
    
    <input type="hidden" value='<?php echo e($fecha_inicial); ?>' id='fecha_inicial'>
    <input type="hidden" value='<?php echo e($fecha_final); ?>' id='fecha_final'>
    <input type="hidden" value='<?php echo e($id_control_laboratorio); ?>' id='id_control_laboratorio'>

    <div class="progreso-envio-graficas">
        <h1>Generando información <span class='progreso'>0</span>%...</span>
    </div>


    <div class="cont-textareas"></div>

    <script src="<?php echo e(asset('js/jquery.min.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery/moment.min.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery/toastr.min.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/popper.min.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/mdb.min.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/complementos/uniqid.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/complementos/notificacion.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/complementos/presenteContinuo.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/complementos/nomLegibleSection.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/complementos/round.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/complementos/convertirRepetitivo.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/complementos/gestionErroresBackend.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/graficos/generarGraficasIntegradas.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/graficos/minY_gcc.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/graficos/maxY_gcc.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/graficos/getEscalaGraficoControlCalidad.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/graficos/setEscalaBasicos.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/graficos/setEscalaError.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/graficacionLote.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/analitoLaboratorio/informacionAnalito.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/analitoLaboratorio/informacionAnalitoAnterior.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/analitoLaboratorio/informacionAnalitoSiguiente.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/analitoLaboratorio/informacionResultados.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/analitoLaboratorio/informacionTituloResultados.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/analitoLaboratorio/informacionValoresEstadisticos.js?v_beta')); ?>"></script>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/controlLaboratorio/graficacionLote.blade.php ENDPATH**/ ?>