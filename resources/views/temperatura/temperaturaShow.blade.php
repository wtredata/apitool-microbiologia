@switch($campo)
    @case("nombre")
      {{ $temperatura->nom_temperatura }}
    @break

    @case("codigo")
      {{ $temperatura->cod_temperatura }}
    @break
@endswitch