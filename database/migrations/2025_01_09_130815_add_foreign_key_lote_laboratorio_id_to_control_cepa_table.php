<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyLoteLaboratorioIdToControlCepaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('control_cepa', function (Blueprint $table) {
            $table->foreignId('lote_laboratorio_id')->nullable()->constrained('lotes_laboratorios');
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
            $table->dropForeign('lote_laboratorio_id');
            $table->dropColumn('lote_laboratorio_id');
        });
    }
}
