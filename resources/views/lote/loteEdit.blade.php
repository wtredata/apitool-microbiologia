@switch($campo)
    @case("control")
    <form 
        class="formEvent form-row" data-event="submit&&&keyup" data-route="Update_Lote&&&Update_Lote" 
        data-field="control&&&control" data-action_save="true&&&true" 
        data-reference="{{ $lote->id_lote }}&&&{{ $lote->id_lote }}">  
        
        <div class="col">
            <div class="input-group min-width-input">
                <div class="input-group-prepend">
                    <button 
                        class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" 
                        data-toggle="dropdown" aria-haspopup="true" 
                        aria-expanded="false"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Lote" data-field="control" data-reference="{{ $lote->id_lote }}" data-action_save="true">Guardar cambios (Enter)</a>
                        <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Lote" data-field="control" data-reference="{{ $lote->id_lote }}" data-action_save="false">Cancelar (Esc)</a>
                    </div>
                </div>

                <select name="control" class="form-control form-control-sm control" data-isselect2='true'>
                    <option value="">Seleccione un control...</option>
                    @foreach($controles as $control)
                        @if($lote->control_id_control == $control->id_control)
                            <option value="{{ $control->id_control }}" selected>{{ $control->nom_control }} | {{ $control->nom_proveedor }} | {{ $control->nom_matriz }}</option>
                        @else
                            <option value="{{ $control->id_control }}">{{ $control->nom_control }} | {{ $control->nom_proveedor }} | {{ $control->nom_matriz }}</option>
                        @endif
                    @endforeach
                </select>

                <div class="invalid-feedback text-right contMessage_control"></div>
            </div>
        </div>
        
    </form>
    @break

    @case("numLote")
    <form 
        class="formEvent form-row" data-event="submit&&&keyup" data-route="Update_Lote&&&Update_Lote" 
        data-field="numLote&&&numLote" data-action_save="true&&&true" 
        data-reference="{{ $lote->id_lote }}&&&{{ $lote->id_lote }}">  
        
        <div class="col">
            <div class="input-group min-width-input">
                <div class="input-group-prepend">
                    <button 
                        class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" 
                        data-toggle="dropdown" aria-haspopup="true" 
                        aria-expanded="false"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Lote" data-field="numLote" data-reference="{{ $lote->id_lote }}" data-action_save="true">Guardar cambios (Enter)</a>
                        <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Lote" data-field="numLote" data-reference="{{ $lote->id_lote }}" data-action_save="false">Cancelar (Esc)</a>
                    </div>
                </div>

                <input type="text" name="numLote" class="form-control numLote" placeholder="Ingrese el número de lote maestro" value="{{ $lote->cod_lote }}">

                <div class="invalid-feedback text-right contMessage_numLote"></div>
            </div>
        </div>
        
    </form>
    @break


    @case("fecha")
    <form 
        class="formEvent form-row" data-event="submit&&&keyup" data-route="Update_Lote&&&Update_Lote" 
        data-field="fecha&&&fecha" data-action_save="true&&&true" 
        data-reference="{{ $lote->id_lote }}&&&{{ $lote->id_lote }}">  
        
        <div class="col">
            <div class="input-group min-width-input">
                <div class="input-group-prepend">
                    <button 
                        class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" 
                        data-toggle="dropdown" aria-haspopup="true" 
                        aria-expanded="false"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item btnEvent" data-event="click" data-route="Update_Lote" data-field="fecha" data-reference="{{ $lote->id_lote }}" data-action_save="true">Guardar cambios (Enter)</a>
                        <a class="dropdown-item btnEvent"data-event="click" data-route="Update_Lote" data-field="fecha" data-reference="{{ $lote->id_lote }}" data-action_save="false">Cancelar (Esc)</a>
                    </div>
                </div>

                <input type="text" name="fecha" class="form-control fecha inputDateSingle" placeholder="Ingrese el número de lote maestro" value="{{ $lote->fecha_vencimiento }}">

                <div class="invalid-feedback text-right contMessage_fecha"></div>
            </div>
        </div>
        
    </form>
    @break


@endswitch