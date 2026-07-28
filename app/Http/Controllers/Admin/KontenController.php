<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Konten;
use Illuminate\Http\Request;

class KontenController extends Controller
{
    public function index()
    {
        $kontens = Konten::orderBy('section')->get();

        return view('admin.konten.index', compact('kontens'));
    }

    public function edit(Konten $konten)
    {
        return view('admin.konten.form', compact('konten'));
    }

    public function update(Request $request, Konten $konten)
    {
        $data = $request->validate([
            'judul' => 'nullable|string|max:150',
            'isi' => 'nullable|string',
        ]);

        $konten->update($data);

        return redirect()->route('admin.konten.index')->with('success', 'Konten berhasil diperbarui.');
    }
}
