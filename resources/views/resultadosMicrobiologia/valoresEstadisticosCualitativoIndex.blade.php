<form id="generarPdfForm" action="{{ route('GenerarPdfCualitativo') }}" method="POST" target="_blank">
    @csrf
    <button type="submit" data-route='graficaCualitativo' class="btn btn-primary">Generar PDF</button>
    <div style="display: none;">
            <textarea name="defecto_cualitativo" id="defecto_cualitativo">{{json_encode($defecto_cualitativo)}}</textarea>
            <textarea name="resultado" id="resultado">{{json_encode($resultado)}}</textarea>
            <textarea name="data" id="data">{{json_encode($data)}}</textarea>
            <textarea name="grafica2" id="grafica2">{{json_encode($grafica2)}}</textarea>
            <textarea name="control_laboratorio" id="control_laboratorio">{{json_encode($control_laboratorio)}}</textarea>
            <textarea name="laboratorio" id="laboratorio">{{json_encode($laboratorio)}}</textarea>
            <textarea name="fecha_inicial" id="fecha_inicial">{{json_encode($fecha_inicial)}}</textarea>
            <textarea name="fecha_final" id="fecha_final">{{json_encode($fecha_final)}}</textarea>
        </div>
</form>

@if (sizeof($resultado) == 0)
<div class="bg-white p-3 border">
    <h3>No se cumplen con los criterios para calcular el índice k</h3>
</div>
@else




<div class="bg-white p-3 border">
    <div id='contenedor-valores-estadisticos-cualitativo' class='m-0 p-0'>


        <table class="table table-sm table-striped table-hover tabla-resultados-cualitativo  text-center">
            <thead style="border-bottom: 3px solid rgba(39, 76, 135, 0.7) !important;">
                <tr>
                    <th></th>
                    @for($nivel=0; $nivel< sizeof($defecto_cualitativo); $nivel++) <th scope="col" class="font-weight-bold">{{$defecto_cualitativo[$nivel]}}</th>
                        @endfor
                        <th scope="col" class="font-weight-bold">Total</th>
                </tr>
            </thead>
            <tbody style="border-color: #dee2e6">
                @for($res=0; $res< sizeof($resultado); $res++) <tr>
                    <td style="border-color: #dee2e6">{{$defecto_cualitativo[$res]}}</td>
                    @for($nivel=0; $nivel< sizeof($resultado[$res]); $nivel++) <td style="border-color: #dee2e6">{{$resultado[$res][$nivel]}}</td>
                        @endfor
                        <td style="border-color: #dee2e6">
                            {{$data["fila"][$res]}}
                        </td>
                        </tr>
                        @endfor

                        <tr>
                            <td style="border-color: #dee2e6">Total</td>
                            @for($i=0; $i< sizeof($data["col"]); $i++) <td>{{$data["col"][$i]}}</td>
                                @endfor
                                <td style="border-color: #dee2e6"><b>{{$data["total"]}}</b></td>
                        </tr>
            </tbody>
        </table>
        <div>
        </div>

    </div>

</div>

<div class="observacion-numerica">
    <div class="numero">*</div>
    <div class="contenido">
        <div class="row">
            <div class="col-12">
                <div><span>Po</span> <span class="font-weight-bold small float-right text-dark shadow-none"> {{round($data["p0"], 3)}}
                    </span>
                </div>
                <div><span>Pe</span> <span class="font-weight-bold small float-right text-dark shadow-none"> {{round($data["pe"], 3)}}
                    </span>
                </div>
                <div><span>k</span> <span class="font-weight-bold small float-right text-dark shadow-none"> {{round($data["k"], 3)}} {{$data["message"]}}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 bg-white p-3 border">
    <div >
        @for ($i = 0; $i <  sizeof($grafica2); $i++)
            <div class="font-weight-bold text-center">Nivel {{$i+1}}</div>
            <div class="mt-1 mb-3 pb-1 pt-3 border-top border-bottom">
                @for ($j = 0; $j <  sizeof($grafica2[$i]); $j++)
                <div class="d-flex">
                    <div class="mr-3 font-weight-bold" style="font-size: 10px; width: 15%">
                        {{$grafica2[$i][$j]['key']}}
                    </div>
                    <div class="border d-flex" style="width: 80%">
                        @for ($k = 0; $k <  31; $k++)

                            @if ($j == 0 && $grafica2[$i][$j]['value'] && isset($grafica2[$i][$j]['value'][$k]) && $grafica2[$i][$j]['value'][$k] === 1)
                                <div class="bg-siget-azul border-right" style="width: 3.22580645161%">
                                    
                                </div>
                            @elseif ($j == 1 && $grafica2[$i][$j]['value'] && isset($grafica2[$i][$j]['value'][$k]) && $grafica2[$i][$j]['value'][$k] === 1)
                                <div class="bg-siget-gray border-right" style="width: 3.22580645161%">
                                    
                                </div>
                            @elseif ($j == 2 && $grafica2[$i][$j]['value'] && isset($grafica2[$i][$j]['value'][$k]) && $grafica2[$i][$j]['value'][$k] === 1)
                                <div class="bg-siget-black border-right" style="width: 3.22580645161%">
                                    
                                </div>
                            @elseif ($j == 3 && $grafica2[$i][$j]['value'] && isset($grafica2[$i][$j]['value'][$k]) && $grafica2[$i][$j]['value'][$k] === 1)
                                <div class="bg-siget-amarillo border-right" style="width: 3.22580645161%">
                                    
                                </div>
                            @elseif ($j == 4 && $grafica2[$i][$j]['value'] && isset($grafica2[$i][$j]['value'][$k]) && $grafica2[$i][$j]['value'][$k] === 1)
                                <div class="bg-siget-verde border-right" style="width: 3.22580645161%">
                                    
                                </div>
                            @elseif ($j == 5 && $grafica2[$i][$j]['value'] && isset($grafica2[$i][$j]['value'][$k]) && $grafica2[$i][$j]['value'][$k] === 1)
                                <div class="bg-siget-rojo border-right" style="width: 3.22580645161%">
                                    
                                </div>
                            @elseif ($j > 5 && $grafica2[$i][$j]['value'] && isset($grafica2[$i][$j]['value'][$k]) && $grafica2[$i][$j]['value'][$k] === 1)
                                <div class="bg-siget-otro border-right" style="width: 3.22580645161%">
                                    
                                </div>
                            @else
                                <div class="border-right" style="width: 3.22580645161%">
                                    
                                </div>
                            @endif
                        @endfor
                    </div>

                </div>
                @endfor
                <div class="d-flex" >
                    <div class="mr-3" style="width: 15%">

                    </div>
                    <div class="d-flex" style="font-size: 12px; width:80%">
                        @for ($k = 0; $k <  31; $k++)
                            <div class="text-center font-weight-bold font-font-smaller" style="width: 3.22580645161%">
                            {{$k+1}}
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        @endfor
    </div>



</div>

@endif

<script type="application/javascript">
    // graficas = {!! json_encode($grafica, JSON_HEX_TAG) !!};
    graficas2 = {!! json_encode($grafica2, JSON_HEX_TAG) !!};
    console.log(graficas2);

  </script>