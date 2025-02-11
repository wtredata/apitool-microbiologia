<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnFromControlCepaMedioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('control_cepa_medio', function (Blueprint $table) {
            $table->dropColumn('lote_cepa_id');
            $table->dropColumn('lote_medio_id');
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
            $table->integer('lote_cepa_id');
            $table->integer('lote_medio_id');
        });
    }
}
