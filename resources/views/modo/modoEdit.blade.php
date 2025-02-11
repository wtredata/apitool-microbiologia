@switch($campo)
    @case("nombre")
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Modo&&&Update_Modo" data-field="nombre&&&nombre" data-action_save="true&&&true" data-reference="{{ $modo->id_encrypt_modo }}&&&{{ $modo->id_encrypt_modo }}">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-pencil-alt"></i></button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Modo" data-field="nombre" data-reference="{{ $modo->id_encrypt_modo }}" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Modo" data-field="nombre" data-reference="{{ $modo->id_encrypt_modo }}" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="nombre" class="form-control nombre" value="{{ $modo->nom_modo}}">

            <div class="invalid-feedback text-right contMessage_nombre"></div>
        </div>
    </form>
    @break
@endswitch