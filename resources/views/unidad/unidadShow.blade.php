@switch($campo)
    @case("nombre")
      {{ $unidad->nom_unidad }}
    @break

    @case("codigo")
      {{ $unidad->cod_unidad }}
    @break
@endswitch