<?php

namespace Database\Seeders;

use App\Models\Anggota;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'email' => 'anggota@ftkd.com',
        ], [
            'name' => 'Anggota FTKD',
            'password' => bcrypt('password123'),
        ]);

        User::updateOrCreate([
            'email' => 'admin@ftkd.com',
        ], [
            'name' => 'Admin FTKD',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);

        // Sample anggotas for admin list (useful for development/testing)
        Anggota::updateOrCreate([
            'nim' => 'FTKD001',
        ], [
            'nama' => 'Budi Santoso',
            'jurusan' => 'Teknik Informatika',
            'angkatan' => '2022',
            'status' => 'Anggota Biasa',
            'jenis_kelamin' => 'L',
            'kontak' => '081234567890',
        ]);

        Anggota::updateOrCreate([
            'nim' => 'FTKD002',
        ], [
            'nama' => 'Siti Aminah',
            'jurusan' => 'Ilmu Komunikasi',
            'angkatan' => '2021',
            'status' => 'Kader',
            'jenis_kelamin' => 'P',
            'kontak' => '082345678901',
        ]);

        Anggota::updateOrCreate([
            'nim' => 'FTKD003',
        ], [
            'nama' => 'Agus Wijaya',
            'jurusan' => 'Manajemen',
            'angkatan' => '2020',
            'status' => 'Pengurus',
            'jenis_kelamin' => 'L',
            'kontak' => '083456789012',
        ]);
    }
}
