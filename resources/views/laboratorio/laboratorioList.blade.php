<option value="">Seleccione un laboratorio...</option>

@foreach($laboratorios as $laboratorio)
    <option value="{{ $laboratorio->id_laboratorio }}">{{ $laboratorio->num_laboratorio }} - {{ $laboratorio->institucion }} {{ $laboratorio->sede }}</option>
@endforeach