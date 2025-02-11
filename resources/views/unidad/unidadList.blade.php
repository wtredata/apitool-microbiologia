<option value="">Seleccione una unidad...</option>

@foreach($unidades as $unidad) 
    <option value="{{ $unidad->id_unidad }}">{{ $unidad->nom_unidad }}</option>
@endforeach