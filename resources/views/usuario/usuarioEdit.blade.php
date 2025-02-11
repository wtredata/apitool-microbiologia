@switch($campo)

    @case("nom_usuario")
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Usuario&&&Update_Usuario" data-field="nom_usuario&&&nom_usuario" data-action_save="true&&&true" data-reference="{{ $usuario->id_usuario }}&&&{{ $usuario->id_usuario }}">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Usuario" data-field="nom_usuario" data-reference="{{ $usuario->id_usuario }}" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Usuario" data-field="nom_usuario" data-reference="{{ $usuario->id_usuario }}" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="nom_usuario" class="form-control nom_usuario" value="{{ $usuario->nom_usuario }}">

            <div class="invalid-feedback text-right contMessage_nom_usuario"></div>
        </div>
    </form>
    @break

    @case("rol")
    <form class="formEvent form-row" data-event="submit&&&keyup" data-route="Update_Usuario&&&Update_Usuario" data-field="rol&&&rol" data-action_save="true&&&true" data-reference="{{ $usuario->usuario }}&&&{{ $usuario->id_usuario }}">  
        <div class="col">
            <div class="input-group min-width-input">
                <div class="input-group-prepend">
                    <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Usuario" data-field="rol" data-reference="{{ $usuario->id_usuario }}" data-action_save="true">Guardar cambios (Enter)</a>
                        <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Usuario" data-field="rol" data-reference="{{ $usuario->id_usuario }}" data-action_save="false">Cancelar (Esc)</a>
                    </div>
                </div>

                <select name="rol" class="form-control rol" data-isselect2='true'>
                    @foreach($roles as $rol)
                        <option value="{{ $rol->id_rol }}">{{ $rol->nom_rol }}</option>
                    @endforeach
                </select>

                <div class="invalid-feedback text-right contMessage_rol"></div>
            </div>
        </div>
    </form>
    @break
    

    @case("nombres")
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Usuario&&&Update_Usuario" data-field="nombres&&&nombres" data-action_save="true&&&true" data-reference="{{ $usuario->id_usuario }}&&&{{ $usuario->id_usuario }}">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Usuario" data-field="nombres" data-reference="{{ $usuario->id_usuario }}" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Usuario" data-field="nombres" data-reference="{{ $usuario->id_usuario }}" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="nombres" class="form-control nombres" value="{{ $usuario->nombres }}">

            <div class="invalid-feedback text-right contMessage_nombres"></div>
        </div>
    </form>
    @break


    @case("apellidos")
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Usuario&&&Update_Usuario" data-field="apellidos&&&apellidos" data-action_save="true&&&true" data-reference="{{ $usuario->id_usuario }}&&&{{ $usuario->id_usuario }}">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Usuario" data-field="apellidos" data-reference="{{ $usuario->id_usuario }}" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Usuario" data-field="apellidos" data-reference="{{ $usuario->id_usuario }}" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="apellidos" class="form-control apellidos" value="{{ $usuario->apellidos }}">

            <div class="invalid-feedback text-right contMessage_apellidos"></div>
        </div>
    </form>
    @break


    @case("correo")
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Usuario&&&Update_Usuario" data-field="correo&&&correo" data-action_save="true&&&true" data-reference="{{ $usuario->id_usuario }}&&&{{ $usuario->id_usuario }}">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Usuario" data-field="correo" data-reference="{{ $usuario->id_usuario }}" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Usuario" data-field="correo" data-reference="{{ $usuario->id_usuario }}" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="correo" class="form-control correo" value="{{ $usuario->correo }}">

            <div class="invalid-feedback text-right contMessage_correo"></div>
        </div>
    </form>
    @break

@endswitch