<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameFieldsControlCepa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('control_cepa', function (Blueprint $table) {
            $table->renameColumn('prueba_lote_id', 'lote_medio_id');
            $table->renameColumn('lote_laboratorio_id', 'lote_cepa_id');
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
            $table->renameColumn('lote_medio_id', 'prueba_lote_id');
            $table->renameColumn('lote_cepa_id', 'lote_laboratorio_id');
        });
    }
}
