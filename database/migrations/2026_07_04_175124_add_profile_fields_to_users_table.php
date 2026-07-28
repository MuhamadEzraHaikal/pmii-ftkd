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
        Schema::table('users', function (Blueprint $table) {
            $table->string('tempat_lahir')->nullable()->after('name');
            $table->date('tanggal_lahir')->nullable()->after('tempat_lahir');
            $table->string('jenis_kelamin')->nullable()->after('tanggal_lahir');
            $table->string('whatsapp')->nullable()->after('email');
            $table->text('alamat')->nullable()->after('whatsapp');
            $table->string('jurusan')->nullable()->after('alamat');
            $table->integer('angkatan')->nullable()->after('jurusan');
            $table->text('motivasi')->nullable()->after('angkatan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'tempat_lahir',
                'tanggal_lahir',
                'jenis_kelamin',
                'whatsapp',
                'alamat',
                'jurusan',
                'angkatan',
                'motivasi',
            ]);
        });
    }
};
