<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeColumnsNullableInControlCepaMedio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('control_cepa_medio', function (Blueprint $table) {
            $table->mediumText('comentario')->nullable()->change();
            $table->string('foto_url')->nullable()->change();
            $table->unsignedBigInteger('medicion_id')->nullable()->change();
            $table->smallInteger('id_usuario')->nullable()->change();
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
            $table->mediumText('comentario')->nullable(false);
            $table->string('foto_url')->nullable(false);
            $table->integer('medicion_id')->nullable(false);
            $table->smallInteger('id_usuario')->nullable(false);
        });
    }
}
