<option value="" disabled selected>Seleccione una matriz...</option>

@foreach($matrices as $matriz)
    <option value="{{ $matriz->id_matriz }}">{{ $matriz->nom_matriz }}</option>
@endforeach