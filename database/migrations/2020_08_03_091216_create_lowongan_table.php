<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_perusahaan')->constrained('perusahaan');
            $table->string('nama_lowongan');
            $table->foreignId('id_kategori_lowongan')->constrained('kategori_lowongan');
            $table->dateTime('waktu_posting');
            $table->decimal('salary');
            $table->text('deskripsi_lowongan');
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
        Schema::dropIfExists('lowongan');
    }
}
