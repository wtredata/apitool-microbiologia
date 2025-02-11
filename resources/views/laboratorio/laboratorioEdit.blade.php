@switch($campo)
    @case("sede")
    <form class="formEvent form-row" data-event="submit&&&keyup" data-route="Update_Laboratorio&&&Update_Laboratorio" data-field="sede&&&sede" data-action_save="true&&&true" data-reference="{{ $laboratorio->id_laboratorio }}&&&{{ $laboratorio->id_laboratorio }}">  
        
        <div class="col">
            <div class="input-group min-width-input">
                <div class="input-group-prepend">
                    <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Laboratorio" data-field="sede" data-reference="{{ $laboratorio->id_laboratorio }}" data-action_save="true">Guardar cambios (Enter)</a>
                        <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Laboratorio" data-field="sede" data-reference="{{ $laboratorio->id_laboratorio }}" data-action_save="false">Cancelar (Esc)</a>
                    </div>
                </div>

                <select data-isselect2='true' name="sede" class="form-control sede">
                    <option value="">Seleccione una sede...</option>
                    @foreach($sedes as $sede)
                        @if($laboratorio->sede_id_sede == $sede->id_sede)
                            <option value="{{ $sede->id_sede }}" selected>{{ $sede->nom_institucion }} {{ $sede->nom_sede }}</option>
                        @else
                            <option value="{{ $sede->id_sede }}">{{ $sede->nom_institucion }} {{ $sede->nom_sede }}</option>
                        @endif
                    @endforeach
                </select>

                <div class="invalid-feedback text-right contMessage_sede"></div>
            </div>
        </div>
        
    </form>
    @break


    @case("num_laboratorio")
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Laboratorio&&&Update_Laboratorio" data-field="num_laboratorio&&&num_laboratorio" data-action_save="true&&&true" data-reference="{{ $laboratorio->id_laboratorio }}&&&{{ $laboratorio->id_laboratorio }}">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Laboratorio" data-field="num_laboratorio" data-reference="{{ $laboratorio->id_laboratorio }}" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Laboratorio" data-field="num_laboratorio" data-reference="{{ $laboratorio->id_laboratorio }}" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="num_laboratorio" class="form-control num_laboratorio" value="{{ $laboratorio->num_laboratorio }}">

            <div class="invalid-feedback text-right contMessage_num_laboratorio"></div>
        </div>
    </form>
    @break

    
    @case("nom_laboratorio")
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_Laboratorio&&&Update_Laboratorio" data-field="nom_laboratorio&&&nom_laboratorio" data-action_save="true&&&true" data-reference="{{ $laboratorio->id_laboratorio }}&&&{{ $laboratorio->id_laboratorio }}">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Laboratorio" data-field="nom_laboratorio" data-reference="{{ $laboratorio->id_laboratorio }}" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Laboratorio" data-field="nom_laboratorio" data-reference="{{ $laboratorio->id_laboratorio }}" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="nom_laboratorio" class="form-control nom_laboratorio" value="{{ $laboratorio->nom_laboratorio }}">

            <div class="invalid-feedback text-right contMessage_nom_laboratorio"></div>
        </div>
    </form>
    @break    
        
    
    @case("tipo")
    <form class="formEvent form-row exceptionSelect2" data-event="submit&&&keyup" data-route="Update_Laboratorio&&&Update_Laboratorio" data-field="tipo&&&tipo" data-action_save="true&&&true" data-reference="{{ $laboratorio->id_laboratorio }}&&&{{ $laboratorio->id_laboratorio }}">  
        
        <div class="col">
            <div class="input-group min-width-input">
                <div class="input-group-prepend">
                    <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Laboratorio" data-field="tipo" data-reference="{{ $laboratorio->id_laboratorio }}" data-action_save="true">Guardar cambios (Enter)</a>
                        <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Laboratorio" data-field="tipo" data-reference="{{ $laboratorio->id_laboratorio }}" data-action_save="false">Cancelar (Esc)</a>
                    </div>
                </div>

                <select data-isselect2='true' name="tipo" class="form-control tipo exceptionSelect2">
                    @if($laboratorio->principal == 1)
                    
                    <option value="0">Secundario</option>
                    <option value="1" selected>Principal</option>
                    
                    @else

                    <option value="0" selected>Secundario</option>
                    <option value="1">Principal</option>
                                                            
                    @endif
                </select>

                <div class="invalid-feedback text-right contMessage_tipo"></div>
            </div>
        </div>
        
    </form>
    @break

@endswitch