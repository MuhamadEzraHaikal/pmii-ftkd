<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Rayon Fakultas Teknik Komputer dan Desain - Dzikir, Fikir, Amal Sholeh</title>
<link rel="icon" href="{{ asset('LOGO Rayon FTKD.ico') }}" type="image/x-icon"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700;800&amp;family=Work+Sans:wght@400;500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "background": "#f8f9fa",
                        "on-primary-container": "#96bdff",
                        "on-secondary-fixed-variant": "#544600",
                        "on-tertiary-container": "#9ebeef",
                        "error-container": "#ffdad6",
                        "outline-variant": "#c2c6d2",
                        "inverse-surface": "#2e3132",
                        "secondary": "#705d00",
                        "primary-container": "#004b93",
                        "surface-tint": "#255ea7",
                        "on-primary-fixed": "#001b3c",
                        "tertiary": "#11365f",
                        "on-background": "#191c1d",
                        "on-primary-fixed-variant": "#00468a",
                        "on-surface-variant": "#424751",
                        "surface-container-low": "#f3f4f5",
                        "inverse-on-surface": "#f0f1f2",
                        "secondary-fixed": "#ffe16d",
                        "tertiary-fixed": "#d4e3ff",
                        "surface-container-lowest": "#ffffff",
                        "secondary-container": "#fcd400",
                        "on-tertiary": "#ffffff",
                        "surface-container-highest": "#e1e3e4",
                        "on-primary": "#ffffff",
                        "surface-bright": "#f8f9fa",
                        "surface": "#f8f9fa",
                        "surface-container-high": "#e7e8e9",
                        "surface-container": "#edeeef",
                        "on-error": "#ffffff",
                        "secondary-fixed-dim": "#e9c400",
                        "on-secondary-container": "#6e5c00",
                        "on-error-container": "#93000a",
                        "primary-fixed-dim": "#a8c8ff",
                        "on-secondary-fixed": "#221b00",
                        "error": "#ba1a1a",
                        "tertiary-fixed-dim": "#a8c8fa",
                        "surface-variant": "#e1e3e4",
                        "surface-dim": "#d9dadb",
                        "on-surface": "#191c1d",
                        "on-secondary": "#ffffff",
                        "inverse-primary": "#a8c8ff",
                        "primary-fixed": "#d6e3ff",
                        "tertiary-container": "#2c4d78",
                        "on-tertiary-fixed": "#001c3a",
                        "primary": "#00356a",
                        "outline": "#727782",
                        "on-tertiary-fixed-variant": "#264872"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "margin-desktop": "40px",
                        "container-max": "1280px",
                        "margin-mobile": "16px",
                        "base": "8px"
                    },
                    "fontFamily": {
                        "display-lg": ["Hanken Grotesk"],
                        "body-lg": ["Work Sans"],
                        "display-lg-mobile": ["Hanken Grotesk"],
                        "headline-md": ["Hanken Grotesk"],
                        "caption": ["Work Sans"],
                        "label-md": ["Hanken Grotesk"],
                        "body-md": ["Work Sans"],
                        "headline-sm": ["Hanken Grotesk"]
                    },
                    "fontSize": {
                        "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "display-lg-mobile": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "caption": ["12px", {"lineHeight": "16px", "fontWeight": "400"}],
                        "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}]
                    }
                }
            }
        }
    </script>
