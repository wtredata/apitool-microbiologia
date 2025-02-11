@switch($campo)
    @case("control")
        {{ $lote->nom_control }} | {{ $lote->nom_matriz }}
    @break
    
    @case("fecha")
        {{ date("F d, Y",strtotime($lote->fecha_vencimiento)) }}
    @break

    @case("numLote")
        {{ $lote->cod_lote }}
    @break
@endswitch