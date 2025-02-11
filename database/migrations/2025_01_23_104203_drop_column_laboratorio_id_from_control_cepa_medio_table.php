<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnLaboratorioIdFromControlCepaMedioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('control_cepa_medio', function (Blueprint $table) {
            $table->dropColumn('laboratorio_id');
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
            $table->integer('laboratorio_id');
        });
    }
}
