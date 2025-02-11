<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\ControlLaboratorioController;
use App\Http\Controllers\AnalitoLaboratorioController;
use App\Http\Controllers\SerieController;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
//use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Requests
use Illuminate\Http\Request;

class TreeController extends Controller
{

    private $arrayTree;

    public function __construct()
    {
        $this->arrayTree = [];
    }

    public function getTreeConfig(Request $req)
    {

        switch ($req->tipo_subitem) {
            case "": // Laboratorio

                $laboratorios = LaboratorioController::listByUsuario();

                foreach ($laboratorios as $laboratorio) {

                    if ($laboratorio->principal == 1) { // Si es un numero de laboratorio principal
                        array_push(
                            $this->arrayTree,
                            [
                                "title" => "<b>" . $laboratorio->num_laboratorio . " - " . $laboratorio->nom_laboratorio . "</b>",
                                "tooltip" => $laboratorio->num_laboratorio . " - " . $laboratorio->nom_laboratorio,
                                "icon" => "icon-laboratorio",
                                "lazy" => "true",
                                "tipo_nodo" => "laboratorio",
                                "tipo_subitem" => "lote",
                                "id_reference" => $laboratorio->id_laboratorio
                            ]
                        );
                    } else {
                        array_push(
                            $this->arrayTree,
                            [
                                "title" => $laboratorio->num_laboratorio . " - " . $laboratorio->nom_laboratorio,
                                "tooltip" => $laboratorio->num_laboratorio . " - " . $laboratorio->nom_laboratorio,
                                "icon" => "icon-laboratorio",
                                "lazy" => "true",
                                "tipo_nodo" => "laboratorio",
                                "tipo_subitem" => "lote",
                                "id_reference" => $laboratorio->id_laboratorio
                            ]
                        );
                    }
                }

                break;
            case "lote":

                $controles_lab = ControlLaboratorioController::listByLaboratorio($req->id_reference);

                foreach ($controles_lab as $control_lab) {
                    array_push(
                        $this->arrayTree,
                        [
                            "title" => $control_lab->cod_lote . " - " . $control_lab->nom_control . " -  " . $control_lab->fecha_vencimiento,
                            "tooltip" => $control_lab->cod_lote . " - " . $control_lab->nom_control . " -  " . $control_lab->fecha_vencimiento,
                            "icon" => "icon-lote",
                            "lazy" => "true",
                            "tipo_nodo" => "lote",
                            "tipo_subitem" => "analito_cuantitativo",
                            "id_reference" => $control_lab->id_control_laboratorio
                        ]
                    );
                }

                break;
            case "analito_cuantitativo":

                $analitos_lab = AnalitoLaboratorioController::listByControlLaboratorio($req->id_reference);

                foreach ($analitos_lab as $analito_lab) {
                    array_push(
                        $this->arrayTree,
                        [
                            "title" => $analito_lab->nom_analito . " | " . $analito_lab->nom_analizador . " | " . $analito_lab->nom_metodo . " | " . $analito_lab->nom_reactivo . " | " . $analito_lab->generacion_reactivo  . " | " . $analito_lab->nom_unidad  . " | " . $analito_lab->nom_temperatura,
                            "tooltip" => $analito_lab->nom_analito . " | " . $analito_lab->nom_analizador . " | " . $analito_lab->nom_metodo . " | " . $analito_lab->nom_reactivo . " | " . $analito_lab->generacion_reactivo  . " | " . $analito_lab->nom_unidad  . " | " . $analito_lab->nom_temperatura,
                            "icon" => "icon-analito",
                            "tipo_nodo" => "analito_cuantitativo",
                            "num_niveles" => $analito_lab->num_niveles,
                            "id_reference" => $analito_lab->id_analito_lab
                        ]
                    );
                }

                break;
        }

        return response($this->arrayTree, 200);
    }

