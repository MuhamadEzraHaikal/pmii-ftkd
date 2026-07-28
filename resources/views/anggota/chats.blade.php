{{-- resources/views/anggota/chats.blade.php --}}
{{-- Halaman Ruang Diskusi — Rayon FTKD --}}

@php
    // Data contoh (dummy) — ganti dengan data dari controller, misal: $rooms dan $pesans
    $rooms = $rooms ?? collect([
        (object)[
            'id' => 1,
            'nama' => 'Diskusi Umum Rayon',
            'ikon' => 'message-circle',
            'terakhir' => 'Fahmi: Siap sahabat, ditunggu ya!',
            'waktu' => '10:24',
            'unread' => 3,
        ],
        (object)[
            'id' => 2,
            'nama' => 'Panitia PKD 2026',
            'ikon' => 'clipboard-list',
            'terakhir' => 'Rizka: Proposal sudah aku upload di arsip',
            'waktu' => '09:12',
            'unread' => 0,
        ],
        (object)[
            'id' => 3,
            'nama' => 'Komparasi Antar Rayon',
            'ikon' => 'users-round',
            'terakhir' => 'Ilham: Jadwal baksos digeser ya',
            'waktu' => 'Kemarin',
            'unread' => 1,
        ],
        (object)[
            'id' => 4,
            'nama' => 'Alumni & Senior',
            'ikon' => 'graduation-cap',
            'terakhir' => 'Kak Dedi: Terima kasih atas laporannya',
            'waktu' => 'Senin',
            'unread' => 0,
        ],
    ]);

    $pesans = $pesans ?? collect([
        (object)['nama' => 'Siti Nur Halimah', 'isi' => 'Assalamualaikum sahabat/i, jangan lupa rapat sore ini jam 16.00 ya di sekret.', 'waktu' => '09:40', 'saya' => false, 'foto' => 'https://i.pravatar.cc/80?img=47'],
        (object)['nama' => 'Ahmad Fauzi Ramadhan', 'isi' => 'Waalaikumsalam, siap sahabat. Aku bawa materi kaderisasinya sekalian.', 'waktu' => '09:42', 'saya' => false, 'foto' => 'https://i.pravatar.cc/80?img=12'],
        (object)['nama' => 'Kamu', 'isi' => 'Oke sahabat, aku menyusul habis kuliah jam 15.30.', 'waktu' => '09:45', 'saya' => true, 'foto' => 'https://i.pravatar.cc/80?img=33'],
        (object)['nama' => 'Rizka Amelia Putri', 'isi' => 'Jangan lupa bawa berkas absensi minggu lalu juga sahabat.', 'waktu' => '09:50', 'saya' => false, 'foto' => 'https://i.pravatar.cc/80?img=25'],
        (object)['nama' => 'Fahmi Alawi Nasution', 'isi' => 'Siap sahabat, ditunggu ya!', 'waktu' => '10:24', 'saya' => false, 'foto' => 'https://i.pravatar.cc/80?img=51'],
    ]);

    $roomAktif = $rooms->first();
@endphp

<section class="mb-6">
    <p class="text-xs font-semibold text-primary uppercase tracking-wider mb-1">Komunikasi Internal</p>
    <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">Ruang Diskusi</h1>
    <p class="text-sm text-slate-500 mt-1">Obrolan dan koordinasi antar sahabat/i Rayon FTKD.</p>
</section>

