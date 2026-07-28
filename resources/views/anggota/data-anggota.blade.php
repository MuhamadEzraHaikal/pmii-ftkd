{{-- resources/views/anggota/data-anggota.blade.php --}}
{{-- Halaman Data Anggota — Rayon FTKD --}}

@php
    // Data contoh (dummy) — ganti dengan data dari controller, misal: $anggotas
    $anggotas = $anggotas ?? collect([
        (object)[
            'nama' => 'Ahmad Fauzi Ramadhan',
            'nim' => '2210631010001',
            'jurusan' => 'Pendidikan Agama Islam',
            'angkatan' => '2022',
            'status' => 'Kader',
            'jenis_kelamin' => 'L',
            'kontak' => '0812-3456-7890',
            'foto' => 'https://i.pravatar.cc/80?img=12',
        ],
        (object)[
            'nama' => 'Siti Nur Halimah',
            'nim' => '2210631010045',
            'jurusan' => 'Pendidikan Bahasa Arab',
            'angkatan' => '2022',
            'status' => 'Anggota Biasa',
            'jenis_kelamin' => 'P',
            'kontak' => '0813-2244-5566',
            'foto' => 'https://i.pravatar.cc/80?img=47',
        ],
        (object)[
            'nama' => 'Muhammad Ilham Baihaqi',
            'nim' => '2310631010078',
            'jurusan' => 'Pendidikan Guru MI',
            'angkatan' => '2023',
            'status' => 'Anggota Baru',
            'jenis_kelamin' => 'L',
            'kontak' => '0857-1122-3344',
            'foto' => 'https://i.pravatar.cc/80?img=33',
        ],
        (object)[
            'nama' => 'Rizka Amelia Putri',
            'nim' => '2110631010012',
            'jurusan' => 'Pendidikan Agama Islam',
            'angkatan' => '2021',
            'status' => 'Pengurus',
            'jenis_kelamin' => 'P',
            'kontak' => '0821-9988-7766',
            'foto' => 'https://i.pravatar.cc/80?img=25',
        ],
        (object)[
            'nama' => 'Fahmi Alawi Nasution',
            'nim' => '2310631010102',
            'jurusan' => 'Pendidikan Bahasa Arab',
            'angkatan' => '2023',
            'status' => 'Anggota Baru',
            'jenis_kelamin' => 'L',
            'kontak' => '0898-4433-2211',
            'foto' => 'https://i.pravatar.cc/80?img=51',
        ],
    ]);

    // Ringkasan statistik
    $total = $anggotas->count();
    $totalKader = $anggotas->where('status', 'Kader')->count();
    $totalPengurus = $anggotas->where('status', 'Pengurus')->count();
    $totalBaru = $anggotas->where('status', 'Anggota Baru')->count();

    $statusStyle = [
        'Pengurus'       => 'bg-blue-50 text-primary border-blue-200/40',
        'Kader'          => 'bg-emerald-50 text-emerald-700 border-emerald-200/40',
        'Anggota Biasa'  => 'bg-slate-100 text-slate-600 border-slate-200/60',
        'Anggota Baru'   => 'bg-amber-50 text-amber-700 border-amber-200/40',
    ];
@endphp

<section class="mb-6">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-2">
        <div>
            <p class="text-xs font-semibold text-primary uppercase tracking-wider mb-1">Basis Data Rayon</p>
            <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">Data Anggota</h1>
            <p class="text-sm text-slate-500 mt-1">Kelola dan pantau data keanggotaan Sahabat/i Rayon FTKD.</p>
        </div>
</section>

