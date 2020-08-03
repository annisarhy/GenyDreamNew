<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRkeahlianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rkeahlian', function (Blueprint $table) {
            $table->id();
            $table->foreignid('id_pelamar')->constrained('pelamar');
            $table->string('nama_keahlian');
            $table->tinyInteger('persentase');
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
        Schema::dropIfExists('rkeahlian');
    }
}
