<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nrp');
            $table->string('email');
            $table->string('judul');
            $table->string('pembimbing1');
            $table->string('pembimbing2');
            $table->string('penguji1')->nullable();
            $table->string('penguji2')->nullable();
            $table->string('ruangan')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('waktu')->nullable();
            $table->text('feedback')->nullable();
            $table->integer('nilai')->nullable();
            $table->enum('status', ['Lulus dengan Revisi', 'Lulus tanpa Revisi', 'Belum Sidang'])->default('Belum Sidang');
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
        Schema::dropIfExists('tabel_mahasiswa');
    }
};
