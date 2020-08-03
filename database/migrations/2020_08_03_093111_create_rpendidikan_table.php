<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRpendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rpendidikan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pelamar')->constrained('pelamar');
            $table->year('tahun');
            $table->string('nama_sekolah');
            $table->foreignId('id_jenjang')->constrained('jenjang_pendidikan');
            $table->tinyInteger('nilai_akhir');
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
        Schema::dropIfExists('rpendidikan');
    }
}
