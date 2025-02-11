<?php

namespace App\Http\Controllers;

// Controladores
use App\Http\Controllers\Controller;

// Requests
use Illuminate\Http\Request;

class BienvenidoController extends Controller{

    public function __construct(){
        // $this->tableArea = new Area();
    }
    
    
    public function section(){
       return view("bienvenido")
            ->with("nomSection","SeeSectionBienvenido");
    }
}