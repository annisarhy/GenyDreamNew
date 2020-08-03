<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRpekerjaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rpekerjaan', function (Blueprint $table) {
            $table->id();
            $table->foreignid('id_pelamar')->constrained('pelamar');
            $table->string('nama_perusahaan');
            $table->date('tgl_mulai');
            $table->date('tgl_akhir');
            $table->string('jabatan_terakhir');
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
        Schema::dropIfExists('rpekerjaan');
    }
}
