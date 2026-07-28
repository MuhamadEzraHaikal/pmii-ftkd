<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Konten;
use Illuminate\Http\Request;

class JejakPergerakanController extends Controller
{
    private const SECTION = 'home_jejak';

    public function index()
    {
        $jejak = Konten::firstOrCreate(
            ['section' => self::SECTION],
            [
                'judul' => 'Jejak Pergerakan',
                'isi' => 'Dokumentasi aktivitas, kebersamaan, dan jejak semangat pergerakan kami.',
            ]
        );

        return view('admin.jejak-pergerakan.index', compact('jejak'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:150',
            'isi' => 'required|string',
            'caption' => 'nullable|string|max:255',
            'existing_image' => 'nullable|string',
            'image' => 'nullable|image|max:4096',
        ]);

        $jejak = Konten::firstOrCreate(
            ['section' => self::SECTION],
            [
                'judul' => 'Jejak Pergerakan',
                'isi' => 'Dokumentasi aktivitas, kebersamaan, dan jejak semangat pergerakan kami.',
            ]
        );

        $imagePath = $data['existing_image'] ?? $jejak->image;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('konten', 'public');
        }

        $jejak->update([
            'judul' => $data['judul'],
            'isi' => $data['isi'],
            'image' => $imagePath,
            'caption' => $data['caption'] ?? null,
        ]);

        return redirect()->route('admin.jejak.index')->with('success', 'Jejak Pergerakan berhasil diperbarui.');
    }
}
