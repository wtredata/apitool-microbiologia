@extends('layouts.app-v2')
@section('content-section')
    <div class="pt-5 py-4 px-5">
        <div class="row">
            {{-- <div class="col-md-9 col-xl-1"></div> --}}
            <div class="col-md-9 col-xl-12">
                <div class="tab-content bg-white">
                    <div class="row m-0 mt-4">
                        <div class="col-lg-12" id="card-update">
                            <div class="card shadow mb-3 bg-transparent shadow shadow-sm border">
                                <div class="card-header card-header-per">
                                    <h6 class="m-0 font-weight-bold text-primary">Actualizar Medio de cultivo</h6>
                                </div>
                                <div class="card-body">
                                    <div class=" overflow-auto">
                                        <table class="table table-striped table-sm text-center dinamicTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Caracteristica</th>
                                                    <th scope="col">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <form action="{{ route('update.medio', ['id' => $medio->id_medio]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <tr>
                                                        <td>
                                                            <input type="text" placeholder="Ingrese el nombre"
                                                                id="nombre" class="form-control" name="nombre"
                                                                value="{{ old('nombre', $medio->nom_medio) }}">
                                                        </td>
                                                        <td>
                                                            <textarea name="caracteristica" id="caracteristica" cols="30" rows="2">{{ old('caracteristica', $medio->caracteristica) }}</textarea>
                                                        </td>
                                                        <td>
                                                            <button type="submit"
                                                                class="btn btn-primary btn-sm ml-auto">Actualizar</button>
                                                        </td>
                                                    </tr>
                                                </form>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card shadow mb-3 bg-transparent shadow shadow-sm border">
                                <div class="card-header card-header-per">
                                    <h6 class="m-0 font-weight-bold text-primary">Agregar Lote</h6>
                                </div>
                                <div class="card-body">
                                    <div class=" overflow-auto">
                                        <table class="table table-striped table-sm text-center dinamicTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Lote</th>
                                                    <th scope="col">Fecha Vencimiento</th>
                                                    <th scope="col">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <form
                                                    action="{{ route('store.compra.lote', ['itemId' => $medio->id_medio, 'section' => 'Medio']) }}"
                                                    method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id_medio" value="{{ $medio->id_medio }}">
                                                    <tr>
                                                        <td>
                                                            <input type="number" placeholder="Ingrese lote"
                                                                class="form-control" name="lote"
                                                                value="{{ old('lote') }}">
                                                        </td>
                                                        <td>
                                                            <input type="date" class="form-control"
                                                                name="fecha_vencimiento"
                                                                value="{{ old('fecha_vencimiento') }}">
                                                        </td>
                                                        <td>
                                                            <button type="submit"
                                                                class="btn btn-primary btn-sm ml-auto">Agregar</button>
                                                        </td>
                                                    </tr>
                                                </form>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12">
                            <div class="card shadow mb-3 bg-transparent shadow shadow-sm border">
                                <div class="card-header card-header-per">
                                    <h6 class="m-0 font-weight-bold text-primary">Lotes Agregados</h6>
                                </div>
                                <div class="card-body">
                                    <div class=" overflow-auto">
                                        <table class="table table-striped table-sm text-center dinamicTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Lote</th>
                                                    <th scope="col">Fecha Compra</th>
                                                    <th scope="col">Fecha Vencimiento</th>
                                                    <th scope="col" colspan="2">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (isset($medio->comprasLote))
                                                    @foreach ($medio->comprasLote as $compra)
                                                        <tr>
                                                            <form
                                                                action="{{ route('update.compra.lote', ['id' => $compra->id, 'section' => 'Medio']) }}"
                                                                method="POST">
                                                                @method('PUT')
                                                                @csrf
                                                                <td>
                                                                    <input type="number" placeholder="Ingrese lote"
                                                                        class="form-control" name="lote"
                                                                        value="{{ old('lote', $compra->lote) }}">
                                                                </td>
                                                                <td>
                                                                    <input type="date" class="form-control"
                                                                        value="{{ $compra->created_at->toDateString() }}"
                                                                        readonly>
                                                                </td>
                                                                <td>
                                                                    <input type="date" class="form-control"
                                                                        name="fecha_vencimiento"
                                                                        value="{{ old('fecha_vencimiento', $compra->fecha_vencimiento) }}">
                                                                </td>
                                                                <td>
                                                                    <button
                                                                        class="btn btn-success btn-sm">Actualizar</button>
                                                                </td>
                                                            </form>
                                                            <td>
                                                                <form
                                                                    action="{{ route('destroy.compra.lote', ['id' => $compra->id, 'section' => 'Medio']) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-danger btn-sm">Eliminar</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-12">
                            <div class="card shadow mb-3 bg-transparent shadow shadow-sm border">
                                <div class="card-header card-header-per">
                                    <h6 class="m-0 font-weight-bold text-primary">Información de laboratorios</h6>
                                </div>
                                <div class="card-body">
                                    <div class=" overflow-auto">
                                        <table class="table table-striped table-sm text-center dinamicTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nombre Laboratorio</th>
                                                    <th scope="col">Número</th>
                                                    <th scope="col">Principal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (isset($medioLaboratorios))
                                                    @foreach ($medioLaboratorios as $medioLab)
                                                        <tr>
                                                            <td class="btnEvent" data-event="dblclick" data-field="nombre">
                                                                {{ $medioLab->laboratorio->nom_laboratorio }}

                                                            </td>
                                                            <td class="btnEvent" data-event="dblclick"data-field="nombre">
                                                                {{ $medioLab->laboratorio->num_laboratorio }}

                                                            </td>
                                                            <td>
                                                                @if ($medioLab->laboratorio->principal == 1)
                                                                    <button class="btn btn-primary btn-sm btnEvent m-0 p-1"
                                                                        data-event="click">Si</button>
                                                                @else
                                                                    <button class="btn btn-warning btn-sm btnEvent m-0 p-1"
                                                                        data-event="click">No</button>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-9 col-xl-1"></div> --}}
        </div>
    </div>
@endsection
