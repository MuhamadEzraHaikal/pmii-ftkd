{{-- 
    PARTIAL VIEW: Arsip Administrasi
    File ini di-include ke dalam dashboard.blade.php lewat @include('anggota.arsip')
    sehingga TIDAK boleh punya <html>, <head>, <body>, <nav>, atau <footer> sendiri.
    Semua warna & style mengikuti tailwind.config di dashboard.blade.php:
    primary: #004481 | primary-light: #005baa | brand-yellow: #fecb00 | brand-bg: #F8F9FA
--}}

<!-- HERO SECTION -->
<section class="mb-8">
    <div class="rounded-2xl bg-primary p-8 md:p-10 relative overflow-hidden">
        <div class="absolute -top-10 -right-10 w-56 h-56 bg-primary-light/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-10 -left-10 w-56 h-56 bg-brand-yellow/10 rounded-full blur-3xl"></div>

        <div class="relative z-10 max-w-2xl">
            <span class="inline-block px-4 py-1.5 bg-brand-yellow/90 text-primary rounded-full text-xs font-bold uppercase tracking-wider mb-4">
                Pusat Dokumentasi Digital
            </span>
            <h1 class="text-2xl md:text-3xl font-extrabold text-white tracking-tight mb-3 leading-tight">
                Arsip Administrasi <br class="hidden md:block"> Rayon FTKD PMII
            </h1>
            <p class="text-sm text-white/80 leading-relaxed">
                Mewujudkan tata kelola organisasi yang transparan, akuntabel, dan profesional melalui sistem dokumentasi terpadu bagi kader PMII Universitas Nusa Putra.
            </p>
        </div>
    </div>
</section>

<!-- SEARCH & FILTER -->
<section class="mb-6">
    <div class="bg-white border border-slate-200/60 rounded-2xl shadow-sm p-5 flex flex-col lg:flex-row lg:items-center justify-between gap-4">
        <div class="flex overflow-x-auto pb-1 lg:pb-0 gap-2.5 no-scrollbar">
            <button class="arsip-filter-btn active px-5 py-2 rounded-xl text-xs font-bold whitespace-nowrap transition bg-primary text-white shadow-sm" data-filter="semua">
                Semua Dokumen
            </button>
            @php
                $categories = $arsips->pluck('kategori')->filter()->unique()->sort();
            @endphp
            @forelse ($categories as $category)
                <button class="arsip-filter-btn px-5 py-2 rounded-xl text-xs font-bold whitespace-nowrap transition bg-slate-50 text-slate-500 hover:bg-slate-100 border border-slate-200" data-filter="{{ strtolower(str_replace(' ', '-', $category)) }}">
                    {{ $category }}
                </button>
            @empty
            @endforelse
            <button class="arsip-filter-btn px-5 py-2 rounded-xl text-xs font-bold whitespace-nowrap transition bg-slate-50 text-slate-500 hover:bg-slate-100 border border-slate-200" data-filter="hasil-musyawarah">
                Hasil Musyawarah
            </button>
            <button class="arsip-filter-btn px-5 py-2 rounded-xl text-xs font-bold whitespace-nowrap transition bg-slate-50 text-slate-500 hover:bg-slate-100 border border-slate-200" data-filter="laporan">
                Laporan
            </button>
        </div>

        <div class="relative w-full lg:w-96">
            <i data-lucide="search" class="w-4 h-4 absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
            <input id="arsip-search" type="text" placeholder="Cari judul atau kata kunci..."
                   class="w-full pl-11 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/10 transition">
        </div>
    </div>
</section>

