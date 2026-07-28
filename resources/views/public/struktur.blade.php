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
        body { font-family: 'Work Sans', sans-serif; background-color: #f8f9fa; }
        .font-hanken { font-family: 'Hanken Grotesk', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .active-nav-link { position: relative; }
        .active-nav-link::after { content: ''; position: absolute; bottom: -4px; left: 0; width: 100%; height: 2px; background-color: #00356a; }
        .glass-card { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(8px); border: 1px solid rgba(225, 227, 228, 0.5); }
        
    </style>
</head>
<body class="bg-background text-on-surface">
@include('layouts.navbar')

<main class="min-h-screen">
<!-- Hero Section: Enhanced with Gradients & Animations -->
<section class="relative overflow-hidden pt-8 pb-16 md:pb-20">
    <!-- Animated Background Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-[#004481]/10 via-transparent rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute -bottom-10 left-10 w-80 h-80 bg-gradient-to-r from-[#fecb00]/5 to-transparent rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
    
    <div class="relative max-w-container-max mx-auto px-margin-mobile md:px-gutter">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="space-y-6 z-10">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-[#004481]/10 to-[#fecb00]/10 border border-[#004481]/20 rounded-full">
                    <span class="w-2 h-2 bg-[#004481] rounded-full"></span>
                    <span class="text-xs font-bold text-[#004481] uppercase tracking-widest">Struktur Kepengurusan</span>
                </div>
                
                <h1 class="text-5xl md:text-6xl font-extrabold leading-tight">
                    <span class="bg-gradient-to-r from-[#004481] via-[#005baa] to-[#004481] bg-clip-text text-transparent">
                        {{ $berandaSections['struktur_pengurus']->judul ?? 'Struktur Kepengurusan Periode 2025-2026' }}
                    </span>
                </h1>
                
                <p class="text-lg text-slate-600 max-w-2xl leading-relaxed">
                    {{ $berandaSections['struktur_pengurus']->isi ?? 'Membangun pergerakan yang progresif, moderat, dan inklusif dengan dedikasi penuh untuk kemajuan bangsa dan agama.' }}
                </p>
                
                <div class="flex flex-wrap gap-3 pt-4">
                    <a href="#struktur" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-[#004481] to-[#005baa] text-white rounded-full font-semibold hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 group">
                        <i class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_downward</i>
                        Lihat Struktur
                    </a>
                    <button onclick="window.open('https://chat.whatsapp.com/K4U7K6vQdyp8lmxXqWJaTi', '_blank');" class="inline-flex items-center gap-2 px-6 py-3 border-2 border-[#004481] text-[#004481] rounded-full font-semibold hover:bg-[#004481]/5 transition-all duration-300 group">
                        <i class="material-symbols-outlined">chat</i>
                        Hubungi Kami
                    </button>
                </div>
            </div>

            <!-- Right Carousel -->
            <div class="relative h-96 rounded-3xl overflow-hidden shadow-2xl group">
                <div class="absolute inset-0 bg-gradient-to-tr from-[#004481]/20 to-transparent z-10"></div>
                <div class="carousel-track relative h-full flex transition-transform duration-500 ease-in-out">
                    @php
                        $strukturSlides = collect([
                            $berandaSections['struktur_carousel_1'] ?? null,
                            $berandaSections['struktur_carousel_2'] ?? null,
                            $berandaSections['struktur_carousel_3'] ?? null,
                        ])->filter(fn($item) => $item && $item->image)->values();
                    @endphp

                    @if ($strukturSlides->isNotEmpty())
                        @foreach ($strukturSlides as $slide)
                            <div class="min-w-full h-full relative">
                                <img src="{{ asset('storage/' . $slide->image) }}" alt="{{ $slide->judul }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
                                @if ($slide->caption)
                                    <div class="absolute bottom-0 left-0 right-0 bg-black/40 text-white p-4 text-sm">
                                        {{ $slide->caption }}
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    @else
                        <div class="min-w-full h-full relative">
                            <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=1200&q=80" alt="Kegiatan PMII" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
                        </div>
                        <div class="min-w-full h-full relative">
                            <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=1200&q=80" alt="Kegiatan organisasi" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
                        </div>
                        <div class="min-w-full h-full relative">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1200&q=80" alt="Kajian PMII" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
                        </div>
                    @endif
                </div>
                
                <!-- Carousel Controls -->
                <button id="strukturPrev" class="absolute left-4 top-1/2 -translate-y-1/2 z-20 bg-white/90 hover:bg-white p-3 rounded-full shadow-lg hover:shadow-xl transition-all backdrop-blur-sm">
                    <i class="material-symbols-outlined text-[#004481]">chevron_left</i>
                </button>
                <button id="strukturNext" class="absolute right-4 top-1/2 -translate-y-1/2 z-20 bg-white/90 hover:bg-white p-3 rounded-full shadow-lg hover:shadow-xl transition-all backdrop-blur-sm">
                    <i class="material-symbols-outlined text-[#004481]">chevron_right</i>
                </button>
                
                <!-- Carousel Indicators -->
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 z-20 flex gap-2">
                    <button class="carousel-dot w-2 h-2 rounded-full bg-white transition-all hover:bg-[#fecb00]"></button>
                    <button class="carousel-dot w-2 h-2 rounded-full bg-white/60 transition-all hover:bg-[#fecb00]"></button>
                    <button class="carousel-dot w-2 h-2 rounded-full bg-white/60 transition-all hover:bg-[#fecb00]"></button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Organizational Tree Canvas -->
<section class="py-16 px-margin-mobile md:px-gutter max-w-container-max mx-auto overflow-visible" id="struktur">
<!-- Level 1: Ketua Umum -->
<div class="flex flex-col items-center mb-16">
    <h2 class="text-center font-bold text-2xl md:text-3xl text-[#004481] mb-12 relative">
        <span class="relative inline-block">
            Pemimpin Organisasi
            <span class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-[#004481] via-[#fecb00] to-[#004481] rounded-full"></span>
        </span>
    </h2>

@php
    $pengurusCollection = collect($pengurusRayon ?? []);
    $jabatanOrder = [
        'Ketua Rayon',
        'Wakil Ketua',
        'Sekretaris',
        'Bendahara',
        'Ketua Bidang Kaderisasi',
        'Ketua Bidang Pendidikan, Keagamaan & Pengembangan Akademik',
        'Ketua Bidang Penataan Aparatur Organisasi',
        'Ketua Bidang Komunikasi & Hubungan Antar Lembaga',
        'Sekretaris Bid.Kaderisasi',
        'Sekretaris Bid.Pendidikan, Keagamaan & Pengembangan Akademik',
        'Sekretaris Bid.Penataan Aparatur Organisasi',
        'Sekretaris Bid.Komunikasi & Hubungan Antar Lembaga',
        'Ketua Biro Kaderisasi',
        'Anggota Biro Kaderisasi',
        'Ketua Biro Fakultatif & Minat Bakat',
        'Anggota Biro Fakultatif & Minat Bakat',
        'Ketua Biro Eksternal',
        'Anggota Biro Eksternal',
        'Ketua Biro Media & Informasi',
        'Anggota Biro Media & Informasi',
        'Ketua Biro Keagamaan',
        'Anggota Biro Keagamaan',
    ];

    $findJabatan = function($needle) use ($pengurusCollection) {
        return $pengurusCollection->first(function($p) use ($needle) {
            $jab = $p->jabatan ?? '';
            return $jab === $needle || stripos($jab, $needle) !== false;
        });
    };

    $findMembers = function($needle) use ($pengurusCollection) {
        return $pengurusCollection->filter(function($p) use ($needle) {
            $jab = $p->jabatan ?? '';
            return stripos($jab, $needle) !== false;
        });
    };

    $ketua = $findJabatan('Ketua Rayon');
    $wakil = $findJabatan('Wakil Ketua');
    $sekretaris = $findJabatan('Sekretaris');
    $bendahara = $findJabatan('Bendahara');

    // Bidang members
    $bidangList = [
        'Ketua Bidang Kaderisasi',
        'Ketua Bidang Pendidikan, Keagamaan & Pengembangan Akademik',
        'Ketua Bidang Penataan Aparatur Organisasi',
        'Ketua Bidang Komunikasi & Hubungan Antar Lembaga',
        'Sekretaris Bid.Kaderisasi',
        'Sekretaris Bid.Pendidikan, Keagamaan & Pengembangan Akademik',
        'Sekretaris Bid.Penataan Aparatur Organisasi',
        'Sekretaris Bid.Komunikasi & Hubungan Antar Lembaga',
    ];
    
    $bidangMembers = $pengurusCollection->filter(function($p) use ($bidangList) {
        $jab = $p->jabatan ?? '';
        foreach($bidangList as $search) {
            if($jab === $search || stripos($jab, $search) !== false) {
                return true;
            }
        }
        return false;
    });
@endphp

<!-- Ketua Card -->
<div class="relative group mb-12">
    <div class="absolute inset-0 bg-gradient-to-r from-[#004481]/20 to-[#fecb00]/20 rounded-3xl blur-2xl group-hover:blur-3xl transition-all duration-500 opacity-0 group-hover:opacity-100"></div>
    <div class="w-full max-w-sm mx-auto bg-white border-2 border-[#004481]/10 rounded-3xl p-8 text-center shadow-lg group-hover:shadow-2xl transition-all duration-300 relative overflow-hidden">
        <!-- Decorative gradient background -->
        <div class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-[#fecb00]/10 to-transparent rounded-full blur-3xl -z-0"></div>
        
        <div class="relative z-10">
            <!-- Profile Image -->
            <div class="relative w-40 h-40 mx-auto mb-6 group/img">
                <div class="absolute inset-0 border-4 border-gradient-to-r from-[#004481] to-[#fecb00] rounded-full bg-gradient-to-br from-[#004481]/5 to-[#fecb00]/5 animate-pulse"></div>
                <img class="w-full h-full object-cover rounded-full border-4 border-white shadow-xl" src="{{ $ketua->foto_url ?? 'https://i.pravatar.cc/80?u=ketua' }}" alt="{{ $ketua->nama ?? 'Ketua Rayon' }}"/>
                <div class="absolute inset-0 rounded-full opacity-0 group-hover/img:opacity-100 bg-gradient-to-tr from-[#004481]/20 to-transparent transition-opacity duration-300"></div>
            </div>
            
            <!-- Name & Position -->
            <h2 class="text-2xl md:text-3xl font-extrabold text-[#004481] mb-2">{{ $ketua->nama ?? 'Muhamad Ezra Haikal Purboyo' }}</h2>
            <p class="text-xs font-bold text-[#fecb00] uppercase tracking-widest mb-6 bg-[#004481]/5 inline-block px-4 py-2 rounded-full">{{ $ketua->jabatan ?? 'Ketua Rayon FTKD' }}</p>
            
            <!-- Social Links -->
            <div class="flex justify-center gap-4 mt-6">
                <a href="https://wa.me/089531823946" target="_blank" rel="noopener noreferrer"
                   class="p-3 bg-gradient-to-br from-[#004481]/10 to-[#fecb00]/10 rounded-full hover:bg-gradient-to-br hover:from-[#004481] hover:to-[#005baa] hover:text-white transition-all duration-300 group/social">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#004481] group-hover/social:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.198-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.372-.025-.521-.075-.149-.67-.966-.92-1.305-.247-.347-.5-.373-.67-.373-.172 0-.372.05-.57.248-.198.197-.76.74-.76 1.805 0 1.065.78 2.093.89 2.24.11.148 1.523 2.34 3.69 3.28 2.168.94 2.168.94 2.91 1.04.74.1 1.49-.05 2.04-.6.55-.55.74-1.29.65-2.04-.09-.75-.55-1.29-1.04-1.79zM12 2C6.48 2 2 6.48 2 12c0 1.85.5 3.58 1.38 5.08L2 22l4.92-1.38C8.42 21.5 10.15 22 12 22c5.52 0 10-4.48 10-10S17.52 2 12 2zm0 18c-1.6 0-3.1-.48-4.36-1.3l-.31-.18-2.92.82.82-2.92-.18-.31C4.48 15.1 4 13.6 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8-3.59 8-8 8z"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/ezrahaikall" target="_blank" rel="noopener noreferrer"
                   class="p-3 bg-gradient-to-br from-[#004481]/10 to-[#fecb00]/10 rounded-full hover:bg-gradient-to-br hover:from-[#004481] hover:to-[#005baa] hover:text-white transition-all duration-300 group/social">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#004481] group-hover/social:text-white transition-colors" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Level 2: Sekjen & Bendum -->
<div class="relative mb-16 py-8">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-0.5 h-12 bg-gradient-to-b from-[#004481]/30 to-transparent hidden md:block"></div>
    
    <div class="flex flex-col md:flex-row justify-center items-stretch gap-8 md:gap-12">
        @php($sekretaris = $findJabatan('Sekretaris') ?? null)
        @php($bendahara = $findJabatan('Bendahara') ?? null)
        
        <!-- Sekretaris Card -->
        <div class="flex-1 max-w-sm group">
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-[#004481]/15 to-[#fecb00]/15 rounded-2xl blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="bg-white border-2 border-[#004481]/10 rounded-2xl p-6 shadow-lg group-hover:shadow-xl transition-all duration-300 relative">
                    <div class="flex flex-col items-center text-center">
                        <div class="relative mb-4 group/img">
                            <div class="absolute inset-0 border-4 border-gradient-to-r from-[#004481] to-[#005baa] rounded-2xl opacity-30 animate-pulse"></div>
                            <img class="w-24 h-24 object-cover rounded-2xl border-4 border-white shadow-md" src="{{ $sekretaris->foto_url ?? 'https://i.pravatar.cc/80?u=sekretaris' }}" alt="{{ $sekretaris->nama ?? 'Sekretaris' }}"/>
                        </div>
                        <h3 class="font-bold text-lg text-[#004481] mb-1">{{ $sekretaris->nama ?? 'Sehan Zaki Nurmilad' }}</h3>
                        <p class="text-xs font-bold text-[#fecb00] uppercase tracking-wider bg-[#004481]/5 px-3 py-1 rounded-full">{{ $sekretaris->jabatan ?? 'Sekretaris' }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bendahara Card -->
        <div class="flex-1 max-w-sm group">
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-[#004481]/15 to-[#fecb00]/15 rounded-2xl blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="bg-white border-2 border-[#004481]/10 rounded-2xl p-6 shadow-lg group-hover:shadow-xl transition-all duration-300 relative">
                    <div class="flex flex-col items-center text-center">
                        <div class="relative mb-4 group/img">
                            <div class="absolute inset-0 border-4 border-gradient-to-r from-[#004481] to-[#005baa] rounded-2xl opacity-30 animate-pulse"></div>
                            <img class="w-24 h-24 object-cover rounded-2xl border-4 border-white shadow-md" src="{{ $bendahara->foto_url ?? 'https://i.pravatar.cc/80?u=bendahara' }}" alt="{{ $bendahara->nama ?? 'Bendahara' }}"/>
                        </div>
                        <h3 class="font-bold text-lg text-[#004481] mb-1">{{ $bendahara->nama ?? 'Rhealita Shani' }}</h3>
                        <p class="text-xs font-bold text-[#fecb00] uppercase tracking-wider bg-[#004481]/5 px-3 py-1 rounded-full">{{ $bendahara->jabatan ?? 'Bendahara' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Level 3: Ketua Bidang & Sekretaris Bidang -->
<div class="mb-16">
    <h3 class="text-center font-bold text-2xl md:text-3xl text-[#004481] mb-12 relative">
        <span class="relative inline-block">
            Ketua Bidang & Sekretaris Bidang
            <span class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-[#004481] via-[#fecb00] to-[#004481] rounded-full"></span>
        </span>
    </h3>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @forelse($bidangMembers as $member)
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-br from-[#004481]/10 to-[#fecb00]/10 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="bg-white border-2 border-[#004481]/10 rounded-2xl p-5 shadow-lg group-hover:shadow-xl transition-all duration-300 relative h-full">
                    <div class="flex items-center gap-4">
                        <div class="relative flex-shrink-0">
                            <div class="absolute inset-0 border-2 border-gradient-to-r from-[#004481] to-[#fecb00] rounded-xl opacity-20 animate-pulse"></div>
                            <img class="w-16 h-16 object-cover rounded-xl border-2 border-white shadow-md" src="{{ $member->foto_url ?? 'https://i.pravatar.cc/80?u=' . urlencode($member->nama ?? '') }}" alt="{{ $member->nama ?? 'Pengurus' }}"/>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="font-bold text-sm text-[#004481] truncate">{{ $member->nama ?? 'Nama tidak tersedia' }}</h4>
                            <p class="text-xs font-bold text-[#fecb00] uppercase truncate">{{ $member->jabatan ?? 'Jabatan tidak tersedia' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-12">
                <p class="text-slate-500 text-sm">Belum ada pengurus bidang yang ditambahkan.</p>
            </div>
        @endforelse
    </div>
</div>
<!-- Level 4: Departemen & Lembaga (Biro) -->
<div class="mt-16">
    <h3 class="text-center font-bold text-2xl md:text-3xl text-[#004481] mb-12 relative">
        <span class="relative inline-block">
            Biro-biro Operasional
            <span class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-[#004481] via-[#fecb00] to-[#004481] rounded-full"></span>
        </span>
    </h3>

    <div class="grid gap-6 xl:grid-cols-5 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1">
        @php($ketuaBiroKader = $findJabatan('Ketua Biro Kaderisasi'))
        <div class="group relative">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-blue-600/10 rounded-3xl blur-2xl opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
            <div class="bg-gradient-to-br from-white to-blue-50 border-2 border-blue-100/50 rounded-3xl p-6 shadow-lg group-hover:shadow-2xl transition-all duration-300 h-full relative overflow-hidden">
                <div class="absolute -top-10 -right-10 w-24 h-24 bg-blue-100/30 rounded-full blur-2xl"></div>
                <div class="relative z-10">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="w-16 h-16 rounded-2xl overflow-hidden border-2 border-white shadow-md bg-gradient-to-br from-blue-400 to-blue-600 p-0.5">
                            <img src="{{ $ketuaBiroKader->foto_url ?? 'https://i.pravatar.cc/80?u=KetuaBiroKader' }}" alt="{{ $ketuaBiroKader->nama ?? 'Ketua Biro Kaderisasi' }}" class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div class="flex-1">
                            <p class="text-xs uppercase tracking-widest text-blue-600 font-bold mb-1">Ketua Biro</p>
                            <h4 class="font-bold text-base text-slate-900 line-clamp-2">{{ $ketuaBiroKader->nama ?? 'Muhammad Ilham Baihaqi' }}</h4>
                            <p class="text-xs uppercase tracking-widest text-white bg-gradient-to-r from-blue-500 to-blue-600 inline-block mt-2 px-2 py-1 rounded-full font-bold">Biro Kaderisasi</p>
                        </div>
                    </div>
                    <div class="text-sm">
                        <p class="font-semibold text-slate-900 mb-3 flex items-center gap-2">
                            <span class="w-1 h-1 bg-blue-600 rounded-full"></span>
                            Anggota
                        </p>
                        @php($anggotaBiroKader = $findMembers('Anggota Biro Kaderisasi'))
                        @if($anggotaBiroKader->isEmpty())
                            <p class="text-xs text-slate-500">Belum ada anggota.</p>
                        @else
                            <div class="grid gap-2 max-h-32 overflow-y-auto">
                                @foreach($anggotaBiroKader->take(3) as $angg)
                                    <div class="flex items-center gap-2 rounded-lg bg-white/60 p-2 border border-blue-100">
                                        <div class="w-8 h-8 rounded-lg overflow-hidden border border-blue-200 flex-shrink-0">
                                            <img src="{{ $angg->foto_url ?? 'https://i.pravatar.cc/32?u=' . urlencode($angg->nama) }}" alt="{{ $angg->nama }}" class="w-full h-full object-cover">
                                        </div>
                                        <span class="text-xs text-slate-700 line-clamp-1">{{ $angg->nama }}</span>
                                    </div>
                                @endforeach
                                @if($anggotaBiroKader->count() > 3)
                                    <p class="text-xs text-blue-600 font-semibold">+{{ $anggotaBiroKader->count() - 3 }} anggota lainnya</p>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @php($ketuaBiroFakultatif = $findJabatan('Ketua Biro Fakultatif & Minat Bakat'))
        <div class="group relative">
            <div class="absolute inset-0 bg-gradient-to-br from-green-500/20 to-green-600/10 rounded-3xl blur-2xl opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
            <div class="bg-gradient-to-br from-white to-green-50 border-2 border-green-100/50 rounded-3xl p-6 shadow-lg group-hover:shadow-2xl transition-all duration-300 h-full relative overflow-hidden">
                <div class="absolute -top-10 -right-10 w-24 h-24 bg-green-100/30 rounded-full blur-2xl"></div>
                <div class="relative z-10">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="w-16 h-16 rounded-2xl overflow-hidden border-2 border-white shadow-md bg-gradient-to-br from-green-400 to-green-600 p-0.5">
                            <img src="{{ $ketuaBiroFakultatif->foto_url ?? 'https://i.pravatar.cc/80?u=KetuaBiroFakultatif' }}" alt="{{ $ketuaBiroFakultatif->nama ?? 'Ketua Biro Fakultatif' }}" class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div class="flex-1">
                            <p class="text-xs uppercase tracking-widest text-green-600 font-bold mb-1">Ketua Biro</p>
                            <h4 class="font-bold text-base text-slate-900 line-clamp-2">{{ $ketuaBiroFakultatif->nama ?? 'Siti Nur Halimah' }}</h4>
                            <p class="text-xs uppercase tracking-widest text-white bg-gradient-to-r from-green-500 to-green-600 inline-block mt-2 px-2 py-1 rounded-full font-bold">Biro Fakultatif</p>
                        </div>
                    </div>
                    <div class="text-sm">
                        <p class="font-semibold text-slate-900 mb-3 flex items-center gap-2">
                            <span class="w-1 h-1 bg-green-600 rounded-full"></span>
                            Anggota
                        </p>
                        @php($anggotaBiroFak = $findMembers('Anggota Biro Fakultatif'))
                        @if($anggotaBiroFak->isEmpty())
                            <p class="text-xs text-slate-500">Belum ada anggota.</p>
                        @else
                            <div class="grid gap-2 max-h-32 overflow-y-auto">
                                @foreach($anggotaBiroFak->take(3) as $angg)
                                    <div class="flex items-center gap-2 rounded-lg bg-white/60 p-2 border border-green-100">
                                        <div class="w-8 h-8 rounded-lg overflow-hidden border border-green-200 flex-shrink-0">
                                            <img src="{{ $angg->foto_url ?? 'https://i.pravatar.cc/32?u=' . urlencode($angg->nama) }}" alt="{{ $angg->nama }}" class="w-full h-full object-cover">
                                        </div>
                                        <span class="text-xs text-slate-700 line-clamp-1">{{ $angg->nama }}</span>
                                    </div>
                                @endforeach
                                @if($anggotaBiroFak->count() > 3)
                                    <p class="text-xs text-green-600 font-semibold">+{{ $anggotaBiroFak->count() - 3 }} anggota lainnya</p>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @php($ketuaBiroEksternal = $findJabatan('Ketua Biro Eksternal'))
        <div class="group relative">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-purple-600/10 rounded-3xl blur-2xl opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
            <div class="bg-gradient-to-br from-white to-purple-50 border-2 border-purple-100/50 rounded-3xl p-6 shadow-lg group-hover:shadow-2xl transition-all duration-300 h-full relative overflow-hidden">
                <div class="absolute -top-10 -right-10 w-24 h-24 bg-purple-100/30 rounded-full blur-2xl"></div>
                <div class="relative z-10">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="w-16 h-16 rounded-2xl overflow-hidden border-2 border-white shadow-md bg-gradient-to-br from-purple-400 to-purple-600 p-0.5">
                            <img src="{{ $ketuaBiroEksternal->foto_url ?? 'https://i.pravatar.cc/80?u=KetuaBiroEksternal' }}" alt="{{ $ketuaBiroEksternal->nama ?? 'Ketua Biro Eksternal' }}" class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div class="flex-1">
                            <p class="text-xs uppercase tracking-widest text-purple-600 font-bold mb-1">Ketua Biro</p>
                            <h4 class="font-bold text-base text-slate-900 line-clamp-2">{{ $ketuaBiroEksternal->nama ?? 'Hafi Fatih Agustian' }}</h4>
                            <p class="text-xs uppercase tracking-widest text-white bg-gradient-to-r from-purple-500 to-purple-600 inline-block mt-2 px-2 py-1 rounded-full font-bold">Biro Eksternal</p>
                        </div>
                    </div>
                    <div class="text-sm">
                        <p class="font-semibold text-slate-900 mb-3 flex items-center gap-2">
                            <span class="w-1 h-1 bg-purple-600 rounded-full"></span>
                            Anggota
                        </p>
                        @php($anggotaBiroEksternal = $findMembers('Anggota Biro Eksternal'))
                        @if($anggotaBiroEksternal->isEmpty())
                            <p class="text-xs text-slate-500">Belum ada anggota.</p>
                        @else
                            <div class="grid gap-2 max-h-32 overflow-y-auto">
                                @foreach($anggotaBiroEksternal->take(3) as $angg)
                                    <div class="flex items-center gap-2 rounded-lg bg-white/60 p-2 border border-purple-100">
                                        <div class="w-8 h-8 rounded-lg overflow-hidden border border-purple-200 flex-shrink-0">
                                            <img src="{{ $angg->foto_url ?? 'https://i.pravatar.cc/32?u=' . urlencode($angg->nama) }}" alt="{{ $angg->nama }}" class="w-full h-full object-cover">
                                        </div>
                                        <span class="text-xs text-slate-700 line-clamp-1">{{ $angg->nama }}</span>
                                    </div>
                                @endforeach
                                @if($anggotaBiroEksternal->count() > 3)
                                    <p class="text-xs text-purple-600 font-semibold">+{{ $anggotaBiroEksternal->count() - 3 }} anggota lainnya</p>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @php($ketuaBiroMedia = $findJabatan('Ketua Biro Media & Informasi'))
        <div class="group relative">
            <div class="absolute inset-0 bg-gradient-to-br from-orange-500/20 to-orange-600/10 rounded-3xl blur-2xl opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
            <div class="bg-gradient-to-br from-white to-orange-50 border-2 border-orange-100/50 rounded-3xl p-6 shadow-lg group-hover:shadow-2xl transition-all duration-300 h-full relative overflow-hidden">
                <div class="absolute -top-10 -right-10 w-24 h-24 bg-orange-100/30 rounded-full blur-2xl"></div>
                <div class="relative z-10">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="w-16 h-16 rounded-2xl overflow-hidden border-2 border-white shadow-md bg-gradient-to-br from-orange-400 to-orange-600 p-0.5">
                            <img src="{{ $ketuaBiroMedia->foto_url ?? 'https://i.pravatar.cc/80?u=KetuaBiroMedia' }}" alt="{{ $ketuaBiroMedia->nama ?? 'Ketua Biro Media' }}" class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div class="flex-1">
                            <p class="text-xs uppercase tracking-widest text-orange-600 font-bold mb-1">Ketua Biro</p>
                            <h4 class="font-bold text-base text-slate-900 line-clamp-2">{{ $ketuaBiroMedia->nama ?? 'Arya Lukman Hakim' }}</h4>
                            <p class="text-xs uppercase tracking-widest text-white bg-gradient-to-r from-orange-500 to-orange-600 inline-block mt-2 px-2 py-1 rounded-full font-bold">Biro Media</p>
                        </div>
                    </div>
                    <div class="text-sm">
                        <p class="font-semibold text-slate-900 mb-3 flex items-center gap-2">
                            <span class="w-1 h-1 bg-orange-600 rounded-full"></span>
                            Anggota
                        </p>
                        @php($anggotaBiroMedia = $findMembers('Anggota Biro Media'))
                        @if($anggotaBiroMedia->isEmpty())
                            <p class="text-xs text-slate-500">Belum ada anggota.</p>
                        @else
                            <div class="grid gap-2 max-h-32 overflow-y-auto">
                                @foreach($anggotaBiroMedia->take(3) as $angg)
                                    <div class="flex items-center gap-2 rounded-lg bg-white/60 p-2 border border-orange-100">
                                        <div class="w-8 h-8 rounded-lg overflow-hidden border border-orange-200 flex-shrink-0">
                                            <img src="{{ $angg->foto_url ?? 'https://i.pravatar.cc/32?u=' . urlencode($angg->nama) }}" alt="{{ $angg->nama }}" class="w-full h-full object-cover">
                                        </div>
                                        <span class="text-xs text-slate-700 line-clamp-1">{{ $angg->nama }}</span>
                                    </div>
                                @endforeach
                                @if($anggotaBiroMedia->count() > 3)
                                    <p class="text-xs text-orange-600 font-semibold">+{{ $anggotaBiroMedia->count() - 3 }} anggota lainnya</p>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @php($ketuaBiroKeagamaan = $findJabatan('Ketua Biro Keagamaan'))
        <div class="group relative">
            <div class="absolute inset-0 bg-gradient-to-br from-red-500/20 to-red-600/10 rounded-3xl blur-2xl opacity-0 group-hover:opacity-100 transition-all duration-500"></div>
            <div class="bg-gradient-to-br from-white to-red-50 border-2 border-red-100/50 rounded-3xl p-6 shadow-lg group-hover:shadow-2xl transition-all duration-300 h-full relative overflow-hidden">
                <div class="absolute -top-10 -right-10 w-24 h-24 bg-red-100/30 rounded-full blur-2xl"></div>
                <div class="relative z-10">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="w-16 h-16 rounded-2xl overflow-hidden border-2 border-white shadow-md bg-gradient-to-br from-red-400 to-red-600 p-0.5">
                            <img src="{{ $ketuaBiroKeagamaan->foto_url ?? 'https://i.pravatar.cc/80?u=KetuaBiroKeagamaan' }}" alt="{{ $ketuaBiroKeagamaan->nama ?? 'Ketua Biro Keagamaan' }}" class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div class="flex-1">
                            <p class="text-xs uppercase tracking-widest text-red-600 font-bold mb-1">Ketua Biro</p>
                            <h4 class="font-bold text-base text-slate-900 line-clamp-2">{{ $ketuaBiroKeagamaan->nama ?? 'Dewi Sartika' }}</h4>
                            <p class="text-xs uppercase tracking-widest text-white bg-gradient-to-r from-red-500 to-red-600 inline-block mt-2 px-2 py-1 rounded-full font-bold">Biro Keagamaan</p>
                        </div>
                    </div>
                    <div class="text-sm">
                        <p class="font-semibold text-slate-900 mb-3 flex items-center gap-2">
                            <span class="w-1 h-1 bg-red-600 rounded-full"></span>
                            Anggota
                        </p>
                        @php($anggotaBiroKeagamaan = $findMembers('Anggota Biro Keagamaan'))
                        @if($anggotaBiroKeagamaan->isEmpty())
                            <p class="text-xs text-slate-500">Belum ada anggota.</p>
                        @else
                            <div class="grid gap-2 max-h-32 overflow-y-auto">
                                @foreach($anggotaBiroKeagamaan->take(3) as $angg)
                                    <div class="flex items-center gap-2 rounded-lg bg-white/60 p-2 border border-red-100">
                                        <div class="w-8 h-8 rounded-lg overflow-hidden border border-red-200 flex-shrink-0">
                                            <img src="{{ $angg->foto_url ?? 'https://i.pravatar.cc/32?u=' . urlencode($angg->nama) }}" alt="{{ $angg->nama }}" class="w-full h-full object-cover">
                                        </div>
                                        <span class="text-xs text-slate-700 line-clamp-1">{{ $angg->nama }}</span>
                                    </div>
                                @endforeach
                                @if($anggotaBiroKeagamaan->count() > 3)
                                    <p class="text-xs text-red-600 font-semibold">+{{ $anggotaBiroKeagamaan->count() - 3 }} anggota lainnya</p>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@include('layouts.footer')


<script>
    // Enhanced Carousel for Struktur Page
    function initCarousel() {
        const carouselTrack = document.querySelector('.carousel-track');
        const prevButton = document.getElementById('strukturPrev');
        const nextButton = document.getElementById('strukturNext');
        const dots = document.querySelectorAll('.carousel-dot');
        
        let currentIndex = 0;

        function updateCarousel() {
            const offset = currentIndex * 100;
            carouselTrack.style.transform = `translateX(-${offset}%)`;
            
            dots.forEach((dot, index) => {
                dot.style.backgroundColor = index === currentIndex ? '#ffffff' : 'rgba(255, 255, 255, 0.4)';
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % 3;
            updateCarousel();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + 3) % 3;
            updateCarousel();
        }

        prevButton?.addEventListener('click', prevSlide);
        nextButton?.addEventListener('click', nextSlide);
        
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentIndex = index;
                updateCarousel();
            });
        });

        // Auto advance carousel every 5 seconds
        setInterval(nextSlide, 5000);
        
        updateCarousel();
    }

    document.addEventListener('DOMContentLoaded', initCarousel);

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    // Scroll reveal animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('[class*="group"]').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'all 0.6s ease-out';
        observer.observe(el);
    });
</script>

    <script>
  // === Contact Bubble ===
  const contactBtn = document.getElementById('contact-btn');
  const contactBubble = document.getElementById('contact-bubble');

  contactBtn.addEventListener('click', function(e) {
    e.preventDefault();
    contactBubble.classList.toggle('hidden');
  });

  // Tutup bubble jika klik di luar
  document.addEventListener('click', function(e) {
    if (!contactBtn.contains(e.target) && !contactBubble.contains(e.target)) {
      contactBubble.classList.add('hidden');
    }
  });
</script>

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
<!-- Micro-interaction Scripts -->
<script>
        // Smooth scroll implementation if needed
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Sticky header background transition
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 20) {
                header.classList.add('shadow-md');
            } else {
                header.classList.remove('shadow-md');
            }
        });
    </script>
        <script>
            // Simple carousel for struktur hero
            (function(){
                const track = document.querySelector('.carousel-track');
                if (!track) return;
                const slides = Array.from(track.children);
                const prev = document.getElementById('strukturPrev');
                const next = document.getElementById('strukturNext');
                let index = 0;

                function update() {
                    track.style.transform = `translateX(-${index * 100}%)`;
                }

                prev && prev.addEventListener('click', () => { index = (index - 1 + slides.length) % slides.length; update(); });
                next && next.addEventListener('click', () => { index = (index + 1) % slides.length; update(); });
                update();
            })();
        </script>
</body></html>