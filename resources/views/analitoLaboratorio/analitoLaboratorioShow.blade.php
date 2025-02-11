@switch($campo)
    @case("control_lab")
    {{$analito_laboratorio->num_laboratorio}} - {{$analito_laboratorio->nom_laboratorio}} - {{$analito_laboratorio->cod_lote}} - {{$analito_laboratorio->nom_control}}
    @break
    @case("analito")
        {{ $analito_laboratorio->nom_analito }}
    @break
    @case("analizador")
        {{ $analito_laboratorio->nom_analizador }}
    @break
    @case("metodologia")
        {{ $analito_laboratorio->nom_metodo }}
    @break
    @case("reactivo")
        {{ $analito_laboratorio->nom_reactivo }}
    @break
    @case("unidades")
        {{ $analito_laboratorio->nom_unidad }}
    @break
    @case("temperatura")
        {{ $analito_laboratorio->nom_temperatura }}
    @break
    @case("gen_vitros")
        {{ $analito_laboratorio->generacion_reactivo }}
    @break
    @case("tipo_prueba")
        {{ $analito_laboratorio->tipo_prueba }}
    @break
    @case("tipo_prueba_cualitativo")
        {{ $analito_laboratorio->tipo_prueba_cualitativo }}
    @break
@endswitch