<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim')->unique();
            $table->string('jurusan');
            $table->string('angkatan', 10);
            $table->enum('status', ['Anggota Baru', 'Anggota Biasa', 'Kader', 'Pengurus'])->default('Anggota Baru');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('kontak')->nullable();
            $table->string('foto')->nullable(); // path di storage/app/public/anggota
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
