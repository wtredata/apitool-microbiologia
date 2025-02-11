<tr>
    <th scope='col' class='col-1 font-weight-bold'>#</th>
    <th scope='col' class='col-1 font-weight-bold'>Usuario</th>
    <th scope='col' class='col-1 font-weight-bold'>Comentario</th>
    <th scope='col' class='col-2 font-weight-bold'>Fecha</th>
    <th scope='col' class='col-3 font-weight-bold'>Resultado esperado  OC1</th>
    <th scope='col' class='col-3 font-weight-bold'>Resultado esperado  OC2</th>
    <th scope='col' class='col-2 font-weight-bold'>Acciones</th>

    @for ($nivel=1; $nivel<=$num_niveles; $nivel++)
        <th scope='col' style="width:{{ (50/$num_niveles) }}%" class='font-weight-bold'>
            Resultado nivel {{ $nivel }} 
            <select class='resultado btnEvent' data-nivel='{{ $nivel }}' data-mantener_predeterminados='true' data-event='keydown&&&change' data-route='NavegacionResultados&&&CambioValorHeadCualitativo'>
                <option value=""></option>
                @for($vc=0; $vc < sizeof($vecCualitativo); $vc++)
                    @if (isset($defecto_cualitativo[$nivel-1]) && $defecto_cualitativo[$nivel-1] == $vecCualitativo[$vc])
                    <option value='{{ $vecCualitativo[$vc] }}' selected>{{ $vecCualitativo[$vc] }}</option>
                    @else
                    <option value='{{ $vecCualitativo[$vc] }}'>{{ $vecCualitativo[$vc] }}</option>
                    @endif
                @endfor
            </select>
        </th>
    @endfor

    @if(($rol_usuario == 1 || $rol_usuario == 2 || $rol_usuario == 5 || $rol_usuario == 3) && !$lote_caducado)
    <th scope='col' style="width:8%" class='font-weight-bold' id="action_cualitativo">Acciones</th>
    @endif
</tr>
<script>
    function sss() {
        alert("eee");
    }
</script>