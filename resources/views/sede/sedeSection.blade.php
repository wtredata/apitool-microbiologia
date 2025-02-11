<div class="row SeeSectionSede m-0 mt-4">

    <div class="col-lg-4">
        <div class="card shadow mb-3 bg-transparent shadow shadow-sm border">
            <div class="card-header card-header-per">
                <h6 class="m-0 font-weight-bold text-primary">Registro de sede</h6>
            </div>
            <div class="card-body">
                @include("sede.sedeCreate")
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card shadow mb-4 bg-transparent shadow shadow-sm border">
            <div class="card-header card-header-per">
                <h6 class="m-0 font-weight-bold text-primary">
                    Lista de sedes
                </h6>
            </div>
            <div class="card-body">
                <div class="Cont_Table_Sede overflow-auto">
                    @include("sede.sedeIndex")
                </div>
            </div>
        </div>
    </div>
</div>