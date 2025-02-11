<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\ControlLaboratorioController;
use App\Http\Controllers\AnalitoLaboratorioController;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
//use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Medio;
use App\Cepa;
use App\Tincion;
use App\Prueba;
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
                                "tipo_subitem" => $req->medios == "microbiologia" ? "medios" : "lote",
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
                                "tipo_subitem" => $req->medios == "microbiologia" ? "medios" : "lote",
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

            case "medios":
                if (isset($req->id_laboratorio)) {
                    $cepas_lab = \DB::table("cepa_laboratorio AS cl")
                                    ->select("cl.id_cepa_laboratorio AS id_reference", "c.nom_cepa", "c.id_cepa")
                                    ->where("id_laboratorio", $req->id_laboratorio)
                                    ->where("id_medio", $req->id_reference)
                                    ->join("cepa AS c", "c.id_cepa", "=", "cl.id_cepa")
                                    ->get();

                    foreach ($cepas_lab as $cepo_cultivo) {
                        array_push(
                            $this->arrayTree,
                            [
                                "title" => $cepo_cultivo->id_cepa . " - " . $cepo_cultivo->nom_cepa,
                                "tooltip" => $cepo_cultivo->id_cepa . " - " . $cepo_cultivo->nom_cepa,
                                "icon" => "icon-analito",
                                "tipo_nodo" => "cepa",
                                "id_reference" => $cepo_cultivo->id_reference
                            ]
                        );
                    }
                } else {
                    $medios_lab = \DB::table('medio_laboratorio')
                                    ->select("id_medio")
                                    ->where("id_laboratorio", $req->id_reference)
                                    ->get()
                                    ->pluck("id_medio");
                    $medios_cultivo = Medio::whereIn("id_medio", $medios_lab)->get();

                    foreach ($medios_cultivo as $medio_cultivo) {
                        array_push(
                            $this->arrayTree,
                            [
                                "title" => $medio_cultivo->id_medio . " - " . $medio_cultivo->nom_medio,
                                "tooltip" => $medio_cultivo->id_medio . " - " . $medio_cultivo->nom_medio,
                                "icon" => "icon-lote",
                                "lazy" => "true",
                                "tipo_nodo" => "medio",
                                "tipo_subitem" => "cepa",
                                "id_reference" => $medio_cultivo->id_medio,
                                "id_laboratorio" => $req->id_reference
                            ]
                        );
                    }
                }                
                break;
            
                case "tinciones":
                    if (isset($req->id_laboratorio)) {
                        $tinciones_lab = \DB::table("tincion_laboratorio AS cl")
                            ->select("cl.id_tincion_laboratorio AS id_reference", "c.nom_tincion", "c.id_tincion")
                            ->where("cl.id_laboratorio", $req->id_laboratorio)  // Se agrega el alias 'cl'
                            ->where("c.id_tincion", $req->id_reference)  // Se agrega el alias 'c' para especificar la tabla 'tinciones'
                            ->join("tinciones AS c", "c.id_tincion", "=", "cl.id_tincion")
                            ->get();
                
                        foreach ($tinciones_lab as $tincion_cultivo) {
                            array_push(
                                $this->arrayTree,
                                [
                                    "title" => $tincion_cultivo->id_tincion . " - " . $tincion_cultivo->nom_tincion,
                                    "tooltip" => $tincion_cultivo->id_tincion . " - " . $tincion_cultivo->nom_tincion,
                                    "icon" => "icon-analito",
                                    "tipo_nodo" => "cepa",
                                    "id_reference" => $tincion_cultivo->id_reference
                                ]
                            );
                        }
                    } else {
                        $tinciones_lab = \DB::table('tincion_laboratorio')
                            ->select("id_tincion")
                            ->where("id_laboratorio", $req->id_reference)
                            ->get()
                            ->pluck("id_tincion");
                
                        $tinciones_cultivo = Tincion::whereIn("id_tincion", $tinciones_lab)->get();
                
                        foreach ($tinciones_cultivo as $tincion_cultivo) {
                            array_push(
                                $this->arrayTree,
                                [
                                    "title" => $tincion_cultivo->id_tincion . " - " . $tincion_cultivo->nom_tincion,
                                    "tooltip" => $tincion_cultivo->id_tincion . " - " . $tincion_cultivo->nom_tincion,
                                    "icon" => "icon-lote",
                                    "lazy" => "true",
                                    "tipo_nodo" => "tincion",
                                    "tipo_subitem" => "tincion",
                                    "id_reference" => $tincion_cultivo->id_tincion,
                                    "id_laboratorio" => $req->id_reference
                                ]
                            );
                        }
                    }
                    break;                
            
                    case "pruebas":
                        if (isset($req->id_laboratorio)) {
                            $pruebas_lab = \DB::table("prueba_laboratorio AS cl")
                                ->select("cl.id_prueba_laboratorio AS id_reference", "c.nom_prueba", "c.id_prueba")
                                ->where("cl.id_laboratorio", $req->id_laboratorio)  // Se agrega el alias 'cl'
                                ->where("c.id_prueba", $req->id_reference)  // Se agrega el alias 'c' para especificar la tabla 'tinciones'
                                ->join("prueba AS c", "c.id_prueba", "=", "cl.id_prueba")
                                ->get();
                    
                            foreach ($pruebas_lab as $prueba_cultivo) {
                                array_push(
                                    $this->arrayTree,
                                    [
                                        "title" => $prueba_cultivo->id_prueba . " - " . $prueba_cultivo->nom_prueba,
                                        "tooltip" => $prueba_cultivo->id_prueba . " - " . $prueba_cultivo->nom_prueba,
                                        "icon" => "icon-analito",
                                        "tipo_nodo" => "prueba",
                                        "id_reference" => $prueba_cultivo->id_reference
                                    ]
                                );
                            }
                        } else {
                            $pruebas_lab = \DB::table('prueba_laboratorio')
                                ->select("id_prueba")
                                ->where("id_laboratorio", $req->id_reference)
                                ->get()
                                ->pluck("id_prueba");
                    
                            $prueba_cultivo = Prueba::whereIn("id_prueba", $pruebas_lab)->get();
                    
                            foreach ($pruebas_lab as $prueba_cultivo) {
                                array_push(
                                    $this->arrayTree,
                                    [
                                        "title" => $prueba_cultivo->id_prueba . " - " . $prueba_cultivo->nom_prueba,
                                        "tooltip" => $prueba_cultivo->id_prueba . " - " . $prueba_cultivo->nom_prueba,
                                        "icon" => "icon-lote",
                                        "lazy" => "true",
                                        "tipo_nodo" => "prueba",
                                        "tipo_subitem" => "cepa",
                                        "id_reference" => $prueba_cultivo->id_prueba,
                                        "id_laboratorio" => $req->id_reference
                                    ]
                                );
                            }
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
}
