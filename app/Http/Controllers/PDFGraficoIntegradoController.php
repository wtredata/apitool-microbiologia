<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ControlLaboratorioController;
use App\Http\Controllers\LaboratorioController;

use App\Libraries\fpdf\EstructuraPDFGraficaIntegrada;
use App\Libraries\fpdf\EstructuraPDFCualitativo;

class PDFGraficoIntegradoController extends Controller {

    private $carpetaTemp;
    public $urlBases64;
    private $req;
    private $idReporte;

    public function __construct() {
        $this->middleware('auth');
        $this->carpetaTemp = public_path().'/reports_temp/';
        //$this->carpetaTemp = '/home/panequik/public_html/iqc2v4/reports_temp/'; // Remoto
        // $this->carpetaTemp = 'c://xamppNuevo/htdocs/iqc2v4/reports_temp/'; // Local
        $this->idReporte = uniqid();
        $this->urlBases64 = array();
    }


    public function setAttribute($atributo, $valor){
        $this->$atributo = $valor;
    }


    public function setNomsImages(){
        foreach($this->req->bases64 as $base64){
            $this->urlBases64[$base64["id"]] = $this->getUrlImg();
        }
    }


    public function getUrlImg(){
        return $this->carpetaTemp . uniqid() . ".png";
    }


    public function saveImages(){
        foreach($this->req->bases64 as $base64){
            file_put_contents(
                $this->urlBases64[$base64["id"]],
                $this->procesarImg($base64["val"])
            );
        }
    }


    public function procesarImg($base64){
        $base_to_php = explode(',', $base64);
        $data = base64_decode($base_to_php[1]);
        return $data;
    }


    public function generarEstructuraPDF(){
        $control_laboratorio = ControlLaboratorioController::listItem($this->req->id);
        $laboratorio = LaboratorioController::listItem($control_laboratorio->laboratorio_id_laboratorio);
        $fecha_inicial = $this->req->fecha_inicial;
        $fecha_final = $this->req->fecha_final;

        // $instResultadoEP15 = new ResultadoEP15Controller();
        // $obj_json = $instResultadoEP15->valoresEstadisticosEP15($this->req->id);

        $pdf = new EstructuraPDFGraficaIntegrada('P','mm','letter');
        $pdf->SetFont("Arial", "", 4.5);
        $pdf->CreateDocument($control_laboratorio, $laboratorio, $fecha_inicial, $fecha_final, $this->urlBases64);
        $pdf->Close();
        $pdf->Output("F", $this->carpetaTemp . $this->idReporte . ".pdf");
    }

    public function generarEstructuraPDFCualitativo(){
        $control_laboratorio = ControlLaboratorioController::listItem($this->req->input('control_laboratorio'));
        $laboratorio = LaboratorioController::listItem($control_laboratorio->laboratorio_id_laboratorio);
        $all_information = json_decode($this->req->input('all_information'), true);
        $fecha_inicial = json_decode($this->req->input('fecha_inicial'), false);
        $fecha_final = json_decode($this->req->input('fecha_final'), false);

        $pdf = new EstructuraPDFCualitativo('P','mm','letter');
        $pdf->SetFont("Arial", "", 4.5);
        $pdf->allInformation($control_laboratorio, $laboratorio, $fecha_inicial, $fecha_final, $all_information);
        $pdf->Close();
        $pdf->Output("F", $this->carpetaTemp . $this->idReporte . ".pdf");
    }


    public function deleteTempImages(){
        foreach($this->req->bases64 as $base64){
            unlink($this->urlBases64[$base64["id"]]);
        }
    }


    public function generarInformeFinal(Request $req) {
        $this->setAttribute("req", $req);
        $this->setNomsImages();
        $this->saveImages();
        $this->generarEstructuraPDF();
        $this->deleteTempImages();
        return $this->idReporte;
    }


    public function generarInformeFinalCualitativo(Request $req) {
        $this->setAttribute("req", $req);
        $this->generarEstructuraPDFCualitativo();
        return $this->idReporte;
    }


    public function seeReport(Request $req){
        return view("reporteGraficasIntegradas.contenedorReporteFinal")
            ->with("id_reporte", $req->referencia);
    }


    public function seeReportCualitativo(Request $req){
        return view("reporteGraficasCualitativo.contenedorReporteFinalCualitativo")
            ->with("id_reporte", $req->referencia);
    }


    public function eliminarInforme(Request $req){
        unlink($this->carpetaTemp . $req->id . ".pdf");
    }
}
