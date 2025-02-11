<!doctype html>
<html lang="es">
<head>
    <link rel="shortcut icon" type="image/jpg" href="img/faviconAPIT_v1.jpg">
    {{--    <link type="text/css" href="{{ public_path('/css/jquery.dataTables.min.css?v_beta') }}" rel="stylesheet">--}}
    <link type="text/css" href="{{ public_path('/css/bootstrap.min.css?v_beta') }}" rel="stylesheet">
    {{--    <link type="text/css" href="{{ public_path('/css/admin_kit.css?v_beta') }}" rel="stylesheet">--}}
    {{--    <link type="text/css" href="{{ public_path('/css/mdb.min.css?v_beta') }}" rel="stylesheet">--}}
    {{--    <link type="text/css" href="{{ public_path('/css/skin-win8/ui.fancytree.css?v_beta') }}" rel="stylesheet">--}}
    {{--    <link type="text/css" href="{{ public_path('/js/jquery/jquery-ui/jquery-ui.css?v_beta') }}" rel="stylesheet">--}}
    {{--    <link type="text/css" href="{{ public_path('/css/jquery.contextMenu.min.css?v_beta') }}" rel="stylesheet">--}}
    {{--    <link type="text/css" href="{{ public_path('/css/home.css?v_beta') }}" rel="stylesheet">--}}
    <style>
        .header_table {
            min-height: 40px;
        }

        .header_table_main {
            min-height: 60px;
            display: block;
            margin-bottom: 30px;
        }

        .border-left {
            border-left: 2px solid #000;
        }

        .border-header-bar {
            margin-top: 0.3rem;
            border-bottom: 2px solid #1C50A4;
        }

        .small {
            font-size: 0.8rem;
        }

        .header-fixed {
            position: fixed;
            height: 5.4rem;
            min-height: 5.4rem;
            top: -7rem;
            right: 0;
            left: 0;
        }

        .ml-auto {
            margin-left: auto;
        }

        .img-quik {
            width: 7rem;
        }

        .img-api-tools {
            width: 10rem;
        }

        .color-font {
            color: #1C50A4 !important;
        }

        @page {
            margin: 7rem 0 0 0;
        }
    </style>
    <title>Reporte de Auditoría</title>
</head>
<body>
<header class="header-fixed  border-header-bar pt-3 px-4">
    <table class="pb-4  mx-4">
        <tbody>
        <tr>
            <td class="pr-4">
                <img class="img-api-tools" src="img/banner-APITool.jpg" alt="logoAPIT">
            </td>
            <td class="border-left pl-4 pr-4 mr-4">
                <h1 class="color-font  font-weight-bold text-primary h6 mb-0">Informe de Auditoría</h1>
                <p class="mb-0 small">Laboratorio: {{$laboratorio}}</p>
                <p class="mb-0 small"><span>Fecha inicial: {{$fecha_inicial}}   </span>
                    <span>   Fecha final: {{$fecha_final}}</span></p>
                <p class="mb-0 small">Fecha de expedición: {{date('Y/m/d h:i:s a')}}</p>
            </td>
            <td class="pl-4 ml-auto">
                <img class="img-quik pl-4 ml-4 ml-auto" src="img/logo-quik.png" alt="logo-quik">
            </td>
        </tr>
        </tbody>
    </table>
</header>
<main class="header-margin px-4 mx-4 pb-4 mb-4">
    <div class="">
        <div class="">
            <div class="shadow w-100">
                <div class="card-header border-bottom header_table_main mb-3">
                    <h6 class="color-font  font-weight-bold text-primary h4 p-0 m-0 header_table_main">Listado de actividades</h6>
                </div>
                <div class="p-0 card-body text-center pt-0 mt-2">
                    <div class="Cont_Table_Auditoria overflow-auto">
                        <table class="table table-striped table-sm text-center dinamicTable SeeIndexAuditoria">
                            <thead>
                            <tr class="header_table">
                                <th scope="col">N°</th>
                                <th scope="col">Laboratorio</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Acción</th>
                                <th scope="col">Descripción</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($historicos as $index => $historico)
                                <tr>
                                    <td style='width:5%'>{{ $index+1 }}</td>
                                    <td style='width:15%'>{{ $historico->num_laboratorio }}</td>
                                    <td style='width:10%'>{{ $historico->usuario }}</td>
                                    <td style='width:10%'>{{ date_format(date_create($historico->fecha), "F d, Y H:i:s") }}</td>
                                    <td style='width:10%'>{{ $historico->nom_titulo }}</td>
                                    <td style='width:50%'>
                                        <div class='textarea-log' readonly='true'>{{ $historico->descripcion }}</div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
