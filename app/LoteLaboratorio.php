<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoteLaboratorio extends Model
{
    protected $table = "lotes_laboratorios";
    protected $fillable = ['lote_id','id_laboratorio'];
    use HasFactory;


    public function lote(){
        return $this->belongsTo(CompraLote::class,'lote_id');
    }

    public function laboratorio(){
        return $this->belongsTo(Laboratorio::class,'id_laboratorio','id_laboratorio');
    }

    public function controlesCepa(){
        return $this->hasMany(ControlCepaMedio::class,'lote_laboratorio_id');
    }
    
}
