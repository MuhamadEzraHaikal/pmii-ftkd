<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Rayon Fakultas Teknik Komputer dan Desain - Dzikir, Fikir, Amal Sholeh</title>
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

<!-- TopNavBar -->
<header id="navbar" 
        class="fixed top-0 w-full bg-surface z-50 transition-all duration-300">

<nav class="flex justify-between items-center h-20 px-margin-desktop max-w-container-max mx-auto">
  <div class="flex items-center space-x-4 font-sans font-medium">
    
    <!-- Logo -->
    <img 
      src="logo_rayon.png" 
      alt="Logo PMII Rayon FTKD" 
      class="h-12 w-auto object-contain"
    >

    <div class="flex-1">
      <h2 class="text-lg">Pergerakan Mahasiswa Islam Indonesia</h2>
      <p class="text-sm font-light text-gray-500">Rayon Fakultas Teknik Komputer dan Desain</p>
      <p class="text-sm font-light text-gray-500">Komisariat Universitas Nusa putra</p>
    </div>
  </div>

  <!-- Menu Navigasi -->
<div class="hidden md:flex gap-8 items-center">

    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors duration-200"
       href="/beranda">
        Beranda
    </a>

    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors duration-200"
       href="/struktur pengurus">
        Struktur Pengurus
    </a>

    <!-- Arsip -->
    <a href="#"
       onclick="showLoginModal(); return false;"
       class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors duration-200">
        Arsip Administrasi
    </a>

    <!-- Calendar -->
    <a href="#"
       onclick="showLoginModal(); return false;"
       class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors duration-200">
        Calendar
    </a>

</div>

  <!-- Tombol Login -->
  <button id="loginBtn" 
          onclick="showLoginModal()"
          class="bg-primary text-on-primary px-6 py-2 rounded-lg font-label-md text-label-md scale-95 active:opacity-80 transition-all hover:bg-primary/90">
    Login
  </button>
</nav>

</header>

<!-- Script Navbar -->
<script>
    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            // Saat di-scroll: transparan + garis muncul
            navbar.classList.remove('bg-surface');
            navbar.classList.add(
                'bg-white/85', 
                'backdrop-blur-xl', 
                'border-b', 
                'border-outline-variant',
                'shadow-md'
            );
        } else {
            // Di posisi paling atas: solid + garis hilang
            navbar.classList.add('bg-surface');
            navbar.classList.remove(
                'bg-white/85', 
                'backdrop-blur-xl', 
                'border-b', 
                'border-outline-variant',
                'shadow-md'
            );
        }
    });
</script>
</header>
<main class="pt-20">

