<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameControlCepaToControlCepaMedio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('control_cepa','control_cepa_medio');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('control_cepa_medio', function (Blueprint $table) {
            Schema::rename('control_cepa_medio', 'control_cepa');
        });
    }
}