<style>
    body { 
        font-family: 'Work Sans', sans-serif; 
        background-color: #ffffff; 
    }

    .font-hanken { font-family: 'Hanken Grotesk', sans-serif; }
    .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    .active-nav-link { position: relative; }
    .active-nav-link::after { content: ''; position: absolute; bottom: -4px; left: 0; width: 100%; height: 2px; background-color: #00356a; }
    .glass-card { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(8px); border: 1px solid rgba(225, 227, 228, 0.5); }

    /* === MEMBUAT SEMUA BACKGROUND MENJADI PUTIH === */
    body,
    .bg-surface,
    .bg-background,
    .bg-surface-container,
    .bg-surface-container-low,
    .bg-surface-container-high,
    .bg-surface-container-highest,
    .bg-surface-container-lowest,
    .bg-surface-bright,
    .bg-surface-dim {
        background-color: #ffffff !important;
    }
</style>
</head>
<body class="bg-background text-on-surface">

@if(session('success'))
<div id="successRegisterModal" class="fixed inset-0 z-[1000] flex items-center justify-center bg-slate-900/70 p-4">
  <div class="w-full max-w-md rounded-[2rem] bg-white p-8 text-center shadow-2xl">
    <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-green-100 text-2xl text-green-600">
      ✓
    </div>
    <h3 class="text-xl font-semibold text-slate-900">Selamat!</h3>
    <p class="mt-2 text-sm leading-6 text-slate-600">{{ session('success') }}</p>
    <button type="button" onclick="document.getElementById('successRegisterModal').classList.add('hidden')" class="mt-6 rounded-full bg-[#00356a] px-6 py-2.5 text-sm font-semibold text-white transition hover:bg-[#002b53]">
      Lanjutkan
    </button>
  </div>
</div>
@endif

@include('layouts.navbar')
<main class="pt-20">

<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-primary via-primary/95 to-primary-container pt-32 pb-20">
  <!-- Decorative Elements -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-secondary-fixed/10 rounded-full blur-3xl -mr-48 -mt-48"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-secondary-container/5 rounded-full blur-3xl -ml-48 -mb-48"></div>
  </div>

  <div class="max-w-container-max mx-auto px-margin-mobile md:px-gutter grid md:grid-cols-2 gap-12 items-center relative z-10">
    
    <!-- Kiri: Teks -->
    <div class="space-y-8 z-10">
      <div class="inline-flex items-center gap-3 bg-white/15 backdrop-blur-md px-4 py-2 rounded-full border border-white/20">
        <span class="w-2 h-2 bg-secondary-fixed rounded-full animate-pulse"></span>
        <span class="text-sm font-bold text-secondary-fixed">PMII UNIVERSITAS NUSA PUTRA</span>
      </div>

      <h1 class="text-5xl lg:text-6xl font-extrabold text-white max-w-2xl leading-tight">
        Saatnya Naik KELAS
        <span class="bg-gradient-to-r from-secondary-fixed to-yellow-300 bg-clip-text text-transparent">Bersama PMII</span>
      </h1>

      <p class="text-lg text-white/90 max-w-lg leading-relaxed">
        PMII (Pergerakan Mahasiswa Islam Indonesia) merupakan organisasi kemahasiswaan yang berorientasi pada proses kaderisasi dan pengembangan kapasitas mahasiswa muslim Indonesia. Organisasi ini bertujuan membentuk pribadi yang bertakwa kepada Allah SWT, berakhlak mulia, memiliki kompetensi intelektual, serta berkarakter kritis, progresif, dan bertanggung jawab dalam mengimplementasikan nilai-nilai keislaman, kebangsaan, dan kemasyarakatan. Melalui berbagai aktivitas kaderisasi, pendidikan, PMII berupaya mencetak kader yang mampu berkontribusi secara aktif dalam pembangunan bangsa serta memberikan solusi terhadap berbagai persoalan sosial dengan berlandaskan nilai-nilai Islam Ahlussunnah wal Jamaah.
      </p>

      <div class="flex flex-wrap gap-4 pt-6">
        <button class="group px-8 py-4 bg-secondary-fixed text-primary rounded-xl font-bold shadow-2xl hover:shadow-secondary-fixed/50 transition-all active:scale-95 flex items-center gap-2">
          Mulai Sekarang
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
          </svg>
        </button>
        <button class="px-8 py-4 border-2 border-white text-white rounded-xl font-bold hover:bg-white/10 transition-all backdrop-blur-sm">
          PMII HARSHER POWER
        </button>
      </div>
    </div>

    <!-- Kanan: Carousel -->
    <div class="relative">
      <div id="pmii-carousel" class="relative z-10 rounded-3xl overflow-hidden shadow-2xl" data-carousel="static">
        
        <!-- Carousel wrapper -->
        <div class="relative h-[420px] md:h-[480px] overflow-hidden">
            @php
                $homeSlides = collect([
                    $berandaSections['home_carousel_1'] ?? null,
                    $berandaSections['home_carousel_2'] ?? null,
                    $berandaSections['home_carousel_3'] ?? null,
                ])->filter(fn($item) => $item && $item->image)->values();
            @endphp

            @if ($homeSlides->isNotEmpty())
                @foreach ($homeSlides as $idx => $slide)
                    <div class="absolute inset-0 {{ $idx === 0 ? 'block' : 'hidden' }} duration-700 ease-in-out" data-carousel-item="{{ $idx === 0 ? 'active' : '' }}">
                        <img src="{{ asset('storage/' . $slide->image) }}" class="w-full h-full object-cover" alt="{{ $slide->judul }}">
                        @if ($slide->caption)
                            <div class="absolute bottom-0 left-0 right-0 bg-black/40 p-4 text-sm text-white">
                                {{ $slide->caption }}
                            </div>
                        @endif
                    </div>
                @endforeach
            @else
                <div class="absolute inset-0 block duration-700 ease-in-out" data-carousel-item="active">
                    <img src="poto.jpg" class="w-full h-full object-cover" alt="Diskusi dan kajian PMII">
                </div>
                <div class="absolute inset-0 hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="logo_rayon.png" class="w-full h-full object-cover" alt="Kegiatan organisasi PMII">
                </div>
                <div class="absolute inset-0 hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?auto=format&fit=crop&w=1200&q=80" class="w-full h-full object-cover" alt="Kader PMII berdiskusi">
                </div>
                <div class="absolute inset-0 hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=1200&q=80" class="w-full h-full object-cover" alt="Kegiatan sosial PMII">
                </div>
            @endif
        </div>

        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 space-x-2 bottom-5 left-1/2">
          <button type="button" class="w-3 h-3 rounded-full bg-white/70 hover:bg-white transition-all" aria-current="true" data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full bg-white/70 hover:bg-white transition-all" data-carousel-slide-to="1"></button>
          <button type="button" class="w-3 h-3 rounded-full bg-white/70 hover:bg-white transition-all" data-carousel-slide-to="2"></button>
        </div>

        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 group-hover:bg-black/50 transition-all">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
          </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
          <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 group-hover:bg-black/50 transition-all">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </span>
        </button>
      </div>
    </div>

  </div>
</section>

<!-- Structural Info (structural) -->
<section class="bg-gradient-to-br from-surface via-white to-primary/5 py-24 relative overflow-hidden">
<div class="absolute inset-0 overflow-hidden">
    <div class="absolute -top-40 -right-40 w-80 h-80 bg-secondary-fixed/5 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-primary/5 rounded-full blur-3xl"></div>
</div>

<div class="px-margin-desktop max-w-container-max mx-auto text-center mb-16 relative z-10">
<div class="inline-flex items-center gap-2 bg-primary/10 px-4 py-2 rounded-full border border-primary/20 mb-4">
    <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
    <span class="text-sm font-bold text-primary">Pengurus</span>
</div>
<h2 class="font-display-lg text-primary mb-3 text-4xl md:text-5xl font-extrabold">{{ $berandaSections['home_pengurus']->judul ?? 'Pengurus Rayon FTKD' }}</h2>
<p class="text-on-surface-variant max-w-2xl mx-auto text-lg">Pemimpin visioner yang membawa gerakan menuju masa depan lebih cerah</p>
</div>

<div class="px-margin-desktop max-w-container-max mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 relative z-10">
    @php
        $jabatanTampil = [
            'Ketua Rayon',
            'Sekretaris',
            'Bendahara',
            'Ketua Bidang Kaderisasi'
        ];
        $pengurusFilter = $pengurusRayon->filter(function($p) use ($jabatanTampil) {
            return in_array($p->jabatan, $jabatanTampil);
        })->sortBy(function($p) use ($jabatanTampil) {
            return array_search($p->jabatan, $jabatanTampil);
        });
    @endphp
    @forelse ($pengurusFilter as $idx => $pengurus)
        @php
            $bgGradients = [
                'from-primary to-primary-container',
                'from-primary-container to-primary',
                'from-primary to-secondary-container',
                'from-secondary-container to-primary'
            ];
            $bgGradient = $bgGradients[$idx % 4];
        @endphp
        <div class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-outline-variant/30 hover:border-primary/50">
            <div class="absolute inset-0 bg-gradient-to-br {{ $bgGradient }} opacity-0 group-hover:opacity-5 transition-opacity duration-300"></div>
            
            <div class="relative p-6 text-center">
                <div class="relative inline-block mb-6">
                    <div class="absolute inset-0 bg-gradient-to-br {{ $bgGradient }} rounded-full blur-lg opacity-50 group-hover:opacity-75 transition-opacity"></div>
                    <div class="relative w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg">
                        <img class="w-full h-full object-cover" src="{{ $pengurus->foto_url }}" alt="{{ $pengurus->nama }}">
                    </div>
                </div>
                
                <h4 class="font-bold text-lg text-primary mb-1 group-hover:text-primary transition-colors">{{ $pengurus->nama }}</h4>
                <p class="text-sm font-semibold text-on-surface-variant mb-1">{{ $pengurus->jabatan }}</p>
                <p class="text-xs text-slate-500 bg-primary/5 inline-block px-3 py-1 rounded-full">{{ $pengurus->jurusan }}</p>
                
                <div class="mt-4 pt-4 border-t border-outline-variant/30 opacity-0 group-hover:opacity-100 transition-opacity">
                    <div class="flex items-center justify-center gap-2 text-primary text-sm font-semibold">
                        <span class="material-symbols-outlined text-base">person_check</span>
                        Hubungi
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-span-full rounded-2xl border border-dashed border-outline-variant bg-white p-8 text-center text-slate-500">
            Belum ada data pengurus yang tersedia.
        </div>
    @endforelse
</div>

<div class="px-margin-desktop max-w-container-max mx-auto text-center mt-12 relative z-10">
    <a href="/struktur pengurus" class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-primary to-primary-container text-on-primary px-8 py-4 rounded-xl font-bold hover:shadow-xl transition-all active:scale-95 group">
        <span>Pengurus Rayon FTKD Lengkap</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
        </svg>
    </a>
</div>
</section>


<!-- Decorative Elements -->
<section class="py-24 px-margin-desktop max-w-container-max mx-auto bg-white">
</div>
</div>
</section>
<!-- Profile & Vision (Asymmetric Bento) -->
<section class="py-section-gap bg-gradient-to-b from-white via-primary/2 to-white relative overflow-hidden">
<div class="absolute inset-0 overflow-hidden">
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-secondary-fixed/5 rounded-full blur-3xl -mt-48"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-primary/5 rounded-full blur-3xl -mb-48"></div>
</div>

<div class="max-w-container-max mx-auto px-margin-mobile md:px-gutter relative z-10">
<div class="text-center mb-16">
<div class="inline-flex items-center gap-2 bg-primary/10 px-4 py-2 rounded-full border border-primary/20 mb-4">
    <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
    <span class="text-sm font-bold text-primary">Tentang Kami</span>
</div>
<h2 class="font-display-lg text-primary text-4xl md:text-5xl font-extrabold mb-3">{{ $berandaSections['home_profil']->judul ?? 'Profil Pergerakan' }}</h2>
<p class="text-on-surface-variant max-w-2xl mx-auto text-lg">Memahami jati diri, visi, misi, dan komitmen gerakan PMII</p>
</div>

<div class="grid md:grid-cols-3 gap-6">
<!-- Main Statement -->
<div class="md:col-span-2 group relative bg-gradient-to-br from-white to-primary/5 p-8 md:p-12 rounded-2xl border border-outline-variant/50 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden">
    <div class="absolute -top-20 -right-20 w-40 h-40 bg-primary/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-300"></div>
    <div class="relative z-10">
        <div class="inline-block mb-4 px-4 py-2 bg-primary/10 rounded-lg">
            <h3 class="font-bold text-lg text-primary">Tujuan PMII</h3>
        </div>
        <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed text-lg">
            {{ $berandaSections['home_profil']->isi ?? 'Terbentuknya pribadi muslim Indonesia yang bertaqwa kepada Allah Swt, Berbudi luhur, berilmu, cakap dan bertanggungjawab.' }}
        </p>
    </div>
</div>

<!-- Stats/Action -->
<div class="group relative bg-gradient-to-br from-primary to-primary-container p-8 rounded-2xl text-on-primary flex flex-col justify-between shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden">
    <div class="absolute -top-12 -right-12 w-32 h-32 bg-white/10 rounded-full blur-xl group-hover:scale-150 transition-transform duration-300"></div>
    <div class="relative z-10">
        <span class="material-symbols-outlined text-5xl text-secondary-fixed group-hover:scale-110 transition-transform duration-300">diversity_3</span>
        <div class="mt-8">
            <div class="text-5xl font-extrabold mb-2 group-hover:scale-110 transition-transform duration-300 origin-left">{{ $anggotaCount }}</div>
            <p class="font-bold text-on-primary-container text-lg">Anggota Aktif</p>
            <p class="font-label-sm text-on-primary-container/80 mt-1">Rayon FTKD PMII</p>
        </div>
    </div>
</div>

<!-- Mission Card -->
<div class="group relative bg-white p-8 rounded-2xl border border-outline-variant/50 hover:border-primary/50 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden md:col-span-2">
    <div class="absolute -top-12 -left-12 w-48 h-48 bg-primary/5 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-300"></div>
    <div class="relative z-10 flex flex-col md:flex-row gap-6 items-start md:items-center">
        <div class="flex-shrink-0">
            <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary-container rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined text-white text-3xl">hub</span>
            </div>
        </div>
        <div class="flex-1">
            <h4 class="font-bold text-xl text-primary mb-3 group-hover:text-primary-container transition-colors">
                Misi Rayon FTKD
            </h4>
            <ul class="font-body-md text-on-surface-variant space-y-2 text-sm">
                <li class="flex items-start gap-3">
                    <span class="text-primary font-bold mt-1">✓</span>
                    <span>Menyediakan ruang pengembangan akademik yang mendukung kader</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-primary font-bold mt-1">✓</span>
                    <span>Membangun sistem pendampingan kader secara komprehensif</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-primary font-bold mt-1">✓</span>
                    <span>Menghidupkan nilai keislaman, kebangsaan, dan keilmuan</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-primary font-bold mt-1">✓</span>
                    <span>Mendorong partisipasi aktif dalam pengembangan intelektual</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Goals Card -->
<div class="group relative bg-white p-8 rounded-2xl border border-outline-variant/50 hover:border-primary/50 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden md:col-span-1">
    <div class="absolute -top-8 -right-8 w-32 h-32 bg-primary/5 rounded-full blur-xl group-hover:bg-primary/10 transition-colors"></div>
    <div class="relative z-10">
        <div class="w-12 h-12 bg-gradient-to-br from-primary to-primary-container rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
            <span class="material-symbols-outlined text-white text-xl">target</span>
        </div>
        <h4 class="font-bold text-lg text-primary mb-4 group-hover:text-primary-container transition-colors">Visi Rayon FTKD Masa Khidmat 2025-2026</h4>
        <p class="font-body-md text-on-surface-variant text-sm leading-relaxed">
            Ruang kaderisasi dinamis dan inklusif dalam mengembangkan potensi kader secara utuh.
        </p>
    </div>
</div>
</div>
</div>
</section>


<!-- Management Photos (Bento Grid Style) -->
<section class="mt-16 md:mt-24 py-24 bg-gradient-to-b from-primary/5 to-white relative overflow-hidden">
<div class="absolute inset-0 overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-secondary-fixed/10 rounded-full blur-3xl -mr-48 -mt-48"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-primary/5 rounded-full blur-3xl -ml-48 -mb-48"></div>
</div>

<div class="px-margin-desktop max-w-container-max mx-auto mb-12 text-center relative z-10">
<div class="inline-flex items-center gap-2 bg-primary/10 px-4 py-2 rounded-full border border-primary/20 mb-4">
    <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
    <span class="text-sm font-bold text-primary">Galeri & Momen</span>
</div>
<h2 class="font-display-lg text-primary text-4xl md:text-5xl font-extrabold mb-3">{{ $berandaSections['home_jejak']->judul ?? 'Jejak Pergerakan' }}</h2>
<p class="text-on-surface-variant max-w-2xl mx-auto text-lg">{{ $berandaSections['home_jejak']->isi ?? 'Mengabadikan setiap langkah perjuangan, kebersamaan, dan semangat kader dalam setiap momentum.' }}</p>
</div>

<div class="px-margin-desktop max-w-container-max mx-auto relative z-10">
<div class="grid grid-cols-1 gap-4 md:grid-cols-4 md:grid-rows-2 auto-rows-[180px] h-auto md:h-[600px]">
@foreach ($jejakItems->take(4) as $index => $item)
    @php
        $tileClass = ['md:col-span-2 md:row-span-2', 'md:col-span-2 md:row-span-1', 'md:col-span-1 md:row-span-1', 'md:col-span-1 md:row-span-1'][$index] ?? 'md:col-span-1 md:row-span-1';
    @endphp
    <div class="rounded-2xl overflow-hidden relative group shadow-lg hover:shadow-2xl transition-all duration-300 {{ $tileClass }} min-h-[180px]">
        <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="{{ str_starts_with($item->image, 'http') ? $item->image : asset('storage/' . $item->image) }}" alt="{{ $item->caption ?? $item->judul }}"/>
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent group-hover:from-black/40 transition-all duration-300"></div>
        <div class="absolute bottom-0 left-0 right-0 p-6 text-on-primary z-10">
            <p class="font-bold text-lg group-hover:translate-y-1 transition-transform">{{ $item->judul }}</p>
            @if ($item->caption)
                <p class="text-sm text-white/80 group-hover:opacity-100 opacity-0 transition-opacity">{{ $item->caption }}</p>
            @endif
        </div>
    </div>
@endforeach
</div>
</div>
</section>
<!-- Activity Results (News Style) -->
<section class="py-24 px-margin-desktop max-w-container-max mx-auto relative">
<div class="mb-16">
    <div class="inline-flex items-center gap-2 bg-primary/10 px-4 py-2 rounded-full border border-primary/20 mb-4">
        <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
        <span class="text-sm font-bold text-primary">Berita Terbaru</span>
    </div>
    <h2 class="font-display-lg text-primary text-4xl md:text-5xl font-extrabold border-l-8 border-secondary-container pl-6">Latest Updates</h2>
</div>

@php
    $beritaItems = $beritaItems ?? collect();
    $beritaCardConfigs = [
        [
            'pill' => 'bg-primary px-4 py-2 rounded-full',
            'pillText' => 'text-white text-xs font-bold uppercase tracking-wider',
            'categoryText' => 'text-xs font-bold uppercase tracking-widest text-primary',
        ],
        [
            'pill' => 'bg-secondary-fixed px-4 py-2 rounded-full',
            'pillText' => 'text-primary text-xs font-bold uppercase tracking-wider',
            'categoryText' => 'text-xs font-bold uppercase tracking-widest text-secondary',
        ],
    ];
@endphp

<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
    @forelse ($beritaItems->take(2) as $index => $item)
    @php
        $card = $beritaCardConfigs[$index] ?? $beritaCardConfigs[0];
    @endphp
        <article class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 border border-outline-variant/50 hover:border-primary/50">
            <div class="relative overflow-hidden h-64">
                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="{{ str_starts_with($item->image, 'http') ? $item->image : asset('storage/' . $item->image) }}" alt="{{ $item->judul }}">
                @if ($item->status_label)
                    <div class="absolute top-4 right-4 {{ $card['pill'] }}">
                        <span class="{{ $card['pillText'] }}">{{ $item->status_label }}</span>
                    </div>
                @endif
            </div>
            <div class="p-6">
                <div class="flex items-center gap-2 mb-3">
                    <span class="{{ $card['categoryText'] }}">{{ $item->kategori ?? 'Berita Terbaru' }}</span>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-primary transition-colors">{{ $item->judul }}</h3>
                <p class="text-on-surface-variant font-body-md mb-4">{{ $item->isi }}</p>
                <div class="flex items-center justify-between pt-4 border-t border-outline-variant/30">
                    <span class="text-xs text-slate-500">{{ $item->tanggal_label ?? '' }}</span>
                    <a class="text-primary font-bold text-sm group-hover:translate-x-2 transition-transform flex items-center gap-1" href="{{ $item->link_url ?: '#' }}">
                        Selengkapnya
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </article>
    @empty
        <div class="lg:col-span-2 rounded-2xl border border-dashed border-outline-variant bg-white p-8 text-center text-slate-500">
            Belum ada berita terbaru.
        </div>
    @endforelse
</div>
</section>
</main>

@include('layouts.footer')

<!-- ==================== LOGIN MODAL ==================== -->
<div id="loginModal" onclick="if (event.target.id === 'loginModal') hideLoginModal()" class="fixed inset-0 hidden items-center justify-center bg-slate-900/70 p-6 z-50">
    <div class="relative w-full max-w-md rounded-[2rem] bg-white p-6 shadow-2xl">
        <button type="button" onclick="hideLoginModal()" class="absolute right-4 top-4 text-slate-500 hover:text-slate-900 text-2xl leading-none">×</button>
        <div class="p-6 pt-10">
            <form id="loginForm" method="POST" action="{{ route('login') }}">
                @csrf
                <input type="hidden" id="redirectAfterLogin" value="">

                <!-- Email -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-on-surface-variant mb-1.5">Email atau Username</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-3 text-on-surface-variant">person</span>
                        <input type="email" id="email" name="email" required 
                               class="w-full pl-11 pr-4 py-3 border border-outline-variant rounded-xl focus:outline-none focus:border-primary text-sm bg-surface"
                               placeholder="nama@email.com">
                    </div>
                </div>

        <!-- Password -->
        <div class="mb-5">
            <label class="block text-sm font-medium text-on-surface-variant mb-1.5">Kata Sandi</label>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-4 top-3 text-on-surface-variant">lock</span>
                <input type="password" id="password" name="password" required 
                       class="w-full pl-11 pr-11 py-3 border border-outline-variant rounded-xl focus:outline-none focus:border-primary text-sm bg-surface"
                       placeholder="••••••••••">
                <button type="button" onclick="togglePasswordVisibility()" 
                        class="absolute right-4 top-3 text-on-surface-variant hover:text-primary">
                    <span id="eyeIcon" class="material-symbols-outlined">visibility</span>
                </button>
            </div>
        </div>

        <div class="flex items-center justify-between mb-6 text-sm">
            <label class="flex items-center gap-x-2 cursor-pointer">
                <input type="checkbox" class="accent-primary">
                <span class="text-on-surface-variant text-sm">Ingat saya</span>
            </label>
            <a href="#" class="text-primary hover:underline text-sm">Lupa kata sandi?</a>
        </div>

        <button type="submit"
                class="w-full bg-primary hover:bg-primary/90 transition text-on-primary font-semibold py-3.5 rounded-xl text-sm">
            Masuk
        </button>
    </form>

    <div class="text-center mt-5">
        <p class="text-sm text-on-surface-variant">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-primary font-medium hover:underline">Daftar sekarang</a>
        </p>
    </div>
</div>
<!-- ==================== END LOGIN MODAL ==================== -->

<script>
        const carousel = document.getElementById('pmii-carousel');
        const slides = Array.from(carousel.querySelectorAll('[data-carousel-item]'));
        const prevButton = carousel.querySelector('[data-carousel-prev]');
        const nextButton = carousel.querySelector('[data-carousel-next]');
        const dots = Array.from(carousel.querySelectorAll('[data-carousel-slide-to]'));
        let activeIndex = 0;

        function showSlide(index) {
            activeIndex = (index + slides.length) % slides.length;

            slides.forEach((slide, slideIndex) => {
                slide.classList.toggle('hidden', slideIndex !== activeIndex);
                slide.classList.toggle('block', slideIndex === activeIndex);
            });

            dots.forEach((dot, dotIndex) => {
                const isActive = dotIndex === activeIndex;
                dot.setAttribute('aria-current', isActive ? 'true' : 'false');
                dot.classList.toggle('bg-white', isActive);
                dot.classList.toggle('bg-white/70', !isActive);
            });
        }

        prevButton.addEventListener('click', () => showSlide(activeIndex - 1));
        nextButton.addEventListener('click', () => showSlide(activeIndex + 1));
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => showSlide(index));
        });

        showSlide(0);

        // Simple observer for scroll reveals
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100');
                    entry.target.classList.remove('opacity-0', 'translate-y-4');
                }
            });
        }, observerOptions);

        document.querySelectorAll('section').forEach(section => {
            section.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-4');
            observer.observe(section);
        });
    </script>


