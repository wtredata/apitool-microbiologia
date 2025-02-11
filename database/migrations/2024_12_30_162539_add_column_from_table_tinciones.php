<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnFromTableTinciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tinciones', function (Blueprint $table) {
            $table->integer('lote');
            $table->date('fecha_adquisicion')->nullable();
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
        Schema::table('tinciones', function (Blueprint $table) {
            $table->dropColumn([
                'lote',
                'fecha_adquisicion',
                'fecha_vencimiento'
            ]);
        });
    }
}