<!-- Hero Section -->
<section class="relative overflow-hidden bg-surface pt-16 pb-section-gap">
  <div class="max-w-container-max mx-auto px-margin-mobile md:px-gutter grid md:grid-cols-2 gap-12 items-center">
    
    <!-- Kiri: Teks -->
    <div class="space-y-6 z-10">
      <div class="inline-flex items-center gap-2">
      </div>

      <h1 class="font-headline-xl text-headline-xl text-primary max-w-xl">
        Hai Sahabat Apakah Kalian Tau Apa Itu PMII? 
        <span class="relative">
          <span class="absolute bottom-1 left-0 w-full h-3 bg-secondary-container/40 -z-10"></span>
        </span>
      </h1>

      <p class="font-body-lg text-body-lg text-on-surface-variant max-w-lg">
        PMII (Pergerakan Mahasiswa Islam Indonesia) merupakan organisasi kemahasiswaan yang berlandaskan nilai-nilai keislaman, keindonesiaan, dan kemanusiaan. PMII memiliki tujuan membentuk pribadi muslim Indonesia yang bertakwa kepada Allah SWT, berbudi luhur, berilmu, cakap, serta bertanggung jawab dalam mengabdikan diri kepada agama, bangsa, dan masyarakat.
      </p>

      <div class="flex flex-wrap gap-4 pt-4">
        <button class="px-8 py-3 bg-primary text-on-primary rounded-lg font-label-sm shadow-lg hover:shadow-primary-container/20 transition-all active:scale-95">
          Get Started
        </button>
        <button class="px-8 py-3 border border-primary text-primary rounded-lg font-label-sm movement-button hover:bg-primary/5 transition-all">
          Pelajari Lebih Lanjut
        </button>
      </div>
    </div>

    <!-- Kanan: Carousel -->
    <div class="relative">
      <div id="pmii-carousel" class="relative z-10 rounded-3xl overflow-hidden shadow-2xl" data-carousel="static">
        
        <!-- Carousel wrapper -->
        <div class="relative h-[420px] md:h-[480px] overflow-hidden">
          <!-- Slide 1 -->
          <div class="absolute inset-0 block duration-700 ease-in-out" data-carousel-item="active">
            <img src="poto.jpg" class="w-full h-full object-cover" alt="Diskusi dan kajian PMII">
          </div>
          <!-- Slide 2 -->
          <div class="absolute inset-0 hidden duration-700 ease-in-out" data-carousel-item>
            <img src="logo_rayon.png" class="w-full h-full object-cover" alt="Kegiatan organisasi PMII">
          </div>
          <!-- Slide 3 -->
          <div class="absolute inset-0 hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?auto=format&fit=crop&w=1200&q=80" class="w-full h-full object-cover" alt="Kader PMII berdiskusi">
          </div>
          <!-- Slide 4 -->
          <div class="absolute inset-0 hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=1200&q=80" class="w-full h-full object-cover" alt="Kegiatan sosial PMII">
          </div>
        </div>

        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 space-x-2 bottom-5 left-1/2">
          <button type="button" class="w-3 h-3 rounded-full bg-white/70 hover:bg-white transition-all" aria-current="true" data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full bg-white/70 hover:bg-white transition-all" data-carousel-slide-to="1"></button>
          <button type="button" class="w-3 h-3 rounded-full bg-white/70 hover:bg-white transition-all" data-carousel-slide-to="2"></button>
          <button type="button" class="w-3 h-3 rounded-full bg-white/70 hover:bg-white transition-all" data-carousel-slide-to="3"></button>
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

<!-- Activity Calendar -->
<section class="py-24 px-margin-desktop max-w-container-max mx-auto">
<div class="flex items-end justify-between mb-12">
<div>
<h2 class="font-display-lg text-primary text-3xl md:text-4xl mb-2">Di PMII, Emangnya Kita Ngapain Aja, Sih?</h2>
<p class="text-on-surface-variant max-w-xl"> Belajar tanpa batas, berdiskusi dengan gagasan, bergerak untuk masyarakat, dan bertumbuh bersama dalam semangat kaderisasi. Di PMII, setiap kegiatan adalah langkah menuju pribadi yang lebih berilmu, berintegritas, dan bermanfaat. 
</p>

<p class="text-on-surface-variant max-w-xl"> 
</p>
</div>
<button class="text-primary font-bold flex items-center gap-2">
                    View Calendar <span class="material-symbols-outlined">arrow_forward</span>
</button>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- Event Card 1 -->
<div class="bg-surface-container-low p-6 rounded-xl border border-outline-variant hover:border-primary transition-all group">
<div class="text-primary font-bold text-lg mb-2">MAR 15, 2024</div>
<h3 class="font-headline-md text-headline-md mb-4 group-hover:text-primary transition-colors">MAPABA Raya 2024</h3>
<p class="text-on-surface-variant mb-6 font-body-md line-clamp-3">Masa Penerimaan Anggota Baru untuk mahasiswa Universitas Nusa Putra. Temukan jati dirimu dalam gerakan.</p>
<div class="flex items-center gap-2 text-on-surface-variant text-sm">
<span class="material-symbols-outlined text-base">location_on</span> Auditorium Utama
                    </div>
</div>
<!-- Event Card 2 -->
<div class="bg-surface-container-low p-6 rounded-xl border border-outline-variant hover:border-primary transition-all group">
<div class="text-primary font-bold text-lg mb-2">APR 02, 2024</div>
<h3 class="font-headline-md text-headline-md mb-4 group-hover:text-primary transition-colors">Kajian Intelektual</h3>
<p class="text-on-surface-variant mb-6 font-body-md line-clamp-3">Diskusi rutin mingguan membedah isu-isu kontemporer dari perspektif Aswaja dan kemahasiswaan.</p>
<div class="flex items-center gap-2 text-on-surface-variant text-sm">
<span class="material-symbols-outlined text-base">schedule</span> 15:30 WIB
                    </div>
