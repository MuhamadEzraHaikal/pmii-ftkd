@extends('admin.layout')
@section('judul', 'Galeri Jejak Pergerakan')

@section('konten')
<div class="flex items-center justify-between mb-5 gap-4">
    <div>
        <p class="text-xs font-semibold uppercase tracking-wider text-primary">Galeri Jejak</p>
        <h2 class="text-xl font-bold text-slate-900">Kelola Foto Galeri</h2>
        <p class="mt-1 text-sm text-slate-500">Tambah, ubah, urutkan, atau hapus gambar yang tampil pada section Jejak Pergerakan.</p>
    </div>
    <a href="{{ route('admin.jejak-galeri.create') }}" class="inline-flex items-center gap-2 rounded-xl bg-primary px-5 py-2.5 text-sm font-semibold text-white shadow-md hover:bg-primary-light transition">
        <i data-lucide="image-plus" class="w-4 h-4"></i> Tambah Foto
    </a>
</div>

<section class="bg-white border border-slate-200/60 rounded-2xl shadow-sm overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="border-b border-slate-100 text-[11px] font-bold text-slate-400 uppercase tracking-wider">
                <th class="py-3.5 px-6">Foto</th>
                <th class="py-3.5 px-6">Judul</th>
                <th class="py-3.5 px-6">Caption</th>
                <th class="py-3.5 px-6">Urutan</th>
                <th class="py-3.5 px-6 text-right pr-8">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100 text-sm text-slate-600">
            @forelse ($items as $item)
                <tr class="hover:bg-slate-50/60">
                    <td class="py-3.5 px-6">
                        <img src="{{ str_starts_with($item->image, 'http') ? $item->image : asset('storage/' . $item->image) }}" alt="{{ $item->judul }}" class="h-16 w-24 rounded-lg object-cover border border-slate-200">
                    </td>
                    <td class="py-3.5 px-6 font-semibold text-slate-800">{{ $item->judul }}</td>
                    <td class="py-3.5 px-6">{{ $item->caption ?? '-' }}</td>
                    <td class="py-3.5 px-6">{{ $item->sort_order }}</td>
                    <td class="py-3.5 px-6 text-right pr-8">
                        <div class="flex items-center justify-end gap-1.5">
                            <a href="{{ route('admin.jejak-galeri.edit', $item) }}" class="p-2 text-slate-400 hover:text-amber-600 hover:bg-amber-50 rounded-lg transition"><i data-lucide="pencil" class="w-4 h-4"></i></a>
                            <form action="{{ route('admin.jejak-galeri.destroy', $item) }}" method="POST" onsubmit="return confirm('Hapus foto ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="p-2 text-slate-400 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="py-10 text-center text-slate-400 text-sm">Belum ada foto galeri.</td></tr>
            @endforelse
        </tbody>
    </table>
</section>

<div class="mt-5">{{ $items->links() }}</div>
<script>lucide.createIcons();</script>
@endsection
