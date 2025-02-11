<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropForeignKeyFromPruebasLotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('control_cepa_medio', function (Blueprint $table) {
           $table->dropForeign('control_cepa_prueba_lote_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('control_cepa_medio', function (Blueprint $table) {
            $table->foreignId('prueba_lote_id')->constrained('pruebas_lotes')->onDelete('cascade');
        });
    }
}
