<?php

namespace App\Resource\LoteLaboratorio;

use App\LoteLaboratorio;

class Manager{

    public static function listar(){
        return LoteLaboratorio::with(['lote','laboratorio'])->get();
    }

    public static function findLoteLab($id){
        return LoteLaboratorio::where('lote_id',$id)->select(['id','lote_id','id_laboratorio'])->with(['lote','lote.medios','laboratorio'])->first();
    }

    public static function findLotesLab($id){
        return LoteLaboratorio::where('id_laboratorio',$id)->select(['id','lote_id','id_laboratorio'])->with(['lote','lote.medios','laboratorio'])->get();
    }
}