</div>
<!-- Event Card 3 -->
<div class="bg-surface-container-low p-6 rounded-xl border border-outline-variant hover:border-primary transition-all group">
<div class="text-primary font-bold text-lg mb-2">MAY 10, 2024</div>
<h3 class="font-headline-md text-headline-md mb-4 group-hover:text-primary transition-colors">Baksos Community</h3>
<p class="text-on-surface-variant mb-6 font-body-md line-clamp-3">Aksi sosial dan pengabdian masyarakat di lingkungan sekitar kampus sebagai wujud Amal Sholeh.</p>
<div class="flex items-center gap-2 text-on-surface-variant text-sm">
<span class="material-symbols-outlined text-base">diversity_3</span> Desa Cibolang
                    </div>
</div>
</div>
</section>
<!-- Structural Info (structural) -->
<section class="bg-surface-container py-24">
<div class="px-margin-desktop max-w-container-max mx-auto text-center mb-16">
<h2 class="font-display-lg text-primary mb-4">pengurus rayon FTKD</h2>
<div class="w-24 h-1 bg-secondary-container mx-auto"></div>
</div>

<div class="px-margin-desktop max-w-container-max mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
<!-- Board Member 1 -->
<div class="bg-surface p-8 rounded-2xl text-center shadow-sm hover:shadow-md transition-all">
<div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden border-4 border-primary/10">
<img class="w-full h-full object-cover" data-alt="A professional portrait of a male student leader in a PMII blue jacket, smiling confidently with a blurred academic campus background. The lighting is soft and professional, emphasizing leadership and approachability. The style is clean and corporate modern." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKM2DcbonhZD6ooeH0EnakIbDxBKP8td41jIQ9E7JRAUWH3eUKiiLqe4mog2rHkxIKcmYcOcApOJyOPQ3mcEybZXLY-ZKf-Ky7CYa0nc8wfytWbXQHQ_H6pnXlXATQqB9kp6dbQdQJpa9DGq4qrSQzTfMTvQYZEUFv4S5pswigBkyRa2ZnaYNvshaA6f95qqFDDk_58Rxvth3tlv7UihQ74mbVAhaKbfedRtycUuzpITXjpJ4XXv3Urdfsq8JAAh9qMDuwwyg_Fuo"/>
</div>
<h4 class="font-headline-sm text-headline-sm text-primary mb-1">M. Ezra Haikal</h4>
<p class="text-on-surface-variant font-label-md">Ketua Rayon</p>
<div class="mt-4 flex justify-center gap-3">
<span class="material-symbols-outlined text-primary-container">verified_user</span>
</div>
</div>
<!-- Board Member 2 -->
<div class="bg-surface p-8 rounded-2xl text-center shadow-sm hover:shadow-md transition-all">
<div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden border-4 border-primary/10">
<img class="w-full h-full object-cover" data-alt="A professional portrait of a female student leader wearing a stylish hijab and a PMII blue jacket, looking intelligent and determined. The background is a clean, minimalist university office. High-key lighting highlights her professional expression." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBWN6WFh3ogECKCtp3S6TWmIpyPZAd2pCk-zxA53PZ8LV18YVD1Raz3pnEwevpoCCAUBucVt-nc_s6SQg1WDexFR5CLi5oAIb-i-f48pg18t872jqU8tNqN4oRwuBwhr65g0sUWvejdqmiLTEhvD1tjIwNKApKcY081IK5WX7p-grX-zDA3hqiDn0zq6cRD1PHQGDGZIykBlJblKo5JEN_pT_WInmpdk2QAcYWhcWc9G8w0m_G1AzoZJig86NOOU7JPDt_6QJxEoas"/>
</div>
<h4 class="font-headline-sm text-headline-sm text-primary mb-1">Sehan Zaki Nurmilad</h4>
<p class="text-on-surface-variant font-label-md">Sekretaris Umum</p>
<div class="mt-4 flex justify-center gap-3">
<span class="material-symbols-outlined text-primary-container">description</span>
</div>
</div>
<!-- Board Member 3 -->
<div class="bg-surface p-8 rounded-2xl text-center shadow-sm hover:shadow-md transition-all">
<div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden border-4 border-primary/10">
<img class="w-full h-full object-cover" data-alt="A male student leader in a PMII organization jacket, holding a leather folder, posing in a modern library. He looks analytical and professional. The corporate modern aesthetic is reflected in the clean lines and neutral background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnHMISnskGUorBrEZRgI_lZ-SM9YZY9k2ZxDFefJuQqTU9NEBWSqpxnjF3MVwN5dNXoQHhnnRgEIEtwhrU3mJEJ_UaT_xh770I7VH0ZxVxQ3Ol-EFbKK0xEnItm-AnPRLW96gYKCAGgLr5rihe7dCWCt3dIGD6No6818V2NH8kSRIg9LEgT2Ko2qWUoE0F9HQLjfWL72alVAeihQ6UZ64s03CpX1-TmKyClQlMUKAGWbxjQR83ooi7hXV_fNdWhDYDeNPV7K3MRxU"/>
</div>
<h4 class="font-headline-sm text-headline-sm text-primary mb-1">Rhealita Shani</h4>
<p class="text-on-surface-variant font-label-md">Bendahara Umum</p>
<div class="mt-4 flex justify-center gap-3">
<span class="material-symbols-outlined text-primary-container">payments</span>
</div>
</div>
<!-- Board Member 4 -->
<div class="bg-surface p-8 rounded-2xl text-center shadow-sm hover:shadow-md transition-all">
<div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden border-4 border-primary/10">
<img class="w-full h-full object-cover" data-alt="A female student leader in a blue organizational jacket, standing in front of a digital screen showing organizational charts. She has a visionary gaze. The setting is bright and academic, following the PMII professional color scheme." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAlS477h3WC2L1M9yCNAdQrxJ4c7jk0cS5do56CW-mbp9WxdF9IToQkKvWELYbn7HbX0aL8kpd0MsPvs66VhdS4xmQUrvMgfeqP8_7W4XLLOwvZK7bYUVT67TzYaMtdOPCaaYERP6tQD7jmZHs4InQ-BqQemfUqNVrQ2FUONkiE0L5h9qzjUo6Sg6yJuWmgkN258B1Yn5liFmQzjIt4x-VR4IhuSfHzadP5ZLM4CCib4O-Jg0EbIXpgqmmatBo21Hz5co8iXOVufwU"/>
</div>
<h4 class="font-headline-sm text-headline-sm text-primary mb-1">M. Hafiz Putra</h4>
<p class="text-on-surface-variant font-label-md">Wakil Ketua 1 Bid.Kaderisasi</p>
<div class="mt-4 flex justify-center gap-3">
<span class="material-symbols-outlined text-primary-container">groups</span>
</div>
</div>
</div>
</section>


