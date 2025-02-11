<table class="table table-striped table-sm text-center dinamicTable SeeIndexCepa">
    <thead>
        <tr>
            <th scope="col">Nombre Cepa</th>
            <!----<th scope="col">Numero lote</th>
            <th scope="col">Fecha</th>----->
            <th scope="col">Estado</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @if (isset($cepas))
            @foreach ($cepas as $cepa)
                <tr>
                    <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Cepa" data-field="nombre"
                        data-reference="{{ $cepa->id_cepa }}">
                        {{-- {{ $cepa->nom_cepa }} --}}
                        <a href="{{ route('formEdit.cepa', ['id' => $cepa->id_cepa]) }}"
                            target="_blank">{{ $cepa->nom_cepa }}</a>

                    </td>
                    <!------- <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Cepa" data-field="lote" data-reference="{{ $cepa->num_lote }}">{{ $cepa->num_lote }}</td>
                <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Cepa" data-field="fecha" data-reference="{{ $cepa->fecha }}">{{ $cepa->fecha }}</td>------>
                    <td>
                        @if ($cepa->estado == 1)
                            <button class="btn btn-primary btn-sm btnEvent m-0 p-1"
                                title="Inactivar la cepa {{ $cepa->nom_cepa }}" data-route="ChangeStatus_Cepa"
                                data-tables_liged="Cepa" data-event="click" data-reference="{{ $cepa->id_cepa }}"
                                data-nom="{{ $cepa->nom_cepa }}" data-estado="inactivo">Activo</button>
                        @else
                            <button class="btn btn-warning btn-sm btnEvent m-0 p-1"
                                title="Activar la cepa {{ $cepa->nom_cepa }}" data-route="ChangeStatus_Cepa"
                                data-tables_liged="Cepa" data-event="click" data-reference="{{ $cepa->id_cepa }}"
                                data-nom="{{ $cepa->nom_cepa }}" data-estado="inactivo">Inactivo</button>
                        @endif
                    </td>
                    <td>
                        <svg xmlns="http://www.w3.org/2000/svg" class="align-middle btnEvent"
                            title="Eliminar la cepa {{ $cepa->nom_cepa }}" data-route="   
                "
                            data-event="click" data-reference="{{ $cepa->id_cepa }}" data-nom="{{ $cepa->nom_cepa }}"
                            data-tables_liged="Cepa" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                            </path>
                        </svg>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
