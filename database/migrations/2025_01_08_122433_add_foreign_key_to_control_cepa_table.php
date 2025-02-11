<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToControlCepaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('control_cepa', function (Blueprint $table) {
            $table->smallInteger('id_usuario')->after('medicion_id');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuario');

           $table->foreignId('prueba_lote_id')->constrained('pruebas_lotes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('control_cepa', function (Blueprint $table) {
            $table->dropForeign(['id_usuario']);
            $table->dropForeign(['prueba_lote_id']);
            $table->dropColumn('id_usuario');
            $table->dropColumn('prueba_lote_id');
        });
    }
}
