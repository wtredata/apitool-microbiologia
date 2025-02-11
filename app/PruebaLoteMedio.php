<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PruebaLoteMedio extends Model
{
    protected $table = "pruebas_lotes";
    protected $fillable = ['lote_cepa_id', 'lote_medio_id', 'laboratorio_id'];
    
    use HasFactory;

    public function laboratorio()
    {
        return $this->belongsTo(Laboratorio::class, 'laboratorio_id', 'id_laboratorio');
    }
    public function registroControlCepa()
    {
        return $this->hasOne(ControlCepa::class, 'prueba_lote_id');
    }
    public function loteMedio()
    {
        return $this->belongsTo(CompraLote::class, 'lote_medio_id', 'id');
    }

    public function loteCepa()
    {
        return $this->belongsTo(CompraLote::class, 'lote_cepa_id', 'id');
    }

    public function comentariosCepa()
    {
        return $this->hasMany(ControlCepa::class, 'lote_cepa_id', 'lote_cepa_id');
    }
}
