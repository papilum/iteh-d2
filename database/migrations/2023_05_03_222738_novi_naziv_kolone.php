<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NoviNazivKolone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('maratons', function (Blueprint $table) {
            $table->renameColumn('br_takmicara', 'broj_takmicara');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('maratons', function (Blueprint $table) {
            $table->renameColumn('broj_takmicara', 'br_takmicara');
        });
    }
}
