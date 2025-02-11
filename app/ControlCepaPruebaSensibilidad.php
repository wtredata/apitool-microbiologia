<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlCepaPruebaSensibilidad extends Model
{
    protected $table = "control_cepas_pruebas_sensibilidad";
    protected $fillable = ['id', 'comentario', 'foto_url', 'medicion_id', 'usuario_id', 'seguimiento_cepa_id'];
    use HasFactory;

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function tipoMedicion()
    {
        return $this->belongsTo(MedicionesPrueba::class, 'medicion_id', 'id');
    }

    public function url()
    {
        if (!is_null($this->foto_url)) {
            return public_path('storage/' . $this->foto_url);
        }
        return null;
    }
}
