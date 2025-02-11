<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlCepasPruebasSensibilidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_cepas_pruebas_sensibilidad', function (Blueprint $table) {
            $table->id();
            $table->mediumText('comentario')->nullable();
            $table->string('foto_url')->nullable();
            $table->integer('medicion_id')->nullable();
            $table->smallInteger('usuario_id')->nullable();
            $table->integer('lote_cepa_id');
            $table->integer('lote_prueba_sensi_id');
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
        Schema::dropIfExists('control_cepas_pruebas_sensibilidad');
    }
}
