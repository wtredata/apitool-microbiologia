<table class="table table-striped table-sm text-center dinamicTable SeeIndexAnalitoLaboratorio">
    <thead>
        <tr>
            <th class='font-weight-bolder' scope='col'>Lote</th>
            <th class='font-weight-bolder' scope='col'>Analito</th>
            <th class='font-weight-bolder' scope='col'>Analizador</th>
            <th class='font-weight-bolder' scope='col'>Metodología</th>
            <th class='font-weight-bolder' scope='col'>Reactivo</th>
            <th class='font-weight-bolder' scope='col'>N° GEN</th>
            <th class='font-weight-bolder' scope='col'>Unidades</th>
            <th class='font-weight-bolder' scope='col'>Temp. °C</th>
            <th class='font-weight-bolder' scope='col'>Tipo</th>
            <th class='font-weight-bolder' scope='col'>Tipo cualitativo</th>
            <th class='font-weight-bolder' scope='col'>Estado</th>
            <th class='font-weight-bolder' scope='col'>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($analitos_laboratorio as $analito_laboratorio)
        <tr>
            <td class="td-editable btnEvent" data-event="dblclick" data-route="SeeEdit_AnalitoLaboratorio" data-field="control_lab"
                data-tables_liged="AnalitoLaboratorio" data-reference="{{ $analito_laboratorio->id_analito_lab }}">{{$analito_laboratorio->num_laboratorio}} - {{$analito_laboratorio->nom_laboratorio}} - {{$analito_laboratorio->cod_lote}} - {{$analito_laboratorio->nom_control}}</td>
            <td class="td-editable btnEvent" data-event="dblclick" data-route="SeeEdit_AnalitoLaboratorio" data-field="analito"
                data-tables_liged="AnalitoLaboratorio" data-reference="{{ $analito_laboratorio->id_analito_lab }}">{{ $analito_laboratorio->nom_analito }}</td>
            <td class="td-editable btnEvent" data-event="dblclick" data-route="SeeEdit_AnalitoLaboratorio" data-field="analizador"
                data-tables_liged="AnalitoLaboratorio" data-reference="{{ $analito_laboratorio->id_analito_lab }}">{{ $analito_laboratorio->nom_analizador }}</td>
            <td class="td-editable btnEvent" data-event="dblclick" data-route="SeeEdit_AnalitoLaboratorio" data-field="metodologia"
                data-tables_liged="AnalitoLaboratorio" data-reference="{{ $analito_laboratorio->id_analito_lab }}">{{ $analito_laboratorio->nom_metodo }}</td>
            <td class="td-editable btnEvent" data-event="dblclick" data-route="SeeEdit_AnalitoLaboratorio" data-field="reactivo"
                data-tables_liged="AnalitoLaboratorio" data-reference="{{ $analito_laboratorio->id_analito_lab }}">{{ $analito_laboratorio->nom_reactivo }}</td>
            <td class="td-editable btnEvent" data-event="dblclick" data-route="SeeEdit_AnalitoLaboratorio" data-field="gen_vitros"
                data-tables_liged="AnalitoLaboratorio" data-reference="{{ $analito_laboratorio->id_analito_lab }}">{{ $analito_laboratorio->generacion_reactivo }}</td>
            <td class="td-editable btnEvent" data-event="dblclick" data-route="SeeEdit_AnalitoLaboratorio" data-field="unidades"
                data-tables_liged="AnalitoLaboratorio" data-reference="{{ $analito_laboratorio->id_analito_lab }}">{{ $analito_laboratorio->nom_unidad }}</td>
            <td class="td-editable btnEvent" data-event="dblclick" data-route="SeeEdit_AnalitoLaboratorio" data-field="temperatura"
                data-tables_liged="AnalitoLaboratorio" data-reference="{{ $analito_laboratorio->id_analito_lab }}">{{ $analito_laboratorio->nom_temperatura }}</td>
            <td class="td-editable btnEvent" data-event="dblclick" data-route="SeeEdit_AnalitoLaboratorio" data-field="tipo_prueba"
                data-tables_liged="AnalitoLaboratorio" data-reference="{{ $analito_laboratorio->id_analito_lab }}">{{ $analito_laboratorio->tipo_prueba }}</td>
            <td class="td-editable btnEvent" data-event="dblclick" data-route="SeeEdit_AnalitoLaboratorio" data-field="tipo_prueba_cualitativo"
                data-tables_liged="AnalitoLaboratorio" data-reference="{{ $analito_laboratorio->id_analito_lab }}">{{ $analito_laboratorio->tipo_prueba_cualitativo }}</td>
            <td>
                @if($analito_laboratorio->estado_analito_laboratorio == 1)
                <button type="button" class="btn btn-sm btnEvent shadow-none m-0 py-1 px-2 btn-success"
                    data-event='click' data-route='ChangeStatus_AnalitoLaboratorio'
                    data-tables_liged="AnalitoLaboratorio" data-fancyliged='tree_resultados'
                    data-reference="{{ $analito_laboratorio->id_analito_lab }}"
                    data-nom="{{ $analito_laboratorio->nom_analito }}"
                    data-objjson='{"id_reference": "analito_lab_control_laboratorio"}' data-estado="Cerrado"
                    title="Clic para cerrar el analito">Abierto</button>
                @else
                <button type="button" class="btn btn-sm btnEvent shadow-none m-0 py-1 px-2 btn-danger"
                    data-event='click' data-route='ChangeStatus_AnalitoLaboratorio'
                    data-tables_liged="AnalitoLaboratorio" data-fancyliged='tree_resultados'
                    data-reference="{{ $analito_laboratorio->id_analito_lab }}"
                    data-nom="{{ $analito_laboratorio->nom_analito }}"
                    data-objjson='{"id_reference": "analito_lab_control_laboratorio"}' data-estado="Abierto"
                    title="Clic para abrir el analito">Cerrado</button>
                @endif
            </td>
            <td class="table-action">
                <a href="#" class='btnEvent' data-event='click' data-route='Destroy_AnalitoLaboratorio'
                    data-tables_liged="AnalitoLaboratorio" data-fancyliged='tree_resultados' data-reference="{{ $analito_laboratorio->id_analito_lab }}"
                    data-nom="{{ $analito_laboratorio->nom_analito }}" data-objjson='{"id_reference": "analito_lab_control_laboratorio"}'
                    title='Eliminar el analito para el lote especificado'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-trash align-middle">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                        </path>
                    </svg>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>