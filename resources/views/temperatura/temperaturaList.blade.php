<option value="">Sin temperatura</option>

@foreach($temperaturas as $temperatura)
    <option value="{{ $temperatura->id_temperatura }}">{{ $temperatura->nom_temperatura }}</option>
@endforeach