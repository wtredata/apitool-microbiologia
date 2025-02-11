<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotesLaboratoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotes_laboratorios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lote_id')->constrained('compras_lotes')->onDelete('cascade');
            $table->smallInteger('id_laboratorio');
            $table->foreign('id_laboratorio')->references('id_laboratorio')->on('laboratorio')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lotes_laboratorios');
    }
}
