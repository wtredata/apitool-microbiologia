@extends('layouts.app-v2')
@section('content-section')
    <div class="py-3 px-2 {{ $nomSection }}">
        <div class="inputs-hidden">
            <input type="hidden" id='resultado_analito_node'>
            <input type="hidden" id='resultado_analito' value="{{ $id_analito_lab }}">
            <input type="hidden" id='resultado_fecha_inicial' value="{{ $fecha_inicial }}">
            <input type="hidden" id='resultado_fecha_final' value="{{ $fecha_final }}">
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Agregar Medio de cultivo</h3>
                        <p>Relacione el lote de un medio de cultivo a un laboratorio existente.</p>
                    </div>
                    <div class="card-body">
                    <form action="{{ route('store.medio.lote.lab') }}" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="row align-items-end">
                                        <div class="col-12 col-md-12 mb-2 mb-sm-0">
                                            <label for="loteMedioId">Medio Cultivo</label>
                                            <select class="form-control" name="loteMedioId" id="loteMedioId">
                                                @foreach ($lotesMedio as $lote)
                                                    @foreach ($lote->medios as $medio)
                                                        <option value="{{ $lote->id }}">Lote: {{ $lote->lote }} |
                                                            Medio:
                                                            {{ $medio->nom_medio }}</option>
                                                    @endforeach
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-12 mb-2 mb-sm-0 mt-2">
                                            <label for="laboratorioId">Laboratorio</label>
                                            <select class="form-control" name="laboratorioId" id="laboratorioId">
                                                @foreach ($laboratorios as $laboratorio)
                                                    <option value="{{ $laboratorio->id_laboratorio }}">
                                                        {{ $laboratorio->nom_laboratorio }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-4 col-md-12 mb-2 mb-sm-0  mt-2">
                                            <button class="btn btn-primary w-100" id="addRowButton">Agregar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Listado de Laboratorios</h3>
                        <p>Encuentre los lotes de medios de cultivos relacionados a cada laboratorio.</p>
                    </div>
                    <div class="card-body">
                        <div id="tree">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(function() {
            $("#tree").fancytree({
                onActivate: function(node) {
                    alert("You activated " + node.data.title);
                },
                source: @json($arbol),
                click: function(event, data) {
                    if(data.node.data.id !== undefined && data.node.data.laboratorioId !== undefined && data.node.children.length === 0){
                        window.location.href = '/microbiologia/detalleMedio/' + data.node.data.id + '/lab/' + data.node.data.laboratorioId;
                    }
                }
            });
        });
    </script>
@endsection
