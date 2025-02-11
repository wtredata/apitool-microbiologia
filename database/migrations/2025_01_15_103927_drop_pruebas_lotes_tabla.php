<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropPruebasLotesTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('pruebas_lotes');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('pruebas_lotes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lote_cepa_id')->constrained('compras_lotes')->onDelete('cascade');
            $table->foreignId('lote_medio_id')->constrained('compras_lotes')->onDelete('cascade');
            $table->timestamps();
        });
    }
}