<!-- Decorative Elements -->
<section class="py-24 px-margin-desktop max-w-container-max mx-auto bg-white">
</div>
</div>
</section>
<!-- Profile & Vision (Asymmetric Bento) -->
<section class="py-section-gap bg-surface-container-low">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-gutter">
<div class="text-center mb-16">
<h2 class="font-headline-lg text-headline-lg text-primary">Profil Pergerakan</h2>
<div class="w-20 h-1 bg-secondary-container mx-auto mt-4 rounded-full"></div>
</div>
<div class="grid md:grid-cols-3 gap-gutter">
<!-- Main Statement -->
<div class="md:col-span-2 bg-surface p-8 md:p-12 rounded-3xl border border-outline-variant/30 flex flex-col justify-center">
<h3 class="font-headline-md text-headline-md text-primary mb-6">Visi Rayon FTKD Masa Khidmat 2025-2026</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        RAYON Fakultas Teknik Komputer dan Desain sebagai ruang kaderisasi yang dinamis, inklusif, dan solutif dalam mengembangkan potensi kader secara utuh, melalui penguatan keterampilan teknis (hard skill) dan non-teknis (soft skill) yang berlandaskan nilai-nilai Aswaja serta sikap intelektual kritis.
                    </p>
</div>
<!-- Stats/Action -->
<div class="bg-primary p-8 rounded-3xl text-on-primary flex flex-col justify-between">
<span class="material-symbols-outlined text-[48px] text-secondary-container" data-weight="fill">diversity_3</span>
<div>
<div class="text-4xl font-bold mb-2">105+</div>
<p class="font-label-sm text-label-sm text-on-primary-container">Anggota Rayon FTKD </p>
</div>
</div>
<!-- Goals Card -->
<div class="bg-surface p-8 rounded-3xl border border-outline-variant/30 hover:shadow-xl transition-all group">
<div class="w-14 h-14 bg-primary-container/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary group-hover:text-on-primary">person_check</span>
</div>
<h4 class="font-headline-md text-headline-md text-primary mb-4">Tujuan PMII</h4>
<p class="font-body-md text-body-md text-on-surface-variant">
                        Terbentuknya pribadi muslim Indonesia yang bertaqwa kepada Allah Swt, Berbudi luhur, berilmu, cakap dan bertanggungjawab.
                    </p>
