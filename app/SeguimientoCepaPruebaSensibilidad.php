<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeguimientoCepaPruebaSensibilidad extends Model
{
    protected $table = "seguimiento_cepas_pruebas_sensibilidad";
    protected $fillable = ['id','lote_cepa_id','lote_prueba_id'];
    use HasFactory;

    public function comentariosLotePrueba()
    {
        return $this->hasMany(ControlCepaPruebaSensibilidad::class, 'seguimiento_cepa_id', 'id');
    }

    public function comentariosLoteCepa()
    {
        return $this->hasMany(ControlCepaPruebaSensibilidad::class, 'seguimiento_cepa_id', 'id');
    }

    public function loteCepas()
    {
        return $this->belongsTo(CompraLote::class, 'lote_cepa_id', 'id');
    }
    public function loteMedio()
    {
        return $this->belongsTo(CompraLote::class, 'lote_prueba_id', 'id');
    }

    public function loteLaboratorio()
    {
        return $this->hasOneThrough(
            LoteLaboratorio::class,
            CompraLote::class,
            'id', // Foreign key on CompraLote table
            'lote_id', // Foreign key on LoteLaboratorio table
            'lote_prueba_id', // Local key on SeguimientoCepaMedio table
            'id' // Local key on CompraLote table
        );
    }
}
