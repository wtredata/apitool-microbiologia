<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnFromCepaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cepa', function (Blueprint $table) {
            $table->dropColumn('fecha_adquisicion');
            $table->dropColumn('fecha_vencimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cepa', function (Blueprint $table) {
            $table->date('fecha_adquisicion')->nullable();
            $table->date('fecha_vencimiento')->nullable();
        });
    }
}
