@extends('layouts.app')
@section('extend_head')
    <link rel="shortcut icon" type="image/jpg" href="img/faviconAPIT_v1.jpg">
    <link href="{{ asset('css/jquery.dataTables.min.css?v_beta') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.css?v_beta') }}" rel="stylesheet">
    <link href="{{ asset('css/daterangepicker.css?v_beta') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css?v_beta') }}" rel="stylesheet">
    <link href="{{ asset('css/admin_kit.css?v_beta') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.min.css?v_beta') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css?v_beta') }}" rel="stylesheet">
    <link href="{{ asset('css/skin-win8/ui.fancytree.css?v_beta') }}" rel="stylesheet">
    <link href="{{ asset('js/jquery/jquery-ui/jquery-ui.css?v_beta') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.contextMenu.min.css?v_beta') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css?v_beta') }}" rel="stylesheet">
    <link href="{{ asset('css/detalleControlesCepas.css?v_beta') }}" rel="stylesheet">
    <title>API Tool | Inicio</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<body class="overflow-x-hidden p-0 m-0">
    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar sticky-top pr-0 m-0">
                <a class="sidebar-brand brand " href="{{ route('home') }}">
                    <img src="{{ asset('img/banner-APITool.jpg') }}" alt="Logo principal"
                         class='logo-principal brand-rounded'>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Área de trabajo
                    </li>
                    <li class="sidebar-item active" id='li_sidebar_bienvenida'>
                        <a class="sidebar-link btnEvent" data-event='click' data-route='SeeSection_Bienvenido'
                           data-menu_item_select='#li_sidebar_bienvenida' href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-home align-middle mr-2">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span class="align-middle">Inicio</span>
                        </a>
                    </li>
                    @if(Auth::user()->rol_id_rol == 1 || Auth::user()->rol_id_rol == 5)
                        <li class="sidebar-item" id='li_sidebar_administracion'>
                            <a class="sidebar-link btnEvent" 
                               href="/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round"
                                     class="feather feather-settings align-middle mr-1">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                </svg>
                                <span class="align-middle">Administración</span>
                            </a>
                        </li>
                    @endif

                    <li class="sidebar-header">
                        QC interno
                    </li>

                    <li class="sidebar-item" id='li_sidebar_resultados'>
                        <a class="sidebar-link btnEvent" href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-grid align-middle mr-2">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg>
                            <span class="align-middle">Resultados cuantitativo</span>
                        </a>
                    </li>

                    <li class="sidebar-item" id='li_sidebar_resultados_cualitativos'>
                        <a class="sidebar-link btnEvent" href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-grid align-middle mr-2">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg>
                            <span class="align-middle">Resultados cualitativos</span>
                        </a>
                    </li>
                    <li class="sidebar-item" id='li_sidebar_microbiologia'>
                            <a class="sidebar-link btnEvent" data-event='click' data-route='#'
                               data-temporal_off="true" data-menu_item_select='#li_sidebar_microbiologia' href="#" onclick="toggleSubmenu(event)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-grid align-middle mr-2">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                                <span class="align-middle">Microbiología</span>
                            </a>
                            <ul class="submenu" style="display: none;">
                                <li class="sidebar-item" id='li_sidebar_resultados_microbiologia'>
                                    <a class="sidebar-link btnEvent" href="{{route('microbiologia.medios')}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-grid align-middle mr-2">
                                            <rect x="3" y="3" width="7" height="7"></rect>
                                            <rect x="14" y="3" width="7" height="7"></rect>
                                            <rect x="14" y="14" width="7" height="7"></rect>
                                            <rect x="3" y="14" width="7" height="7"></rect>
                                        </svg>
                                        <span class="align-middle">R. Medios de cultivo</span>
                                    </a>
                                 </li>
                                 <li class="sidebar-item" id='li_sidebar_resultados_tinciones'>
                                    <a class="sidebar-link btnEvent" href="{{route('microbiologia.tinciones')}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-grid align-middle mr-2">
                                            <rect x="3" y="3" width="7" height="7"></rect>
                                            <rect x="14" y="3" width="7" height="7"></rect>
                                            <rect x="14" y="14" width="7" height="7"></rect>
                                            <rect x="3" y="14" width="7" height="7"></rect>
                                        </svg>
                                        <span class="align-middle">Resultados Tinciones</span>
                                    </a>
                                 </li>
                                 <li class="sidebar-item" id='li_sidebar_resultados_pruebas'>
                                    <a class="sidebar-link btnEvent" href="{{route('microbiologia.pruebas')}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-grid align-middle mr-2">
                                            <rect x="3" y="3" width="7" height="7"></rect>
                                            <rect x="14" y="3" width="7" height="7"></rect>
                                            <rect x="14" y="14" width="7" height="7"></rect>
                                            <rect x="3" y="14" width="7" height="7"></rect>
                                        </svg>
                                        <span class="align-middle">R. P. de sensibilidad</span>
                                    </a>
                                 </li>
                            </ul>
                    </li>
                        <script>
                        function toggleSubmenu(event) {
                            event.preventDefault(); 
                            const submenu = event.currentTarget.nextElementSibling;
                            submenu.style.display = submenu.style.display === 'none' ? 'block' : 'none';
                        }
                        </script>
                        
                        <style>
                        .submenu {
                            list-style: none;
                            padding: 0;
                            margin: 0;
                        }
                        
                        .submenu li {
                            padding: 8px 16px;
                        }
                        
                        .submenu li a {
                            text-decoration: none;
                            color: white; 
                        }
                        
                        .submenu li a:hover {
                            color: #ccc; 
                        }
                        </style>


                    <li class="sidebar-item" id='li_sidebar_uroanalisis'>
                        <a class="sidebar-link btnEvent" href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-grid align-middle mr-2">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg>
                            <span class="align-middle">Uroanálisis</span>
                        </a>
                    </li>

                    <li class="sidebar-item" id="li_sidebar_grafica">
                        <a class="sidebar-link btnEvent" href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-activity align-middle mr-2">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                            </svg>
                            <span class="align-middle">Gráficas integradas</span>
                        </a>
                    </li>
                    <li class="sidebar-item" id="li_sidebar_sigmometria">
                        <a class="sidebar-link btnEvent" href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-git-merge align-middle mr-2">
                                <circle cx="18" cy="18" r="3"></circle>
                                <circle cx="6" cy="6" r="3"></circle>
                                <path d="M6 21V9a9 9 0 0 0 9 9"></path>
                            </svg>
                            <span class="align-middle">Sigmometría</span>
                        </a>
                    </li>
                    @if(Auth::user()->rol_id_rol == 1 || Auth::user()->rol_id_rol == 2 || Auth::user()->rol_id_rol == 5)
                        <li class="sidebar-item" id='li_sidebar_comparativa_laboratorio'>
                            <a class="sidebar-link btnEvent" href="/">
                                <div class="d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                         fill="none"
                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round"
                                         class="feather feather-shield align-middle mr-2 icon-interlaboratorio">
                                        <path
                                            d="M18.836 17.2962L12.7392 7.36019C12.7035 7.3019 12.6846 7.23521 12.6846 7.16725V1.75H13.8351C13.9368 1.75 14.0343 1.71049 14.1063 1.64016C14.1782 1.56984 14.2186 1.47446 14.2186 1.375C14.2186 1.27554 14.1782 1.18016 14.1063 1.10984C14.0343 1.03951 13.9368 1 13.8351 1H6.16491C6.0632 1 5.96565 1.03951 5.89373 1.10984C5.82181 1.18016 5.7814 1.27554 5.7814 1.375C5.7814 1.47446 5.82181 1.56984 5.89373 1.64016C5.96565 1.71049 6.0632 1.75 6.16491 1.75H7.31544V7.16725C7.31542 7.23521 7.29653 7.3019 7.26079 7.36019L3.40528 13.6435L3.40039 13.6514L1.16396 17.2962C1.05921 17.4669 1.00266 17.6617 1.00009 17.8608C0.997523 18.0599 1.04902 18.256 1.14934 18.4293C1.24965 18.6025 1.39519 18.7466 1.57108 18.8469C1.74698 18.9472 1.94694 19 2.15054 19H17.8495C18.0531 19 18.253 18.9472 18.4289 18.8469C18.6048 18.7466 18.7503 18.6025 18.8507 18.4293C18.951 18.256 19.0025 18.0599 18.9999 17.8608C18.9973 17.6617 18.9408 17.4669 18.836 17.2962V17.2962ZM7.91851 7.74606C8.02578 7.57121 8.08245 7.37115 8.08246 7.16725V1.75H11.9175V7.16725C11.9176 7.37115 11.9742 7.57121 12.0815 7.74606L16.0017 14.1348C14.6111 15.0956 12.6047 14.9792 10.1715 13.7896C8.63145 13.0367 6.56616 12.3701 4.73721 12.9304L7.91851 7.74606ZM18.1833 18.0598C18.1504 18.118 18.102 18.1665 18.0433 18.2C17.9845 18.2335 17.9175 18.2508 17.8495 18.25H2.15044C2.08257 18.25 2.01592 18.2324 1.95729 18.199C1.89866 18.1655 1.85015 18.1175 1.81671 18.0598C1.78327 18.002 1.7661 17.9366 1.76696 17.8703C1.76782 17.8039 1.78666 17.739 1.82158 17.6821L4.01851 14.1017C5.407 13.1567 7.41333 13.2796 9.82848 14.4604C11.4233 15.2402 12.729 15.5309 13.7894 15.5309C14.9198 15.5309 15.7708 15.2001 16.3972 14.7793L18.1784 17.6821C18.214 17.7387 18.2333 17.8038 18.2342 17.8703C18.235 17.9368 18.2174 18.0023 18.1832 18.0598H18.1833Z"
                                            fill="black"/>
                                    </svg>
                                    <span class="align-middle pl-1">Analytic Performance Analysis</span>
                                </div>
                            </a>
                        </li>
                    @endif

                    @if(Auth::user()->rol_id_rol == 1 || Auth::user()->rol_id_rol == 2 || Auth::user()->rol_id_rol == 5)
                        <li class="sidebar-item" id='li_sidebar_auditoria'>
                            <a class="sidebar-link btnEvent" href="/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-shield align-middle mr-2">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg>
                                <span class="align-middle">Auditoría</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
        <div class="main overflow-none">
            <div class="sticky-top w-100">
                <nav class="navbar navbar-expand navbar-light navbar-bg shadow-none border-bottom w-100">
                    <a class="sidebar-toggle d-flex">
                        <i class="hamburger align-self-center"></i>
                    </a>

                    <div class="navbar-collapse collapse">
                        <ul class="navbar-nav navbar-align">
                            <li class="nav-item dropdown">
                                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                   data-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-settings align-middle mr-2">
                                        <circle cx="12" cy="12" r="3"></circle>
                                        <path
                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                    </svg>
                                </a>

                                <a class="nav-link nav-link-user dropdown-toggle d-none d-sm-inline-block" href="#"
                                   data-toggle="dropdown">
                                <span class='icono-perfil'
                                      style='background:#{{ isset(Auth::user()->color_hexadecimal)?Auth::user()->color_hexadecimal:"000" }};'>{{ isset(Auth::user()->iniciales)?Auth::user()->iniciales:"SW" }}</span>
                                    <span class="text-dark nombres_usuario">{{ explode(" ", Auth::user()->nombres)[0] }}
                                        {{ explode(" ", Auth::user()->apellidos)[0] }}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <a class="dropdown-item disabled" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-user align-middle mr-1">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <strong>Rol:</strong> {{ App\Http\Controllers\RolController::listItem(Auth::user()->rol_id_rol)->nom_rol }}
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="{{ route('logout') }}">Cerrar sesión</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <main class="content overflow-hidden w-100" id="containerMax">
                @yield('content-section')
            </main>

            <footer class="footer w-100">
                <div class="container px-5">
                    <div class="row text-muted">
                        <div class="col-6 text-left">
                            <p class="mb-0">
                                <a href="https://quik.com.co" rel="noopener" target='_blank'
                                   class="text-muted"><strong>Copyright
                                        &copy;
                                        Quik S.A.S. - Quality is the key 2020 - {{ date("Y") }}</strong></a>
                            </p>
                        </div>
                        <div class="col-6 text-right">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-phone align-middle mr-2">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                    <a class="text-muted"
                                       href="https://api.whatsapp.com/send/?phone=573182711649&text&app_absent=0"
                                       rel="noopener" target='_blank'>Contact Center</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    

    <script src="{{ asset('js/jquery.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/jquery/jquery-ui/jquery-ui.js?v_beta') }}"></script>
    <script src="{{ asset('js/jquery/jquery.dataTables.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/jquery/moment.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/jquery/daterangepicker.js?v_beta') }}"></script>
    <script src="{{ asset('js/jquery/select2.js?v_beta') }}"></script>
    <script src="{{ asset('js/jquery/sweetalert2.js?v_beta') }}"></script>
    <script src="{{ asset('js/jquery/toastr.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/jquery/jquery.fancytree.js?v_beta') }}"></script>
    <script src="{{ asset('js/jquery/jquery.contextMenu.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/jquery/jquery.fancytree.contextMenu.js?v_beta') }}"></script>
    <script src="{{ asset('js/jquery/jquery-textrange.js?v_beta') }}"></script>
    <script src="{{ asset('js/popper.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/mdb.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/jquery/chartjs-plugin-datalabels.js?v_beta') }}"></script>
    {{--  <script src="{{ asset('js/chartjs/dist/chart.min.js') }}"></script>--}}
    <script src="{{ asset('js/complementos/uniqid.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/notificacion.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/addFilaTable.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/eliminarModal.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/gestionEnvioForm.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/impresionError.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/indexLoad.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/indexLoadAsignation.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/inputDates.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/obtenerFechasFiltro.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/presenteContinuo.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/resaltarAprobacion.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/show.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/tablaDinamica.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/nomLegibleSection.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/switchSelect2.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/switchSeeSection.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/switchDinamicModal.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/abrirAnalito.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/dinamicModal.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/descCampGet.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/recargarSegmentoFancyTree.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/middlewareEvent.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/switchIndexLoad.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/navegacionResultados.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/agregarFilaResultados.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/generarNovedadResultados.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/guardarResultados.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/validacionResultados.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/eventoCierreInesperado.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/switchDestroy.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/asignarPredeterminado.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/switchUpdate.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/menuAnalitos.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/seeSection.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/seeList.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/seeListLite.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/convertirRepetitivo.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/round.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/saveAsignacion.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/generarModuloSigmometria.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/generarConsensoSigmometria.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/generarTablaSigmometria.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/generarInfoControlSigmometria.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/gestionErroresBackend.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/alertaVencimientoLote.js?v_beta') }}"></script>
    <script src="{{ asset('js/graficos/minY_gcc.js?v_beta') }}"></script>
    <script src="{{ asset('js/graficos/maxY_gcc.js?v_beta') }}"></script>
    <script src="{{ asset('js/graficos/getEscalaGraficoControlCalidad.js?v_beta') }}"></script>
    <script src="{{ asset('js/graficos/setEscalaBasicos.js?v_beta') }}"></script>
    <script src="{{ asset('js/graficos/setEscalaError.js?v_beta') }}"></script>
    <script src="{{ asset('js/graficos/generarGraficaIntegrada.js?v_beta') }}"></script>
    <script src="{{ asset('js/graficos/generarGraficaSigmometria.js?v_beta') }}"></script>
    <script src="{{ asset('js/analitoLaboratorio/informacionAnalito.js?v_beta') }}"></script>
    <script src="{{ asset('js/analitoLaboratorio/informacionAnalitoAnterior.js?v_beta') }}"></script>
    <script src="{{ asset('js/analitoLaboratorio/informacionAnalitoSiguiente.js?v_beta') }}"></script>
    <script src="{{ asset('js/analitoLaboratorio/informacionResultados.js?v_beta') }}"></script>
    <script src="{{ asset('js/analitoLaboratorio/informacionTituloResultados.js?v_beta') }}"></script>
    <script src="{{ asset('js/analitoLaboratorio/informacionValoresEstadisticos.js?v_beta') }}"></script>
    <script src="{{ asset('js/home.js?v_beta') }}"></script>
    @yield("scripts")
</body>
@endsection


