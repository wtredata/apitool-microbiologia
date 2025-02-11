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

<title>API Tool | Exportación</title>
@endsection


@section('content')
<body>
    <div class="cont-graficas">
        @foreach($analitos_lab as $analito_lab)
            <div class='contenedor_graficos_integrados' data-id_analito_lab='{{ $analito_lab->id_analito_lab }}'></div>
        @endforeach
    </div>

    @csrf
    
    <input type="hidden" value='{{ $fecha_inicial }}' id='fecha_inicial'>
    <input type="hidden" value='{{ $fecha_final }}' id='fecha_final'>
    <input type="hidden" value='{{ $id_control_laboratorio }}' id='id_control_laboratorio'>

    <div class="progreso-envio-graficas">
        <h1>Generando información <span class='progreso'>0</span>%...</span>
    </div>


    <div class="cont-textareas"></div>

    <script src="{{ asset('js/jquery.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/jquery/moment.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/jquery/toastr.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/popper.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/mdb.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/uniqid.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/notificacion.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/presenteContinuo.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/nomLegibleSection.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/round.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/convertirRepetitivo.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/gestionErroresBackend.js?v_beta') }}"></script>
    <script src="{{ asset('js/graficos/generarGraficasIntegradas.js?v_beta') }}"></script>
    <script src="{{ asset('js/graficos/minY_gcc.js?v_beta') }}"></script>
    <script src="{{ asset('js/graficos/maxY_gcc.js?v_beta') }}"></script>
    <script src="{{ asset('js/graficos/getEscalaGraficoControlCalidad.js?v_beta') }}"></script>
    <script src="{{ asset('js/graficos/setEscalaBasicos.js?v_beta') }}"></script>
    <script src="{{ asset('js/graficos/setEscalaError.js?v_beta') }}"></script>
    <script src="{{ asset('js/graficacionLote.js?v_beta') }}"></script>
    <script src="{{ asset('js/analitoLaboratorio/informacionAnalito.js?v_beta') }}"></script>
    <script src="{{ asset('js/analitoLaboratorio/informacionAnalitoAnterior.js?v_beta') }}"></script>
    <script src="{{ asset('js/analitoLaboratorio/informacionAnalitoSiguiente.js?v_beta') }}"></script>
    <script src="{{ asset('js/analitoLaboratorio/informacionResultados.js?v_beta') }}"></script>
    <script src="{{ asset('js/analitoLaboratorio/informacionTituloResultados.js?v_beta') }}"></script>
    <script src="{{ asset('js/analitoLaboratorio/informacionValoresEstadisticos.js?v_beta') }}"></script>
</body>
@endsection