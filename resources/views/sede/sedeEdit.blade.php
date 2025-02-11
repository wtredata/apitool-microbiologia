@switch($campo)
    @case("institucion")
    <form class="formEvent form-row" data-event="submit&&&keyup" data-route="Update_Sede&&&Update_Sede" data-field="institucion&&&institucion" data-action_save="true&&&true" data-reference="{{ $sede->id_sede }}&&&{{ $sede->id_sede }}">  
        
        <div class="col">
            <div class="input-group min-width-input">
                <div class="input-group-prepend">
                    <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Sede" data-field="institucion" data-reference="{{ $sede->id_sede }}" data-action_save="true">Guardar cambios (Enter)</a>
                        <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Sede" data-field="institucion" data-reference="{{ $sede->id_sede }}" data-action_save="false">Cancelar (Esc)</a>
                    </div>
                </div>

                <select name="institucion" class="form-control form-control-sm institucion" data-isselect2='true'>
                    <option value="">Seleccione una institución...</option>
                    @foreach($instituciones as $institucion)
                        @if($sede->institucion_id_institucion == $institucion->id_institucion)
                            <option value="{{ $institucion->id_institucion }}" selected>{{ $institucion->nom_institucion }}</option>
                        @else
                            <option value="{{ $institucion->id_institucion }}">{{ $institucion->nom_institucion }}</option>
                        @endif
                    @endforeach
                </select>

                <div class="invalid-feedback text-right contMessage_institucion"></div>
            </div>
        </div>
        
    </form>
    @break


    @case("ciudad")
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Sede&&&Update_Sede" data-field="ciudad&&&ciudad" data-action_save="true&&&true" data-reference="{{ $sede->id_sede }}&&&{{ $sede->id_sede }}">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Sede" data-field="ciudad" data-reference="{{ $sede->id_sede }}" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Sede" data-field="ciudad" data-reference="{{ $sede->id_sede }}" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>


            <select name="ciudad" class="form-control form-control-sm ciudad" data-isselect2='true'>
                <option value="">Seleccione una ciudad...</option>
                @foreach($ciudades as $ciudad)
                    @if($sede->ciudad_id_ciudad == $ciudad->id_ciudad)
                        <option value="{{ $ciudad->id_ciudad }}" selected>{!! $ciudad->nom_pais . " " . $ciudad->nom_ciudad !!}</option>
                    @else
                        <option value="{{ $ciudad->id_ciudad }}">{!! $ciudad->nom_pais . " " . $ciudad->nom_ciudad !!}</option>
                    @endif
                @endforeach
            </select>

            <div class="invalid-feedback text-right contMessage_ciudad"></div>
        </div>
    </form>
    @break

    @case("nombre")
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Sede&&&Update_Sede" data-field="nombre&&&nombre" data-action_save="true&&&true" data-reference="{{ $sede->id_sede }}&&&{{ $sede->id_sede }}">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Sede" data-field="nombre" data-reference="{{ $sede->id_sede }}" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Sede" data-field="nombre" data-reference="{{ $sede->id_sede }}" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="nombre" class="form-control nombre" value="{{ $sede->nom_sede }}">

            <div class="invalid-feedback text-right contMessage_nombre"></div>
        </div>
    </form>
    @break


    @case("nom_contacto")
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Sede&&&Update_Sede" data-field="nom_contacto&&&nom_contacto" data-action_save="true&&&true" data-reference="{{ $sede->id_sede }}&&&{{ $sede->id_sede }}">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Sede" data-field="nom_contacto" data-reference="{{ $sede->id_sede }}" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Sede" data-field="nom_contacto" data-reference="{{ $sede->id_sede }}" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="nom_contacto" class="form-control nom_contacto" value="{{ $sede->nom_contacto}}">

            <div class="invalid-feedback text-right contMessage_nom_contacto"></div>
        </div>
    </form>
    @break


    @case("tel_contacto")
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Sede&&&Update_Sede" data-field="tel_contacto&&&tel_contacto" data-action_save="true&&&true" data-reference="{{ $sede->id_sede }}&&&{{ $sede->id_sede }}">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Sede" data-field="tel_contacto" data-reference="{{ $sede->id_sede }}" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Sede" data-field="tel_contacto" data-reference="{{ $sede->id_sede }}" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="tel_contacto" class="form-control tel_contacto" value="{{ $sede->tel_contacto}}">

            <div class="invalid-feedback text-right contMessage_tel_contacto"></div>
        </div>
    </form>
    @break


    @case("correo_contacto")
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Sede&&&Update_Sede" data-field="correo_contacto&&&correo_contacto" data-action_save="true&&&true" data-reference="{{ $sede->id_sede }}&&&{{ $sede->id_sede }}">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Sede" data-field="correo_contacto" data-reference="{{ $sede->id_sede }}" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Sede" data-field="correo_contacto" data-reference="{{ $sede->id_sede }}" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="correo_contacto" class="form-control correo_contacto" value="{{ $sede->correo_contacto}}">

            <div class="invalid-feedback text-right contMessage_correo_contacto"></div>
        </div>
    </form>
    @break


    @case("direccion")
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Sede&&&Update_Sede" data-field="direccion&&&direccion" data-action_save="true&&&true" data-reference="{{ $sede->id_sede }}&&&{{ $sede->id_sede }}">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Sede" data-field="direccion" data-reference="{{ $sede->id_sede }}" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Sede" data-field="direccion" data-reference="{{ $sede->id_sede }}" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="direccion" class="form-control direccion" value="{{ $sede->direccion}}">

            <div class="invalid-feedback text-right contMessage_direccion"></div>
        </div>
    </form>
    @break

@endswitch