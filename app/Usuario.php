<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\EncryptationId;

class Usuario extends Authenticatable
{

    use Notifiable;
    use EncryptationId;

    public $timestamps = false;
    protected $table = "usuario";
    protected $primaryKey = "id_usuario";
    protected $fillable = [
        "rol_id_rol",
        "nombres",
        "apellidos",
        "nom_usuario",
        "correo",
        "password",
        "estado"
    ];
    protected $hidden = [
        "remember_token"
    ];

    public function laboratorios(){
        return $this->belongsToMany(Laboratorio::class,'laboratorio_usuario');
    }

    public function controlesCepaMedio(){
        return $this->hasMany(ControlCepaMedio::class);
    }

    public function controlesCepaTincion(){
        return $this->hasMany(ControlCepaTincion::class);
    }

    public function controlesCepaPruebaSensibilidad(){
        return $this->hasMany(ControlCepaPruebaSensibilidad::class);
    }
}
