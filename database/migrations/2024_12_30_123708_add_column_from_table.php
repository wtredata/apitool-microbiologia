<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnFromTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medio', function (Blueprint $table) {
            $table->string('caracteristica');
            $table->integer('lote');
            $table->date('fecha_vencimiento')->nullable();
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
            $table->dropColumn([
                'caracteristica',
                'lote',
                'fecha_vencimiento'
            ]);
        });
    }
}
