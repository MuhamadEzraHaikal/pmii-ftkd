<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('arsips', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->enum('kategori', ['konstitusi', 'administrasi', 'musyawarah', 'laporan']);
            $table->text('deskripsi')->nullable();
            $table->string('file_path'); // path di storage/app/public/arsip
            $table->string('file_type', 10)->nullable(); // PDF, DOCX, dll
            $table->string('ukuran', 20)->nullable(); // "2.4 MB" - opsional, bisa dihitung otomatis
            $table->string('versi', 30)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('arsips');
    }
};