<section class="bg-white border border-slate-200/60 rounded-2xl shadow-sm overflow-hidden" style="height: 640px;">
    <div class="flex h-full">

        <!-- DAFTAR ROOM -->
        <div class="w-full max-w-[280px] border-r border-slate-100 flex flex-col shrink-0">
            <div class="p-4 border-b border-slate-100">
                <div class="relative">
                    <i data-lucide="search" class="w-4 h-4 absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400"></i>
                    <input type="text" placeholder="Cari topik diskusi..."
                           class="w-full bg-slate-50 border border-slate-200 pl-9 pr-3 py-2 rounded-xl text-xs focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/10 transition">
                </div>
            </div>

            <div class="flex-1 overflow-y-auto divide-y divide-slate-50" id="daftar-room">
                @foreach ($rooms as $room)
                    <button type="button"
                        onclick="pilihRoom(this)"
                        data-nama="{{ $room->nama }}"
                        class="w-full text-left px-4 py-3.5 flex items-center gap-3 transition duration-150 {{ $loop->first ? 'bg-blue-50/60 border-l-2 border-primary' : 'hover:bg-slate-50 border-l-2 border-transparent' }}">
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-primary flex items-center justify-center shrink-0">
                            <i data-lucide="{{ $room->ikon }}" class="w-4.5 h-4.5"></i>
                        </div>
                        <div class="min-w-0 flex-1">
                            <div class="flex items-center justify-between gap-2">
                                <p class="text-sm font-semibold text-slate-800 truncate">{{ $room->nama }}</p>
                                <span class="text-[10px] text-slate-400 shrink-0">{{ $room->waktu }}</span>
                            </div>
                            <div class="flex items-center justify-between gap-2 mt-0.5">
                                <p class="text-xs text-slate-400 truncate">{{ $room->terakhir }}</p>
                                @if ($room->unread > 0)
                                    <span class="shrink-0 w-4.5 h-4.5 flex items-center justify-center bg-primary text-white text-[10px] font-bold rounded-full">{{ $room->unread }}</span>
                                @endif
                            </div>
                        </div>
                    </button>
                @endforeach
            </div>
        </div>

        <!-- JENDELA OBROLAN -->
        <div class="flex-1 flex flex-col min-w-0">

            <!-- Header room aktif -->
            <div class="px-5 py-4 border-b border-slate-100 flex items-center justify-between bg-slate-50/50 shrink-0">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-xl bg-blue-50 text-primary flex items-center justify-center">
                        <i data-lucide="{{ $roomAktif->ikon }}" class="w-4 h-4"></i>
                    </div>
                    <div>
                        <p id="judul-room" class="text-sm font-bold text-slate-900 leading-tight">{{ $roomAktif->nama }}</p>
                        <p class="text-xs text-emerald-600 font-medium leading-tight flex items-center gap-1 mt-0.5">
                            <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span> 12 sahabat aktif
                        </p>
                    </div>
                </div>
                <button type="button" class="p-2 text-slate-400 hover:text-primary hover:bg-white rounded-lg transition" title="Info room">
                    <i data-lucide="info" class="w-4 h-4"></i>
                </button>
            </div>

            <!-- Daftar pesan -->
            <div class="flex-1 overflow-y-auto px-5 py-5 space-y-4" id="daftar-pesan">
                <div class="flex justify-center">
                    <span class="text-[11px] font-semibold text-slate-400 bg-slate-100 px-3 py-1 rounded-full">Hari ini</span>
                </div>

                @foreach ($pesans as $pesan)
                    @if ($pesan->saya)
                        <div class="flex justify-end gap-2.5">
                            <div class="max-w-[70%]">
                                <div class="bg-primary text-white text-sm rounded-2xl rounded-tr-sm px-4 py-2.5 shadow-sm">
                                    {{ $pesan->isi }}
                                </div>
                                <p class="text-[10px] text-slate-400 mt-1 text-right pr-1">{{ $pesan->waktu }}</p>
                            </div>
                        </div>
                    @else
                        <div class="flex items-start gap-2.5">
                            <img src="{{ $pesan->foto }}" alt="{{ $pesan->nama }}" class="w-8 h-8 rounded-lg object-cover shrink-0 mt-1">
                            <div class="max-w-[70%]">
                                <p class="text-xs font-semibold text-slate-500 mb-1 ml-1">{{ $pesan->nama }}</p>
                                <div class="bg-slate-100 text-slate-700 text-sm rounded-2xl rounded-tl-sm px-4 py-2.5">
                                    {{ $pesan->isi }}
                                </div>
                                <p class="text-[10px] text-slate-400 mt-1 ml-1">{{ $pesan->waktu }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Kotak input pesan -->
            <div class="px-5 py-4 border-t border-slate-100 shrink-0">
                <form onsubmit="return kirimPesan(event)" class="flex items-center gap-2.5">
                    <button type="button" class="p-2.5 text-slate-400 hover:text-primary hover:bg-slate-50 rounded-xl transition shrink-0" title="Lampirkan berkas">
                        <i data-lucide="paperclip" class="w-4.5 h-4.5"></i>
                    </button>
                    <input type="text" id="input-pesan" placeholder="Tulis pesan untuk sahabat/i..." autocomplete="off"
                           class="flex-1 bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/10 transition">
                    <button type="submit" class="p-2.5 bg-primary text-white rounded-xl shadow-md shadow-blue-900/10 hover:bg-primary-light transition shrink-0" title="Kirim pesan">
                        <i data-lucide="send" class="w-4.5 h-4.5"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    function pilihRoom(el) {
        document.querySelectorAll('#daftar-room button').forEach(btn => {
            btn.classList.remove('bg-blue-50/60', 'border-primary');
            btn.classList.add('border-transparent');
        });
        el.classList.add('bg-blue-50/60', 'border-primary');
        el.classList.remove('border-transparent');
        document.getElementById('judul-room').textContent = el.dataset.nama;
    }

    function kirimPesan(event) {
        event.preventDefault();
        const input = document.getElementById('input-pesan');
        const teks = input.value.trim();
        if (!teks) return false;

        const daftarPesan = document.getElementById('daftar-pesan');
        const waktu = new Date().toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' });

        const bungkus = document.createElement('div');
        bungkus.className = 'flex justify-end gap-2.5';
        bungkus.innerHTML = `
            <div class="max-w-[70%]">
                <div class="bg-primary text-white text-sm rounded-2xl rounded-tr-sm px-4 py-2.5 shadow-sm">${teks}</div>
                <p class="text-[10px] text-slate-400 mt-1 text-right pr-1">${waktu}</p>
            </div>`;

        daftarPesan.appendChild(bungkus);
        daftarPesan.scrollTop = daftarPesan.scrollHeight;
        input.value = '';

        // TODO: kirim pesan ke server lewat fetch()/axios agar tersimpan permanen
        return false;
    }
</script>

document.addEventListener("DOMContentLoaded", function() {
    const daftarPesan = document.getElementById('daftar-pesan');
    if(daftarPesan) {
        daftarPesan.scrollTop = daftarPesan.scrollHeight;
    }
});