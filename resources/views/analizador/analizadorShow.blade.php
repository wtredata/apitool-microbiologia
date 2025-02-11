@switch($campo)
    @case("nombre")
      {{ $analizador->nom_analizador }}
    @break

    @case("codigo")
      {{ $analizador->cod_analizador }}
    @break
@endswitch