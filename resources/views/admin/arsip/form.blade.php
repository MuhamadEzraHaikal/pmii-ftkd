@extends('admin.layout')
@section('judul', $arsip->exists ? 'Edit Dokumen' : 'Unggah Dokumen')

@section('konten')
<section class="bg-white border border-slate-200/60 rounded-2xl shadow-sm p-6 max-w-2xl">
    <form method="POST" action="{{ $arsip->exists ? route('admin.arsip.update', $arsip) : route('admin.arsip.store') }}" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @if ($arsip->exists) @method('PUT') @endif

        <div>
            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Judul Dokumen</label>
            <input type="text" name="judul" value="{{ old('judul', $arsip->judul) }}" required
                   class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">
            @error('judul') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Kategori</label>
                <select name="kategori" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm">
                    @foreach (['konstitusi' => 'Konstitusi', 'administrasi' => 'Administrasi', 'musyawarah' => 'Hasil Musyawarah', 'laporan' => 'Laporan'] as $val => $label)
                        <option value="{{ $val }}" @selected(old('kategori', $arsip->kategori) === $val)>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Versi</label>
                <input type="text" name="versi" value="{{ old('versi', $arsip->versi) }}" placeholder="cth. v2024.01"
                       class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">
            </div>
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Deskripsi</label>
            <textarea name="deskripsi" rows="3" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">{{ old('deskripsi', $arsip->deskripsi) }}</textarea>
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Berkas (PDF/DOCX) {{ $arsip->exists ? '- kosongkan jika tidak diganti' : '' }}</label>
            <input type="file" name="berkas" accept=".pdf,.doc,.docx" @if(!$arsip->exists) required @endif
                   class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm">
            @error('berkas') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex justify-end gap-3 pt-2">
            <a href="{{ route('admin.arsip.index') }}" class="px-5 py-2.5 rounded-xl text-sm font-semibold text-slate-500 hover:bg-slate-100 transition">Batal</a>
            <button type="submit" class="px-5 py-2.5 rounded-xl bg-primary text-white text-sm font-semibold shadow-md hover:bg-primary-light transition">Simpan</button>
        </div>
    </form>
</section>
@endsection
