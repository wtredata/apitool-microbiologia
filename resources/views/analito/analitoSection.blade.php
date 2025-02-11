<div class="row SeeSectionAnalito m-0 mt-4">

    <div class="col-lg-4">
        <div class="card shadow mb-3 bg-transparent shadow shadow-sm border">
            <div class="card-header card-header-per">
                <h6 class="m-0 font-weight-bold text-primary">Registro de analito</h6>
            </div>
            <div class="card-body">
                @include("analito.analitoCreate")
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card shadow mb-4 bg-transparent shadow shadow-sm border">
            <div class="card-header card-header-per">
                <h6 class="m-0 font-weight-bold text-primary">Lista de analitos</h6>
            </div>
            <div class="card-body">
                <div class="Cont_Table_Analito overflow-auto">
                    @include("analito.analitoIndex")
                </div>
            </div>
        </div>
    </div>
</div>