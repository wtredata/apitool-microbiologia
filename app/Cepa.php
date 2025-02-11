<?php

namespace App;

use App\Traits\EncryptationId;
use Illuminate\Database\Eloquent\Model;

class Cepa extends Model
{   
    use EncryptationId;
    protected $table = "cepa";
    protected $primaryKey = "id_cepa";
    protected $fillable = ["nom_cepa","num_lote","fecha","estado"];
    public $timestamps = false;

    public function comprasLote(){
        return $this->morphToMany(CompraLote::class,'comprables');
    }
}