@switch($campo)
    @case("analito")
    <form class="formEvent form-row" data-event="submit&&&keyup" data-route="Update_VariabilidadBiologica&&&Update_VariabilidadBiologica" data-field="analito&&&analito" data-action_save="true&&&true" data-reference="{{ $variabilidad_biologica->id_variabilidad_biologica }}&&&{{ $variabilidad_biologica->id_variabilidad_biologica }}">  
        
        <div class="col">
            <div class="input-group min-width-input">
                <div class="input-group-prepend">
                    <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item btnEvent" data-event="click" data-route="Update_VariabilidadBiologica" data-field="analito" data-reference="{{ $variabilidad_biologica->id_variabilidad_biologica }}" data-action_save="true">Guardar cambios (Enter)</a>
                        <a class="dropdown-item btnEvent"data-event="click" data-route="Update_VariabilidadBiologica" data-field="analito" data-reference="{{ $variabilidad_biologica->id_variabilidad_biologica }}" data-action_save="false">Cancelar (Esc)</a>
                    </div>
                </div>

                <select name="analito" class="form-control analito" data-isselect2='true'>
                    <option value="">Seleccione un analito...</option>
                    @foreach($analitos as $analito)
                        <option value="{{ $analito->id_analito }}">{{ $analito->nom_analito }} | {{ $analito->nom_matriz }}</option>
                    @endforeach
                </select>

                <div class="invalid-feedback text-right contMessage_analito"></div>
            </div>
        </div>
        
    </form>
    @break


    @case("fuente_etmp")
    <form class="formEvent form-row" data-event="submit&&&keyup" data-route="Update_VariabilidadBiologica&&&Update_VariabilidadBiologica" data-field="fuente_etmp&&&fuente_etmp" data-action_save="true&&&true" data-reference="{{ $variabilidad_biologica->id_variabilidad_biologica }}&&&{{ $variabilidad_biologica->id_variabilidad_biologica }}">  
        
        <div class="col">
            <div class="input-group min-width-input">
                <div class="input-group-prepend">
                    <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item btnEvent" data-event="click" data-route="Update_VariabilidadBiologica" data-field="fuente_etmp" data-reference="{{ $variabilidad_biologica->id_variabilidad_biologica }}" data-action_save="true">Guardar cambios (Enter)</a>
                        <a class="dropdown-item btnEvent"data-event="click" data-route="Update_VariabilidadBiologica" data-field="fuente_etmp" data-reference="{{ $variabilidad_biologica->id_variabilidad_biologica }}" data-action_save="false">Cancelar (Esc)</a>
                    </div>
                </div>

                <select name="fuente_etmp" class="form-control fuente_etmp" data-isselect2='true'>
                    <option value="">Seleccione una fuente de APS...</option>
                    @foreach($fuentesETMP as $fuente_etmp)
                        <option value="{{ $fuente_etmp->id_fuente_etmp }}">{{ $fuente_etmp->nom_fuente_etmp }}</option>
                    @endforeach
                </select>

                <div class="invalid-feedback text-right contMessage_fuente_etmp"></div>
            </div>
        </div>
        
    </form>
    @break


    @case("valor_limite")
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_VariabilidadBiologica&&&Update_VariabilidadBiologica" data-field="valor_limite&&&valor_limite" data-action_save="true&&&true" data-reference="{{ $variabilidad_biologica->id_variabilidad_biologica }}&&&{{ $variabilidad_biologica->id_variabilidad_biologica }}">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_VariabilidadBiologica" data-field="valor_limite" data-reference="{{ $variabilidad_biologica->id_variabilidad_biologica }}" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_VariabilidadBiologica" data-field="valor_limite" data-reference="{{ $variabilidad_biologica->id_variabilidad_biologica }}" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="valor_limite" class="form-control valor_limite" value="{{ $variabilidad_biologica->valor_limite }}">

            <div class="invalid-feedback text-right contMessage_valor_limite"></div>
        </div>
    </form>
    @break


    @case("sesgo_mp")
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_VariabilidadBiologica&&&Update_VariabilidadBiologica" data-field="sesgo_mp&&&sesgo_mp" data-action_save="true&&&true" data-reference="{{ $variabilidad_biologica->id_variabilidad_biologica }}&&&{{ $variabilidad_biologica->id_variabilidad_biologica }}">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_VariabilidadBiologica" data-field="sesgo_mp" data-reference="{{ $variabilidad_biologica->id_variabilidad_biologica }}" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_VariabilidadBiologica" data-field="sesgo_mp" data-reference="{{ $variabilidad_biologica->id_variabilidad_biologica }}" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="sesgo_mp" class="form-control sesgo_mp" value="{{ $variabilidad_biologica->sesgo_mp }}">

            <div class="invalid-feedback text-right contMessage_sesgo_mp"></div>
        </div>
    </form>
    @break


    @case("cv_mp")
    <form class="formEvent" data-event="submit&&&keyup" data-route="Update_VariabilidadBiologica&&&Update_VariabilidadBiologica" data-field="cv_mp&&&cv_mp" data-action_save="true&&&true" data-reference="{{ $variabilidad_biologica->id_variabilidad_biologica }}&&&{{ $variabilidad_biologica->id_variabilidad_biologica }}">  
        <div class="input-group min-width-input">
            <div class="input-group-prepend">
                <button class="btn btn-primary btn-sm dropdown-toggle m-0 shadow-none pl-2 pr-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle me-2 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item btnEvent" data-event="click" data-route="Update_VariabilidadBiologica" data-field="cv_mp" data-reference="{{ $variabilidad_biologica->id_variabilidad_biologica }}" data-action_save="true">Guardar cambios (Enter)</a>
                    <a class="dropdown-item btnEvent"data-event="click" data-route="Update_VariabilidadBiologica" data-field="cv_mp" data-reference="{{ $variabilidad_biologica->id_variabilidad_biologica }}" data-action_save="false">Cancelar (Esc)</a>
                </div>
            </div>

            <input type="text" name="cv_mp" class="form-control cv_mp" value="{{ $variabilidad_biologica->cv_mp }}">

            <div class="invalid-feedback text-right contMessage_cv_mp"></div>
        </div>
    </form>
    @break

@endswitch