<!-- ARCHIVE GRID -->
<section class="space-y-10">
    @if ($arsips->isEmpty())
        <div class="rounded-3xl border border-dashed border-slate-200 bg-slate-50 p-10 text-center text-slate-500">
            Arsip ini masih kosong.
        </div>
    @else
        <div id="arsip-container" class="space-y-10">
            @php
                $categories = $arsips->pluck('kategori')->filter()->unique()->sort();
                $allCategories = array_merge($categories->toArray(), ['Hasil Musyawarah', 'Laporan']);
            @endphp

            @foreach ($allCategories as $categoryName)
                @php
                    $categoryFilter = strtolower(str_replace(' ', '-', $categoryName));
                    $categoryArsips = $arsips->filter(function($arsip) use ($categoryName) {
                        return strtolower(str_replace(' ', '-', $arsip->kategori ?? 'lainnya')) === strtolower(str_replace(' ', '-', $categoryName));
                    });
                @endphp

                @if ($categoryArsips->isNotEmpty())
                    <div class="category-section" data-category="{{ $categoryFilter }}">
                        <div class="flex items-center gap-3 mb-5">
                            <div class="h-6 w-1.5 bg-primary rounded-full"></div>
                            <h2 class="text-lg font-bold text-slate-900">{{ $categoryName }}</h2>
                            <span class="ml-auto text-xs font-semibold text-slate-500 bg-slate-100 px-3 py-1 rounded-full">{{ $categoryArsips->count() }} dokumen</span>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                            @foreach ($categoryArsips as $arsip)
                                <div class="doc-card bg-white p-6 rounded-2xl border border-slate-200/60 shadow-sm hover:shadow-md transition flex flex-col justify-between" data-category="{{ strtolower(str_replace(' ', '-', $arsip->kategori ?? 'lainnya')) }}" data-search="{{ strtolower($arsip->judul ?? '') }} {{ strtolower($arsip->deskripsi ?? '') }}">
                                    <div>
                                        <div class="flex justify-between items-start mb-5">
                                            <div class="w-11 h-11 rounded-xl bg-blue-50 text-primary flex items-center justify-center">
                                                <i data-lucide="file-text" class="w-5 h-5"></i>
                                            </div>
                                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider bg-slate-50 px-2 py-1 rounded-lg border border-slate-100">{{ strtoupper($arsip->file_type ?? 'PDF') }} • {{ $arsip->ukuran ?? 'N/A' }}</span>
                                        </div>
                                        <h3 class="doc-title font-bold text-slate-800 mb-1.5">{{ $arsip->judul }}</h3>
                                        <p class="doc-desc text-xs text-slate-500 leading-relaxed">{{ $arsip->deskripsi ?? 'Dokumen resmi organisasi.' }}</p>
                                    </div>
                                    <div class="flex items-center justify-between pt-5 mt-5 border-t border-slate-100">
                                        <span class="text-[11px] text-slate-400 flex items-center gap-1">
                                            <i data-lucide="calendar" class="w-3.5 h-3.5"></i> {{ $arsip->versi ?? 'Tanpa versi' }}
                                        </span>
                                        <a href="{{ $arsip->file_url }}" target="_blank" class="flex items-center gap-1.5 text-primary text-xs font-bold hover:gap-2.5 transition-all">
                                            Unduh <i data-lucide="download" class="w-3.5 h-3.5"></i>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <div id="arsip-empty" class="hidden rounded-3xl border border-dashed border-slate-200 bg-slate-50 p-10 text-center text-slate-500">
            Arsip ini masih kosong.
        </div>
    @endif
</section>

