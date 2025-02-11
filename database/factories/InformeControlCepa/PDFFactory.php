<?php
namespace Database\Factories\InformeControlCepa;

class  PDFFactory{


    public function obtenerItem($item){
        switch ($item) {
            case 'Medio':
                return new Medio();
                break;
            case 'Tincion':
                return new Tincion();
                break;
            case 'Prueba':
                return new PruebaSensibilidad();
                break;
        }
    }
}