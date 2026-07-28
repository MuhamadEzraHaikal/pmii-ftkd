<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Arsip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArsipController extends Controller
{
    public function index()
    {
        $arsips = Arsip::latest()->paginate(10);

        return view('admin.arsip.index', compact('arsips'));
    }

    public function create()
    {
        return view('admin.arsip.form', ['arsip' => new Arsip]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:150',
            'kategori' => 'required|in:konstitusi,administrasi,musyawarah,laporan',
            'deskripsi' => 'nullable|string',
            'versi' => 'nullable|string|max:30',
            'berkas' => 'required|file|mimes:pdf,doc,docx|max:51200',
        ]);

        $file = $request->file('berkas');
        $data['file_path'] = $file->store('arsip', 'public');
        $data['file_type'] = strtoupper($file->getClientOriginalExtension());
        $data['ukuran'] = round($file->getSize() / 1024 / 1024, 1).' MB';
        unset($data['berkas']);

        Arsip::create($data);

        return redirect()->route('admin.arsip.index')->with('success', 'Arsip berhasil diunggah.');
    }

    public function edit(Arsip $arsip)
    {
        return view('admin.arsip.form', compact('arsip'));
    }

    public function update(Request $request, Arsip $arsip)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:150',
            'kategori' => 'required|in:konstitusi,administrasi,musyawarah,laporan',
            'deskripsi' => 'nullable|string',
            'versi' => 'nullable|string|max:30',
            'berkas' => 'nullable|file|mimes:pdf,doc,docx|max:51200',
        ]);

        if ($request->hasFile('berkas')) {
            Storage::disk('public')->delete($arsip->file_path);
            $file = $request->file('berkas');
            $data['file_path'] = $file->store('arsip', 'public');
            $data['file_type'] = strtoupper($file->getClientOriginalExtension());
            $data['ukuran'] = round($file->getSize() / 1024 / 1024, 1).' MB';
        }
        unset($data['berkas']);

        $arsip->update($data);

        return redirect()->route('admin.arsip.index')->with('success', 'Arsip berhasil diperbarui.');
    }

    public function destroy(Arsip $arsip)
    {
        Storage::disk('public')->delete($arsip->file_path);
        $arsip->delete();

        return back()->with('success', 'Arsip berhasil dihapus.');
    }
}
