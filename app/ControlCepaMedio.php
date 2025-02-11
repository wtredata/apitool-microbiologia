<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlCepaMedio extends Model
{
protected $table = "control_cepa_medio";
protected $fillable = ['id','comentario','foto_url','medicion_id','id_usuario','seguimiento_cepa_id'];
use HasFactory;

    public function usuario(){
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }

    public function tipoMedicion(){
        return $this->belongsTo(Mediciones::class,'medicion_id','id');
    }

    public function url()
    {
        if (!is_null($this->foto_url)) {
            return public_path('storage/' . $this->foto_url);
        }
        return null;
    }
}

