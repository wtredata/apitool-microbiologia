<table class="table table-striped table-sm text-center dinamicTable SeeIndexModo">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Estado</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($modos as $modo)

        <tr>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Modo" data-field="nombre" data-reference="{{ $modo->id_encrypt_modo }}">{{ $modo->nom_modo }}</td>
            <td>
                @if($modo->estado == 1)
                    <button class="btn btn-primary btn-sm btnEvent" title="Inactivar el modo {{ $modo->nom_modo }}" data-route="ChangeStatus_Modo" data-tables_liged="Modo" data-event="click" data-reference="{{ $modo->id_encrypt_modo }}" data-nom="{{ $modo->nom_modo }}" data-estado="inactivo">Activo</button>
                @else
                    <button class="btn btn-warning btn-sm btnEvent" title="Activar el modo {{ $modo->nom_modo }}" data-route="ChangeStatus_Modo" data-tables_liged="Modo" data-event="click" data-reference="{{ $modo->id_encrypt_modo }}" data-nom="{{ $modo->nom_modo }}" data-estado="activo">Inactivo</button>
                @endif
            </td>
            <td>
                <button class="btn btn-danger btn-sm btnEvent" title="Eliminar el modo {{ $modo->nom_modo }}" data-route="Destroy_Modo" data-event="click" data-reference="{{ $modo->id_encrypt_modo }}" data-nom="{{ $modo->nom_modo }}" data-tables_liged="Modo"><i class="far fa-trash-alt"></i></button>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>