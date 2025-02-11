<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RolController;
use Auth;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home')
            ->with("nombres", Auth::user()->nombres)
            ->with("apellidos", Auth::user()->apellidos)
            ->with("color_hexadecimal", Auth::user()->color_hexadecimal)
            ->with("iniciales", Auth::user()->iniciales)
            ->with("rol_usuario", Auth::user()->rol_id_rol)
            ->with("nom_rol_usuario", RolController::listItem(Auth::user()->rol_id_rol)->nom_rol);
    }
}
