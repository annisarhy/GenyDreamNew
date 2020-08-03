<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRkompetensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rkompetensi', function (Blueprint $table) {
            $table->id();
            $table->foreignid('id_pelamar')->constrained('pelamar');
            $table->string('nama_kompetensi');
            $table->date('tgl_mulai');
            $table->date('tgl_akhir');
            $table->text('keterangan');
            $table->string('lokasi');
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
        Schema::dropIfExists('rkompetensi');
    }
}
