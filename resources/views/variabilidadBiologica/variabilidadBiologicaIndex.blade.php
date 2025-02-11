<table class="table table-striped table-sm text-center dinamicTable SeeIndexVariabilidadBiologica">
    <thead>
        <tr>
            <th scope="col">Analito</th>
            <th scope="col">Fuente APS</th>
            <th scope="col">APS%</th>
            <th scope="col">Sesgo<sub>mp</sub>%</th>
            <th scope="col">CV<sub>mp</sub>%</th>
            <th scope="col">Estado</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($variabilidadesBiologicas as $variabilidadBiologica)

        <tr>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_VariabilidadBiologica" data-field="analito" data-reference="{{ $variabilidadBiologica->id_variabilidad_biologica }}">{{ $variabilidadBiologica->nom_analito }}</td>  
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_VariabilidadBiologica" data-field="fuente_etmp" data-reference="{{ $variabilidadBiologica->id_variabilidad_biologica }}">{{ $variabilidadBiologica->nom_fuente_etmp }}</td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_VariabilidadBiologica" data-field="valor_limite" data-reference="{{ $variabilidadBiologica->id_variabilidad_biologica }}">{{ $variabilidadBiologica->valor_limite }}</td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_VariabilidadBiologica" data-field="sesgo_mp" data-reference="{{ $variabilidadBiologica->id_variabilidad_biologica }}">{{ $variabilidadBiologica->sesgo_mp }}</td>
            <td class="btnEvent" data-event="dblclick" data-route="SeeEdit_VariabilidadBiologica" data-field="cv_mp" data-reference="{{ $variabilidadBiologica->id_variabilidad_biologica }}">{{ $variabilidadBiologica->cv_mp }}</td>
            <td>
                @if($variabilidadBiologica->variabilidad_biologica_estado == 1)
                    <button class="btn btn-primary btn-sm btnEvent m-0 p-1" title="Inactivar la variabilidad biológica {{ $variabilidadBiologica->nom_fuente_etmp }}" data-route="ChangeStatus_VariabilidadBiologica" data-tables_liged="VariabilidadBiologica" data-objjson='{"id": "variabilidad_biologica_analito_reference"}' data-event="click" data-reference="{{ $variabilidadBiologica->id_variabilidad_biologica }}" data-nom="{{ $variabilidadBiologica->nom_fuente_etmp }}" data-estado="inactivo">Activo</button>
                @else
                    <button class="btn btn-warning btn-sm btnEvent m-0 p-1" title="Inactivar la variabilidad biológica {{ $variabilidadBiologica->nom_fuente_etmp }}" data-route="ChangeStatus_VariabilidadBiologica" data-tables_liged="VariabilidadBiologica" data-objjson='{"id": "variabilidad_biologica_analito_reference"}' data-event="click" data-reference="{{ $variabilidadBiologica->id_variabilidad_biologica }}" data-nom="{{ $variabilidadBiologica->nom_fuente_etmp }}" data-estado="activo">Inactivo</button>
                @endif
            </td>
            <td>
                <svg xmlns="http://www.w3.org/2000/svg" class="align-middle btnEvent" title="Eliminar la variabilidad biológica {{ $variabilidadBiologica->nom_fuente_etmp }}" data-route="Destroy_VariabilidadBiologica" data-event="click" data-reference="{{ $variabilidadBiologica->id_variabilidad_biologica }}" data-nom="{{ $variabilidadBiologica->nom_fuente_etmp }}" data-tables_liged="VariabilidadBiologica" data-objjson='{"id": "variabilidad_biologica_analito_reference"}' width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>