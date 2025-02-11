<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyColumnsInControlCepasTincionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('control_cepas_tincion', function (Blueprint $table) {
            $table->mediumText('comentario')->nullable()->change();
            $table->string('foto_url')->nullable()->change();
            $table->integer('medicion_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('control_cepas_tincion', function (Blueprint $table) {
            $table->mediumText('comentario')->nullable(false)->change();
            $table->string('foto_url')->nullable(false)->change();
            $table->integer('medicion_id')->nullable(false)->change();
        });
    }
}
