@switch($campo)
    @case("proveedor")
      {{ $control->nom_proveedor }}
    @break
    
    @case("matriz")
      {{ $control->nom_matriz }} 
    @break
    
    @case("nombre")
      {{ $control->nom_control }}
    @break
    
    @case("numNiveles")
      {{ $control->num_niveles }}
    @break
@endswitch