</div>
<!-- Vision Card -->
<div class="md:col-span-2 bg-surface p-8 rounded-3xl border border-outline-variant/30 hover:shadow-xl transition-all group flex flex-col md:flex-row gap-8 items-start md:items-center">
<div class="w-14 h-14 shrink-0 bg-primary-container/10 rounded-2xl flex items-center justify-center group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary group-hover:text-on-primary">hub</span>
</div>
<div>

<h4 class="font-headline-md text-headline-md text-primary mb-2">
    Misi Rayon FTKD Masa Khidmat 2025-2026
</h4>

<ul class="font-body-md text-body-md text-on-surface-variant space-y-3 list-disc pl-5">
    <li>Menyediakan ruang pengembangan akademik yang mendukung kader dalam mengasah kemampuan, baik di bidang keilmuan, keterampilan, maupun minat-bakat.</li>
    <li>Membangun sistem pendampingan kader secara komprehensif melalui mentoring dan coaching, baik dalam bidang akademik, minat-bakat, soft skill, maupun pengembangan karakter.</li>
    <li>Menghidupkan nilai keislaman, kebangsaan, dan keilmuan dalam setiap kegiatan kaderisasi dengan cara yang relevan, dan mudah diterima generasi sekarang.</li>
    <li>Mendorong kader untuk aktif berpartisipasi dalam ruang pengembangan intelektual, diskusi keilmuan, kegiatan sosial, dan pengabdian kepada masyarakat.</li>
    <li>Mengoptimalkan media sosial dan platform digital sebagai sarana pengembangan intelektual, publikasi, serta jejaring antar kader.</li>
</ul>

</div>
</div>
</div>
</div>
</section>

