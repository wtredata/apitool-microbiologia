@switch($campo)
    @case("pais")
      {{ $ciudad->pais }}
    @break
    
    @case("nombre")
      {{ $ciudad->nom_ciudad }}
    @break
@endswitch