@extends('layouts.PDF.app')
@section('content')
    <body>
        <div class="container">
            <!-- Información general -->
            <div class="header">
                <img src="{{ public_path('img/banner-APITool.jpg') }}" alt="Logo apitool">
                <h1>CONTROL DE CALIDAD MEDIOS DE CULTIVO</h1>
            </div>
            <div class="info-section">
                <table class="tabla-principal">
                    <thead>
                        <tr>
                            <td class="text-center"><strong>Fecha informe</strong></td>
                            <td class="text-center"><strong>Medio de cultivo</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">{{ $fechaActual }}</td>
                            <td class="text-center">{{ $nombreMedio }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Información de Cepas -->
            <div class="cepas-section">
                <h2 class="text-center">CEPAS DE CONTROL</h2>
                <table class="tabla-principal">
                    <thead>
                    <tr>
                        <td class="text-center"><strong>Cepa</strong></td>
                        <td class="text-center"><strong>Lote</strong></td>
                        <td class="text-center"><strong>F. vencimiento</strong></td>
                    </tr>
                    </thead>
                    @foreach ($CepasDeLote as $key => $cepas)
                        <tr>
                            <td>{{ $cepas->loteCepas->cepas->first()->nom_cepa }}</td>
                            <td  class="text-center">{{ $cepas->loteCepas->lote }}</td>
                            <td  class="text-center">{{ $cepas->loteCepas->fecha_vencimiento }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="controles-section">
                <table class="tabla-principal">
                    <thead>
                        <tr>
                            @foreach ($ControlesCepa as $ke1 => $cepas)
                                <th>Cepa {{ $ke1 + 1 }}: {{ $cepas->loteCepas->cepas->first()->nom_cepa }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < $maxRegistros; $i++)
                            <tr>
                                @foreach ($ControlesCepa as $cepas)
                                    <td>
                                        @if (isset($cepas->comentariosLoteCepa[$i]))
                                            <div>
                                                @if ($cepas->comentariosLoteCepa[$i]->url())
                                                    <img src="{{ $cepas->comentariosLoteCepa[$i]->url() }}" alt="Imagen no disponible" class="imagen-control">
                                                @else
                                                    <p class="sin-imagen">No se ha súbido imagen</p>
                                                @endif
                                                <div class="contenido-texto">
                                                    <p>
                                                        <small><i>Fecha de registro {{$cepas->comentariosLoteCepa[$i]->created_at->toDateString()}}</i></small><br>
                                                        <strong>Usuario:</strong> {{ Auth::user()->nom_usuario ?? 'SW' }}<br>
                                                        <strong>Comentario:</strong> {{ $cepas->comentariosLoteCepa[$i]->comentario }}<br>
                                                        <strong>Resultado:</strong> {{ $cepas->comentariosLoteCepa[$i]->tipoMedicion->nombre }}
                                                    </p>
                                                </div>
                                            </div>
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </body>
@endsection
