<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Database\Factories\InformeControlCepa\PDFFactory;
use Exception;
use Illuminate\Support\Facades\Log;

class PDFController extends Controller
{
    public function generarPDF($loteId,$section){
        try{
            $factory = new PDFFactory();
            $item = $factory->obtenerItem($section);
            return $item->generar($loteId);
        }catch(Exception $e){
            Log::error('Error al cargar el archivo PDF: '.$e->getMessage());
            throw new Exception('Error al cargar el archivo PDF');
        }
    }
}
