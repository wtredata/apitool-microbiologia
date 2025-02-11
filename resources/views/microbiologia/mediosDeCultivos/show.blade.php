@extends('layouts.app-v2')
@section('content-section')
    <div class="py-3 px-2">
        <div class="col-sm-12 col-md-12 ">
            <div class="row note note-light note-contraste">
                <div class="col-md-10">
                    <ul id='informacion_cepa' style="list-style: none;">
                        <li><strong>Laboratorio:</strong> <span
                                class='laboratorio'>{{ $data->loteLaboratorio->first()->laboratorio->nom_laboratorio }} -
                                {{ $data->loteLaboratorio->first()->laboratorio->id_laboratorio }}</span></li>
                        <li><strong>Medio de cultivo:</strong> <span
                                class='medio'>{{ $data->medios->first()->nom_medio }}</span>
                        </li>
                        <li><strong>Lote Medio Cultivo:</strong> <span class='lote'>{{ $data->lote }}</span></li>
                        <li><strong>Fecha Vencimiento Lote Medio:</strong> <span
                                class='lote'>{{ $data->fecha_vencimiento }}</span>
                        </li>
                        @foreach ($data->LoteCepaMedios as $key => $cepas)
                            {{-- @dd($data->LoteMedioCepas) --}}
                            <li><strong>Cepa {{ $key + 1 }}</strong> {{ $cepas->loteCepas->cepas->first()->nom_cepa }}
                                |
                                <strong>Lote</strong> {{ $cepas->loteCepas->lote }} | <strong>Fecha de vencimiento</strong>
                                {{ $cepas->loteCepas->fecha_vencimiento }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('generar.informe.pdf', ['loteId' => $data->id, 'section' => 'Medio']) }}"
                        target="_blank" class="btn btn-danger btn-block">
                        Descargar pdf
                    </a>
                </div>
            </div>

        </div>
        @if ($data->LoteMedioCepas->count() < 2)
            <div class="py-3 px-2">
                <form action="{{ route('asignar.loteCepa.loteMedio') }}" method="POST">
                    @csrf
                    <div class="col-md-12 col-12 mt-3">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="row align-items-end">
                                    {{-- <label for="loteCepaId">Asignar Cepa</label> --}}
                                    <div class="col-12 col-sm-4 mb-2 mb-sm-0">
                                        <select name="loteCepaId" id="loteCepaId" class="form-select w-100"
                                            style="height: 6vh;">
                                            @foreach ($lotesCepa as $lote)
                                                @foreach ($lote->cepas as $cepa)
                                                    <option value="{{ $lote->id }}">Lote:
                                                        {{ $lote->lote }} |
                                                        Cepa:
                                                        {{ $cepa->nom_cepa }}</option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        {{-- <button class="btn btn-primary w-100" id="addRowButton">Agregar</button> --}}
                                        <input type="hidden" name="loteMedioId" value="{{ $data->id }}">
                                        <input type="hidden" name="laboratorioId"
                                            value="{{ $data->loteLaboratorio->first()->laboratorio->id_laboratorio }}">
                                        <button type="submit" class="btn btn-primary w-100">Agregar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        @endif
        <div class="row py-3 px-2">
            @if ($data->LoteMedioCepas->count() > 0)
                @foreach ($data->comentariosLoteMedio as $ke1 => $cepas)
                    <div class="col-md">
                        <form action="{{ route('registro.cepa.medio') }}" enctype="multipart/form-data" method="POST"
                            class="row" style="background-color: #f3f3f3;">
                            <table>
                                <table class="table table-bordered table-sm">
                                    <thead>
                                        <tr>
                                            <th colspan="7">
                                                <strong>Cepa {{ $ke1 + 1 }}
                                                    {{ $cepas->loteCepas->cepas->first()->nom_cepa }}</strong>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope='col' style="width:20px">Usuario</th>
                                            <th scope='col'>Fecha</th>
                                            <th scope='col' style="width: 300px;">Comentario</th>
                                            <th scope='col'>Medición</th>
                                            <th scope='col'>Imagen</th>
                                            <th scope='col' colspan="2" id="col-accion">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                @csrf
                                                <input type="hidden" name="seguimientoPrueba" value="{{ $cepas->id }}">
                                                <span class="icono-perfil-2"
                                                    style="background: #{{ Auth::user()->color_hexadecimal ?? '000' }};">
                                                    {{ Auth::user()->iniciales ?? 'SW' }}
                                                </span>
                                            </td>
                                            <td>{{ $hoy->isoFormat('M/D/YY HH:mm') }}</td>
                                            <td>
                                                <textarea required name="comentario" id="comentario_0" style="width: 100%;" placeholder="Escribe un comentario"></textarea>
                                            </td>
                                            <td>
                                                <select name="tipoMedicionId" id="select-reg-control-0" class="form-select"
                                                    style="width: 100%;" required>
                                                    @foreach ($tiposMedicion as $tipo)
                                                        <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input type="file" name="foto_url" accept="image/png, image/jpeg">
                                            </td>
                                            <td colspan="2">
                                                <input type="submit" class="btn btn-primary" value="Agregar">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                        </form>
                        <br>
                        <table class="table table-bordered table-sm">
                            <tbody>
                                @foreach ($cepas->comentariosLoteCepa as $cepa)
                                    <tr>
                                        <form action="{{ route('update.cepa.control', ['id' => $cepa->id]) }}"
                                            enctype="multipart/form-data" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <td><span class='icono-perfil-2'
                                                    style='background:#{{ $cepa->usuario->color_hexadecimal }};'>{{ $cepa->usuario->iniciales }}</span>
                                            </td>
                                            <td>{{ $cepa->created_at->isoFormat('M/D/YY HH:mm') }}</td>
                                            <td>
                                                <textarea name="comentario" id="comentario" style="width: 100%;">{{ $cepa->comentario }}</textarea>
                                            </td>
                                            <td style="padding: 0;">
                                                <select name="tipoMedicionId" id="select-reg-control" class="form-select"
                                                    style="width: 100%;">
                                                    <option value=""></option>
                                                    @foreach ($tiposMedicion as $tipo)
                                                        <option value="{{ $tipo->id }}"
                                                            {{ $cepa->medicion_id == $tipo->id ? 'selected' : '' }}>
                                                            {{ $tipo->nombre }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                @if ($cepa->foto_url)
                                                    <a href="{{ asset('storage/' . $cepa->foto_url) }}" target="_blank">Ver
                                                        Imagen</a>
                                                @endif
                                                <input type="hidden" name="fotoOld" value="{{ $cepa->foto_url }}">
                                                <br>
                                                <input type="file" id="foto_url" name="foto_url"
                                                    accept="image/png, image/jpeg">
                                            </td>
                                            <td>
                                                <input type="hidden" name="seguimientoPrueba"
                                                    value="{{ $cepas->id }}">
                                                <button type="submit" class="btn btn-success" id="btn-accion">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-edit align-middle mr-2">
                                                        <path d="M11 21H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h7">
                                                        </path>
                                                        <path
                                                            d="M18.5 2.5l3 3a2.121 2.121 0 0 1 0 3L12 18 7 20 9 15 18.5 2.5z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </td>
                                        </form>
                                        <td>
                                            <form action="{{ route('destroy.control.cepa.medio', ['id' => $cepa->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" id="btn-accion">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash align-middle mr-2">
                                                        <polyline points="3 6 5 6 21 6">
                                                        </polyline>
                                                        <path
                                                            d="M19 6l-1.23 13.73A2 2 0 0 1 15.78 22H8.22a2 2 0 0 1-1.99-2.27L5 6">
                                                        </path>
                                                        <path d="M10 11v6"></path>
                                                        <path d="M14 11v6"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endforeach
            @else
                <div class="col-md-12 col-12 mt-3 text-center">
                    <h3>No tiene cepas relacionadas</h3>
                </div>
            @endif
        </div>
    </div>
@endsection
