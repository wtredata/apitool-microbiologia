<?php $__env->startSection('extend_head'); ?>

<link rel="shortcut icon" type="image/jpg" href="img/faviconAPIT_v1.jpg">

<link href="<?php echo e(asset('css/bootstrap.min.css?v_beta')); ?>" rel="stylesheet">

<link href="<?php echo e(asset('css/mdb.min.css?v_beta')); ?>" rel="stylesheet">

<link href="<?php echo e(asset('css/login.css?v_beta')); ?>" rel="stylesheet">

<meta http-equiv="x-ua-compatible" content="ie=edge">

<title>APITool | Inicio de sesión</title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<body class="overflow-auto">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">

            <a class="navbar-brand mr-4" href="">
                <strong>APITool</strong> <sup class="badge bg-primary shadow-none">v1</sup>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="login">Inicio
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="noopener" href="https://quik.com.co/quienes-somos/" target="_blank">acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="noopener" href="https://quik.com.co/contacto/" target="_blank">contáctenos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="noopener" href="https://api.whatsapp.com/send/?phone=573182711649&text&app_absent=0" target="_blank">ayuda</a>
                    </li>
                </ul>

                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="https://www.facebook.com/quik.quality" rel="noopener" class="nav-link" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://twitter.com/quik_quality" rel="noopener" class="nav-link" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/quik_quality/" rel="noopener" class="nav-link" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.youtube.com/channel/UCYEtQ-s4atz9WR7__gOuvEQ" rel="noopener" class="nav-link" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>

    <div class="view full-page-intro image-found-1">

        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row wow fadeIn">
                    <div class="col-md-6 mb-4 white-text text-center text-md-left">
                        <img src="<?php echo e(asset('img/logoAPIT.png')); ?>" alt="logo de APITool" width='582' class='mb-2'>
                        <h1 class="display-5 font-weight-bold"></h1>
                        <hr class="hr-light">
                        <p class="mb-4 d-none d-md-block">
                        <h4>
                            <strong></strong>
                        </h4>
                        </p>

                        <a target="_blank" href="https://api.whatsapp.com/send/?phone=573182711649&text&app_absent=0" rel="noopener" class="btn btn-primary">
                            <i class="fas fa-chalkboard-teacher mr-2"></i>
                            Solicitar una demo
                        </a>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="<?php echo e(route('login')); ?>">

                                    <?php echo csrf_field(); ?>

                                    <h5 class="dark-grey-text text-center">
                                        <strong>Iniciar sesión</strong>
                                    </h5>

                                    <hr>

                                    <div class="form-group">
                                        <div class="">
                                            <label for="nom_usuario" class="form-label"><?php echo e(__('Nombre de usuario')); ?></label>
                                            <input id="nom_usuario" type="nom_usuario"
                                                autocomplete="off"
                                                class="form-control form-control-lg <?php $__errorArgs = ['nom_usuario'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                name="nom_usuario"
                                                value="<?php echo e(old('nom_usuario')); ?>" required autocomplete="nom_usuario"
                                                autofocus>

                                            <?php $__errorArgs = ['nom_usuario'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="">
                                            <label for="password" class="form-label"><?php echo e(__('Contraseña')); ?></label>
                                            <input id="password" type="password" class="form-control form-control-lg <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password"
                                            autocomplete="off"
                                            >
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type='submit' class="btn btn-dark ripple-surface">Acceder</button>
                                        <hr>
                                        <div class="form-check">
                                            <a class="btn_link" target='_blank' href="https://api.whatsapp.com/send/?phone=573182711649&text&app_absent=0">¿Necesita ayuda?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main>
        <div class="container">

        <section class='mt-5 wow fadeIn'>

                <div class="row wow fadeIn">

                    <div class="col-lg-6 col-md-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" title="Video descriptivo de API Tool" src="https://www.youtube.com/embed/LdXGxg0HVJw?feature=oembed"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 px-4">
                        <h3 class="h3 text-center mt-5 mb-4">¿Que es APITool?</h3>
                        <div class="row">
                            <div class="col-12">
                                <p class="text-center display-5">APITool es un sistema de información para la gestión de <strong>controles de calidad</strong> de los laboratorios clínicos; intuitivo y fácil de usar, <strong>multi-plataforma</strong> y <strong>multi-usuario</strong> con el fin de que pueda hacer el seguimiento a la trazabilidad, valores estadísticos y reportes de calidad de sus pruebas.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <hr class="my-5">

            <section>

                <h2 class="my-5 h3 text-center">Características</h2>
                <div class="row features-small mb-5 mt-3 wow fadeIn">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-circle fa-2x text-primary"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="feature-title">On-line</h6>
                                <p class="grey-text">Puede acceder en cualquier momento, desde cualquier lugar y con cualquier dispositivo
                                </p>
                                <div style="height:15px"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-circle fa-2x text-primary"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="feature-title">1<sup>ra</sup> y 3<sup>ra</sup> opinión</h6>
                                <p class="grey-text">Puede gestionar controles de primera y tercera opinión
                                </p>
                                <div style="height:15px"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-circle fa-2x text-primary"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="feature-title">Duplicación de lotes</h6>
                                <p class="grey-text">Evite configurar nuevamente todas las pruebas al cambiar de un lote de control</p>
                                <div style="height:15px"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-circle fa-2x text-primary"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="feature-title">APS / Error total</h6>
                                <p class="grey-text">Gestione el error total máximo permitido mediante una base completa de variabilidad biológica</p>
                                <div style="height:15px"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 flex-center">
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <img src="img/logo-APITool.png" alt="Icono de API Tool" class="z-depth-0 img-fluid">
                    </div>

                    <div class="col-md-4 mt-2">
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-circle fa-2x text-primary"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="feature-title">Trazabilidad</h6>
                                <p class="grey-text">Tenga a su disposición quien, cuando y porqué se realizaron cambios en los valores estadísticos</p>
                                <div style="height:15px"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-circle fa-2x text-primary"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="feature-title">Sigmometría analítica (SigET)</h6>
                                <p class="grey-text">Puede generar gráficas de sigmometría analítica para un lote completo</p>
                                <div style="height:15px"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-circle fa-2x text-primary"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="feature-title">Sigma, Sesgo</h6>
                                <p class="grey-text">Cálculo de sigma en tiempo real</p>
                                <div style="height:15px"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-circle fa-2x text-primary"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="feature-title">Informes</h6>
                                <p class="grey-text">Puede generar informes en PDF de sus valores estadísticos y controlidado de gráficas integradas de control de calidad</p>
                                <div style="height:15px"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <hr class="mb-5">

            <section>

                <h2 class="my-5 h3 text-center">Muy pronto</h2>

                <div class="row features-small mt-5 wow fadeIn">
                    <div class="col-xl-4 col-lg-6">
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-sort-numeric-up-alt fa-2x mb-1 text-warning" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">Percentiles</h5>
                                <p class="grey-text mt-2">Gráficos de comparación por pares PER3
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6">
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-ruler-combined fa-2x mb-1 text-primary" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">JCTLM</h5>
                                <p class="grey-text mt-2">Reporte de trazabilidad metrológica de material y procedimiento de referencia
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6">
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-project-diagram fa-2x mb-1 text-success" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">Comparación interlaboratorio</h5>
                                <p class="grey-text mt-2">
                                    Comparación entre laboratorios mediante las metodologías: par, método y todos los laboratorios 
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

        </div>
    </main>

    <footer class="page-footer text-center font-small mt-4 wow fadeIn">

        <div class="pt-4">
            <a class="btn btn-primary" href="https://api.whatsapp.com/send/?phone=573182711649&text&app_absent=0" target="_blank" rel="noopener" role="button">
                    <i class="fas fa-chalkboard-teacher mr-2"></i>
                    Solicitar una demo
            </a>
        </div>

        <hr class="my-4">

        <div class="pb-4">
            <a href="https://www.instagram.com/quik_quality/" class="nav-link" rel="noopener" target="_blank">
            <a href="https://www.youtube.com/channel/UCYEtQ-s4atz9WR7__gOuvEQ" class="nav-link" rel="noopener" target="_blank">
            <a href="https://www.facebook.com/quik.quality" rel="noopener" target="_blank">
                <i class="fab fa-facebook-f mr-3"></i>
            </a>
            <a href="https://twitter.com/quik_quality" rel="noopener" target="_blank">
                <i class="fab fa-twitter mr-3"></i>
            </a>
            <a href="https://www.youtube.com/channel/UCYEtQ-s4atz9WR7__gOuvEQ" rel="noopener" target="_blank">
                <i class="fab fa-youtube mr-3"></i>
            </a>
            <a href="https://www.instagram.com/quik_quality/" rel="noopener" target="_blank">
                <i class="fab fa-instagram mr-3"></i>
            </a>
            <a href="https://api.whatsapp.com/send/?phone=573182711649&text&app_absent=0" rel="noopener" target="_blank">
                <i class="fab fa-whatsapp mr-3"></i>
            </a>
        </div>

        <div class="footer-copyright py-3">
            © 2020 - <?php echo e(Date('Y')); ?>  Copyright:
            <a href="https://quik.com.co" target="_blank" rel="noopener"> Quik S.A.S. </a>
        </div>
    </footer>

    <script src="<?php echo e(asset('js/jquery.min.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/popper.min.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/mdb.min.js?v_beta')); ?>"></script>
    <script src="<?php echo e(asset('js/modules/wow.js?v_beta')); ?>"></script>

    <script type="text/javascript">new WOW().init();</script>

</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/auth/login.blade.php ENDPATH**/ ?>