<!-- Administrative Archive -->
<section class="py-24 px-margin-desktop max-w-container-max mx-auto">
<div class="flex flex-col md:flex-row gap-12">
<div class="md:w-1/3">
<h2 class="font-display-lg text-primary mb-6">Resource Archive</h2>
<p class="text-on-surface-variant mb-8">Access essential documents, organizational bylaws, and membership forms for transparency and administrative ease.</p>
<div class="p-6 bg-secondary-container/10 border border-secondary-container rounded-xl">
<span class="material-symbols-outlined text-4xl text-secondary mb-4">info</span>
<p class="text-secondary font-semibold">Latest Update: 2026 Pengurus Rayon FTKD</p>
</div>
</div>
<div class="md:w-2/3 grid grid-cols-1 gap-4">
<div class="flex items-center justify-between p-4 bg-surface border border-outline-variant rounded-lg hover:bg-surface-container-low transition-all cursor-pointer">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-primary bg-primary/10 p-3 rounded-lg">description</span>
<div>
<h4 class="font-headline-sm text-sm font-bold">AD/ART PMII 2024</h4>
<p class="text-xs text-on-surface-variant">PDF • 2.4 MB</p>
</div>
</div>
<span class="material-symbols-outlined text-on-surface-variant">download</span>
</div>
<div class="flex items-center justify-between p-4 bg-surface border border-outline-variant rounded-lg hover:bg-surface-container-low transition-all cursor-pointer">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-primary bg-primary/10 p-3 rounded-lg">article</span>
<div>
<h4 class="font-headline-sm text-sm font-bold">Hasil Muspimnas Tulung Agung 2024</h4>
<p class="text-xs text-on-surface-variant">PDF • 5.1 MB</p>
</div>
</div>
<span class="material-symbols-outlined text-on-surface-variant">download</span>
</div>
<div class="flex items-center justify-between p-4 bg-surface border border-outline-variant rounded-lg hover:bg-surface-container-low transition-all cursor-pointer">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-primary bg-primary/10 p-3 rounded-lg">assignment</span>
<div>
<h4 class="font-headline-sm text-sm font-bold">Formulir Pendaftaran MAPABA</h4>
<p class="text-xs text-on-surface-variant">DOCX • 1.2 MB</p>
</div>
</div>
<span class="material-symbols-outlined text-on-surface-variant">download</span>
</div>
</div>
</div>
</section>
<!-- Management Photos (Bento Grid Style) -->
<section class="py-24 bg-surface-container-lowest">
<div class="px-margin-desktop max-w-container-max mx-auto mb-12 text-center">
<h2 class="font-display-lg text-primary">Jejak Pergerakan</h2>
<p class="text-on-surface-variant">Mengabadikan setiap langkah perjuangan, kebersamaan, dan semangat kader dalam setiap momentum.</p>
</div>
<div class="px-margin-desktop max-w-container-max mx-auto grid grid-cols-4 grid-rows-2 gap-4 h-[600px]">
<div class="col-span-2 row-span-2 rounded-2xl overflow-hidden relative group">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="A large group of PMII students in blue jackets posing together in front of the Universitas Nusa Putra landmark. They are cheering with raised fists, showing unity and high energy. Warm golden hour lighting creates a triumphant and community-focused atmosphere." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBBwIrTRi0YaLQxgHieIddSXX_gHlX29L4Y_k1dxhkQc7zl_U6I_LKw_1znITI5wfVPpL5_0x40CUHP2GsFHhURoIbWJbzg-XriL1cCj3I8r-4xSunc5IkztZhIPhLmUgyuTDD_ZA7atZ-3BIeU1JDNVhRS4LCPybvA53vMVSndCLe7pAkkGSR58e8xepfmXrgKfuHQvHUojdzsP9-Wv8zY33xLF9JW_XV9Gdb-5N5J_9ub7MLuToN0iDKyDWZgdiAUm0uFJ_Znm7E"/>
<div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/60 to-transparent text-on-primary">
<p class="font-bold">Grand Assembly 2023</p>
</div>
</div>
<div class="col-span-2 rounded-2xl overflow-hidden relative group">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="Close-up shot of a student during a night-time intellectual discussion by candlelight. The focus is on their expressive face as they debate. The lighting is dramatic, high-contrast, and academic. Deep blues and warm golds dominate the palette." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCKbCbtYzFPQPeJeFi_duTR0o9UEPrtzjmepkN2DgZvZPLtbq-0QVH8TJCtVcCPSmBFG1OHOpAeo7yfuGC-W067OJxgjEulN2aETi5RiEGzh-KxX3IuzlXjT_jodf49YsTbvy1kuDXI-ml7c_TRczayqkBXie5bmfUTRX-m3zeHKsRc6cPIjiUpaEtGGFxHtl3GzdCeeNaUh-WdcwpfR8Uf6DIRTbTwi4FxBVmKfdpCBR1fewVR9h4cZtExpwSUC9CKWD7HRHG3Zg4"/>
<div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/60 to-transparent text-on-primary">
<p class="font-bold">Kajian Malam Aswaja</p>
</div>
</div>
<div class="rounded-2xl overflow-hidden relative group">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="A group of students engaged in a charity project, distributing food boxes to local communities. The mood is humble and service-oriented. The lighting is bright morning sun, highlighting the 'Amal Sholeh' aspect of the organization." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBShlZouHfpHdPR86F1Sn2mel8rkUume75WSrsDCPQWYlXCVid4U9J3aQx7NrpbXO1ZH2Fac2rqQ59IQqy_-aZwrwjYKeadIZEwOuVPTkPX0efqGoTubUYgeviUs95HYkE3B7LyPjCqxYyqrA72a2E6BrRk8w60H6GDs-RtLQcyW8DfPxAx8MYn8D0fPa-pdtvLZYVlnNP5QyMnqUg3aRSXFIdpiX2jigAAeXP-ifkE0uiin45BDlGGl6uvXrDZGl0-x2WaTo_HRSQ"/>
<div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/60 to-transparent text-on-primary">
<p class="font-bold">Gerakan Hijau di Desa Cibolang</p>
</div>
</div>
<div class="rounded-2xl overflow-hidden relative group">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="A focused student leader delivering a speech at a podium decorated with the PMII flag. The background shows a large audience. The style is journalistic and professional, using sharp focus and professional lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB-2YBSTkHvEJBLXbFTRvYMMp4027j9GF4tYNlqR0TJ3HKeIbkMYtA1vbvcSj0lFH9xNH5ZvhXaVl1QwT-iMky2NlqufobbQlYq-WOfEOaqxwDinBYj74zxiZhHPAmrNkZpdbnyt13qV7XGZiPszhhiEAVstkoCklicJRnZfnNR2GNkEPhD9_CO33BawYpr0nj8Dnc-n0JD8j-O2AAhkJ16i_4oE-DdNoD7hdE_IPqG8pGfE_CbmdgcASCu1ZZZwZ1XDYk1iZIhxz4"/>
<div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/60 to-transparent text-on-primary">
<p class="font-bold">Pidato Ketua Rayon</p>
</div>
</div>
</div>
</section>
<!-- Activity Results (News Style) -->
<section class="py-24 px-margin-desktop max-w-container-max mx-auto">
<h2 class="font-display-lg text-primary mb-12 border-l-8 border-secondary-container pl-6">Latest Updates</h2>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
<article class="flex flex-col md:flex-row gap-6">
<div class="md:w-1/2 h-64 rounded-xl overflow-hidden shadow-sm">
<img class="w-full h-full object-cover" data-alt="A clean news photo of a seminar hall filled with students listening to a guest speaker. The atmosphere is academic and respectful. The PMII banner is visible in the background. High professional lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1c_Pst4RVzGiiuwAIOHUTd66XbZ-r2IhWEjs6kZtzAAgWUuKdYUe-H-AWykkj7KbTq7dGDGhFiJUZloXdcCoYEAmrs9XfhPAmPDYS2ZdiiZZ8oUKyrBGjwX3edGLOQQqfkNb5ERArNQS7oIqLtHLObhOYETTaRM0pVuMgdTtG7qsoGmIEUS2dvsoRCswMdqV_ObBa4PY9uBlkTvYgO-4VXDVyxIAGCZPrebY82m_hz6j9ntc2LPkciX1c4tMx1td0fz6B62s9uF8"/>
</div>
<div class="md:w-1/2 flex flex-col justify-center">
<span class="text-secondary font-bold text-xs uppercase tracking-widest mb-2">Success Story</span>
<h3 class="font-headline-md text-headline-md mb-3">Seminar Literasi Digital Sukses Digelar</h3>
<p class="text-on-surface-variant font-body-md mb-4">Menghadirkan pakar teknologi nasional, PMII Nusa Putra sukses membekali 200+ mahasiswa...</p>
<a class="text-primary font-bold text-sm" href="#">Read Full Story →</a>
</div>
</article>
<article class="flex flex-col md:flex-row gap-6">
<div class="md:w-1/2 h-64 rounded-xl overflow-hidden shadow-sm">
<img class="w-full h-full object-cover" data-alt="A vibrant outdoor photo of PMII members planting trees in a local village. The scene is bright and full of green plants, contrasting with the blue organizational jackets. The focus is on the action of community service." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBLT298vBCInucF6GHlah7aql9fIfcF34eZOWqhrjNKKO7q2Y7T-y9pOpWwAOO395Oe-Cpf71b71MfATFdFjBg_UWa2ok8GGFeUEUp-0MsE0Fs-8YLbsl7H6zlp6bkJiZZjWQKCaXCzs0vU1WC0igy-Tm7rSYM8pPFfovjbcA3WvGxlkwDU2QcqLqNWEGS94Xg9SqqqSHzDwLKW_ZvwttZYZuaLTJdffmu2eI-MQ9L-UDWB27fw6bRtNCSUGVRT-MhSa_fQdGpf1to"/>
</div>
<div class="md:w-1/2 flex flex-col justify-center">
<span class="text-secondary font-bold text-xs uppercase tracking-widest mb-2">Social Action</span>
<h3 class="font-headline-md text-headline-md mb-3">Gerakan Hijau di Desa Cibolang</h3>
<p class="text-on-surface-variant font-body-md mb-4">Dalam rangka memperingati Harlah PMII, Komisariat Nusa Putra melakukan penanaman 1000 bibit...</p>
<a class="text-primary font-bold text-sm" href="#">Read Full Story →</a>
</div>
</article>
</div>
</section>
</main>

