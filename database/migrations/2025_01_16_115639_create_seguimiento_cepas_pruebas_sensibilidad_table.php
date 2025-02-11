<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguimientoCepasPruebasSensibilidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimiento_cepas_pruebas_sensibilidad', function (Blueprint $table) {
            $table->id();
            $table->integer('lote_cepa_id');
            $table->integer('lote_prueba_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seguimiento_cepas_pruebas_sensibilidad');
    }
}