<!-- BENTO INFO SECTION -->
<section class="mt-10 grid grid-cols-1 md:grid-cols-4 gap-4">
    <div class="md:col-span-2 md:row-span-2 bg-primary rounded-2xl p-7 relative overflow-hidden flex flex-col justify-between">
        <div class="absolute -top-8 -right-8 w-40 h-40 bg-primary-light/30 rounded-full blur-3xl"></div>
        <div class="relative z-10">
            <h3 class="text-xl font-bold text-white mb-2">Butuh Bantuan?</h3>
            <p class="text-white/70 text-sm leading-relaxed">Kesulitan mencari dokumen tertentu? Hubungi biro kesekretariatan kami untuk asistensi langsung.</p>
        </div>
        <a href="https://wa.me/6282133313254" target="_blank"
           class="relative z-10 w-fit bg-brand-yellow text-primary px-5 py-2.5 rounded-xl text-sm font-bold flex items-center gap-2 mt-6 hover:brightness-95 transition">
            <i data-lucide="message-circle" class="w-4 h-4"></i> Chat Sekretaris
        </a>
    </div>

    <div class="md:col-span-2 bg-white border border-slate-200/60 rounded-2xl p-6 flex items-center gap-5 shadow-sm">
        <div class="w-14 h-14 rounded-xl bg-blue-50 text-primary flex items-center justify-center shrink-0">
            <i data-lucide="shield-check" class="w-6 h-6"></i>
        </div>
        <div>
            <h4 class="font-bold text-slate-900 mb-1">Akses Terbatas</h4>
            <p class="text-xs text-slate-500 leading-relaxed">Beberapa dokumen hanya dapat diakses oleh pengurus harian melalui sistem otentikasi.</p>
        </div>
    </div>

    <div class="bg-white border border-slate-200/60 rounded-2xl p-6 flex flex-col justify-center items-center text-center shadow-sm">
        <div class="text-primary font-extrabold text-3xl mb-1">99%</div>
        <p class="text-slate-400 text-[10px] uppercase tracking-widest font-bold">Digital Uptime</p>
    </div>
    <div class="bg-white border border-slate-200/60 rounded-2xl p-6 flex flex-col justify-center items-center text-center shadow-sm">
        <div class="text-primary font-extrabold text-3xl mb-1">24/7</div>
        <p class="text-slate-400 text-[10px] uppercase tracking-widest font-bold">Cloud Access</p>
    </div>
</section>

<script>
    (function () {
        // render ulang ikon lucide untuk elemen yang baru masuk dari partial ini
        if (window.lucide) {
            lucide.createIcons();
        }

        const searchInput = document.getElementById('arsip-search');
        const arsipContainer = document.getElementById('arsip-container');
        const arsipEmpty = document.getElementById('arsip-empty');
        const docCards = document.querySelectorAll('.doc-card');
        const categorySection = document.querySelectorAll('.category-section');
        const filterBtns = document.querySelectorAll('.arsip-filter-btn');

        function updateDisplay() {
            let visibleCount = 0;
            let visibleCategories = 0;

            docCards.forEach(card => {
                const isVisible = card.style.display !== 'none';
                if (isVisible) visibleCount++;
            });

            categorySection.forEach(section => {
                const category = section.dataset.category;
                const visibleCards = section.querySelectorAll('.doc-card:not([style*="display: none"])').length;
                
                if (visibleCards > 0) {
                    section.style.display = 'block';
                    visibleCategories++;
                } else {
                    section.style.display = 'none';
                }
            });

            if (arsipContainer && arsipEmpty) {
                if (visibleCount === 0 || visibleCategories === 0) {
                    arsipContainer.style.display = 'none';
                    arsipEmpty.style.display = 'block';
                } else {
                    arsipContainer.style.display = 'block';
                    arsipEmpty.style.display = 'none';
                }
            }
        }

        // Search functionality
        if (searchInput) {
            searchInput.addEventListener('input', (e) => {
                const term = e.target.value.toLowerCase();
                docCards.forEach(card => {
                    const searchText = card.dataset.search || '';
                    const matches = searchText.includes(term);
                    card.style.display = matches ? 'flex' : 'none';
                });
                updateDisplay();
            });
        }

        // Filter functionality
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update button states
                filterBtns.forEach(b => {
                    b.classList.remove('active', 'bg-primary', 'text-white', 'shadow-sm');
                    b.classList.add('bg-slate-50', 'text-slate-500', 'border', 'border-slate-200');
                });
                btn.classList.add('active', 'bg-primary', 'text-white', 'shadow-sm');
                btn.classList.remove('bg-slate-50', 'text-slate-500', 'border', 'border-slate-200');

                // Filter cards
                const filter = btn.dataset.filter;
                docCards.forEach(card => {
                    const category = card.dataset.category;
                    card.style.display = (filter === 'semua' || category === filter) ? 'flex' : 'none';
                });
                
                // Reset search input
                if (searchInput) {
                    searchInput.value = '';
                }
                
                updateDisplay();
            });
        });
    })();
</script>