@switch($campo)
@case("lote")
<form class="formEvent form-row" data-event="submit&&&keyup"
    data-route="Update_ControlLaboratorio&&&Update_ControlLaboratorio" data-field="lote&&&lote"
    data-action_save="true&&&true"
    data-reference="{{ $control_laboratorio->id_control_laboratorio }}&&&{{ $control_laboratorio->id_control_laboratorio }}"
    data-trcompleto="true"
>

    <div class="col-12">
        <div class="input-group">

            <select name="lote" class="form-control lote" id='control_laboratorio_edit_lote' data-isselect2='true'
                data-modulo_select2="ControlLaboratorio"></select>

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
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_ControlLaboratorio"
                        data-field="lote" data-fancyliged='tree_resultados' data-reference="{{ $control_laboratorio->id_control_laboratorio }}"
                        data-action_save="true" data-trcompleto='true'>Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_ControlLaboratorio"
                        data-field="lote" data-fancyliged='tree_resultados' data-reference="{{ $control_laboratorio->id_control_laboratorio }}"
                        data-action_save="false" data-trcompleto='true'>Cancelar (Esc)</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12">
        <div class="invalid-feedback text-right contMessage_lote"></div>
    </div>

</form>
@break


@case("laboratorio")
<form class="formEvent form-row" data-event="submit&&&keyup"
    data-route="Update_ControlLaboratorio&&&Update_ControlLaboratorio" data-field="laboratorio&&&laboratorio"
    data-action_save="true&&&true"
    data-reference="{{ $control_laboratorio->id_control_laboratorio }}&&&{{ $control_laboratorio->id_control_laboratorio }}"
    data-trcompleto="true"
>

    <div class="col-12">
        <div class="input-group">
            
            <select name="laboratorio" class="form-control laboratorio" id='control_laboratorio_edit_laboratorio' data-isselect2='true'
                data-modulo_select2="ControlLaboratorio"></select>

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
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_ControlLaboratorio"
                        data-field="laboratorio" data-fancyliged='tree_resultados' data-reference="{{ $control_laboratorio->id_control_laboratorio }}"
                        data-action_save="true" data-trcompleto='true'>Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_ControlLaboratorio"
                        data-field="laboratorio" data-fancyliged='tree_resultados' data-reference="{{ $control_laboratorio->id_control_laboratorio }}"
                        data-action_save="false" data-trcompleto='true'>Cancelar (Esc)</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12">
        <div class="invalid-feedback text-right contMessage_laboratorio"></div>
    </div>

</form>
@break

@endswitch