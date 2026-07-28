@php
    $rooms = $rooms ?? collect(session('ruang_diskusi.rooms', []))->map(function ($room) {
        return is_object($room) ? (array) $room : (array) $room;
    });

    $currentRoom = $currentRoom ?? $rooms->first();

    $messages = $messages ?? collect(session('ruang_diskusi.pesans.' . ($currentRoom['id'] ?? ''), []))->map(function ($message) {
        return is_object($message) ? (array) $message : (array) $message;
    });

    $topikCount = $rooms->count();
    $pesanCount = $messages->count();
    $onlineCount = max(3, $pesanCount + 2);
@endphp

<div class="space-y-6">
    <header class="rounded-3xl border border-slate-200/70 bg-white p-5 shadow-sm">
        <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
            <div>
                <p class="mb-1 text-xs font-semibold uppercase tracking-[0.25em] text-primary">Komunikasi Internal</p>
                <h1 class="text-3xl font-extrabold tracking-tight text-slate-900">Ruang Diskusi</h1>
                <p class="mt-1 text-sm text-slate-500">Pantau percakapan, koordinasi, dan topik penting antar sahabat/i Rayon FTKD.</p>
            </div>
            <div class="flex flex-wrap gap-2">
                <button id="toggle-new" type="button" class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-3.5 py-2 text-sm font-semibold text-slate-700 shadow-sm transition hover:border-primary hover:text-primary">
                    <i data-lucide="plus" class="h-4 w-4"></i>
                    Buat Topik
                </button>
                <form id="new-room-form" action="{{ route('ruang-diskusi.store') }}" method="POST" class="hidden items-center gap-2">
                    @csrf
                    <input name="nama" id="new-room-name" placeholder="Judul diskusi" required class="rounded-xl border border-slate-200 px-3 py-2 text-sm" />
                    <input name="ikon" placeholder="ikon (opsional)" class="rounded-xl border border-slate-200 px-3 py-2 text-sm" />
                    <button type="submit" class="inline-flex items-center gap-2 rounded-xl bg-primary px-3.5 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-primary-light">
                        <i data-lucide="message-square-plus" class="h-4 w-4"></i>
                        Diskusi Baru
                    </button>
                </form>
                @if(session('success'))
                    <div class="w-full mt-2 text-sm text-emerald-600">{{ session('success') }}</div>
                @endif
            </div>
        </div>
    </header>

    <section class="grid gap-4 md:grid-cols-3">
        <div class="rounded-2xl border border-slate-200/70 bg-white p-4 shadow-sm">
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-400">Topik Aktif</p>
            <p id="topik-count" class="mt-2 text-2xl font-bold text-slate-900">{{ $topikCount }}</p>
            <p class="text-sm text-slate-500">Room diskusi yang masih hangat</p>
        </div>
        <div class="rounded-2xl border border-slate-200/70 bg-white p-4 shadow-sm">
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-400">Pesan Hari Ini</p>
            <p id="pesan-count" class="mt-2 text-2xl font-bold text-slate-900">{{ $pesanCount }}</p>
            <p class="text-sm text-slate-500">Interaksi dari anggota rayon</p>
        </div>
        <div class="rounded-2xl border border-slate-200/70 bg-white p-4 shadow-sm">
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-400">Sahabat Online</p>
            <p id="online-count" class="mt-2 text-2xl font-bold text-slate-900">{{ $onlineCount }}</p>
            <p class="text-sm text-slate-500">Sedang aktif berdiskusi</p>
        </div>
    </section>

    @if ($rooms->isEmpty())
        <section class="flex-1 overflow-hidden rounded-3xl border border-slate-200/70 bg-white shadow-sm flex items-center justify-center p-12">
            <div class="text-center">
                <p class="text-lg font-bold text-slate-900 mb-2">Belum ada ruang diskusi</p>
                <p class="text-sm text-slate-500 mb-4">Belum ada topik diskusi yang dibuat. Ajak sahabat untuk memulai percakapan!</p>
                <button id="open-new-from-empty" class="inline-flex items-center gap-2 rounded-xl bg-primary px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-light">
                    <i data-lucide="plus" class="h-4 w-4"></i> Buat Diskusi Baru
                </button>
                <div class="mt-3 text-xs text-slate-400">Atau gunakan tombol "Buat Topik" di pojok atas.</div>
            </div>
        </section>
    @else
        <section class="flex-1 overflow-hidden rounded-3xl border border-slate-200/70 bg-white shadow-sm">
            <div class="flex h-full flex-col lg:flex-row">
                <aside class="w-full border-b border-slate-100 bg-slate-50/70 p-3 lg:w-[300px] lg:border-b-0 lg:border-r lg:p-4">
                    <div class="mb-3">
                        <div class="relative">
                            <i data-lucide="search" class="absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400"></i>
                            <input type="text" placeholder="Cari topik diskusi..."
                                class="w-full rounded-xl border border-slate-200 bg-white py-2.5 pl-9 pr-3 text-sm text-slate-600 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/10">
                        </div>
                    </div>

                    <div class="space-y-2 overflow-y-auto pr-1" id="daftar-room">
                        @foreach ($rooms as $room)
                            <a href="{{ route('dashboard', ['view' => 'ruang-diskusi', 'room' => $room['id']]) }}"
                                class="block w-full rounded-2xl border px-3 py-3 text-left transition {{ $room['id'] === ($currentRoom['id'] ?? null) ? 'border-primary bg-blue-50/60' : 'border-transparent bg-white hover:border-slate-200 hover:bg-slate-50' }}">
                                <div class="flex items-start gap-3">
                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-primary">
                                        <i data-lucide="{{ $room['ikon'] }}" class="h-4 w-4"></i>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <div class="flex items-center justify-between gap-2">
                                            <p class="truncate text-sm font-semibold text-slate-800">{{ $room['nama'] }}</p>
                                            <span class="shrink-0 text-[10px] text-slate-400">{{ $room['waktu'] }}</span>
                                        </div>
                                        <div class="mt-1 flex items-center justify-between gap-2">
                                            <p class="truncate text-xs text-slate-500">{{ $room['terakhir'] }}</p>
                                            @if (($room['unread'] ?? 0) > 0)
                                                <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-primary text-[10px] font-bold text-white">{{ $room['unread'] }}</span>
                                            @endif
                                        </div>
                                        <p class="mt-1 text-[11px] font-medium text-emerald-600">{{ $room['status'] }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </aside>

                <div class="flex min-w-0 flex-1 flex-col">
                    <div class="flex shrink-0 items-center justify-between border-b border-slate-100 bg-white px-5 py-4">
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-primary">
                                <i id="room-icon" data-lucide="{{ $currentRoom['ikon'] }}" class="h-4 w-4"></i>
                            </div>
                            <div>
                                <p id="judul-room" class="text-sm font-bold text-slate-900">{{ $currentRoom['nama'] }}</p>
                                <p class="mt-0.5 flex items-center gap-1 text-xs font-medium text-emerald-600">
                                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span> {{ $onlineCount }} sahabat aktif
                                </p>
                            </div>
                        </div>
                        <form id="delete-room-form" action="{{ route('ruang-diskusi.destroy', $currentRoom['id']) }}" method="POST" class="inline-flex">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="rounded-lg border border-slate-200 px-3 py-2 text-sm font-semibold text-slate-600 transition hover:border-red-300 hover:bg-red-50 hover:text-red-600">
                                <i data-lucide="trash" class="h-4 w-4"></i> Hapus Topik
                            </button>
                        </form>
                    </div>

                    <div class="flex-1 overflow-y-auto bg-slate-50/50 px-5 py-5" id="daftar-pesan">
                        <div class="mb-4 flex justify-center">
                            <span class="rounded-full bg-white px-3 py-1 text-[11px] font-semibold text-slate-400 shadow-sm">Hari ini</span>
                        </div>

                        @forelse ($messages as $pesan)
                            @if (! empty($pesan['saya']))
                                <div class="mb-3 flex justify-end">
                                    <div class="max-w-[75%]">
                                        <div class="rounded-2xl rounded-tr-sm bg-primary px-4 py-2.5 text-sm text-white shadow-sm">
                                            {{ $pesan['isi'] }}
                                        </div>
                                        <p class="mt-1 pr-1 text-right text-[10px] text-slate-400">{{ $pesan['waktu'] }}</p>
                                    </div>
                                </div>
                            @else
                                <div class="mb-3 flex items-start gap-2.5">
                                    <img src="{{ $pesan['foto'] }}" alt="{{ $pesan['nama'] }}" class="mt-1 h-8 w-8 shrink-0 rounded-lg object-cover">
                                    <div class="max-w-[75%]">
                                        <p class="ml-1 mb-1 text-xs font-semibold text-slate-500">{{ $pesan['nama'] }}</p>
                                        <div class="rounded-2xl rounded-tl-sm bg-white px-4 py-2.5 text-sm text-slate-700 shadow-sm">
                                            {{ $pesan['isi'] }}
                                        </div>
                                        <p class="ml-1 mt-1 text-[10px] text-slate-400">{{ $pesan['waktu'] }}</p>
                                    </div>
                                </div>
                            @endif
                        @empty
                            <div class="rounded-3xl border border-dashed border-slate-200 bg-white p-10 text-center text-slate-500">
                                Belum ada pesan pada topik ini. Kirim pesan pertama kamu sekarang.
                            </div>
                        @endforelse
                    </div>

                    <div class="shrink-0 border-t border-slate-100 bg-white px-4 py-4">
                        <form id="send-message-form" data-room-id="{{ $currentRoom['id'] }}" class="flex items-center gap-2.5">
                            @csrf
                            <button type="button" class="shrink-0 rounded-xl p-2.5 text-slate-400 transition hover:bg-slate-50 hover:text-primary" title="Lampirkan berkas">
                                <i data-lucide="paperclip" class="h-4 w-4"></i>
                            </button>
                            <input type="text" name="isi" id="input-pesan" placeholder="Tulis pesan untuk sahabat/i..." autocomplete="off"
                                class="flex-1 rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm text-slate-600 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/10">
                            <button type="submit" class="shrink-0 rounded-xl bg-primary p-2.5 text-white shadow-sm transition hover:bg-primary-light" title="Kirim pesan">
                                <i data-lucide="send" class="h-4 w-4"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>

<script>
    function scrollPesan() {
        const daftarPesan = document.getElementById('daftar-pesan');
        if (daftarPesan) {
            daftarPesan.scrollTop = daftarPesan.scrollHeight;
        }
    }

    function appendMessage(message) {
        const daftarPesan = document.getElementById('daftar-pesan');
        if (!daftarPesan) {
            return;
        }

        const wrapper = document.createElement('div');
        wrapper.className = 'mb-3 flex justify-end';
        wrapper.innerHTML = `
            <div class="max-w-[75%]">
                <div class="rounded-2xl rounded-tr-sm bg-primary px-4 py-2.5 text-sm text-white shadow-sm">${message.isi}</div>
                <p class="mt-1 pr-1 text-right text-[10px] text-slate-400">${message.waktu}</p>
            </div>`;

        daftarPesan.appendChild(wrapper);
        scrollPesan();
    }

    function updateStats(stats) {
        const topik = document.getElementById('topik-count');
        const pesan = document.getElementById('pesan-count');
        const online = document.getElementById('online-count');

        if (topik) {
            topik.textContent = stats.topikAktif;
        }
        if (pesan) {
            pesan.textContent = stats.pesanHariIni;
        }
        if (online) {
            online.textContent = Math.max(3, stats.pesanHariIni + 2);
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        if (window.lucide) {
            window.lucide.createIcons();
        }

        scrollPesan();

        const toggle = document.getElementById('toggle-new');
        const newForm = document.getElementById('new-room-form');
        const openFromEmpty = document.getElementById('open-new-from-empty');
        const newRoomName = document.getElementById('new-room-name');
        const sendForm = document.getElementById('send-message-form');
        const deleteForm = document.getElementById('delete-room-form');

        if (toggle && newForm) {
            toggle.addEventListener('click', function () {
                newForm.classList.toggle('hidden');
                if (!newForm.classList.contains('hidden') && newRoomName) {
                    newRoomName.focus();
                }
            });
        }

        if (openFromEmpty && newForm) {
            openFromEmpty.addEventListener('click', function () {
                newForm.classList.remove('hidden');
                newForm.scrollIntoView({ behavior: 'smooth', block: 'center' });
                if (newRoomName) {
                    newRoomName.focus();
                }
            });
        }

        if (sendForm) {
            sendForm.addEventListener('submit', async function (event) {
                event.preventDefault();

                const input = this.querySelector('input[name="isi"]');
                const token = this.querySelector('input[name="_token"]')?.value;
                const roomId = this.dataset.roomId;
                const teks = input?.value.trim();

                if (!teks || !roomId) {
                    return;
                }

                try {
                    const response = await fetch(`/dashboard/ruang-diskusi/${roomId}/message`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': token,
                        },
                        body: JSON.stringify({ isi: teks }),
                    });

                    if (!response.ok) {
                        console.error(await response.json());
                        return;
                    }

                    const payload = await response.json();
                    appendMessage(payload.message);
                    input.value = '';
                    updateStats(payload.stats);
                } catch (error) {
                    console.error('Gagal mengirim pesan:', error);
                }
            });
        }

        if (deleteForm) {
            deleteForm.addEventListener('submit', function (event) {
                if (!window.confirm('Hapus topik diskusi ini? Semua pesan dalam topik akan dihapus.')) {
                    event.preventDefault();
                }
            });
        }
    });
</script>
