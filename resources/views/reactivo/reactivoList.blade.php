<option value="">Seleccione una reactivo...</option>

@foreach($reactivos as $reactivo) 
    <option value="{{ $reactivo->id_reactivo }}">{{ $reactivo->nom_reactivo }}</option>
@endforeach