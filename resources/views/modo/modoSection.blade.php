<div class="row {{ $nomSection }} m-0 mt-4">

    <div class="col-lg-4">

        <div class="card shadow">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Registro de modo</h6>
            </div>
            <div class="card-body">
                @include("modo.modoCreate")
            </div>
        </div>
    </div>

    <div class="col-lg-8">

        <div class="card shadow mb-4">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">
                    Lista de modos
                    <span class="btnEvent float-right" data-route="SeeIndex_Modo" data-event="click" data-tables_liged="Modo">
                        <i class="fas fa-sync"></i>
                    </span>
                </h6>
            </div>
            <div class="card-body">
                <div class="Cont_Table_Modo overflow-auto">
                    @include("modo.modoIndex")
                </div>
            </div>
        </div>

        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Acciones relacionadas</h6>
            </div>
            <div class="card-body">
                <a
                    href="#" class="btn btn-secondary btn-sm btn-icon-split btnEvent"
                    data-event="click" data-route="SeeSection_Analito"
                >
                    <span class="icon text-dark-100">
                        <i class="fas fa-external-link-alt"></i>
                    </span>
                    <span class="text">Gestión de analitos</span>
                </a>
            </div>
        </div>

    </div>
</div>
