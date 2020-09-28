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
            $table->string('nama_sekolah');
            $table->string('jurusan');
            $table->foreignId('id_jenjang')->constrained('jenjang_pendidikan');
            $table->date('tgl_mulai');
            $table->date('tgl_akhir');
            $table->tinyInteger('nilai_akhir')->nullable();
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
