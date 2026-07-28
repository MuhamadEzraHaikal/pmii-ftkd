@extends('admin.layout')
@section('judul', $agenda->exists ? 'Edit Agenda' : 'Tambah Agenda')

@section('konten')
<section class="bg-white border border-slate-200/60 rounded-2xl shadow-sm p-6 max-w-2xl">
    <form method="POST" action="{{ $agenda->exists ? route('admin.agenda.update', $agenda) : route('admin.agenda.store') }}" class="space-y-4">
        @csrf
        @if ($agenda->exists) @method('PUT') @endif

        <div>
            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Nama Kegiatan</label>
            <input type="text" name="judul" value="{{ old('judul', $agenda->judul) }}" required
                   class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">
            @error('judul') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Tanggal</label>
                <input type="date" name="tanggal" value="{{ old('tanggal', optional($agenda->tanggal)->format('Y-m-d')) }}" required
                       class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Waktu</label>
                <input type="time" name="waktu" value="{{ old('waktu', $agenda->waktu) }}"
                       class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">
            </div>
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Lokasi</label>
            <input type="text" name="lokasi" value="{{ old('lokasi', $agenda->lokasi) }}"
                   class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Deskripsi</label>
            <textarea name="deskripsi" rows="3" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">{{ old('deskripsi', $agenda->deskripsi) }}</textarea>
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Status</label>
            <select name="status" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm">
                @foreach (['Akan Datang','Terjadwal','Menunggu','Selesai'] as $s)
                    <option value="{{ $s }}" @selected(old('status', $agenda->status) === $s)>{{ $s }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-end gap-3 pt-2">
            <a href="{{ route('admin.agenda.index') }}" class="px-5 py-2.5 rounded-xl text-sm font-semibold text-slate-500 hover:bg-slate-100 transition">Batal</a>
            <button type="submit" class="px-5 py-2.5 rounded-xl bg-primary text-white text-sm font-semibold shadow-md hover:bg-primary-light transition">Simpan</button>
        </div>
    </form>
</section>
@endsection
