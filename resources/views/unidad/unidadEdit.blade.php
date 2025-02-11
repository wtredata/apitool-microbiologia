@switch($campo)

    @case("nombre")
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Unidad&&&Update_Unidad" data-field="nombre&&&nombre" data-action_save="true&&&true" data-reference="{{ $unidad->id_unidad }}&&&{{ $unidad->id_unidad }}">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Unidad" data-field="nombre" data-reference="{{ $unidad->id_unidad }}" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Unidad" data-field="nombre" data-reference="{{ $unidad->id_unidad }}" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="nombre" class="form-control nombre" value="{{ $unidad->nom_unidad }}">

            <div class="invalid-feedback text-right contMessage_nombre"></div>
        </div>
    </form>
    @break


    @case("codigo")
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Unidad&&&Update_Unidad" data-field="codigo&&&codigo" data-action_save="true&&&true" data-reference="{{ $unidad->id_unidad }}&&&{{ $unidad->id_unidad }}">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Unidad" data-field="codigo" data-reference="{{ $unidad->id_unidad }}" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Unidad" data-field="codigo" data-reference="{{ $unidad->id_unidad }}" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="codigo" class="form-control codigo" value="{{ $unidad->cod_unidad }}" placeholder="Identificación del unidad">

            <div class="invalid-feedback text-right contMessage_codigo"></div>
        </div>
    </form>
    @break

@endswitch