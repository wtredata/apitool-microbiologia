<button class="btn btn-primary add-row"
data-url="{{ route('registro.control.cepa', ['loteId' => $cepas->id]) }}"
data-table-id="{{ $cepas->id }}" cepa-prueba-id="{{ $control->prueba_lote_id }}"
lote-id="{{ $data->loteLaboratorio->first()->id }}">Agregar
Fila</button>



{{ route('destroy.control.cepa', ['id' => $cepa->id]) }}

