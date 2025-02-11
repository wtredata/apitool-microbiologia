<table class="table table-striped table-sm text-center dinamicTable SeeIndexMetodologia">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Código</th>
            <th scope="col">Estado</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($metodologias as $metodologia)

        <tr>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Metodologia" data-field="nombre" data-reference="{{ $metodologia->id_metodo }}">{{ $metodologia->nom_metodo }}</td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Metodologia" data-field="codigo" data-reference="{{ $metodologia->id_metodo }}">{{ $metodologia->cod_metodo }}</td>
            <td>
                @if($metodologia->estado == 1)
                    <button class="btn btn-primary btn-sm btnEvent m-0 p-1" title="Inactivar el metodologia {{ $metodologia->nom_metodo }}" data-route="ChangeStatus_Metodologia" data-tables_liged="Metodologia" data-event="click" data-reference="{{ $metodologia->id_metodo }}" data-nom="{{ $metodologia->nom_metodo }}" data-estado="inactivo">Activo</button>
                @else
                    <button class="btn btn-warning btn-sm btnEvent m-0 p-1" title="Inactivar el metodologia {{ $metodologia->nom_metodo }}" data-route="ChangeStatus_Metodologia" data-tables_liged="Metodologia" data-event="click" data-reference="{{ $metodologia->id_metodo }}" data-nom="{{ $metodologia->nom_metodo }}" data-estado="activo">Inactivo</button>
                @endif
            </td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class="align-middle btnEvent" title="Eliminar el metodologia {{ $metodologia->nom_metodo }}" data-route="Destroy_Metodologia" data-event="click" data-reference="{{ $metodologia->id_metodo }}" data-nom="{{ $metodologia->nom_metodo }}" data-tables_liged="Metodologia" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>