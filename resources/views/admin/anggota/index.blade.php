@extends('admin.layout')
@section('judul', ($role ?? 'anggota') === 'pengurus' ? 'Data Pengurus' : 'Data Anggota')

@section('konten')
<div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between mb-5">
    <div class="flex flex-wrap gap-2">
        <a href="{{ route('admin.anggota.index', ['role' => 'anggota']) }}" class="inline-flex items-center gap-2 rounded-xl px-4 py-2.5 text-sm font-semibold transition {{ ($role ?? 'anggota') === 'anggota' ? 'bg-primary text-white shadow-md' : 'border border-slate-200 bg-white text-slate-700 hover:bg-slate-50' }}">
            <i data-lucide="users" class="w-4 h-4"></i> Anggota
        </a>
        <a href="{{ route('admin.anggota.index', ['role' => 'pengurus']) }}" class="inline-flex items-center gap-2 rounded-xl px-4 py-2.5 text-sm font-semibold transition {{ ($role ?? '') === 'pengurus' ? 'bg-primary text-white shadow-md' : 'border border-slate-200 bg-white text-slate-700 hover:bg-slate-50' }}">
            <i data-lucide="shield-check" class="w-4 h-4"></i> Pengurus
        </a>
    </div>

    <a href="{{ route('admin.anggota.create', ['role' => ($role ?? 'anggota')]) }}" class="inline-flex items-center gap-2 rounded-xl bg-primary px-5 py-2.5 text-sm font-semibold text-white shadow-md hover:bg-primary-light transition">
        <i data-lucide="user-plus" class="w-4 h-4"></i> Tambah {{ ($role ?? 'anggota') === 'pengurus' ? 'Pengurus' : 'Anggota' }}
    </a>
</div>

<form method="GET" action="{{ route('admin.anggota.index') }}" class="bg-white border border-slate-200/60 rounded-2xl shadow-sm mb-6 p-4 flex flex-col sm:flex-row gap-3 sm:items-center sm:justify-between">
    @if (($role ?? '') !== '')
        <input type="hidden" name="role" value="{{ $role }}">
    @endif
    <input type="text" name="q" value="{{ request('q') }}" placeholder="Cari nama atau NIM..."
           class="w-full sm:max-w-xs bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/10 transition">
    <select name="status" onchange="this.form.submit()" class="bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium text-slate-600 px-3 py-2.5">
        <option value="">Semua Status</option>
        @foreach (['Anggota Baru','Anggota Biasa','Kader','Pengurus'] as $s)
            <option value="{{ $s }}" @selected(request('status') === $s)>{{ $s }}</option>
        @endforeach
    </select>
    <button class="text-sm font-semibold text-primary">Cari</button>
</form>

<section class="bg-white border border-slate-200/60 rounded-2xl shadow-sm overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="border-b border-slate-100 text-[11px] font-bold text-slate-400 uppercase tracking-wider">
                <th class="py-3.5 px-6">Nama</th>
                <th class="py-3.5 px-6">NIM</th>
                <th class="py-3.5 px-6">Jurusan</th>
                <th class="py-3.5 px-6">Jabatan</th>
                <th class="py-3.5 px-6">Status</th>
                <th class="py-3.5 px-6 text-right pr-8">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100 text-sm text-slate-600">
            @forelse ($anggotas as $anggota)
                <tr class="hover:bg-slate-50/60">
                    <td class="py-3.5 px-6 flex items-center gap-3">
                        <img src="{{ $anggota->foto_url }}" class="w-9 h-9 rounded-lg object-cover border border-slate-200">
                        <span class="font-semibold text-slate-800">{{ $anggota->nama }}</span>
                    </td>
                    <td class="py-3.5 px-6 font-mono text-xs">{{ $anggota->nim }}</td>
                    <td class="py-3.5 px-6">{{ $anggota->jurusan }}</td>
                    <td class="py-3.5 px-6">{{ $anggota->jabatan ?? '-' }}</td>
                    <td class="py-3.5 px-6"><span class="text-sm font-bold px-4 py-2 rounded-lg bg-blue-50 text-primary">{{ $anggota->status }}</span></td>
                    <td class="py-3.5 px-6 text-right pr-8">
                        <div class="flex items-center justify-end gap-1.5">
                            <a href="{{ route('admin.anggota.edit', ['anggota' => $anggota, 'role' => $role]) }}" class="p-2 text-slate-400 hover:text-amber-600 hover:bg-amber-50 rounded-lg transition"><i data-lucide="pencil" class="w-4 h-4"></i></a>
                            <form action="{{ route('admin.anggota.destroy', $anggota) }}" method="POST" onsubmit="return confirm('Hapus anggota ini?')">
                                @csrf @method('DELETE')
                                <button class="p-2 text-slate-400 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="py-10 text-center text-slate-400 text-sm">Belum ada data anggota.</td></tr>
            @endforelse
        </tbody>
    </table>
</section>

<div class="mt-5">{{ $anggotas->links() }}</div>

<script>lucide.createIcons();</script>
@endsection
