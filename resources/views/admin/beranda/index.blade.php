@extends('admin.layout')
@section('judul', 'Kelola Beranda')

@section('konten')
<div class="space-y-6">
    <div class="rounded-2xl border border-slate-200/60 bg-white p-6 shadow-sm">
        <div class="flex flex-col gap-2 md:flex-row md:items-center md:justify-between">
            <div>
                <p class="text-xs font-semibold uppercase tracking-wider text-primary">Beranda Publik</p>
                <h2 class="text-xl font-bold text-slate-900">Kelola Beranda</h2>
                <p class="mt-1 text-sm text-slate-500">Atur bagian pengurus rayon, profil pergerakan, jejak pergerakan, last update, dan struktur pengurus dari satu panel.</p>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('admin.beranda.update') }}" enctype="multipart/form-data" class="space-y-5">
        @csrf
        @foreach ($sections as $section => $defaults)
            @php($item = $content[$section] ?? null)
            <section class="rounded-2xl border border-slate-200/60 bg-white p-6 shadow-sm">
                <div class="mb-4">
                    <p class="text-xs font-semibold uppercase tracking-wider text-primary">{{ $section }}</p>
                    <h3 class="text-lg font-bold text-slate-900">{{ $defaults['judul'] }}</h3>
                </div>

                <div class="space-y-4">
                    <div>
                        <label class="mb-1.5 block text-sm font-semibold text-slate-700">Judul</label>
                        <input type="text" name="sections[{{ $section }}][judul]" value="{{ old("sections.$section.judul", $item->judul ?? $defaults['judul']) }}" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/10">
                    </div>

                    <div>
                        <label class="mb-1.5 block text-sm font-semibold text-slate-700">Isi</label>
                        <textarea name="sections[{{ $section }}][isi]" rows="4" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/10">{{ old("sections.$section.isi", $item->isi ?? $defaults['isi']) }}</textarea>
                    </div>

                    <div>
                        <label class="mb-1.5 block text-sm font-semibold text-slate-700">Caption</label>
                        <input type="text" name="sections[{{ $section }}][caption]" value="{{ old("sections.$section.caption", $item->caption ?? '') }}" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/10" placeholder="Teks singkat untuk foto atau slide">
                    </div>

                    <div>
                        <label class="mb-1.5 block text-sm font-semibold text-slate-700">Gambar</label>
                        @if ($item?->image)
                            <div class="mb-3 rounded-2xl overflow-hidden border border-slate-200">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="Preview {{ $section }}" class="h-40 w-full object-cover">
                            </div>
                            <input type="hidden" name="sections[{{ $section }}][existing_image]" value="{{ $item->image }}">
                        @endif
                        <input type="file" name="sections[{{ $section }}][image]" accept="image/*" class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/10">
                        <p class="text-xs text-slate-500 mt-2">Biarkan kosong jika tidak ingin mengganti gambar saat ini.</p>
                    </div>
                </div>
            </section>
        @endforeach

        <div class="flex justify-end">
            <button type="submit" class="rounded-xl bg-primary px-5 py-2.5 text-sm font-semibold text-white shadow-md shadow-blue-900/10 transition hover:bg-primary-light">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
