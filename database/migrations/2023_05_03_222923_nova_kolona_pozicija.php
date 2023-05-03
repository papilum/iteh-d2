<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NovaKolonaPozicija extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rezultats', function (Blueprint $table) {
            $table->after('takmicar_id', function ($table) {
                $table->integer('pozicija');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rezultats', function (Blueprint $table) {
            $table->dropColumn('pozicija');
        });
    }
}
