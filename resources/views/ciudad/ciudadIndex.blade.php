<table class="table table-striped table-sm text-center dinamicTable SeeIndexCiudad">
    <thead>
        <tr>
            <th scope="col">País</th>
            <th scope="col">Nombre</th>
            <th scope="col">Estado</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ciudades as $ciudad)

        <tr>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Ciudad" data-field="pais" data-reference="{{ $ciudad->id_ciudad }}">{{ $ciudad->pais }}</td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Ciudad" data-field="nombre" data-reference="{{ $ciudad->id_ciudad }}">{{ $ciudad->nom_ciudad }}</td>
            <td>
                @if($ciudad->estado == 1)
                    <button class="btn btn-primary btn-sm btnEvent m-0 p-1" title="Inactivar la ciudad {{ $ciudad->nom_ciudad }}" data-route="ChangeStatus_Ciudad" data-tables_liged="Ciudad" data-objjson='{"id": "ciudad_pais_reference"}' data-event="click" data-reference="{{ $ciudad->id_ciudad }}" data-nom="{{ $ciudad->nom_ciudad }}" data-estado="inactivo">Activo</button>
                @else
                    <button class="btn btn-warning btn-sm btnEvent m-0 p-1" title="Inactivar la ciudad {{ $ciudad->nom_ciudad }}" data-route="ChangeStatus_Ciudad" data-tables_liged="Ciudad" data-objjson='{"id": "ciudad_pais_reference"}' data-event="click" data-reference="{{ $ciudad->id_ciudad }}" data-nom="{{ $ciudad->nom_ciudad }}" data-estado="activo">Inactivo</button>
                @endif
            </td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class="align-middle btnEvent" title="Eliminar la ciudad {{ $ciudad->nom_ciudad }}" data-route="Destroy_Ciudad" data-event="click" data-reference="{{ $ciudad->id_ciudad }}" data-nom="{{ $ciudad->nom_ciudad }}" data-tables_liged="Ciudad" data-objjson='{"id": "ciudad_pais_reference"}' width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>