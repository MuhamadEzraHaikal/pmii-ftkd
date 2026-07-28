<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterUserTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_register_with_profile_information(): void
    {
        $response = $this->post(route('register'), [
            'name' => 'Budi Santoso',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '2002-05-10',
            'jenis_kelamin' => 'L',
            'email' => 'budi@example.com',
            'whatsapp' => '081234567890',
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'alamat' => 'Jl. Merdeka No. 10',
            'jurusan' => 'Teknik Informatika',
            'angkatan' => '2024',
            'motivasi' => 'Ingin ikut belajar dan berkembang.',
        ]);

        $response->assertRedirect(route('dashboard'));
        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', [
            'email' => 'budi@example.com',
            'name' => 'Budi Santoso',
            'tempat_lahir' => 'Bandung',
            'jenis_kelamin' => 'L',
            'whatsapp' => '081234567890',
            'jurusan' => 'Teknik Informatika',
            'angkatan' => 2024,
        ]);
    }
}
