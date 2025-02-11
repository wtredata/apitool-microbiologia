@switch($campo)
@case("fecha_vigencia")
<form class="formEvent form-row" data-event="submit&&&keyup"
    data-route="Update_Error&&&Update_Error" data-field="fecha_vigencia&&&fecha_vigencia"
    data-action_save="true&&&true"
    data-reference="{{ $cambio_aps->id_cambio_aps }}&&&{{ $cambio_aps->id_cambio_aps }}"
>

    <div class="col-12">
        <div class="input-group">

            <input type="date" value="{{ $cambio_aps->fecha_vigencia }}" id='aps_fecha_vigencia' class='form-control fecha_vigencia' name='fecha_vigencia'>

            <div class="input-group-prepend">
                <button class="btn btn-primary shadow-none ripple-surface ripple-surface-dark dropdown-toggle m-0 pl-2 pr-2 pt-0 pb-0" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-edit-2 align-middle mr-2">
                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                    </svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Error"
                        data-field="fecha_vigencia" data-reference="{{ $cambio_aps->id_cambio_aps }}"
                        data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Error"
                        data-field="fecha_vigencia" data-reference="{{ $cambio_aps->id_cambio_aps }}"
                        data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12">
        <div class="invalid-feedback text-right contMessage_fecha_vigencia"></div>
    </div>

</form>
@break


@case("valor_limite")
<form class="formEvent form-row" data-event="submit&&&keyup"
    data-route="Update_Error&&&Update_Error" data-field="valor_limite&&&valor_limite"
    data-action_save="true&&&true" data-trcompleto='true'
    data-reference="{{ $cambio_aps->id_cambio_aps }}&&&{{ $cambio_aps->id_cambio_aps }}"
>

    <div class="col-12">
        <div class="input-group">

            <select name="valor_limite" id="aps_valor_limite" class='form-control valor_limite' data-isselect2='true'>
                @foreach($apss as $aps)
                    @if($aps->id_variabilidad_biologica == $cambio_aps->variabilidad_biologica_id_variabilidad_biologica)
                        <option value="{{ $aps->id_variabilidad_biologica }}" selected>{{ round($aps->valor_limite,3) }}% en {{ $aps->nom_fuente_etmp }}</option>                
                    @else 
                        <option value="{{ $aps->id_variabilidad_biologica }}">{{ round($aps->valor_limite,3) }}% en {{ $aps->nom_fuente_etmp }}</option>
                    @endif
                @endforeach
            </select>
            
            <div class="input-group-prepend">
                <button class="btn btn-primary shadow-none ripple-surface ripple-surface-dark dropdown-toggle m-0 pl-2 pr-2 pt-0 pb-0" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-edit-2 align-middle mr-2">
                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                    </svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Error"
                        data-field="valor_limite" data-reference="{{ $cambio_aps->id_cambio_aps }}"
                        data-action_save="true" data-trcompleto='true'>Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Error"
                        data-field="valor_limite" data-reference="{{ $cambio_aps->id_cambio_aps }}"
                        data-action_save="false" data-trcompleto='true'>Cancelar (Esc)</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12">
        <div class="invalid-feedback text-right contMessage_valor_limite"></div>
    </div>

</form>
@break

@case("justificacion")
<form class="formEvent form-row" data-event="submit&&&keyup"
    data-route="Update_Error&&&Update_Error" data-field="justificacion&&&justificacion"
    data-action_save="true&&&true"
    data-reference="{{ $cambio_aps->id_cambio_aps }}&&&{{ $cambio_aps->id_cambio_aps }}"
>

    <div class="col-12">
        <div class="input-group">

            <input type="text" value="{{ $cambio_aps->justificacion }}" id='aps_justificacion' class='form-control justificacion' name='justificacion'>

            <div class="input-group-prepend">
                <button class="btn btn-primary shadow-none ripple-surface ripple-surface-dark dropdown-toggle m-0 pl-2 pr-2 pt-0 pb-0" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-edit-2 align-middle mr-2">
                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                    </svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Error"
                        data-field="justificacion" data-reference="{{ $cambio_aps->id_cambio_aps }}"
                        data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Error"
                        data-field="justificacion" data-reference="{{ $cambio_aps->id_cambio_aps }}"
                        data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12">
        <div class="invalid-feedback text-right contMessage_justificacion"></div>
    </div>

</form>
@break

@endswitch