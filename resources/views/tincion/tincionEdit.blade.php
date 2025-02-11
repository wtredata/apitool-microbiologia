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
                                    <h6 class="m-0 font-weight-bold text-primary">Actualizar Tinción</h6>
                                </div>
                                <div class="card-body">
                                    <div class=" overflow-auto">
                                        <table class="table table-striped table-sm text-center dinamicTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <form class="form formEvent formCreate"
                                                    action="{{ route('update.tincion', ['id' => $tincion->id_tincion]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <tr>
                                                        <td>

                                                            <input type="text"
                                                                placeholder="Ingrese el nombre de la tinción"
                                                                class="form-control nombre" name="nombre"
                                                                value="{{ old('nombre', $tincion->nom_tincion) }}" required>
                                                        </td>
                                                        <td>
                                                            <button type="submit"
                                                                class="btn btn-primary btn-sm ml-0">Actualizar</button>
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
                                                    action="{{ route('store.compra.lote', ['itemId' => $tincion->id_tincion, 'section' => 'Tincion']) }}"
                                                    method="POST">
                                                    @csrf
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
                                                    <th scope="col" colspan="2">Accion</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (isset($tincion->comprasLote))
                                                    @foreach ($tincion->comprasLote as $compra)
                                                        <tr>
                                                            <form
                                                                action="{{ route('update.compra.lote', ['id' => $compra->id, 'section' => 'Tincion']) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <td>
                                                                    <input type="number" placeholder="Ingrese lote"
                                                                        class="form-control" name="lote"
                                                                        value="{{ old('lote', $compra->lote) }}">
                                                                </td>
                                                                <td>
                                                                    <input type="date" class="form-control"
                                                                        name="fecha_vencimiento"
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
                                                            </form>
                                                            </td>
                                                            <td>
                                                                <form
                                                                    action="{{ route('destroy.compra.lote', ['id' => $compra->id, 'section' => 'Tincion']) }}"
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
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-9 col-xl-100"></div> --}}
        </div>
    </div>
@endsection
