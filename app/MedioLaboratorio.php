<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedioLaboratorio extends Model
{
    protected $table = "medio_laboratorio";
    protected $primaryKey = "id_medio_laboratorio";
    protected $fillable = ["id_medio","id_laboratorio"];
    use HasFactory;

    public function medio()
    {
        return $this->belongsTo(Medio::class, 'id_medio');
    }

    public function laboratorio()
    {
        return $this->belongsTo(Laboratorio::class, 'id_laboratorio');
    }


}
