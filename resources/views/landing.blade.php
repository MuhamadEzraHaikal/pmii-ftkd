<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PB PMII Landing Page</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    @endif
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#f7f9ff] text-slate-900">
    <header class="sticky top-0 z-50 border-b border-slate-200 bg-white/95 backdrop-blur-xl">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">
            <a href="/" class="flex items-center gap-3 text-slate-900">
                <img src="logo_rayon.png" alt="PB PMII Logo" class="h-11 w-11 rounded-2xl object-cover" />

                <div>
                    <p class="text-sm font-semibold tracking-[0.24em] uppercase text-sky-700">
                        PMII <br>
                        Rayon <br>
                         Nusa Putra</p>
                </div>
            </a>

            <nav class="hidden items-center gap-8 md:flex">
                <a href="/beranda" class="text-sm font-semibold text-slate-700 hover:text-sky-600 transition">Beranda</a>
                <a href="#visi-misi" class="text-sm font-semibold text-slate-700 hover:text-sky-600 transition">Visi Misi</a>
                <a href="/calender" class="text-sm font-semibold text-slate-700 hover:text-sky-600 transition">Kalender</a>
            </nav>

            <a href="#contact" class="inline-flex items-center rounded-full bg-sky-600 px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-sky-500/20 transition hover:bg-sky-700">
                Hubungi Kami
            </a>
        </div>
    </header>

    <main class="mx-auto max-w-7xl px-0 py-12">
        <section class="relative overflow-hidden rounded-[2rem] bg-slate-950 px-6 py-12 text-white shadow-[0_35px_120px_-40px_rgba(45,53,80,0.3)] sm:px-10 lg:px-14">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(56,189,248,0.18),_transparent_35%),radial-gradient(circle_at_bottom_right,_rgba(59,130,246,0.18),_transparent_30%)]"></div>
            <div class="relative mx-auto flex max-w-6xl flex-col gap-10 lg:flex-row lg:items-center">
                <div class="lg:w-1/2 space-y-6">
                    <p class="inline-flex items-center gap-2 rounded-full border border-sky-400/30 bg-sky-100/10 px-4 py-2 text-sm font-semibold uppercase tracking-[0.24em] text-sky-200">
                        Organisasi Mahasiswa Terbesar
                    </p>
                    <h1 class="max-w-3xl text-5xl font-semibold tracking-tight text-white sm:text-6xl">
                        Upgrade Your Knowledge and Skills with PMII
                    </h1>
                    <p class="max-w-2xl text-lg leading-8 text-slate-200">
                        Kami adalah Pergerakan Mahasiswa Islam Indonesia yang bergerak untuk memperkuat intelektualitas, solidaritas, dan peran sosial pelajar.
                    </p>
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                        <a href="/beranda" class="inline-flex items-center justify-center rounded-full bg-sky-500 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-sky-500/30 transition hover:bg-sky-400">
                            Get Started
                        </a>
                        <a href="#visi-misi" class="inline-flex items-center justify-center rounded-full border border-white/20 bg-white/10 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/20 hover:text-sky-100">
                            Pelajari Selengkapnya
                        </a>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <div class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-white/10 shadow-2xl shadow-slate-900/20">
                        <div class="carousel-track flex transition-transform duration-500 ease-in-out">
                            <div class="min-w-full">
                                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1200&q=80" alt="PMII mobile preview" class="h-[430px] w-full object-cover" />
                            </div>
                            <div class="min-w-full">
                                <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=1200&q=80" alt="PMII activity preview" class="h-[430px] w-full object-cover" />
                            </div>
                            <div class="min-w-full">
                                <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=1200&q=80" alt="PMII event preview" class="h-[430px] w-full object-cover" />
                            </div>
                        </div>
                        <button id="heroPrev" type="button" class="absolute inset-y-0 left-4 z-10 flex items-center justify-center rounded-full bg-white/90 p-3 text-slate-900 shadow-lg transition hover:bg-white sm:left-6">
                            <span class="sr-only">Prev slide</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 4 6 10l6 6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button id="heroNext" type="button" class="absolute inset-y-0 right-4 z-10 flex items-center justify-center rounded-full bg-white/90 p-3 text-slate-900 shadow-lg transition hover:bg-white sm:right-6">
                            <span class="sr-only">Next slide</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="m8 4 6 6-6 6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <div class="absolute bottom-5 left-1/2 flex -translate-x-1/2 gap-2">
                            <button type="button" class="hero-dot h-2.5 w-2.5 rounded-full bg-white/70 ring-1 ring-white/60" data-index="0"></button>
                            <button type="button" class="hero-dot h-2.5 w-2.5 rounded-full bg-white/40 ring-1 ring-white/60" data-index="1"></button>
                            <button type="button" class="hero-dot h-2.5 w-2.5 rounded-full bg-white/40 ring-1 ring-white/60" data-index="2"></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="visi-misi" class="mt-24 rounded-[2rem] bg-white p-8 shadow-sm">
            <div class="grid gap-8 lg:grid-cols-[1fr_0.8fr] lg:items-center">
                <div class="space-y-3">
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-sky-600">Profil Pergerakan</p>
                    <h2 class="text-3xl font-semibold text-slate-950">Pergerakan Mahasiswa Islam Indonesia</h2>
                    <p class="max-w-2xl text-base leading-8 text-slate-600">
                        PMII adalah organisasi mahasiswa yang berdiri sejak 17 April 1960 di Surabaya dan terus berkontribusi bagi bangsa melalui pendidikan, pengkaderan, dan pengabdian masyarakat.
                    </p>
                </div>
                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6 shadow-sm">
                        <p class="text-sm font-semibold uppercase tracking-[0.24em] text-slate-500">Tujuan PMII</p>
                        <p class="mt-3 text-base leading-7 text-slate-700">Mewujudkan pribadi Muslim Indonesia yang bertaqwa, berilmu, berakhlak, dan bertanggung jawab.</p>
                    </div>
                    <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6 shadow-sm">
                        <p class="text-sm font-semibold uppercase tracking-[0.24em] text-slate-500">Visi</p>
                        <p class="mt-3 text-base leading-7 text-slate-700">Menguatkan profesionalitas organisasi menuju era baru PMII dengan basis intelektual mahasiswa.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-24">
            <div class="flex flex-col gap-8 xl:flex-row xl:items-end xl:justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-sky-600">Warta Pergerakan</p>
                    <h2 class="mt-3 text-3xl font-semibold text-slate-950">Update terbaru agenda dan advokasi nasional</h2>
                </div>
                <a href="/calender" class="inline-flex items-center gap-2 rounded-full border border-sky-600 bg-white px-5 py-3 text-sm font-semibold text-sky-700 transition hover:bg-sky-50">
                    Lihat Semua Berita
                    <span class="text-xl">→</span>
                </a>
            </div>

            <div class="mt-8 grid gap-6 xl:grid-cols-3">
                <article class="rounded-3xl bg-white p-6 shadow-sm border border-slate-200 transition hover:shadow-lg">
                    <span class="inline-flex items-center rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold uppercase tracking-[0.28em] text-sky-700">Advokasi</span>
                    <h3 class="mt-5 text-xl font-semibold text-slate-950">Ketua Bidang Advokasi PB PMII</h3>
                    <p class="mt-4 text-slate-600">Tuduhan Mahasiswa Dibayar adalah Cara Keliru Menjawab Kritik Rakyat.</p>
                    <div class="mt-6 flex items-center gap-4 text-sm text-slate-500">
                        <span>24 Jun 2026</span>
                        <span>479 views</span>
                    </div>
                </article>
                <article class="rounded-3xl bg-white p-6 shadow-sm border border-slate-200 transition hover:shadow-lg">
                    <span class="inline-flex items-center rounded-full bg-slate-100 px-3 py-1 text-xs font-semibold uppercase tracking-[0.28em] text-slate-700">Nasional</span>
                    <h3 class="mt-5 text-xl font-semibold text-slate-950">Imbas Krisis "Blackout" Massal</h3>
                    <p class="mt-4 text-slate-600">PB PMII Desak Prabowo Evaluasi Total Menteri ESDM dan Dirut PLN.</p>
                    <div class="mt-6 flex items-center gap-4 text-sm text-slate-500">
                        <span>01 Jul 2026</span>
                        <span>172 views</span>
                    </div>
                </article>
                <article class="rounded-3xl bg-white p-6 shadow-sm border border-slate-200 transition hover:shadow-lg">
                    <span class="inline-flex items-center rounded-full bg-amber-50 px-3 py-1 text-xs font-semibold uppercase tracking-[0.28em] text-amber-700">Kopri</span>
                    <h3 class="mt-5 text-xl font-semibold text-slate-950">KOPRI PB PMII Berikan Dukungan Penuh</h3>
                    <p class="mt-4 text-slate-600">KOPRI Maluku Utara Kawal Kasus Kekerasan Seksual dengan sikap tegas.</p>
                    <div class="mt-6 flex items-center gap-4 text-sm text-slate-500">
                        <span>25 Jun 2026</span>
                        <span>377 views</span>
                    </div>
                </article>
            </div>
        </section>

        <footer class="mt-24 rounded-[2rem] bg-slate-950 px-8 py-12 text-slate-100 shadow-xl">
            <div class="grid gap-10 lg:grid-cols-3">
                <div>
                    <p class="text-sm uppercase tracking-[0.3em] text-sky-400">PB PMII</p>
                    <p class="mt-4 max-w-md text-sm leading-7 text-slate-300">Pergerakan Mahasiswa Islam Indonesia. Tangan terdekat dan maju ke muka. Mengabdi pada agama dan bangsa.</p>
                </div>
                <div>
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-400">Useful Links</p>
                    <ul class="mt-4 space-y-3 text-sm text-slate-300">
                        <li><a href="/beranda" class="hover:text-white">Beranda</a></li>
                        <li><a href="/calender" class="hover:text-white">Kalender</a></li>
                        <li><a href="#visi-misi" class="hover:text-white">Visi Misi</a></li>
                        <li><a href="/" class="hover:text-white">Landing</a></li>
                    </ul>
                </div>
                <div>
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-400">Social Media</p>
                    <ul class="mt-4 space-y-3 text-sm text-slate-300">
                        <li><a href="#" class="hover:text-white">Instagram</a></li>
                        <li><a href="#" class="hover:text-white">Facebook</a></li>
                        <li><a href="#" class="hover:text-white">YouTube</a></li>
                        <li><a href="#" class="hover:text-white">Twitter</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-12 flex flex-col gap-3 border-t border-slate-800 pt-6 text-sm text-slate-400 sm:flex-row sm:items-center sm:justify-between">
                <span>© 2026 PB PMII. All rights reserved.</span>
                <div class="flex flex-wrap gap-4">
                    <a href="#" class="hover:text-white">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-white">Syarat Ketentuan</a>
                </div>
            </div>
        </footer>
    </main>
    <script>
        const track = document.querySelector('.carousel-track');
        const slides = Array.from(track.children);
        const prevButton = document.getElementById('heroPrev');
        const nextButton = document.getElementById('heroNext');
        const dots = Array.from(document.querySelectorAll('.hero-dot'));
        let currentIndex = 0;

        function updateCarousel(index) {
            currentIndex = index;
            track.style.transform = `translateX(-${index * 100}%)`;
            dots.forEach((dot, dotIndex) => {
                dot.classList.toggle('bg-white/70', dotIndex === index);
                dot.classList.toggle('bg-slate-400/50', dotIndex !== index);
            });
        }

        prevButton.addEventListener('click', () => {
            const nextIndex = (currentIndex - 1 + slides.length) % slides.length;
            updateCarousel(nextIndex);
        });

        nextButton.addEventListener('click', () => {
            const nextIndex = (currentIndex + 1) % slides.length;
            updateCarousel(nextIndex);
        });

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                updateCarousel(parseInt(dot.dataset.index, 10));
            });
        });

        updateCarousel(0);
    </script>
</body>
</html>
