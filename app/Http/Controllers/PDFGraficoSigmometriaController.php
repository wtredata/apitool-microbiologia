<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ControlLaboratorioController;
use App\Http\Controllers\LaboratorioController;

use App\Libraries\fpdf\EstructuraPDFGraficaSigmometria;

class PDFGraficoSigmometriaController extends Controller {

    private $carpetaTemp;
    public $image_sigmometria;
    private $req;
    private $idReporte;

    public function __construct() {
        $this->middleware('auth');
        $this->carpetaTemp = public_path().'/reports_temp/';
        //$this->carpetaTemp = '/home/panequik/public_html/iqc2v4/reports_temp/';
        $this->idReporte = uniqid();
    }


    public function setAttribute($atributo, $valor){
        $this->$atributo = $valor;
    }


    public function setNomImage(){
        $this->image_sigmometria = $this->getUrlImg();
    }


    public function getUrlImg(){
        return $this->carpetaTemp . uniqid() . ".png";
    }


    public function saveImage(){
        file_put_contents(
            $this->image_sigmometria,
            $this->procesarImg($this->req->grafico)
        );
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

        $pdf = new EstructuraPDFGraficaSigmometria('P','mm','letter');
        $pdf->SetFont("Arial", "", 4.5);
        $pdf->CreateDocument($control_laboratorio, $laboratorio, $fecha_inicial, $fecha_final, $this->image_sigmometria);
        $pdf->Close();
        $pdf->Output("F", $this->carpetaTemp . $this->idReporte . ".pdf");
    }


    public function deleteTempImage(){
        unlink($this->image_sigmometria);
    }


    public function generarInformeFinal(Request $req) {
        $this->setAttribute("req", $req);
        $this->setNomImage();
        $this->saveImage();
        $this->generarEstructuraPDF();
        $this->deleteTempImage();
        return $this->idReporte;
    }


    public function seeReport(Request $req){
        return view("reporteGraficaSigmometria.contenedorReporteFinal")
            ->with("id_reporte", $req->referencia);
    }


    public function eliminarInforme(Request $req){
        unlink($this->carpetaTemp . $req->id . ".pdf");
    }
}
