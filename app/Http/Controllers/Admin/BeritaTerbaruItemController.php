<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BeritaTerbaruItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaTerbaruItemController extends Controller
{
    public function index()
    {
        $items = BeritaTerbaruItem::orderBy('sort_order')->orderBy('id')->paginate(12);

        return view('admin.berita-terbaru.index', compact('items'));
    }

    public function create()
    {
        return view('admin.berita-terbaru.form', [
            'item' => new BeritaTerbaruItem,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:150',
            'kategori' => 'nullable|string|max:80',
            'status_label' => 'nullable|string|max:80',
            'isi' => 'nullable|string',
            'tanggal_label' => 'nullable|string|max:80',
            'link_url' => 'nullable|url|max:255',
            'sort_order' => 'nullable|integer|min:0',
            'image' => 'required|image|max:4096',
        ]);

        $data['image'] = $request->file('image')->store('berita-terbaru', 'public');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        BeritaTerbaruItem::create($data);

        return redirect()->route('admin.berita-terbaru.index')->with('success', 'Berita terbaru berhasil ditambahkan.');
    }

    public function edit(BeritaTerbaruItem $berita_terbaru)
    {
        return view('admin.berita-terbaru.form', [
            'item' => $berita_terbaru,
        ]);
    }

    public function update(Request $request, BeritaTerbaruItem $berita_terbaru)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:150',
            'kategori' => 'nullable|string|max:80',
            'status_label' => 'nullable|string|max:80',
            'isi' => 'nullable|string',
            'tanggal_label' => 'nullable|string|max:80',
            'link_url' => 'nullable|url|max:255',
            'sort_order' => 'nullable|integer|min:0',
            'image' => 'nullable|image|max:4096',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($berita_terbaru->image);
            $data['image'] = $request->file('image')->store('berita-terbaru', 'public');
        }

        $data['sort_order'] = $data['sort_order'] ?? 0;

        $berita_terbaru->update($data);

        return redirect()->route('admin.berita-terbaru.index')->with('success', 'Berita terbaru berhasil diperbarui.');
    }

    public function destroy(BeritaTerbaruItem $berita_terbaru)
    {
        Storage::disk('public')->delete($berita_terbaru->image);
        $berita_terbaru->delete();

        return back()->with('success', 'Berita terbaru berhasil dihapus.');
    }
}
