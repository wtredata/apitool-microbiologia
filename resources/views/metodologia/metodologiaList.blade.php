<option value="">Seleccione una metodología...</option>

@foreach($metodologias as $metodologia) 
    <option value="{{ $metodologia->id_metodo }}">{{ $metodologia->nom_metodo }}</option>
@endforeach