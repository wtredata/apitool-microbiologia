<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;

// Modelos
use Illuminate\Support\Facades\DB;
use App\Rol;

class RolController extends Controller{
    protected $tableRol;
    
    public function __construct(){
        $this->tableRol = new Rol();
    }
   
    public static function list(){
        $tableRol = new Rol();    
        return $tableRol
            ->orderBy("orden","asc")
            ->get();
    }

    public static function listItem($id){
        $tableRol = new Rol();    
        return $tableRol
            ->select("*")
            ->where("id_rol",$id)
            ->orderBy("nom_rol","asc")
            ->first();
    }

    public function listHTML(){
        $roles = $this->tableRol
            ->orderBy("nom_rol","asc")
            ->get();

        return view("rol.rolList")
            ->with("roles",$roles);
    }
}