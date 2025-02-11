<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnFromTableControlCepasTincion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('control_cepas_tincion', function (Blueprint $table) {
            $table->integer('seguimiento_cepa_id');
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
            $table->dropColumn('seguimiento_cepa_id');
        });
    }
}
