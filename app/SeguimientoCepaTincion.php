<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeguimientoCepaTincion extends Model
{
    protected $table = "seguimiento_cepas_tincion";
    protected $fillable = ['id','lote_cepa_id','lote_tincion_id'];
    use HasFactory;

    public function comentariosLoteTincion()
    {
        return $this->hasMany(ControlCepaTincion::class, 'seguimiento_cepa_id', 'id');
    }

    public function comentariosLoteCepaTincion()
    {
        return $this->hasMany(ControlCepaTincion::class, 'seguimiento_cepa_id', 'id');
    }

    public function loteCepas()
    {
        return $this->belongsTo(CompraLote::class, 'lote_cepa_id', 'id');
    }
    public function loteMedio()
    {
        return $this->belongsTo(CompraLote::class, 'lote_medio_id', 'id');
    }
    public function loteLaboratorio()
    {
        return $this->hasOneThrough(
            LoteLaboratorio::class,
            CompraLote::class,
            'id', // Foreign key on CompraLote table
            'lote_id', // Foreign key on LoteLaboratorio table
            'lote_tincion_id', // Local key on SeguimientoCepaMedio table
            'id' // Local key on CompraLote table
        );
    }
}
