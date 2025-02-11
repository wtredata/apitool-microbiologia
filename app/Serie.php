<?php

namespace App;

// use App\Traits\EncryptationId;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $table = "serie";
    protected $primaryKey = "id_serie";
    protected $fillable = ["analito_lab_id_analito_lab", "usuario_id_usuario", "fecha"];
    public $timestamps = false;
}