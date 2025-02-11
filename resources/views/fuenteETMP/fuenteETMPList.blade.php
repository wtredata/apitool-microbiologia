@foreach($fuentesETMP as $fuente_etmp)
    <option value="{{ $fuente_etmp->id_fuente_etmp }}">{{ $fuente_etmp->nom_fuente_etmp }}</option>
@endforeach