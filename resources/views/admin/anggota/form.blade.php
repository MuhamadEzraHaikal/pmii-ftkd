@extends('admin.layout')
@php($role = old('role', $role ?? ($anggota->status === 'Pengurus' ? 'pengurus' : 'anggota')))
@php($isPengurus = $role === 'pengurus')
@section('judul', $anggota->exists ? ($isPengurus ? 'Edit Pengurus' : 'Edit Anggota') : ($isPengurus ? 'Tambah Pengurus' : 'Tambah Anggota'))

@section('konten')
<section class="bg-white border border-slate-200/60 rounded-2xl shadow-sm p-6 max-w-2xl">
    <form method="POST" action="{{ $anggota->exists ? route('admin.anggota.update', $anggota) : route('admin.anggota.store') }}" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @if ($anggota->exists) @method('PUT') @endif
        <input type="hidden" name="role" value="{{ $role }}">

        @if ($isPengurus)
            <div class="rounded-2xl border border-blue-200 bg-blue-50 p-4 text-sm text-slate-600">
                <p class="font-semibold text-slate-900">Mode Tambah Pengurus</p>
                <p class="mt-1">Data ini akan disimpan sebagai pengurus. Status akan otomatis diset menjadi <span class="font-semibold">Pengurus</span>.</p>
            </div>
        @endif

        <div>
            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Nama Lengkap</label>
            <input type="text" name="nama" value="{{ old('nama', $anggota->nama) }}" required
                   class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">
            @error('nama') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">NIM</label>
                <input type="text" name="nim" value="{{ old('nim', $anggota->nim) }}" required
                       class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">
                @error('nim') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Angkatan</label>
                <input type="text" name="angkatan" value="{{ old('angkatan', $anggota->angkatan) }}" required
                       class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">
            </div>
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Jurusan</label>
            <select name="jurusan" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">
                @foreach ([
                    'Teknik Informatika',
                    'Sistem Informasi',
                    'Teknik Elektro',
                    'Teknik Mesin',
                    'Desain Komunikasi Visual',
                    'Teknik Sipil',
                ] as $jurusan)
                    <option value="{{ $jurusan }}" @selected(old('jurusan', $anggota->jurusan) === $jurusan)>{{ $jurusan }}</option>
                @endforeach
            </select>
            @error('jurusan') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Status</label>
                @if ($isPengurus)
                    <input type="hidden" name="status" value="Pengurus">
                    <select disabled class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm">
                        <option>Pengurus</option>
                    </select>
                @else
                    <select name="status" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm">
                        @foreach (['Anggota Baru','Anggota Biasa','Kader'] as $s)
                            <option value="{{ $s }}" @selected(old('status', $anggota->status) === $s)>{{ $s }}</option>
                        @endforeach
                    </select>
                @endif
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm">
                    <option value="L" @selected(old('jenis_kelamin', $anggota->jenis_kelamin) === 'L')>Laki-laki</option>
                    <option value="P" @selected(old('jenis_kelamin', $anggota->jenis_kelamin) === 'P')>Perempuan</option>
                </select>
            </div>
        </div>

        @if ($isPengurus)
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Jabatan Pengurus</label>
                <select name="jabatan" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">
                    @foreach ($jabatanOptions as $jabatan)
                        <option value="{{ $jabatan }}" @selected(old('jabatan', $anggota->jabatan) === $jabatan)>{{ $jabatan }}</option>
                    @endforeach
                </select>
                @error('jabatan') <p class="text-xs text-rose-600 mt-1">{{ $message }}</p> @enderror
            </div>
        @endif

        <div>
            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">No. Kontak</label>
            <input type="text" name="kontak" value="{{ old('kontak', $anggota->kontak) }}"
                   class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary">
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Foto {{ $anggota->exists ? '(kosongkan jika tidak diganti)' : '' }}</label>
            <input type="file" name="foto" accept="image/*"
                   class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm">
        </div>

        <div class="flex justify-end gap-3 pt-2">
            <a href="{{ route('admin.anggota.index') }}" class="px-5 py-2.5 rounded-xl text-sm font-semibold text-slate-500 hover:bg-slate-100 transition">Batal</a>
            <button type="submit" class="px-5 py-2.5 rounded-xl bg-primary text-white text-sm font-semibold shadow-md hover:bg-primary-light transition">Simpan</button>
        </div>
    </form>
</section>
@endsection
