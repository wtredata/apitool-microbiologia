<div class="row SeeSectionBienvenido">

    <div class="view">

        <div class="cont-img-presentacion-bienvenido d-flex">
            <!--<img src="{{ asset('img/banner-APITool.jpg') }}" alt="banner de presentación Quik - API Tool" class='img-presentacion-bienvenido d-none d-sm-none d-md-block'>
            <img src="{{ asset('img/logo-APITool.png') }}" alt="banner de presentación Quik - API Tool" class='img-presentacion-bienvenido d-block d-sm-block d-md-none'>-->

                <div class="p-2">
                    <img src="{{ asset('img/banner-APITool.jpg') }}" alt="banner de presentación Quik - API Tool"
                         class='d-block w-100 overflow-hidden img-presentacion-bienvenido '>
                </div>
        </div>

        <div class="rgba-blue-light d-flex justify-content-center align-items-center contenido-bien-per px-3">
            <div class="container">

                <div class="row d-flex h-100 justify-content-center align-items-center wow fadeIn animated"
                    style="visibility: visible; animation-name: fadeIn;">

                    <div class="col-md-6 mb-4 text-center text-md-left pr-4 p-md-2">

                        <h1 class="display-6 text-center font-weight-bold">¡Hola, {{ explode(" ", Auth::user()->nombress)[0] }}!
                        </h1>

                        <hr class="hr-dark">

                        <p class="text-center">Una de nuestras características más importantes es el "diseño WEB
                            adaptable", esto permite que se pueda acceder a las diferentes funcionalidades del software
                            desde diferentes variedades de dispositivos como tabletas, teléfonos, portátiles y PC.</p>
                        <p class='mb-4 text-center'><strong>Ahora no te limites sólo a una computadora!</strong></p>

                        <div class="cont text-center">
                            <a href="#" class="btn btn-primary waves-effect waves-light btnEvent" data-event='click'
                                data-route='SeeSection_Resultado' data-temporal_off="true" data-menu_item_select='#li_sidebar_resultados'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-grid align-middle mr-2">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg> Resultados
                            </a>

                            <a href="#" class="btn btn-primary waves-effect waves-light btnEvent" data-event="click" data-route="SeeSection_GraficaIntegrada" data-temporal_off='true' data-menu_item_select='#li_sidebar_grafica'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-activity align-middle mr-2">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg> Gráficos
                            </a>
                        </div>

                    </div>

                    <div class="col-md-6 mb-4">

                        <img src="{{ asset('img/responsive-design.jpg') }}" alt="Gráfico de presentación" width='300'
                            class="img-fluid d-none d-md-block m-auto image-rounded-2">

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
