<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('compra_lote_id');
            $table->unsignedBigInteger('comprables_id');
            $table->string('comprables_type');
            $table->timestamps();
            $table->foreign('compra_lote_id')->references('id')->on('compras_lotes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comprables');
    }
}
