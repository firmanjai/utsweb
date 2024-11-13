<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiTable extends Migration
{
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('karyawan_id');
            $table->date('tanggal');
            $table->enum('status', ['hadir', 'tidak hadir', 'sakit', 'izin']);
            $table->timestamps();

            // Menambahkan foreign key untuk relasi dengan tabel karyawan
            $table->foreign('karyawan_id')->references('id')->on('karyawan')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('absensi');
    }
}
