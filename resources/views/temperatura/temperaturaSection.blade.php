<div class="row SeeSectionTemperatura m-0 mt-4">

    <div class="col-lg-4">
        <div class="card shadow mb-3 bg-transparent shadow shadow-sm border">
            <div class="card-header card-header-per">
                <h6 class="m-0 font-weight-bold text-primary">Registro de temperaturas</h6>
            </div>
            <div class="card-body">
                @include("temperatura.temperaturaCreate")
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card shadow mb-4 bg-transparent shadow shadow-sm border">
            <div class="card-header card-header-per">
                <h6 class="m-0 font-weight-bold text-primary">
                    Lista de temperaturas
                </h6>
            </div>
            <div class="card-body">
                <div class="Cont_Table_Temperatura overflow-auto">
                    @include("temperatura.temperaturaIndex")
                </div>
            </div>
        </div>
    </div>
</div>