<!-- Footer -->
<footer class="bg-[#00356a] text-white mt-12">
  <div class="max-w-container-max mx-auto px-margin-desktop py-10">
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

      <!-- Kolom 1 -->
<div>
  <div class="font-headline-sm text-headline-sm font-bold mb-4">PMII NUSA PUTRA</div>
  
  <p class="text-white/80 max-w-sm mb-2">
    Temukan kita di ruang - ruang diskusi.
  </p>
  
  <p class="text-white/80 max-w-sm mb-4">
    Sampai jumpa dikampus
  </p>
  
  <p class="font-headline-sm text-headline-sm font-bold mb-4">SALAM PERGERAKAN!!!</p>
</div>

      <!-- Kolom 2: Hubungi Kami -->
      <div>
        <h4 class="font-bold mb-4">Hubungi kami</h4>
        <ul class="flex flex-col gap-2 text-white/80">
          <li class="relative">
            <a href="#" id="contact-btn" class="hover:text-white transition-colors">Contact</a>

            <!-- Gelembung Contact -->
            <div id="contact-bubble" 
                 class="hidden absolute bottom-full left-0 mb-2 w-64 bg-white border border-outline-variant rounded-2xl shadow-xl p-4 z-50">
              <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                  <span class="material-symbols-outlined text-primary">phone</span>
                </div>
                <div>
                  <p class="text-sm text-on-surface-variant">M. Ezra Haikal</p>
                  <p class="text-sm text-on-surface-variant">Ketua Rayon FTKD</p>
                  <p class="font-semibold text-primary">085143527543</p>
                </div>
              </div>

              <a href="https://wa.me/085143527543" target="_blank"
                 class="flex items-center justify-center gap-2 w-full bg-green-500 hover:bg-green-600 text-white text-sm font-semibold py-2.5 rounded-xl transition-all">
                <span class="material-symbols-outlined text-base">chat</span>
                Chat via WhatsApp
              </a>
            </div>
          </li>

          <li><a href="#" class="hover:text-white transition-colors">Privacy Policy</a></li>
          <li><a href="#" class="hover:text-white transition-colors">Terms of Service</a></li>
          <li><a href="#" class="hover:text-white transition-colors">FAQ</a></li>
        </ul>
      </div>

      <!-- Kolom 3: Secretariat -->
      <div>
        <h4 class="font-bold mb-4">Secretariat</h4>
        <p class="text-white/80 text-sm leading-relaxed mb-4">
          Jln. Cibolang kaler<br>
          belakang pesantren suhu<br>
          Cisaat, Sukabumi
        </p>
        <div class="flex gap-4 text-white/80">
          <span class="material-symbols-outlined hover:text-white cursor-pointer">mail</span>
          <span class="material-symbols-outlined hover:text-white cursor-pointer">share</span>
          <span class="material-symbols-outlined hover:text-white cursor-pointer">public</span>
        </div>
      </div>

    </div>

  </div>

  <!-- Copyright -->
  <div class="border-t border-white/20 py-5">
    <div class="max-w-container-max mx-auto px-margin-desktop text-center">
      <p class="text-sm text-white/70">Pengurus Rayon FTKD Masa Khidmat 2025-2026</p>
    </div>
  </div>
