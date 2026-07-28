<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Konten;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    private array $sectionDefaults = [
        'home_carousel_1' => [
            'judul' => 'Carousel Beranda 1',
            'isi' => 'Foto kegiatan PMII untuk slide pertama.',
        ],
        'home_carousel_2' => [
            'judul' => 'Carousel Beranda 2',
            'isi' => 'Foto kegiatan PMII untuk slide kedua.',
        ],
        'home_carousel_3' => [
            'judul' => 'Carousel Beranda 3',
            'isi' => 'Foto kegiatan PMII untuk slide ketiga.',
        ],
        'home_pengurus' => [
            'judul' => 'Pengurus Rayon FTKD',
            'isi' => 'Kenali wajah-wajah pengurus rayon FTKD yang menggerakkan agenda dan aktivitas organisasi.',
        ],
        'home_profil' => [
            'judul' => 'Profil Pergerakan',
            'isi' => 'Profil rayon FTKD sebagai ruang kaderisasi yang dinamis, inklusif, dan solutif.',
        ],
        'home_jejak' => [
            'judul' => 'Jejak Pergerakan',
            'isi' => 'Dokumentasi aktivitas, kebersamaan, dan jejak semangat pergerakan kami.',
        ],
        'home_last_update' => [
            'judul' => 'Last Update',
            'isi' => 'Informasi terbaru dari pengurus rayon FTKD.',
        ],
        'struktur_pengurus' => [
            'judul' => 'Struktur Pengurus',
            'isi' => 'Susunan kepengurusan rayon FTKD masa khidmat terbaru.',
        ],
        'struktur_carousel_1' => [
            'judul' => 'Carousel Struktur 1',
            'isi' => 'Foto struktur pengurus untuk slide pertama.',
        ],
        'struktur_carousel_2' => [
            'judul' => 'Carousel Struktur 2',
            'isi' => 'Foto struktur pengurus untuk slide kedua.',
        ],
        'struktur_carousel_3' => [
            'judul' => 'Carousel Struktur 3',
            'isi' => 'Foto struktur pengurus untuk slide ketiga.',
        ],
    ];

    public function index()
    {
        $this->ensureSections();

        $content = Konten::whereIn('section', array_keys($this->sectionDefaults))
            ->orderBy('section')
            ->get()
            ->keyBy('section');

        return view('admin.beranda.index', [
            'content' => $content,
            'sections' => $this->sectionDefaults,
        ]);
    }

    public function update(Request $request)
    {
        $this->ensureSections();

        $data = $request->validate([
            'sections' => 'required|array',
            'sections.*.judul' => 'nullable|string|max:150',
            'sections.*.isi' => 'nullable|string',
            'sections.*.caption' => 'nullable|string|max:255',
            'sections.*.existing_image' => 'nullable|string',
            'sections.*.image' => 'nullable|image|max:4096',
        ]);

        foreach ($data['sections'] ?? [] as $section => $values) {
            if (! array_key_exists($section, $this->sectionDefaults)) {
                continue;
            }

            $imagePath = $values['existing_image'] ?? null;

            if ($request->hasFile("sections.$section.image")) {
                $uploadedFile = $request->file("sections.$section.image");
                $imagePath = $uploadedFile->store('konten', 'public');
            }

            Konten::updateOrCreate(
                ['section' => $section],
                [
                    'judul' => $values['judul'] ?? $this->sectionDefaults[$section]['judul'],
                    'isi' => $values['isi'] ?? $this->sectionDefaults[$section]['isi'],
                    'image' => $imagePath,
                    'caption' => $values['caption'] ?? null,
                ]
            );
        }

        return redirect()->route('admin.beranda.index')->with('success', 'Konten beranda berhasil diperbarui.');
    }

    private function ensureSections(): void
    {
        foreach ($this->sectionDefaults as $section => $defaults) {
            Konten::firstOrCreate(
                ['section' => $section],
                ['judul' => $defaults['judul'], 'isi' => $defaults['isi']]
            );
        }
    }
}
