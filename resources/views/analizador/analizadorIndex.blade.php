<table class="table table-striped table-sm text-center dinamicTable SeeIndexAnalizador">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Código</th>
            <th scope="col">Estado</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($analizadores as $analizador)

        <tr>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Analizador" data-field="nombre" data-reference="{{ $analizador->id_analizador }}">{{ $analizador->nom_analizador }}</td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Analizador" data-field="codigo" data-reference="{{ $analizador->id_analizador }}">{{ $analizador->cod_analizador }}</td>
            <td>
                @if($analizador->estado == 1)
                    <button class="btn btn-primary btn-sm btnEvent m-0 p-1" title="Inactivar el analizador {{ $analizador->nom_analizador }}" data-route="ChangeStatus_Analizador" data-tables_liged="Analizador" data-event="click" data-reference="{{ $analizador->id_analizador }}" data-nom="{{ $analizador->nom_analizador }}" data-estado="inactivo">Activo</button>
                @else
                    <button class="btn btn-warning btn-sm btnEvent m-0 p-1" title="Inactivar el analizador {{ $analizador->nom_analizador }}" data-route="ChangeStatus_Analizador" data-tables_liged="Analizador" data-event="click" data-reference="{{ $analizador->id_analizador }}" data-nom="{{ $analizador->nom_analizador }}" data-estado="activo">Inactivo</button>
                @endif
            </td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class="align-middle btnEvent" title="Eliminar el analizador {{ $analizador->nom_analizador }}" data-route="Destroy_Analizador" data-event="click" data-reference="{{ $analizador->id_analizador }}" data-nom="{{ $analizador->nom_analizador }}" data-tables_liged="Analizador" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>