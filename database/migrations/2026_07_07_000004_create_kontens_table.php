<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kontens', function (Blueprint $table) {
            $table->id();
            $table->string('section')->unique(); // contoh: 'pembelajaran', 'visi', 'misi', 'tujuan'
            $table->string('judul')->nullable();
            $table->text('isi')->nullable();
            $table->timestamps();
        });

        // Seed beberapa section default supaya langsung muncul di panel admin
        DB::table('kontens')->insert([
            ['section' => 'pembelajaran', 'judul' => 'Pembelajaran', 'isi' => 'Modul materi kaderisasi, PKD, dan MAPABA sedang disiapkan oleh pengurus rayon untuk menunjang proses pembelajaran.', 'created_at' => now(), 'updated_at' => now()],
            ['section' => 'visi', 'judul' => 'Visi Rayon FTKD', 'isi' => 'RAYON Fakultas Teknik Komputer dan Desain sebagai ruang kaderisasi yang dinamis, inklusif, dan solutif...', 'created_at' => now(), 'updated_at' => now()],
            ['section' => 'tujuan', 'judul' => 'Tujuan PMII', 'isi' => 'Terbentuknya pribadi muslim Indonesia yang bertaqwa kepada Allah Swt, berbudi luhur, berilmu, cakap dan bertanggungjawab.', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('kontens');
    }
};
