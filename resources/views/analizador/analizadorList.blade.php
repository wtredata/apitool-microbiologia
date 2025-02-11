<option value="">Seleccione un analizador...</option>

@foreach($analizadores as $analizador) 
    <option value="{{ $analizador->id_analizador }}">{{ $analizador->nom_analizador }}</option>
@endforeach