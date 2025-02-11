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
    <div class="cont-grafica-auditoria">
        <canvas id="cont_graph_sigm"></canvas>
    </div>

    <input type="hidden" value='{{ $fecha_inicial }}' id='fecha_inicial'>
    <input type="hidden" value='{{ $fecha_final }}' id='fecha_final'>
    <input type="hidden" value='{{ $laboratorio }}' id='laboratorio'>
    <input type="hidden" value='{{ json_encode($acciones) }}' id='acciones' name="acciones[]">

    <div class="progreso-envio-graficas">
        <h1 id="content">Generando información, por favor espere...</h1>
    </div>

    <textarea class="d-none" id="textarea-grafica-sigmometria"></textarea>

    <script src="{{ asset('js/jquery.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/jquery/moment.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/jquery/toastr.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/popper.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/mdb.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js?v_beta') }}"></script>
    <script src="{{ asset('js/jquery/chartjs-plugin-datalabels.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/uniqid.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/notificacion.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/presenteContinuo.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/nomLegibleSection.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/round.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/convertirRepetitivo.js?v_beta') }}"></script>
    <script src="{{ asset('js/complementos/gestionErroresBackend.js?v_beta') }}"></script>
    <script>
        setTimeout(
            () => {
                const fecha_inicial = document.querySelector("#fecha_inicial").value
                const fecha_final = document.querySelector("#fecha_final").value
                const laboratorio = document.querySelector("#laboratorio").value
                const acciones_raw = document.querySelector("#acciones").value
                const acciones = JSON.parse(acciones_raw).join(',')
                $.post(
                    "/ExportarPDFGraficaAuditoria",
                    {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        fecha_inicial,
                        fecha_final,
                        laboratorio,
                        acciones,
                    }
                ).done(function (response) {
                    downloadPDF(response);
                    const messageContent = document.querySelector("#content");
                    messageContent.innerHTML = "Se ha realizado la descarga exitosamente.";
                    notificacion("normal", "success", "Se ha realizado la descarga exitosamente.");
                }).fail(function (response) {
                    if (!gestionErroresBackend(response)) {
                        notificacion("normal", "error", "Error al generar el reporte en PDF.");
                    }
                    const messageContent = document.querySelector("#content");
                    messageContent.innerHTML = "Error al generar el reporte en PDF.";
                })
            }, 0
        )
        function downloadPDF(pdf) {
            const linkSource = `data:application/pdf;base64,${pdf}`;
            const downloadLink = document.createElement("a");
            const fileName = `Reporte auditoría - ${new Date().toDateString()}.pdf`;
            downloadLink.href = linkSource;
            downloadLink.download = fileName;
            downloadLink.click();}
    </script>
    </body>
@endsection
