<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlCepasTincionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_cepas_tincion', function (Blueprint $table) {
            $table->id();
            $table->mediumText('comentario');
            $table->string('foto_url');
            $table->integer('medicion_id');
            $table->integer('lote_cepa_id');
            $table->integer('lote_tincion_id');
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
        Schema::dropIfExists('control_cepas_tincion');
    }
}