</footer>

<!-- ==================== LOGIN MODAL ==================== -->
<div id="loginModal" onclick="if (event.target.id === 'loginModal') hideLoginModal()" class="fixed inset-0 hidden items-center justify-center bg-slate-900/70 p-6 z-50">
    <div class="relative w-full max-w-md rounded-[2rem] bg-white p-6 shadow-2xl">
        <button type="button" onclick="hideLoginModal()" class="absolute right-4 top-4 text-slate-500 hover:text-slate-900 text-2xl leading-none">×</button>
        <div class="p-6 pt-10">
            <form id="loginForm">
                <input type="hidden" id="redirectAfterLogin" value="">

                <!-- Email -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-on-surface-variant mb-1.5">Email atau Username</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-3 text-on-surface-variant">person</span>
                        <input type="text" id="email" required 
                               class="w-full pl-11 pr-4 py-3 border border-outline-variant rounded-xl focus:outline-none focus:border-primary text-sm bg-surface"
                               placeholder="nama@email.com">
                    </div>
                </div>

        <!-- Password -->
        <div class="mb-5">
            <label class="block text-sm font-medium text-on-surface-variant mb-1.5">Kata Sandi</label>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-4 top-3 text-on-surface-variant">lock</span>
                <input type="password" id="password" required 
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
            <a href="#" class="text-primary font-medium hover:underline">Daftar sekarang</a>
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
        const email = document.getElementById('email').value.trim();
        
        hideLoginModal();
        updateLoginButton(email);
        
        // Tampilkan notifikasi sukses
        setTimeout(() => {
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
        }, 500);
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