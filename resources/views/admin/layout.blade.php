<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - PMII Rayon FTKD | @yield('judul', 'Dashboard')</title>
    <link rel="icon" href="{{ asset('LOGO Rayon FTKD.ico') }}" type="image/x-icon"/>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { "primary": "#004481", "primary-light": "#005baa", "brand-yellow": "#fecb00", "brand-bg": "#F8F9FA" },
                    fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'] }
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
                    <div class="w-8 h-8 rounded-lg bg-primary flex items-center justify-center text-white font-bold text-sm">P</div>
                    <div class="flex flex-col">
                        <span class="text-sm font-bold tracking-tight text-slate-900 leading-none">Panel Admin</span>
                        <span class="text-[10px] text-slate-400 font-medium mt-1 uppercase tracking-wider">Rayon FTKD</span>
                    </div>
                </div>

                <nav class="space-y-1.5">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 text-sm font-semibold rounded-xl transition duration-200 {{ request()->routeIs('admin.dashboard') ? 'text-white bg-primary shadow-md shadow-blue-900/10' : 'text-slate-500 hover:text-primary hover:bg-slate-50' }}">
                        <i data-lucide="layout-dashboard" class="w-4 h-4"></i> Dashboard
                    </a>
                    <a href="{{ route('admin.anggota.index') }}" class="flex items-center gap-3 px-4 py-3 text-sm font-semibold rounded-xl transition duration-200 {{ request()->routeIs('admin.anggota.*') ? 'text-white bg-primary shadow-md shadow-blue-900/10' : 'text-slate-500 hover:text-primary hover:bg-slate-50' }}">
                        <i data-lucide="users" class="w-4 h-4"></i> Data Anggota
                    </a>
                    <a href="{{ route('admin.agenda.index') }}" class="flex items-center gap-3 px-4 py-3 text-sm font-semibold rounded-xl transition duration-200 {{ request()->routeIs('admin.agenda.*') ? 'text-white bg-primary shadow-md shadow-blue-900/10' : 'text-slate-500 hover:text-primary hover:bg-slate-50' }}">
                        <i data-lucide="calendar" class="w-4 h-4"></i> Agenda Kegiatan
                    </a>
                    <a href="{{ route('admin.arsip.index') }}" class="flex items-center gap-3 px-4 py-3 text-sm font-semibold rounded-xl transition duration-200 {{ request()->routeIs('admin.arsip.*') ? 'text-white bg-primary shadow-md shadow-blue-900/10' : 'text-slate-500 hover:text-primary hover:bg-slate-50' }}">
                        <i data-lucide="file-text" class="w-4 h-4"></i> Arsip Administrasi
                    </a>
                    </a>
                    <a href="{{ route('admin.beranda.index') }}" class="flex items-center gap-3 px-4 py-3 text-sm font-semibold rounded-xl transition duration-200 {{ request()->routeIs('admin.beranda.*') ? 'text-white bg-primary shadow-md shadow-blue-900/10' : 'text-slate-500 hover:text-primary hover:bg-slate-50' }}">
                        <i data-lucide="home" class="w-4 h-4"></i> Kelola Beranda
                    </a>
                    <a href="{{ route('admin.jejak-galeri.index') }}" class="flex items-center gap-3 px-4 py-3 text-sm font-semibold rounded-xl transition duration-200 {{ request()->routeIs('admin.jejak-galeri.*') ? 'text-white bg-primary shadow-md shadow-blue-900/10' : 'text-slate-500 hover:text-primary hover:bg-slate-50' }}">
                        <i data-lucide="image-plus" class="w-4 h-4"></i> Galeri Jejak
                    </a>
                    <a href="{{ route('admin.berita-terbaru.index') }}" class="flex items-center gap-3 px-4 py-3 text-sm font-semibold rounded-xl transition duration-200 {{ request()->routeIs('admin.berita-terbaru.*') ? 'text-white bg-primary shadow-md shadow-blue-900/10' : 'text-slate-500 hover:text-primary hover:bg-slate-50' }}">
                        <i data-lucide="newspaper" class="w-4 h-4"></i> Berita Terbaru
                    </a>
                </nav>
            </div>

            <div class="pt-4 border-t border-slate-100">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full rounded-xl border border-red-200 bg-red-50/60 px-4 py-2.5 text-sm font-semibold text-red-600 transition hover:bg-red-100/80 flex items-center justify-center gap-2">
                        <i data-lucide="log-out" class="w-4 h-4"></i> Keluar
                    </button>
                </form>
            </div>
        </aside>

        <main class="flex-1 p-6 lg:p-8 max-w-7xl mx-auto w-full overflow-y-auto">

            <header class="flex items-center justify-between mb-8">
                <div>
                    <p class="text-xs font-semibold text-primary uppercase tracking-wider mb-1">Panel Admin</p>
                    <h1 class="text-2xl font-extrabold text-slate-900 tracking-tight">@yield('judul', 'Dashboard')</h1>
                </div>
                <div class="text-sm text-slate-500">
                    Halo, <span class="font-semibold text-slate-800">{{ Auth::user()->name ?? 'Admin' }}</span>
                </div>
            </header>

            @if (session('success'))
                <div class="mb-6 rounded-xl border border-emerald-200 bg-emerald-50 px-5 py-3 text-sm font-semibold text-emerald-700 flex items-center gap-2">
                    <i data-lucide="check-circle" class="w-4 h-4"></i> {{ session('success') }}
                </div>
            @endif

            @yield('konten')

        </main>
    </div>

    <script>lucide.createIcons();</script>
</body>
</html>