    public function downloadTree()
    {
        $arrayTreeDown = [];
        $laboratorios = LaboratorioController::listByUsuario();

        foreach ($laboratorios as $laboratorio) {

            
                $controles_lab = ControlLaboratorioController::listByLaboratorio($laboratorio->id_laboratorio);

                foreach ($controles_lab as $control_lab) {
                    $analitos_lab = AnalitoLaboratorioController::listByControlLaboratorio($control_lab->id_control_laboratorio);

                    foreach ($analitos_lab as $analito_lab) {
                        array_push(
                            $arrayTreeDown,
                            [
                                "laboratory" => $laboratorio->num_laboratorio . " - " . $laboratorio->nom_laboratorio,
                                "lote" => $control_lab->cod_lote . " - " . $control_lab->nom_control . " -  " . $control_lab->fecha_vencimiento,
                                "title" => $analito_lab->nom_analito . " | " . $analito_lab->nom_analizador . " | " . $analito_lab->nom_metodo . " | " . $analito_lab->nom_reactivo . " | " . $analito_lab->generacion_reactivo  . " | " . $analito_lab->nom_unidad  . " | " . $analito_lab->nom_temperatura,
                                "num_niveles" => $analito_lab->num_niveles,
                                "id_reference" => $analito_lab->id_analito_lab
                            ]
                        );
                    }
                }
        }

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Laboratorio');
        $sheet->setCellValue('B1', 'Lote');
        $sheet->setCellValue('C1', 'Analito');
        $sheet->setCellValue('D1', 'Numero de niveles');
        $sheet->setCellValue('E1', 'ID Analito');
        $row = 2;
        foreach ($arrayTreeDown as $data) {
            $column = 'A';
            foreach ($data as $value) {
                $sheet->setCellValue($column . $row, $value);
                $column++;
            }
            $row++;
        }
        //$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        //$writer->save('archivo.xlsx');

        // Crear instancia de Writer y generar el contenido del archivo
        $writer = new Xlsx($spreadsheet);
        $writer->setIncludeCharts(true);

        // Configurar las cabeceras para la descarga
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Lista_analitos.xlsx"');
        header('Cache-Control: max-age=0');

        // Salida del archivo al cliente
        $writer->save('php://output');
        exit;
    }
    public function downloadCommit(Request $req)
    {

        $analito_lab = $req->analito_lab;
        $laboratorio = $req->info_laboratorio;
        $matriz = $req->info_matriz;
        $control = $req->info_control;
        $lote = $req->info_lote;
        $fecha_caducidad = $req->info_fecha_caducidad;
        $analito = $req->info_analito;
        $analizador = $req->info_analizador;
        $unidades = $req->info_unidades;
        $metodologia = $req->info_metodologia;
        $reactivo = $req->info_reactivo;
        $temperatura = $req->info_temperatura;
        if(isset($analito_lab)){
            $arrayTreeDown = [];
            $laboratorios = LaboratorioController::listByUsuario();
            $series = SerieController::ListByAnalito($analito_lab);
    
            foreach ($series as $serie) {
                if(!empty($serie->comentario)){
                    array_push(
                        $arrayTreeDown,
                        [
                            "comentario" => $serie->comentario
                        ]
                    );
                }
            };
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setCellValue('A1', 'Laboratorio');
            $sheet->setCellValue('B1', 'Matriz');
            $sheet->setCellValue('C1', 'Control');
            $sheet->setCellValue('D1', 'Lote');
            $sheet->setCellValue('E1', 'Fecha Caducidad');
            $sheet->setCellValue('F1', 'Analito');
            $sheet->setCellValue('G1', 'Analizador');
            $sheet->setCellValue('H1', 'Unidades');
            $sheet->setCellValue('I1', 'Metodologia');
            $sheet->setCellValue('J1', 'Reactivo');
            $sheet->setCellValue('K1', 'Temperatura');
            $sheet->getStyle("A1:K1")->getFont()->setBold( true );

            $sheet->setCellValue('A2', $laboratorio);
            $sheet->setCellValue('B2', $matriz);
            $sheet->setCellValue('C2', $control);
            $sheet->setCellValue('D2', $lote);
            $sheet->setCellValue('E2', $fecha_caducidad);
            $sheet->setCellValue('F2', $analito);
            $sheet->setCellValue('G2', $analizador);
            $sheet->setCellValue('H2', $unidades);
            $sheet->setCellValue('I2', $metodologia);
            $sheet->setCellValue('J2', $reactivo);
            $sheet->setCellValue('K2', $temperatura);

            
            $sheet->setCellValue('A4', 'Comentarios');
            $sheet->getStyle("A4")->getFont()->setBold( true );

            $row = 5;
            foreach ($arrayTreeDown as $data) {
                $column = 'A';
                foreach ($data as $value) {
                    $sheet->setCellValue($column . $row, $value);
                    $column++;
                }
                $row++;
            }
            //$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
            //$writer->save('archivo.xlsx');
    
            // Crear instancia de Writer y generar el contenido del archivo
            $writer = new Xlsx($spreadsheet);
            $writer->setIncludeCharts(true);

            $filename = 'Lista comentarios - '.$laboratorio.' - '. $lote . ' - ' . $analito . ' - ' .date('Ymd_His') . '.xlsx';;
    
            // Configurar las cabeceras para la descarga
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="'.$filename.'"');
            header('Cache-Control: max-age=0');
    
            // Salida del archivo al cliente
            $writer->save('php://output');
            
        }else{
            echo '<script type="text/javascript">window.close();</script>';
            exit;
        }
        exit;
    }
}
