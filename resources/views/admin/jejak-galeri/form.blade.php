@extends('admin.layout')
@section('judul', $item->exists ? 'Edit Foto Galeri' : 'Tambah Foto Galeri')

@section('konten')
<section class="bg-white border border-slate-200/60 rounded-2xl shadow-sm p-6 max-w-2xl">
    <form method="POST" action="{{ $item->exists ? route('admin.jejak-galeri.update', $item) : route('admin.jejak-galeri.store') }}" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @if ($item->exists)
            @method('PUT')
        @endif

        <div>
            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Judul</label>
            <input type="text" name="judul" value="{{ old('judul', $item->judul) }}" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">
            @error('judul') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Caption</label>
            <textarea name="caption" rows="3" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">{{ old('caption', $item->caption) }}</textarea>
            @error('caption') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Urutan</label>
                <input type="number" min="0" name="sort_order" value="{{ old('sort_order', $item->sort_order ?? 0) }}" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Foto</label>
                <input type="file" name="image" accept="image/*" {{ $item->exists ? '' : 'required' }} class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">
            </div>
        </div>

        @if ($item->exists && $item->image)
            <div class="overflow-hidden rounded-2xl border border-slate-200">
                <img src="{{ str_starts_with($item->image, 'http') ? $item->image : asset('storage/' . $item->image) }}" alt="{{ $item->judul }}" class="h-56 w-full object-cover">
            </div>
        @endif

        <div class="flex justify-end gap-3 pt-2">
            <a href="{{ route('admin.jejak-galeri.index') }}" class="px-5 py-2.5 rounded-xl text-sm font-semibold text-slate-500 hover:bg-slate-100 transition">Batal</a>
            <button type="submit" class="px-5 py-2.5 rounded-xl bg-primary text-white text-sm font-semibold shadow-md hover:bg-primary-light transition">Simpan</button>
        </div>
    </form>
</section>
@endsection
