<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/jpg" href="img/logo-APITool.png">
    <link href="{{ asset('css/see_report.css?v_beta') }}" rel="stylesheet">
    <title>API Tool | Visualizacion de reportes</title>
</head>

<body class='m-0 p-0'>
    <div class="container-fluid">
        <object width="100%">
            <embed src="reports_temp/{{ $id_reporte }}.pdf" width="100%" height="650">
            </embed>
        </object>
    </div>

    <input type="hidden" value='{{ $id_reporte }}' id='id_reference'>

    <script src="{{ asset('js/jquery/jquery.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/reports_temp.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/gestionErroresBackend.js?v_beta') }}"></script>
</body>

</html>