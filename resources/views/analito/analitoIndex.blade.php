<table class="table table-striped table-sm text-center dinamicTable SeeIndexAnalito">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo</th>
            <th scope="col">Asignación</th>
            <th scope="col">Estado</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($analitos as $analito)
        <tr>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Analito" data-field="codigo" data-reference="{{ $analito->id_analito }}">{{ $analito->cod_analito }}</td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Analito" data-field="nombre" data-reference="{{ $analito->id_analito }}">{{ $analito->nom_analito }}</td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_Analito" data-field="cualitativo" data-reference="{{ $analito->id_analito }}">
                @if($analito->cualitativo == 1)
                    <span class="font-weight-bold text-primary">Cualitativo</span>
                @else
                   <span class="">Cuantitativo</span>
                @endif
            </td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class='align-middle btnEvent' title='Permitir la asignación de metodologías, unidades y temperaturas' data-route="DinamicModal_AsignacionAnalito" data-event="click" data-reference="{{ $analito->id_analito }}" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
            </td>
            <td>
                @if($analito->estado == 1)
                    <button class="btn btn-primary btn-sm btnEvent m-0 p-1" title="Inactivar el analito {{ $analito->nom_analito }}" data-route="ChangeStatus_Analito" data-tables_liged="Analito" data-event="click" data-reference="{{ $analito->id_analito }}" data-nom="{{ $analito->nom_analito }}" data-estado="inactivo">Activo</button>
                @else
                    <button class="btn btn-warning btn-sm btnEvent m-0 p-1" title="Inactivar el analito {{ $analito->nom_analito }}" data-route="ChangeStatus_Analito" data-tables_liged="Analito" data-event="click" data-reference="{{ $analito->id_analito }}" data-nom="{{ $analito->nom_analito }}" data-estado="activo">Inactivo</button>
                @endif
            </td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class="align-middle btnEvent" title="Eliminar el analito {{ $analito->nom_analito }}" data-route="Destroy_Analito" data-event="click" data-reference="{{ $analito->id_analito }}" data-nom="{{ $analito->nom_analito }}" data-tables_liged="Analito" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>