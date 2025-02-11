<div class="row SeeSectionPrueba m-0 mt-4">

    <div class="col-lg-4">
        <div class="card shadow mb-3 bg-transparent shadow shadow-sm border">
            <div class="card-header card-header-per">
                <h6 class="m-0 font-weight-bold text-primary">Registro de Prueba de sensibilidad</h6>
            </div>
            <div class="card-body">
                @include("prueba.pruebaCreate")
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card shadow mb-4 bg-transparent shadow shadow-sm border">
            <div class="card-header card-header-per">
                <h6 class="m-0 font-weight-bold text-primary">
                    Lista de pruebas de sensibilidad
                </h6>
            </div>
            <div class="card-body">
                <div class="Cont_Table_Prueba overflow-auto">
                    @include("prueba.pruebaIndex")
                </div>
            </div>
        </div>
    </div>
</div>