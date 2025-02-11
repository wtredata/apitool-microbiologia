<?php

namespace App\Traits;

use App\Helpers\Encryptor;

trait EncryptationId
{

    public function getIdEncryptUsuarioAttribute()
    {
        return Encryptor::encrypt($this->attributes['id_usuario']);
    }

    public function getIdEncryptRolAttribute()
    {
        return Encryptor::encrypt($this->attributes['id_rol']);
    }


    public function getRolIdEncryptRolAttribute()
    {
        return Encryptor::encrypt($this->attributes['rol_id_rol']);
    }


    public function getIdEncryptLaboratorioAttribute()
    {
        return Encryptor::encrypt($this->attributes['id_laboratorio']);
    }

    public function getLaboratorioIdEncryptLaboratorioAttribute()
    {
        return Encryptor::encrypt($this->attributes['laboratorio_id_laboratorio']);
    }


    public function getIdEncryptAreaAttribute()
    {
        return Encryptor::encrypt($this->attributes['id_area']);
    }

    public function getAreaIdEncryptAreaAttribute()
    {
        return Encryptor::encrypt($this->attributes['area_id_area']);
    }


    public function getIdEncryptAnalitoAttribute()
    {
        return Encryptor::encrypt($this->attributes['id_analito']);
    }


    public function getIdEncryptUnidadAttribute()
    {
        return Encryptor::encrypt($this->attributes['id_unidad']);
    }

    public function getIdEncryptAnalizadorAttribute()
    {
        return Encryptor::encrypt($this->attributes['id_analizador']);
    }


    public function getIdEncryptMetodologiaAttribute()
    {
        return Encryptor::encrypt($this->attributes['id_metodologia']);
    }

    public function getIdEncryptCorridaAreaAttribute()
    {
        return Encryptor::encrypt($this->attributes['id_corrida_area']);
    }


    public function getIdEncryptCorridaAnalitoAttribute()
    {
        return Encryptor::encrypt($this->attributes['id_corrida_analito']);
    }

    public function getIdEncryptResultadoCorridaAttribute()
    {
        return Encryptor::encrypt($this->attributes['id_resultado_corrida']);
    }

    public function getIdEncryptModoAttribute()
    {
        return Encryptor::encrypt($this->attributes['id_modo']);
    }

    public function getIdEncryptUsuarioLaboratorioAttribute()
    {
        return Encryptor::encrypt($this->attributes['id_usuario_laboratorio']);
    }

}