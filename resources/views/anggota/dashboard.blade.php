<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Anggota - PMII Rayon FTKD</title>
    <link rel="icon" href="{{ asset('LOGO Rayon FTKD.ico') }}" type="image/x-icon"/>
    
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary": "#004481",
                        "primary-light": "#005baa",
                        "brand-yellow": "#fecb00",
                        "brand-bg": "#F8F9FA"
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-brand-bg text-slate-800 font-sans antialiased">

    <div class="flex min-h-screen">
        <aside class="w-64 bg-white border-r border-slate-200/60 p-6 flex flex-col justify-between hidden md:flex shrink-0">
            <div>
                <div class="flex items-center gap-3 mb-8 px-2 py-1 border-b border-slate-100 pb-4">
                    <div class="w-10 h-10 rounded-xl overflow-hidden border border-slate-200 bg-white shadow-sm shrink-0">
                        <img src="{{ asset('logo_rayon.png') }}" alt="Logo Rayon FTKD" class="w-full h-full object-contain">
                    </div>
                    <div class="flex flex-col">
                        <span class="text-sm font-bold tracking-tight text-slate-900 leading-none">Haloo Batttt!</span>
                        <span class="text-[10px] text-slate-400 font-medium mt-1 uppercase tracking-wider">Rayon FTKD</span>
                    </div>
                </div>

                <nav class="space-y-1.5">
                    <a href="{{ route('dashboard') }}" 
                       class="flex items-center gap-3 px-4 py-3 text-sm font-semibold rounded-xl transition duration-200 {{ request()->routeIs('dashboard') && !request()->query('view') ? 'text-white bg-primary shadow-md shadow-blue-900/10' : 'text-slate-500 hover:text-primary hover:bg-slate-50' }}">
                        <i data-lucide="layout-dashboard" class="w-4 h-4"></i> Dashboard
                    </a>
                    
                    <a href="{{ route('dashboard', ['view' => 'pembelajaran']) }}" 
                       class="flex items-center gap-3 px-4 py-3 text-sm font-semibold rounded-xl transition duration-200 {{ request()->query('view') === 'pembelajaran' ? 'text-white bg-primary shadow-md shadow-blue-900/10' : 'text-slate-500 hover:text-primary hover:bg-slate-50' }}">
                        <i data-lucide="book-open" class="w-4 h-4"></i> Pembelajaran
                    </a>
                    
                    <a href="{{ route('dashboard', ['view' => 'agenda']) }}" 
                       class="flex items-center gap-3 px-4 py-3 text-sm font-semibold rounded-xl transition duration-200 {{ request()->query('view') === 'agenda' ? 'text-white bg-primary shadow-md shadow-blue-900/10' : 'text-slate-500 hover:text-primary hover:bg-slate-50' }}">
                        <i data-lucide="calendar" class="w-4 h-4"></i> Agenda Kegiatan
                    </a>
                    
                    <a href="{{ route('dashboard', ['view' => 'ruang-diskusi']) }}" 
                       class="flex items-center gap-3 px-4 py-3 text-sm font-semibold rounded-xl transition duration-200 {{ request()->query('view') === 'ruang-diskusi' ? 'text-white bg-primary shadow-md shadow-blue-900/10' : 'text-slate-500 hover:text-primary hover:bg-slate-50' }}">
                        <i data-lucide="message-square" class="w-4 h-4"></i> Ruang Diskusi
                    </a>
                    
                    <a href="{{ route('dashboard', ['view' => 'arsip']) }}" 
                       class="flex items-center gap-3 px-4 py-3 text-sm font-semibold rounded-xl transition duration-200 {{ request()->query('view') === 'arsip' ? 'text-white bg-primary shadow-md shadow-blue-900/10' : 'text-slate-500 hover:text-primary hover:bg-slate-50' }}">
                        <i data-lucide="file-text" class="w-4 h-4"></i> Arsip Administrasi
                    </a>
                    
                    <a href="{{ route('dashboard', ['view' => 'anggota']) }}" 
                       class="flex items-center gap-3 px-4 py-3 text-sm font-semibold rounded-xl transition duration-200 {{ request()->query('view') === 'anggota' ? 'text-white bg-primary shadow-md shadow-blue-900/10' : 'text-slate-500 hover:text-primary hover:bg-slate-50' }}">
                        <i data-lucide="users" class="w-4 h-4"></i> Data Anggota
                    </a>
                </nav>
            </div>

            <div class="pt-4 border-t border-slate-100 text-center text-[11px] text-slate-400 font-medium tracking-wide uppercase">
                PMII Rayon FTKD
            </div>
        </aside>

        <main class="flex-1 p-6 lg:p-8 max-w-7xl mx-auto w-full overflow-y-auto">
            
            <header class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
                <div class="relative w-full max-w-md">
                    <i data-lucide="search" class="w-4 h-4 absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                    <input type="text" placeholder="Cari info kegiatan atau berkas..." 
                           class="w-full bg-white border border-slate-200 pl-11 pr-12 py-2.5 rounded-xl text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/10 transition shadow-sm">
                    <span class="absolute right-3 top-1/2 -translate-y-1/2 text-[10px] text-slate-400 border border-slate-200 px-1.5 py-0.5 rounded bg-slate-50 font-mono hidden sm:inline-block">⌘ F</span>
                </div>
                
                <div class="flex items-center gap-4 justify-between sm:justify-end">
                    <div class="flex items-center gap-3">
                        <button class="p-2.5 text-slate-500 hover:text-primary bg-white border border-slate-200 rounded-xl shadow-sm hover:bg-slate-50 transition relative">
                            <i data-lucide="bell" class="w-4.5 h-4.5"></i>
                            <span class="absolute top-2 right-2 w-2 h-2 bg-rose-500 rounded-full"></span>
                        </button>
                        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="rounded-xl border border-red-200 bg-red-50/60 px-4 py-2.5 text-sm font-semibold text-red-600 transition hover:bg-red-100/80 flex items-center gap-2">
                                <i data-lucide="log-out" class="w-4 h-4"></i> Keluar
                            </button>
                        </form>
                        
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" 
                             alt="Avatar" class="w-10 h-10 rounded-xl border border-slate-200 shadow-sm object-cover ml-1">
                    </div>
                </div>
            </header>

            @php
                $view = request()->query('view', 'dashboard');
            @endphp

            @if ($view === 'agenda')
                @include('anggota.agenda')
            @elseif ($view === 'arsip')
                @include('anggota.arsip')

            @elseif ($view === 'anggota')
                @include('anggota.data-anggota')

            @elseif ($view === 'pembelajaran')
                <div class="rounded-2xl border border-slate-200/60 bg-white p-8 shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-primary flex items-center justify-center mb-4">
                        <i data-lucide="book-open" class="w-6 h-6"></i>
                    </div>
                    <h2 class="text-xl font-bold text-slate-900">Pembelajaran</h2>
                    <p class="mt-1 text-sm text-slate-500">Modul materi kaderisasi, PKD, dan MAPABA sedang disiapkan oleh pengurus rayon untuk menunjang proses pembelajaran.</p>
                </div>
                
            @elseif ($view === 'ruang-diskusi')
                @include('anggota.ruang-diskusi')
            @else
                <section class="mb-8">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-2">
                        <div>
                            <p class="text-xs font-semibold text-primary uppercase tracking-wider mb-1">Beranda Anggota</p>
                            <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">
                                Selamat datang, {{ Auth::user()->name ?? 'Sahabat' }}!
                            </h1>
                            <p class="text-sm text-slate-500 mt-1">Pantau perkembangan agenda dan proses pembelajaran pergerakanmu di sini.</p>
                        </div>
                    </div>
                </section>

                <section class="bg-white border border-slate-200/60 rounded-2xl shadow-sm mb-6 overflow-hidden">
                    <div class="p-5 border-b border-slate-100 flex items-center justify-between bg-slate-50/50">
                        <h2 class="font-bold text-slate-900 flex items-center gap-2.5 text-sm">
                            <i data-lucide="layers" class="w-4 h-4 text-primary"></i> Ringkasan Kegiatan Terbaru
                        </h2>
                        <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Rayon FTKD</span>
                    </div>

                    @if ($agendas->isEmpty())
                        <div class="p-10 text-center text-slate-500">Belum ada agenda mendatang. Silakan periksa kembali nanti.</div>
                    @else
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="border-b border-slate-100 text-[11px] font-bold text-slate-400 uppercase tracking-wider bg-white">
                                        <th class="py-3.5 px-6">Nama Kegiatan Resmi</th>
                                        <th class="py-3.5 px-6">Tanggal Pelaksanaan</th>
                                        <th class="py-3.5 px-6 text-right pr-8">Status Agenda</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 text-sm text-slate-600">
                                    @foreach ($agendas->take(5) as $agenda)
                                        <tr class="hover:bg-slate-50/60 transition duration-150">
                                            <td class="py-4 px-6 font-semibold text-slate-800 flex items-center gap-2">
                                                <span class="w-1.5 h-1.5 rounded-full {{ $agenda->status === 'Terjadwal' ? 'bg-primary' : 'bg-emerald-500' }}"></span> {{ $agenda->judul }}
                                            </td>
                                            <td class="py-4 px-6 text-slate-500">{{ $agenda->tanggal->translatedFormat('d F Y') }}</td>
                                            <td class="py-4 px-6 text-right pr-8">
                                                <span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-bold bg-slate-100 text-slate-700 border border-slate-200/60">{{ $agenda->status }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </section>
            @endif

        </main>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>