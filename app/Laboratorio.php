<?php

namespace App;

use App\Traits\EncryptationId;
use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    use EncryptationId;

    protected $table = "laboratorio";
    protected $primaryKey = "id_laboratorio";
    public $timestamps = false;
    protected $fillable = [
        "sede_id_sede",
        "num_laboratorio",
        "nom_laboratorio",
        "principal",
        "estado"
    ];

    public function loteLaboratorio()
    {
        return $this->hasMany(LoteLaboratorio::class, 'id_laboratorio','id_laboratorio');
    }

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'laboratorio_usuario');
    }
    public function medio()
    {
        return $this->belongsToMany(Medio::class, 'medio_laboratorio', 'id_medio');
    }
    public function lotes()
    {
        return $this->belongsToMany(CompraLote::class, 'lotes_laboratorios');
    }
}