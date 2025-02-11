<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnFromTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medio', function (Blueprint $table) {
            $table->dropColumn('lote');
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
        Schema::table('medio', function (Blueprint $table) {
            $table->integer('lote');
            $table->date('fecha_vencimiento')->nullable();
        });
    }
}
