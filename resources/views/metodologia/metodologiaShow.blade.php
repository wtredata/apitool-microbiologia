@switch($campo)
    @case("nombre")
      {{ $metodologia->nom_metodo }}
    @break

    @case("codigo")
      {{ $metodologia->cod_metodo }}
    @break
@endswitch