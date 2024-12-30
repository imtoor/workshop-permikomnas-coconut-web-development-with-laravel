<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->char('nim', 12)->unique();
            $table->string('nama_lengkap', 75);
            $table->string('alamat', 100);
            $table->string('jurusan', 25);
            $table->enum('agama', ['islam','kristen','hindu','buddha','konghucu']);
            $table->string('no_telepon', 14);
            $table->string('email', 50);
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['laki-laki','perempuan']);
            $table->char('semester', 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
