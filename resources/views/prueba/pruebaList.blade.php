@foreach($pruebas as $prueba)
    <option value="{{ $prueba->id_prueba }}">{{ $prueba->nom_prueba }}</option>
@endforeach