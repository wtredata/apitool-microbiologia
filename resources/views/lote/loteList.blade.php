<option value="">Seleccione un lote...</option>

@foreach($lotes as $lote)
    <option value="{{ $lote->id_lote }}">{{ $lote->cod_lote }} | {{ $lote->nom_control }} | {{ $lote->nom_matriz }}</option>
@endforeach