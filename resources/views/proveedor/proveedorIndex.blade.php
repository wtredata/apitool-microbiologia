<table class="table table-striped table-sm text-center dinamicTable SeeIndexProveedor">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Estado</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($proveedores as $proveedor)

        <tr>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Proveedor" data-field="nombre" data-reference="{{ $proveedor->id_proveedor }}">{{ $proveedor->nom_proveedor }}</td>
            <td>
                @if($proveedor->estado == 1)
                    <button class="btn btn-primary btn-sm btnEvent m-0 p-1" title="Inactivar la institución {{ $proveedor->nom_proveedor }}" data-route="ChangeStatus_Proveedor" data-tables_liged="Proveedor" data-event="click" data-reference="{{ $proveedor->id_proveedor }}" data-nom="{{ $proveedor->nom_proveedor }}" data-estado="inactivo">Activo</button>
                @else
                    <button class="btn btn-warning btn-sm btnEvent m-0 p-1" title="Activar la institución {{ $proveedor->nom_proveedor }}" data-route="ChangeStatus_Proveedor" data-tables_liged="Proveedor" data-event="click" data-reference="{{ $proveedor->id_proveedor }}" data-nom="{{ $proveedor->nom_proveedor }}" data-estado="inactivo">Inactivo</button>
                @endif
            </td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class="align-middle btnEvent" title="Eliminar la institución {{ $proveedor->nom_proveedor }}" data-route="Destroy_Proveedor" data-event="click" data-reference="{{ $proveedor->id_proveedor }}" data-nom="{{ $proveedor->nom_proveedor }}" data-tables_liged="Proveedor" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>