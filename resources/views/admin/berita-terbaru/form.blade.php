@extends('admin.layout')
@section('judul', $item->exists ? 'Edit Berita Terbaru' : 'Tambah Berita Terbaru')

@section('konten')
<section class="bg-white border border-slate-200/60 rounded-2xl shadow-sm p-6 max-w-3xl">
    <form method="POST" action="{{ $item->exists ? route('admin.berita-terbaru.update', $item) : route('admin.berita-terbaru.store') }}" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @if ($item->exists)
            @method('PUT')
        @endif

        <div>
            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Judul</label>
            <input type="text" name="judul" value="{{ old('judul', $item->judul) }}" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">
            @error('judul') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Kategori</label>
                <input type="text" name="kategori" value="{{ old('kategori', $item->kategori) }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary" placeholder="Contoh: 📢 Kabar Gembira">
                @error('kategori') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Status Label</label>
                <input type="text" name="status_label" value="{{ old('status_label', $item->status_label) }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary" placeholder="Contoh: Sukses">
                @error('status_label') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
            </div>
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Isi Ringkas</label>
            <textarea name="isi" rows="4" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">{{ old('isi', $item->isi) }}</textarea>
            @error('isi') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Label Waktu</label>
                <input type="text" name="tanggal_label" value="{{ old('tanggal_label', $item->tanggal_label) }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary" placeholder="Contoh: 2 Minggu yang lalu">
                @error('tanggal_label') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Urutan</label>
                <input type="number" min="0" name="sort_order" value="{{ old('sort_order', $item->sort_order ?? 0) }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">
                @error('sort_order') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
            </div>
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Link Selengkapnya</label>
            <input type="url" name="link_url" value="{{ old('link_url', $item->link_url) }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary" placeholder="https://...">
            @error('link_url') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Gambar</label>
            <input type="file" name="image" accept="image/*" {{ $item->exists ? '' : 'required' }} class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">
            @error('image') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
        </div>

        @if ($item->exists && $item->image)
            <div class="overflow-hidden rounded-2xl border border-slate-200">
                <img src="{{ str_starts_with($item->image, 'http') ? $item->image : asset('storage/' . $item->image) }}" alt="{{ $item->judul }}" class="h-56 w-full object-cover">
            </div>
        @endif

        <div class="flex justify-end gap-3 pt-2">
            <a href="{{ route('admin.berita-terbaru.index') }}" class="px-5 py-2.5 rounded-xl text-sm font-semibold text-slate-500 hover:bg-slate-100 transition">Batal</a>
            <button type="submit" class="px-5 py-2.5 rounded-xl bg-primary text-white text-sm font-semibold shadow-md hover:bg-primary-light transition">Simpan</button>
        </div>
    </form>
</section>
@endsection
