@extends('admin.layout')
@section('judul', 'Dashboard')

@section('konten')
<section class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
    <div class="bg-white border border-slate-200/60 rounded-2xl p-5 shadow-sm">
        <div class="w-10 h-10 rounded-xl bg-blue-50 text-primary flex items-center justify-center mb-3"><i data-lucide="users" class="w-5 h-5"></i></div>
        <p class="text-2xl font-extrabold text-slate-900">{{ $stats['total_anggota'] }}</p>
        <p class="text-xs text-slate-500 font-medium mt-0.5">Total Anggota</p>
    </div>
    <div class="bg-white border border-slate-200/60 rounded-2xl p-5 shadow-sm">
        <div class="w-10 h-10 rounded-xl bg-blue-50 text-primary flex items-center justify-center mb-3"><i data-lucide="shield-check" class="w-5 h-5"></i></div>
        <p class="text-2xl font-extrabold text-slate-900">{{ $stats['total_pengurus'] }}</p>
        <p class="text-xs text-slate-500 font-medium mt-0.5">Pengurus Aktif</p>
    </div>
    <div class="bg-white border border-slate-200/60 rounded-2xl p-5 shadow-sm">
        <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center mb-3"><i data-lucide="calendar" class="w-5 h-5"></i></div>
        <p class="text-2xl font-extrabold text-slate-900">{{ $stats['total_agenda'] }}</p>
        <p class="text-xs text-slate-500 font-medium mt-0.5">Agenda Akan Datang</p>
    </div>
    <div class="bg-white border border-slate-200/60 rounded-2xl p-5 shadow-sm">
        <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center mb-3"><i data-lucide="file-text" class="w-5 h-5"></i></div>
        <p class="text-2xl font-extrabold text-slate-900">{{ $stats['total_arsip'] }}</p>
        <p class="text-xs text-slate-500 font-medium mt-0.5">Dokumen Arsip</p>
    </div>
</section>

<section class="bg-white border border-slate-200/60 rounded-2xl shadow-sm overflow-hidden">
    <div class="p-5 border-b border-slate-100 bg-slate-50/50">
        <h2 class="font-bold text-slate-900 text-sm">Agenda Terdekat</h2>
    </div>
    <div class="divide-y divide-slate-100">
        @forelse ($agendaTerdekat as $agenda)
            <div class="px-6 py-4 flex items-center justify-between">
                <div>
                    <p class="font-semibold text-slate-800 text-sm">{{ $agenda->judul }}</p>
                    <p class="text-xs text-slate-400">{{ $agenda->tanggal->translatedFormat('d F Y') }}</p>
                </div>
                <span class="text-xs font-bold px-2.5 py-1 rounded-lg bg-blue-50 text-primary">{{ $agenda->status }}</span>
            </div>
        @empty
            <div class="px-6 py-10 text-center text-slate-400 text-sm">Belum ada agenda mendatang.</div>
        @endforelse
    </div>
</section>
@endsection
