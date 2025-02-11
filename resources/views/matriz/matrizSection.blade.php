<div class="row SeeSectionMatriz m-0 mt-4">

    <div class="col-lg-4">
        <div class="card shadow mb-3 bg-transparent shadow shadow-sm border">
            <div class="card-header card-header-per">
                <h6 class="m-0 font-weight-bold text-primary">Registro de Matriz</h6>
            </div>
            <div class="card-body">
                @include("matriz.matrizCreate")
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card shadow mb-4 bg-transparent shadow shadow-sm border">
            <div class="card-header card-header-per">
                <h6 class="m-0 font-weight-bold text-primary">
                    Lista de matrices
                </h6>
            </div>
            <div class="card-body">
                <div class="Cont_Table_Matriz overflow-auto">
                    @include("matriz.matrizIndex")
                </div>
            </div>
        </div>
    </div>
</div>