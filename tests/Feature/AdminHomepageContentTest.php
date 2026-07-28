<?php

namespace Tests\Feature;

use App\Models\Konten;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminHomepageContentTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_and_update_homepage_content_sections(): void
    {
        $admin = User::factory()->create([
            'name' => 'Admin Rayon',
            'email' => 'admin@example.com',
            'role' => 'admin',
        ]);

        Konten::create([
            'section' => 'home_profil',
            'judul' => 'Profil Lama',
            'isi' => 'Isi lama',
        ]);

        $response = $this->actingAs($admin)->get(route('admin.beranda.index'));

        $response->assertOk();
        $response->assertSee('Kelola Beranda');

        $updateResponse = $this->actingAs($admin)->post(route('admin.beranda.update'), [
            'sections' => [
                'home_pengurus' => ['judul' => 'Pengurus Rayon FTKD', 'isi' => 'Tim pengurus masa khidmat 2025-2026.'],
                'home_profil' => ['judul' => 'Profil Pergerakan', 'isi' => 'Profil rayon yang dinamis.'],
                'home_jejak' => ['judul' => 'Jejak Pergerakan', 'isi' => 'Kegiatan dan capaian rayon.'],
                'home_last_update' => ['judul' => 'Last Update', 'isi' => 'Update terbaru dari rayon.'],
                'struktur_pengurus' => ['judul' => 'Struktur Pengurus', 'isi' => 'Susunan pengurus rayon FTKD.'],
            ],
        ]);

        $updateResponse->assertRedirect(route('admin.beranda.index'));
        $this->assertDatabaseHas('kontens', [
            'section' => 'home_profil',
            'judul' => 'Profil Pergerakan',
            'isi' => 'Profil rayon yang dinamis.',
        ]);
    }
}