<!-- KARTU RINGKASAN -->
<section class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
    <div class="bg-white border border-slate-200/60 rounded-2xl p-5 shadow-sm">
        <div class="w-10 h-10 rounded-xl bg-blue-50 text-primary flex items-center justify-center mb-3">
            <i data-lucide="users" class="w-5 h-5"></i>
        </div>
        <p class="text-2xl font-extrabold text-slate-900">{{ $total }}</p>
        <p class="text-xs text-slate-500 font-medium mt-0.5">Total Anggota</p>
    </div>

    <div class="bg-white border border-slate-200/60 rounded-2xl p-5 shadow-sm">
        <div class="w-10 h-10 rounded-xl bg-blue-50 text-primary flex items-center justify-center mb-3">
            <i data-lucide="shield-check" class="w-5 h-5"></i>
        </div>
        <p class="text-2xl font-extrabold text-slate-900">{{ $totalPengurus }}</p>
        <p class="text-xs text-slate-500 font-medium mt-0.5">Pengurus Aktif</p>
    </div>

    <div class="bg-white border border-slate-200/60 rounded-2xl p-5 shadow-sm">
        <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center mb-3">
            <i data-lucide="award" class="w-5 h-5"></i>
        </div>
        <p class="text-2xl font-extrabold text-slate-900">{{ $totalKader }}</p>
        <p class="text-xs text-slate-500 font-medium mt-0.5">Sudah Kader</p>
    </div>

    <div class="bg-white border border-slate-200/60 rounded-2xl p-5 shadow-sm">
        <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center mb-3">
            <i data-lucide="sparkles" class="w-5 h-5"></i>
        </div>
        <p class="text-2xl font-extrabold text-slate-900">{{ $totalBaru }}</p>
        <p class="text-xs text-slate-500 font-medium mt-0.5">Anggota Baru</p>
    </div>
</section>

<!-- FILTER & PENCARIAN -->
<section class="bg-white border border-slate-200/60 rounded-2xl shadow-sm mb-6 p-4 flex flex-col sm:flex-row gap-3 sm:items-center sm:justify-between">
    <div class="relative w-full sm:max-w-xs">
        <i data-lucide="search" class="w-4 h-4 absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400"></i>
        <input type="text" id="cari-anggota" placeholder="Cari nama atau NIM..."
               class="w-full bg-slate-50 border border-slate-200 pl-10 pr-3 py-2.5 rounded-xl text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/10 transition"
               oninput="filterAnggota()">
    </div>

    <div class="flex items-center gap-2 flex-wrap">
        <select id="filter-status" onchange="filterAnggota()"
                class="bg-slate-50 border border-slate-200 rounded-xl text-sm font-medium text-slate-600 px-3 py-2.5 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/10 transition">
            <option value="">Semua </option>
            <option value="Pengurus">Pengurus</option>
            <option value="Kader">Kader</option>
            <option value="Anggota Biasa">Anggota </option>
        </select>

        <button type="button" class="p-2.5 text-slate-500 hover:text-primary bg-slate-50 border border-slate-200 rounded-xl hover:bg-slate-100 transition" title="Ekspor data">
            <i data-lucide="download" class="w-4 h-4"></i>
        </button>
    </div>
</section>

