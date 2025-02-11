@foreach($data_by_mesurando as $i)


  <div class="row px-3 mt-3">
    <div class="col-12">
      <div class='pre-contenedor-graficos-sigmometria'>
        <h3>Detalle Mesurandos</h3>
      </div>
      <div class="contenedor-detalle-sigmometria overflow-auto">
        <div class="cont-tabla-analitos overflow-auto" style='max-height:630px;'>
          <table class='table table-sm table-bordered text-center table-info-siget'>
            <thead style='background-color: #e8ecef'>
            <tr style="width: 100%">
              <td style='width: 17.75%' colspan='27' class='font-weight-bold'>Constante
                Z: {{$i["constante_z"]}}</td>
            </tr>
            <tr style="width: 100%">
              <td style='width: 3%' class='font-weight-bold'>1</td>
              <td style='width: 10%' class='font-weight-bold'>2</td>
              <td style='width: 8%' class='font-weight-bold'>3</td>
              <td style='width: 8%' class='font-weight-bold'>4</td>
              <td style='width: 4.4375%' class='font-weight-bold'>5</td>
              <td style='width: 4.4375%' class='font-weight-bold'>6</td>
              <td style='width: 4.4375%' class='font-weight-bold'>7</td>
              <td style='width: 4.4375%' class='font-weight-bold'>8</td>
              <td style='width: 4.4375%' class='font-weight-bold'>9</td>
              <td style='width: 4.4375%' class='font-weight-bold'>10</td>
              <td style='width: 4.4375%' class='font-weight-bold'>11</td>
              <td style='width: 4.4375%' class='font-weight-bold'>12</td>
              <td style='width: 4.4375%' class='font-weight-bold'>13</td>
              <td style='width: 4.4375%' class='font-weight-bold'>14</td>
              <td style='width: 4.4375%' class='font-weight-bold'>15</td>
              <td style='width: 4.4375%' class='font-weight-bold'>16</td>
              <td style='width: 4.4375%' class='font-weight-bold'>17</td>
              <td style='width: 4.4375%' class='font-weight-bold'>18</td>
              <td style='width: 4.4375%' class='font-weight-bold'>19</td>
              <td style='width: 4.4375%' class='font-weight-bold'>20</td>
              <td style='width: 4.4375%' class='font-weight-bold'>21</td>
              <td style='width: 4.4375%' class='font-weight-bold'>22</td>
                <td style='width: 4.4375%' class='font-weight-bold'>23</td>
                <td style='width: 4.4375%' class='font-weight-bold'>24</td>
                <td style='width: 4.4375%' class='font-weight-bold'>25</td>
                <td style='width: 4.4375%' class='font-weight-bold'>26</td>
                <td style='width: 4.4375%' class='font-weight-bold'>27</td>
            </tr>
            <tr style="width: 100%">
              <td style='width: 3%' class='font-weight-bold'>#</td>
              <td style='width: 10%' class='font-weight-bold'>Sede</td>
              <td style='width: 8%' class='font-weight-bold'>Ciudad</td>
              <td style='width: 8%' class='font-weight-bold'>Analizador</td>
              <td style='width: 4.4375%' class='font-weight-bold'># Lab</td>
              <td style='width: 4.4375%' class='font-weight-bold'>Lote</td>
              <td style='width: 4.4375%' class='font-weight-bold'>Fecha de caducidad analito</td>
              <td style='width: 4.4375%' class='font-weight-bold'>Analito</td>
              <td style='width: 4.4375%' class='font-weight-bold'>Nivel</td>
              <td style='width: 4.4375%' class='font-weight-bold'>Unidad</td>
              <td style='width: 4.4375%' class='font-weight-bold'>APS</td>
              <td style='width: 4.4375%' class='font-weight-bold'>CV<sub>mp</sub></td>
              <td style='width: 4.4375%' class='font-weight-bold'>SESGO<sub>mp</sub></td>
              <td style='width: 4.4375%' class='font-weight-bold'>Valor DIANA</td>
              <td style='width: 4.4375%' class='font-weight-bold'>Sesgo %</td>
              <td style='width: 4.4375%' class='font-weight-bold'>Sesgo</td>
              <td style='width: 4.4375%' class='font-weight-bold'>AP lab</td>
              <td style='width: 4.4375%' class='font-weight-bold'>Media</td>
              <td style='width: 4.4375%' class='font-weight-bold'>CV</td>
              <td style='width: 4.4375%' class='font-weight-bold'>N</td>
                <td style='width: 4.4375%' class='font-weight-bold'>N-Per3</td>
              <td style='width: 4.4375%' class='font-weight-bold'>Per3</td>
              <td style='width: 4.4375%' class='font-weight-bold'>DE</td>
              <td style='width: 4.4375%' class='font-weight-bold'>CVR</td>
              <td style='width: 4.4375%' class='font-weight-bold'>SR</td>
              <td style='width: 4.4375%' class='font-weight-bold'>IET / API</td>
              <td style='width: 4.4375%' class='font-weight-bold'>σ</td>
            </tr>
            </thead>
            @foreach($i["valores_estadisticos"] as $data)
              <tbody>
              <tr style="width: 100%">
                <td colspan='1'>{{$data["indice"]}}</td>
                <td colspan='1'>{{$data["sede"]}}</td>
                <td colspan='1'>{{$data["ciudad"]}}</td>
                <td colspan='1'>{{$data["analizador"]}}</td>
                <td colspan='1'>{{$data["num_lab"]}}</td>
                <td colspan='1'>{{$data["lote"]}}</td>
                <td colspan='1'>{{$data["fecha_caducidad"]}}</td>
                <td colspan='1'>{{$data["analito"]}}</td>
                <td colspan='1'>{{$data["nivel"]}}</td>
                <td colspan='1'>{{$data["unidades"]}}</td>
                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["valor_limite"], 2)}}</td>
                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["cv_mp"],2)}}</td>
                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["sesgo_mp"], 2)}}</td>
                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["diana"], 2)}}</td>
                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["sesgo_por"], 2)}}</td>
                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["sesgo"], 2)}}</td>
                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["ap_lab"], 2)}}</td>
                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["media"], 2)}}</td>
                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["cv"], 2)}}</td>
                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': $data["puntos_a"]}}</td>
                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': $data["nper3"] }}</td>
                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': $data["per3"] }}</td>
                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["de"], 2)}}</td>
                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["cvr"], 2)}}</td>
                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["sr"], 2)}}</td>
                <td colspan='1'>{{$data["valor_limite"] == null ? 'N/A': round($data["iet"], 2)}}</td>
                @if($data["valor_limite"] == null)
                <td colspan='1'>N/A</td>
                @else
                  @if(round($data["sigma"], 2) >= 5)
                    <td colspan='1'
                        style="background-color: #C2FFCEFF;">{{round($data["sigma"], 2)}}</td>
                  @elseif (3 <= round($data["sigma"], 2) && round($data["sigma"], 2) < 5)
                    <td colspan='1'
                        style="background-color: #FFF1C2FF;">{{round($data["sigma"], 2)}}</td>
                  @elseif ($i["constante_z"] <= round($data["sigma"], 2) && round($data["sigma"], 2) < 3 )
                    <td colspan='1'
                        style="background-color: #C2D3FFFF;">{{round($data["sigma"], 2)}}</td>
                  @elseif ($i["constante_z"] > round($data["sigma"], 2))
                    <td colspan='1'
                        style="background-color: #FFC2C2FF;">{{round($data["sigma"], 2)}}</td>
                  @endif
                @endif
              </tr>
              </tbody>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>

@endforeach