<!-- ==================== LOGIN JAVASCRIPT ==================== -->
<script>
    // Fungsi membuka modal login
    function showLoginModal() {
        const modal = document.getElementById('loginModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    // Fungsi menutup modal login
    function hideLoginModal() {
        const modal = document.getElementById('loginModal');
        modal.classList.remove('flex');
        modal.classList.add('hidden');
    }

    // Toggle password visibility
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.textContent = 'visibility_off';
        } else {
            passwordInput.type = 'password';
            eyeIcon.textContent = 'visibility';
        }
    }

    // Update tombol Login setelah berhasil login
    function updateLoginButton(email) {
        const loginBtn = document.getElementById('loginBtn');
        const username = email.split('@')[0] || 'Pengguna';
        const initial = username.charAt(0).toUpperCase();

        loginBtn.innerHTML = `
            <div class="flex items-center gap-x-2">
                <div class="w-7 h-7 bg-primary-container rounded-full flex items-center justify-center">
                    <span class="text-primary text-xs font-bold">${initial}</span>
                </div>
                <span class="font-medium text-sm">${username}</span>
                <span onclick="event.stopImmediatePropagation(); logoutUser();" 
                      class="ml-1 text-[10px] px-2.5 py-0.5 bg-white/20 hover:bg-white/30 rounded-full text-on-primary transition text-xs">
                    Logout
                </span>
            </div>
        `;
        loginBtn.onclick = null;
    }

    function logoutUser() {
        const loginBtn = document.getElementById('loginBtn');
        loginBtn.innerHTML = `Login`;
        loginBtn.onclick = showLoginModal;
    }

    // Handle form submit login
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const form = e.currentTarget;
        const formData = new FormData(form);
        const email = document.getElementById('email').value.trim();

        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            }
        })
        .then(async response => {
            if (!response.ok) {
                throw new Error('Login gagal');
            }

            const data = await response.json().catch(() => ({}));
            hideLoginModal();
            updateLoginButton(email);

            const toast = document.createElement('div');
            toast.className = `fixed bottom-5 right-5 bg-emerald-600 text-white px-5 py-3 rounded-2xl shadow-xl flex items-center gap-x-3 z-[9999] text-sm`;
            toast.innerHTML = `
                <span class="material-symbols-outlined">check_circle</span>
                <span>Login berhasil! Selamat datang di PMII.</span>
            `;
            document.body.appendChild(toast);

            setTimeout(() => {
                toast.style.transition = 'all 0.3s ease';
                toast.style.opacity = '0';
                setTimeout(() => toast.remove(), 300);
            }, 3000);

            if (data.redirect) {
                window.location.href = data.redirect;
            }
        })
        .catch(() => {
            const toast = document.createElement('div');
            toast.className = `fixed bottom-5 right-5 bg-red-600 text-white px-5 py-3 rounded-2xl shadow-xl flex items-center gap-x-3 z-[9999] text-sm`;
            toast.innerHTML = `
                <span class="material-symbols-outlined">error</span>
                <span>Email atau password salah.</span>
            `;
            document.body.appendChild(toast);

            setTimeout(() => {
                toast.style.transition = 'all 0.3s ease';
                toast.style.opacity = '0';
                setTimeout(() => toast.remove(), 300);
            }, 3000);
        });
    });

    // Tekan tombol ESC untuk menutup modal
    document.addEventListener('keydown', function(e) {
        if (e.key === "Escape") {
            const modal = document.getElementById('loginModal');
            if (!modal.classList.contains('hidden')) {
                hideLoginModal();
            }
        }
    });
</script>
<!-- ==================== END LOGIN JAVASCRIPT ==================== -->

</body></html>