<!-- TABEL DATA ANGGOTA -->
<section class="bg-white border border-slate-200/60 rounded-2xl shadow-sm overflow-hidden">
    <div class="p-5 border-b border-slate-100 flex items-center justify-between bg-slate-50/50">
        <h2 class="font-bold text-slate-900 flex items-center gap-2.5 text-sm">
            <i data-lucide="users" class="w-4 h-4 text-primary"></i> Daftar Anggota
        </h2>
        <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider">{{ $total }} Sahabat/i</span>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse" id="tabel-anggota">
            <thead>
                <tr class="border-b border-slate-100 text-[11px] font-bold text-slate-400 uppercase tracking-wider bg-white">
                    <th class="py-3.5 px-6">Nama Anggota</th>
                    <th class="py-3.5 px-6">NIM</th>
                    <th class="py-3.5 px-6">Jurusan</th>
                    <th class="py-3.5 px-6">Angkatan</th>
                    <th class="py-3.5 px-6">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-sm text-slate-600">
                @forelse ($anggotas as $anggota)
                    <tr class="hover:bg-slate-50/60 transition duration-150 baris-anggota"
                        data-nama="{{ strtolower($anggota->nama) }}"
                        data-nim="{{ $anggota->nim }}"
                        data-status="{{ $anggota->status }}">
                        <td class="py-3.5 px-6">
                            <div class="flex items-center gap-3">
                                <img src="{{ $anggota->foto_url }}" alt="{{ $anggota->nama }}"
                                     class="w-9 h-9 rounded-lg object-cover border border-slate-200">
                                <div>
                                    <p class="font-semibold text-slate-800 leading-tight">{{ $anggota->nama }}</p>
                                    <p class="text-xs text-slate-400 leading-tight">{{ $anggota->kontak }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-3.5 px-6 text-slate-500 font-mono text-xs">{{ $anggota->nim }}</td>
                        <td class="py-3.5 px-6 text-slate-500">{{ $anggota->jurusan }}</td>
                        <td class="py-3.5 px-6 text-slate-500">{{ $anggota->angkatan }}</td>
                        <td class="py-3.5 px-6">
                            <span class="inline-flex items-center px-4 py-2 rounded-lg text-sm font-bold border {{ $statusStyle[$anggota->status] ?? 'bg-slate-100 text-slate-600 border-slate-200/60' }}">
                                {{ $anggota->status }}
                            </span>
                @empty
                    <tr>
                        <td colspan="6" class="py-10 text-center text-slate-400 text-sm">
                            Belum ada data anggota yang tercatat.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div id="tidak-ditemukan" class="hidden py-10 text-center text-slate-400 text-sm">
        Tidak ada anggota yang cocok dengan pencarian.
    </div>
</section>

<!-- MODAL TAMBAH ANGGOTA -->
<div id="modal-tambah-anggota" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/40 backdrop-blur-sm">
    <div class="bg-white rounded-2xl shadow-xl w-full max-w-lg overflow-hidden">
        <div class="flex items-center justify-between px-6 py-5 border-b border-slate-100">
            <h3 class="font-bold text-slate-900 text-lg">Tambah Anggota Baru</h3>
            <button type="button" onclick="document.getElementById('modal-tambah-anggota').classList.add('hidden')"
                    class="p-1.5 text-slate-400 hover:text-slate-700 rounded-lg hover:bg-slate-100 transition">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>

        <form method="POST" action="{{ route('anggota.store') }}" class="px-6 py-5 space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Nama Lengkap</label>
                <input type="text" name="nama" required placeholder="cth. Ahmad Fauzi Ramadhan"
                       class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/10 transition">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">NIM</label>
                    <input type="text" name="nim" required placeholder="cth. 2210631010001"
                           class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/10 transition">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Angkatan</label>
                    <input type="text" name="angkatan" required placeholder="cth. 2023"
                           class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/10 transition">
                </div>
            </div>

            <div>
                <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Jurusan</label>
                <input type="text" name="jurusan" required placeholder="cth. Pendidikan Agama Islam"
                       class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/10 transition">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Status Keanggotaan</label>
                    <select name="status" required
                            class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/10 transition">
                        <option value="Anggota Baru">Anggota Baru</option>
                        <option value="Anggota Biasa">Anggota Biasa</option>
                        <option value="Kader">Kader</option>
                        <option value="Pengurus">Pengurus</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">No. Kontak</label>
                    <input type="text" name="kontak" required placeholder="cth. 0812-3456-7890"
                           class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/10 transition">
                </div>
            </div>

            <div class="flex justify-end gap-3 pt-2">
                <button type="button" onclick="document.getElementById('modal-tambah-anggota').classList.add('hidden')"
                        class="px-5 py-2.5 rounded-xl text-sm font-semibold text-slate-500 hover:bg-slate-100 transition">
                    Batal
                </button>
                <button type="submit"
                        class="px-5 py-2.5 rounded-xl bg-primary text-white text-sm font-semibold shadow-md shadow-blue-900/10 hover:bg-primary-light transition">
                    Simpan Anggota
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function filterAnggota() {
        const kata = document.getElementById('cari-anggota').value.toLowerCase();
        const status = document.getElementById('filter-status').value;
        const baris = document.querySelectorAll('#tabel-anggota .baris-anggota');
        let tampil = 0;

        baris.forEach(row => {
            const cocokNama = row.dataset.nama.includes(kata) || row.dataset.nim.includes(kata);
            const cocokStatus = !status || row.dataset.status === status;
            const tampilkan = cocokNama && cocokStatus;
            row.classList.toggle('hidden', !tampilkan);
            if (tampilkan) tampil++;
        });

        document.getElementById('tidak-ditemukan').classList.toggle('hidden', tampil !== 0);
    }
</script>