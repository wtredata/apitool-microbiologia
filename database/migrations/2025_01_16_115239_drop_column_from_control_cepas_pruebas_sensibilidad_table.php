<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnFromControlCepasPruebasSensibilidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('control_cepas_pruebas_sensibilidad', function (Blueprint $table) {
            $table->dropColumn('lote_cepa_id');
            $table->dropColumn('lote_prueba_sensi_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('control_cepas_pruebas_sensibilidad', function (Blueprint $table) {
            $table->integer('lote_cepa_id');
            $table->integer('lote_prueba_sensi_id');
        });
    }
}
