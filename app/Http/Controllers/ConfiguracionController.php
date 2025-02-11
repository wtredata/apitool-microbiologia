<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;
use App\Http\Controllers\InstitucionController;
use App\Http\Controllers\AnalizadorController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\MetodologiaController;
use App\Http\Controllers\UnidadController;
use App\Http\Controllers\TemperaturaController;
use App\Http\Controllers\ReactivoController;
use App\Http\Controllers\MatrizController;
use App\Http\Controllers\FuenteETMPController;
use App\Http\Controllers\AnalitoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\ControlController;
use Auth;


// Modelos
use Illuminate\Support\Facades\DB;

// Requests
use Illuminate\Http\Request;

class ConfiguracionController extends Controller{

    public function __construct(){
    }

    public function section(){
        
        $instituciones = InstitucionController::listAll();
        $analizadores = AnalizadorController::listAll();
        $paises = PaisController::listAll();
        $proveedores = ProveedorController::listAll();
        $metodologias = MetodologiaController::listAll();
        $unidades = UnidadController::listAll();
        $temperaturas = TemperaturaController::listAll();
        $reactivos = ReactivoController::listAll();
        $matrices = MatrizController::listAll();
        $fuentesETMP = FuenteETMPController::listAll();
        $usuarios = UsuarioController::listAll();
        $analitos = AnalitoController::listAll();
        $controles = ControlController::listAll();

        $matricesList = MatrizController::list();
        $rolesList = RolController::list();
        $paisesList = PaisController::list();
        $proveedoresList = ProveedorController::List();
        $institucionesList = InstitucionController::List();
        $sedesList = SedeController::List();
        $analitosList = AnalitoController::List();
        $fuenteETMPList = FuenteETMPController::List();

        return view("configuracion")
            ->with("instituciones",$instituciones)
            ->with("analizadores",$analizadores)
            ->with("paises",$paises)
            ->with("usuarios",$usuarios)
            ->with("proveedores",$proveedores)
            ->with("metodologias",$metodologias)
            ->with("unidades",$unidades)
            ->with("temperaturas",$temperaturas)
            ->with("reactivos",$reactivos)
            ->with("matrices",$matrices)
            ->with("analitos",$analitos)
            ->with("fuentesETMP",$fuentesETMP)
            ->with("matricesList",$matricesList)
            ->with("paisesList",$paisesList)
            ->with("proveedoresList",$proveedoresList)
            ->with("institucionesList",$institucionesList)
            ->with("sedesList",$sedesList)
            ->with("rolesList",$rolesList)
            ->with("analitosList",$analitosList)
            ->with("fuenteETMPList",$fuenteETMPList)
            ->with("controles",$controles)
            ->with("ciudades",[])
            ->with("variabilidadesBiologicas",[])
            ->with("lotes",[])
            ->with("sedes",[])
            ->with("laboratorios",[])
            ->with("nomSection","SeeSectionConfiguracion")
            ->with("rol_usuario", Auth::user()->rol_id_rol);
    }
}