<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompraLote extends Model
{
    protected $table = "compras_lotes";
    protected $fillable = ["id", "lote", "fecha_vencimiento"];
    use HasFactory;

    public function medios()
    {
        return $this->morphedByMany(Medio::class, 'comprables');
    }
    public function tinciones()
    {
        return $this->morphedByMany(Tincion::class, 'comprables');
    }
    public function cepas()
    {
        return $this->morphedByMany(Cepa::class, 'comprables');
    }

    public function pruebasSensibilidad()
    {
        return $this->morphedByMany(Prueba::class, 'comprables');
    }

    public function loteLaboratorio()
    {
        return $this->hasMany(LoteLaboratorio::class, 'lote_id');
    }

    public function laboratorios()
    {
        return $this->belongsToMany(Laboratorio::class, 'lotes_laboratorios');
    }

    public function LoteMedioCepas()
    {
        return $this->hasMany(SeguimientoCepaMedio::class, 'lote_medio_id', 'id');
    }

    public function LoteCepaMedios()
    {
        return $this->hasMany(SeguimientoCepaMedio::class, 'lote_medio_id', 'id');
    }

    public function comentariosLoteMedio()
    {
        return $this->hasMany(SeguimientoCepaMedio::class, 'lote_medio_id', 'id');
    }

    public function comentariosLoteCepa()
    {
        return $this->hasMany(SeguimientoCepaMedio::class, 'lote_cepa_id', 'id');
    }

    public function countCepasByLaboratorio($idLaboratorio)
    {
        return $this->LoteMedioCepas()
            ->whereHas('loteCepas.loteLaboratorio', function ($query) use ($idLaboratorio) {
                $query->where('id_laboratorio', $idLaboratorio);
            })
            ->count();
    }


    public function LoteTincionCepas()
    {
        return $this->hasMany(SeguimientoCepaTincion::class, 'lote_tincion_id', 'id');
    }

    public function LoteCepaTincion()
    {
        return $this->hasMany(SeguimientoCepaTincion::class, 'lote_tincion_id', 'id');
    }

    public function comentariosLoteTincion()
    {
        return $this->hasMany(SeguimientoCepaTincion::class, 'lote_tincion_id', 'id');
    }

    public function comentariosLoteCepaTincion()
    {
        return $this->hasMany(SeguimientoCepaTincion::class, 'lote_cepa_id', 'id');
    }

    public function lotePruebaSensibilidadCepas()
    {
        return $this->hasMany(SeguimientoCepaPruebaSensibilidad::class, 'lote_prueba_id', 'id');
    }

    public function loteCepaPruebaSensibilidad()
    {
        return $this->hasMany(SeguimientoCepaPruebaSensibilidad::class, 'lote_prueba_id', 'id');
    }

    public function comentariosLotePruebaSensibilidad()
    {
        return $this->hasMany(SeguimientoCepaPruebaSensibilidad::class, 'lote_prueba_id', 'id');
    }

    public function comentariosLoteCepaPruebaSensibilidad()
    {
        return $this->hasMany(SeguimientoCepaPruebaSensibilidad::class, 'lote_cepa_id', 'id');
    }
}
