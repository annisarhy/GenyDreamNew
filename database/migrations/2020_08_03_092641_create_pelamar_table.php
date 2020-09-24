<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->string('nama_lengkap')->nullable();
            $table->string('gelar_depan')->nullable()->default("-");
            $table->string('gelar_belakang')->nullable()->default("-");
            $table->string('tempat_lahir')->nullable()->default("‎‎‏‏‎ ‎");
            $table->date('tgl_lahir')->nullable()->default(\Carbon\Carbon::now());
            $table->enum('jen_kel',['l','p','-'])->nullable()->default("-");
            $table->string('no_telp')->nullable()->default("‎‎‏‏‎ ‎");
            $table->string('no_ktp')->nullable()->default("‎‎‏‏‎ ‎");
            $table->string('alamat')->nullable()->default("‎‎‏‏‎ ‎");
            $table->text('deskripsi_diri')->nullable();
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
        Schema::dropIfExists('pelamar');
    }
}
