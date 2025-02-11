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


    @csrf
    
    <input type="hidden" value='{{ $fecha_inicial }}' id='fecha_inicial'>
    <input type="hidden" value='{{ $fecha_final }}' id='fecha_final'>
    <input type="hidden" value='{{ $id_control_laboratorio }}' id='id_control_laboratorio'>
    <textarea style="display: none;" name="all_information" id="all_information">{{json_encode($all_information)}}</textarea>


    <div class="progreso-envio-graficas">
        <h1>Generando información <span class='progreso'>100</span>%...</span>
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
    <script src="{{ asset('js/graficos/generarGraficasCualitativo.js?v_beta') }}"></script>
    <script src="{{ asset('js/graficos/minY_gcc.js?v_beta') }}"></script>
    <script src="{{ asset('js/graficos/maxY_gcc.js?v_beta') }}"></script>
    <script src="{{ asset('js/graficos/getEscalaGraficoControlCalidad.js?v_beta') }}"></script>
    <script src="{{ asset('js/graficos/setEscalaBasicos.js?v_beta') }}"></script>
    <script src="{{ asset('js/graficos/setEscalaError.js?v_beta') }}"></script>
    <script src="{{ asset('js/graficacionLoteCualitativo.js?v_beta') }}"></script>
    <script src="{{ asset('js/analitoLaboratorio/informacionAnalito.js?v_beta') }}"></script>
    <script src="{{ asset('js/analitoLaboratorio/informacionAnalitoAnterior.js?v_beta') }}"></script>
    <script src="{{ asset('js/analitoLaboratorio/informacionAnalitoSiguiente.js?v_beta') }}"></script>
    <script src="{{ asset('js/analitoLaboratorio/informacionResultados.js?v_beta') }}"></script>
    <script src="{{ asset('js/analitoLaboratorio/informacionTituloResultados.js?v_beta') }}"></script>
    <script src="{{ asset('js/analitoLaboratorio/informacionValoresEstadisticos.js?v_beta') }}"></script>
</body>
@endsection