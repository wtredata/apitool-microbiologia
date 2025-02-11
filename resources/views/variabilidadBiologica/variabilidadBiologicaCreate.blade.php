<form class="form formEvent formCreate" data-route="Store_VariabilidadBiologica" data-event="submit" data-tables_liged="VariabilidadBiologica" data-objjson='{"id": "variabilidad_biologica_analito_reference"}'>
    
    @csrf

    <div class="form-group">
        <label for="analito">Analito:</label>
        <div class="row">
            <div class="col">
                <select name="analito" class="form-control analito variabilidadBiologicaAnalitoAssigned btnEvent notClear" id='variabilidad_biologica_analito_reference' data-event="change" data-route="SeeIndex_VariabilidadBiologica" data-tables_liged="VariabilidadBiologica" data-objjson='{"id": "variabilidad_biologica_analito_reference"}'>
                    @foreach($analitosList as $analito)
                        <option value="{{ $analito->id_analito }}">{{ $analito->nom_analito }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="contMessage contMessage_analito"></div>
    </div>


    <div class="form-group">
        <label for="fuente_etmp">Fuente APS:</label>
        <div class="row">
            <div class="col">
                <select name="fuente_etmp" class="form-control fuente_etmp variabilidadBiologicaFuenteETMPAssigned notClear">
                    @foreach($fuenteETMPList as $fuente_etmp)
                        <option value="{{ $fuente_etmp->id_fuente_etmp }}">{{ $fuente_etmp->nom_fuente_etmp }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="contMessage contMessage_fuente_etmp"></div>
    </div>
    

    <div class="form-group">
        <label for="valor_limite">APS%</label>
        <input type="text" placeholder="Ingrese el valor límite de la variabilidad biológica" class="form-control valor_limite" name="valor_limite">
        <small class="form-text text-muted">Asegúrese de evitar por completo, duplicidad en la información</small>

        <div class="alert alert-primary mt-2" role="alert">							
            <div class="alert-message px-3 py-2">
                <small>
                    <strong>Nota: </strong> Si especifica el APS no serán tenidos en cuenta el CVmp y el SESGOmp
                </small>
            </div>
        </div>

        <div class="contMessage contMessage_valor_limite"></div>
    </div>


    <div class="form-group">
        <label for="sesgo_mp">Sesgo<sub>mp</sub></label>
        <input type="text" placeholder="Ingrese el valor límite de la variabilidad biológica" class="form-control sesgo_mp" name="sesgo_mp">
        <div class="contMessage contMessage_sesgo_mp"></div>
    </div>


    <div class="form-group">
        <label for="cv_mp">CV<sub>mp</sub></label>
        <input type="text" placeholder="Ingrese el valor límite de la variabilidad biológica" class="form-control cv_mp" name="cv_mp">
        <div class="contMessage contMessage_cv_mp"></div>
    </div>

    
    <button type="submit" class="btn btn-primary btn-sm ml-0">Guardar</button>
</form>