<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JejakPergerakanItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JejakPergerakanItemController extends Controller
{
    public function index()
    {
        $items = JejakPergerakanItem::orderBy('sort_order')->orderBy('id')->paginate(12);

        return view('admin.jejak-galeri.index', compact('items'));
    }

    public function create()
    {
        return view('admin.jejak-galeri.form', [
            'item' => new JejakPergerakanItem,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:150',
            'caption' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer|min:0',
            'image' => 'required|image|max:4096',
        ]);

        $data['image'] = $request->file('image')->store('jejak-pergerakan', 'public');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        JejakPergerakanItem::create($data);

        return redirect()->route('admin.jejak-galeri.index')->with('success', 'Foto galeri berhasil ditambahkan.');
    }

    public function edit(JejakPergerakanItem $item)
    {
        return view('admin.jejak-galeri.form', [
            'item' => $item,
        ]);
    }

    public function update(Request $request, JejakPergerakanItem $item)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:150',
            'caption' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer|min:0',
            'image' => 'nullable|image|max:4096',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($item->image);
            $data['image'] = $request->file('image')->store('jejak-pergerakan', 'public');
        }

        $data['sort_order'] = $data['sort_order'] ?? 0;

        $item->update($data);

        return redirect()->route('admin.jejak-galeri.index')->with('success', 'Foto galeri berhasil diperbarui.');
    }

    public function destroy(JejakPergerakanItem $item)
    {
        Storage::disk('public')->delete($item->image);
        $item->delete();

        return back()->with('success', 'Foto galeri berhasil dihapus.');
    }
}
