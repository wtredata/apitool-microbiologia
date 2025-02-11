<table class="table table-striped table-sm text-center dinamicTable SeeIndexFuenteETMP">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Estado</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($fuentesETMP as $fuente_etmp)

        <tr>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_FuenteETMP" data-field="nombre" data-reference="{{ $fuente_etmp->id_fuente_etmp }}">{{ $fuente_etmp->nom_fuente_etmp }}</td>
            <td>
                @if($fuente_etmp->estado == 1)
                    <button class="btn btn-primary btn-sm btnEvent m-0 p-1" title="Inactivar la institución {{ $fuente_etmp->nom_fuente_etmp }}" data-route="ChangeStatus_FuenteETMP" data-tables_liged="FuenteETMP" data-event="click" data-reference="{{ $fuente_etmp->id_fuente_etmp }}" data-nom="{{ $fuente_etmp->nom_fuente_etmp }}" data-estado="inactivo">Activo</button>
                @else
                    <button class="btn btn-warning btn-sm btnEvent m-0 p-1" title="Activar la institución {{ $fuente_etmp->nom_fuente_etmp }}" data-route="ChangeStatus_FuenteETMP" data-tables_liged="FuenteETMP" data-event="click" data-reference="{{ $fuente_etmp->id_fuente_etmp }}" data-nom="{{ $fuente_etmp->nom_fuente_etmp }}" data-estado="inactivo">Inactivo</button>
                @endif
            </td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class="align-middle btnEvent" title="Eliminar la institución {{ $fuente_etmp->nom_fuente_etmp }}" data-route="Destroy_FuenteETMP" data-event="click" data-reference="{{ $fuente_etmp->id_fuente_etmp }}" data-nom="{{ $fuente_etmp->nom_fuente_etmp }}" data-tables_liged="FuenteETMP" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>