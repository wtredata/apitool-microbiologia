<?php
namespace App\Http\Controllers;
use App\Helpers\FechaDinamica;
use App\Libraries\fpdf\EstructuraPDFGraficaSigmometria;
use App\Log;
use Barryvdh\DomPDF\Facade as PDF;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

/*include "app/Libraries/fpdf/fpdf.php";*/
class PDFAuditoriaController extends Controller
{
    private $fpdf;
    private $carpetaTemp;
    private $idReporte;
    public function __construct()
    {
        $this->carpetaTemp = public_path().'/reports_temp/';
        $this->idReporte = uniqid();
    }

    public function index(Request $req){
        /*return $this->createPDF($req);*/
        $laboratorio = $req->laboratorio;
        $acciones=explode(',', $req->accion);
        $fecha_inicial = $req->fecha_inicial;
        $fecha_final = $req->fecha_final;
        return view("auditoria.graficaAuditoria")
            ->with("laboratorio",$laboratorio)
            ->with("acciones",$acciones)
            ->with("fecha_inicial",$fecha_inicial)
            ->with("fecha_final",$fecha_final);
    }

    public function createPDF(Request $req)
    {
        $laboratorio = $req->laboratorio;
        $acciones=explode(',', $req->acciones);
        $fecha_inicial = $req->fecha_inicial;
        $fecha_final = $req->fecha_final;
//        dump($acciones, $fecha_inicial, $fecha_final);
        $historicos = AuditoriaController::list($laboratorio, $acciones, $fecha_inicial, $fecha_final);
        /*return view('auditoria.auditoriaPDFTemplate', compact('historicos'));*/
        $pdf = PDF::loadView('auditoria.auditoriaPDFTemplate', compact('historicos','laboratorio',"fecha_inicial","fecha_final"))->setPaper('a4', 'landscape');
//        return $pdf->download("pdf.pdf");
        return base64_encode($pdf->stream());
//        return $pdf->output("D","reporte.pdf",false);
//        return Response::make($pdf->download("Reporte.pdf"), 200, [
//            'Content-Type' => 'application/pdf',
//            'Content-Disposition' => 'inline; filename="'."reporte.pdf".'"'
//        ]);
//        return response()->streamDownload(function () use ($pdf) {
//            echo $pdf->output();
//        }, 'invoice.pdf');
    }
}
