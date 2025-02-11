@switch($campo)
    @case("analito")
      {{ $variabilidadBiologica->nom_analito }} | {{ $variabilidadBiologica->nom_matriz }}
    @break
    
    @case("fuente_etmp")
      {{ $variabilidadBiologica->nom_fuente_etmp }}
    @break

    @case("valor_limite")
      {{ $variabilidadBiologica->valor_limite }}
    @break

    @case("sesgo_mp")
      {{ $variabilidadBiologica->sesgo_mp }}
    @break

    @case("cv_mp")
      {{ $variabilidadBiologica->cv_mp }}
    @break
@endswitch