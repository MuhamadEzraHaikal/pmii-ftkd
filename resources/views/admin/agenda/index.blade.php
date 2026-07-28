@extends('admin.layout')
@section('judul', 'Agenda Kegiatan')

@section('konten')
<div class="flex items-center justify-end mb-5">
    <a href="{{ route('admin.agenda.create') }}" class="inline-flex items-center gap-2 rounded-xl bg-primary px-5 py-2.5 text-sm font-semibold text-white shadow-md hover:bg-primary-light transition">
        <i data-lucide="calendar-plus" class="w-4 h-4"></i> Tambah Agenda
    </a>
</div>

<section class="bg-white border border-slate-200/60 rounded-2xl shadow-sm overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="border-b border-slate-100 text-[11px] font-bold text-slate-400 uppercase tracking-wider">
                <th class="py-3.5 px-6">Nama Kegiatan</th>
                <th class="py-3.5 px-6">Tanggal</th>
                <th class="py-3.5 px-6">Lokasi</th>
                <th class="py-3.5 px-6">Status</th>
                <th class="py-3.5 px-6 text-right pr-8">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100 text-sm text-slate-600">
            @forelse ($agendas as $agenda)
                <tr class="hover:bg-slate-50/60">
                    <td class="py-3.5 px-6 font-semibold text-slate-800">{{ $agenda->judul }}</td>
                    <td class="py-3.5 px-6">{{ $agenda->tanggal->translatedFormat('d F Y') }}</td>
                    <td class="py-3.5 px-6">{{ $agenda->lokasi ?? '-' }}</td>
                    <td class="py-3.5 px-6"><span class="text-xs font-bold px-2.5 py-1 rounded-lg bg-blue-50 text-primary">{{ $agenda->status }}</span></td>
                    <td class="py-3.5 px-6 text-right pr-8">
                        <div class="flex items-center justify-end gap-1.5">
                            <a href="{{ route('admin.agenda.edit', $agenda) }}" class="p-2 text-slate-400 hover:text-amber-600 hover:bg-amber-50 rounded-lg transition"><i data-lucide="pencil" class="w-4 h-4"></i></a>
                            <form action="{{ route('admin.agenda.destroy', $agenda) }}" method="POST" onsubmit="return confirm('Hapus agenda ini?')">
                                @csrf @method('DELETE')
                                <button class="p-2 text-slate-400 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="py-10 text-center text-slate-400 text-sm">Belum ada agenda.</td></tr>
            @endforelse
        </tbody>
    </table>
</section>

<div class="mt-5">{{ $agendas->links() }}</div>
<script>lucide.createIcons();</script>
@endsection
