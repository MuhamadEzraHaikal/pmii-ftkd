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
        body { font-family: 'Work Sans', sans-serif; background-color: #f8f9fa; }
        .font-hanken { font-family: 'Hanken Grotesk', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .active-nav-link { position: relative; }
        .active-nav-link::after { content: ''; position: absolute; bottom: -4px; left: 0; width: 100%; height: 2px; background-color: #00356a; }
        .glass-card { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(8px); border: 1px solid rgba(225, 227, 228, 0.5); }
        
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
<main class="min-h-screen">
<!-- Hero Section: Landing-style two-column hero -->
<section class="relative overflow-hidden rounded-b-3xl bg-gradient-to-b from-white to-surface py-16">
    <div class="absolute inset-0 pointer-events-none opacity-5 bg-[radial-gradient(ellipse_at_top_left,_var(--tw-gradient-stops))] from-primary/30 to-transparent"></div>
    <div class="max-w-container-max mx-auto px-margin-mobile md:px-gutter grid lg:grid-cols-2 gap-12 items-center">
        <div class="space-y-6">
            <span class="inline-flex items-center gap-2 rounded-full bg-secondary-container text-on-secondary-container px-4 py-2 text-sm font-semibold uppercase tracking-widest">Rayon FTKD</span>
            <h1 class="text-4xl lg:text-5xl font-extrabold text-primary">Struktur Kepengurusan periode 2025-2026</h1>
            <p class="text-lg text-on-surface-variant max-w-2xl">Mewujudkan pergerakan yang progresif, moderat, dan inklusif. Lihat detail kepengurusan dan departemen kami.</p>
            <div class="flex flex-wrap gap-4 pt-4">
                <a href="#struktur" class="inline-flex items-center gap-2 rounded-full border border-primary px-6 py-3 text-primary font-semibold">Lihat Struktur</a>
            </div>
        </div>

        <div class="relative">
            <div class="rounded-2xl overflow-hidden border border-outline-variant shadow-lg">
                <div class="carousel-track relative h-96 flex transition-transform duration-500 ease-in-out">
                    <div class="min-w-full h-96">
                        <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=1200&q=80" alt="Kegiatan PMII" class="w-full h-full object-cover"/>
                    </div>
                    <div class="min-w-full h-96">
                        <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=1200&q=80" alt="Kegiatan organisasi" class="w-full h-full object-cover"/>
                    </div>
                    <div class="min-w-full h-96">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1200&q=80" alt="Kajian PMII" class="w-full h-full object-cover"/>
                    </div>
                </div>
                <div class="absolute left-4 top-1/2 -translate-y-1/2">
                    <button id="strukturPrev" class="bg-white/90 p-2 rounded-full shadow">‹</button>
                </div>
                <div class="absolute right-4 top-1/2 -translate-y-1/2">
                    <button id="strukturNext" class="bg-white/90 p-2 rounded-full shadow">›</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Organizational Tree Canvas -->
<section class="py-section-gap px-margin-mobile md:px-gutter max-w-container-max mx-auto overflow-visible">
<!-- Level 1: Ketua Umum -->
<div class="flex flex-col items-center mb-12">
<div class="w-full max-w-md bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-8 text-center shadow-sm profile-card-hover transition-all duration-300">
<div class="relative w-32 h-32 mx-auto mb-6">
<div class="absolute inset-0 border-4 border-secondary rounded-full animate-pulse opacity-20"></div>
<img class="w-full h-full object-cover rounded-full border-4 border-white shadow-md" data-alt="A professional portrait of a male leader with a confident expression, wearing a navy blue PMII organizational vest over a white shirt. The background is a clean studio gray with soft directional lighting, emphasizing his authoritative yet approachable persona. High-end editorial photography style." src="jas ezra.png"/>
</div>
<h2 class="font-headline-md text-headline-md text-primary mb-1">Muhamad Ezra Haikal Purboyo</h2>
<p class="text-label-sm font-label-sm text-secondary tracking-widest uppercase mb-4">Ketua Rayon FTKD</p>

<div class="flex justify-center gap-3">
  <!-- Tombol WhatsApp -->
  <a href="https://wa.me/089531823946" 
     target="_blank" 
     rel="noopener noreferrer"
     class="p-2 bg-surface-container-high rounded-full hover:bg-primary-fixed-dim transition-colors flex items-center justify-center"
     aria-label="Hubungi via WhatsApp">
    <svg xmlns="http://www.w3.org/2000/svg" 
         class="text-primary w-[20px] h-[20px]" 
         fill="currentColor" 
         viewBox="0 0 24 24">
      <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.198-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.372-.025-.521-.075-.149-.67-.966-.92-1.305-.247-.347-.5-.373-.67-.373-.172 0-.372.05-.57.248-.198.197-.76.74-.76 1.805 0 1.065.78 2.093.89 2.24.11.148 1.523 2.34 3.69 3.28 2.168.94 2.168.94 2.91 1.04.74.1 1.49-.05 2.04-.6.55-.55.74-1.29.65-2.04-.09-.75-.55-1.29-1.04-1.79zM12 2C6.48 2 2 6.48 2 12c0 1.85.5 3.58 1.38 5.08L2 22l4.92-1.38C8.42 21.5 10.15 22 12 22c5.52 0 10-4.48 10-10S17.52 2 12 2zm0 18c-1.6 0-3.1-.48-4.36-1.3l-.31-.18-2.92.82.82-2.92-.18-.31C4.48 15.1 4 13.6 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8-3.59 8-8 8z"/>
    </svg>
  </a>

  <!-- Tombol Instagram -->
  <a href="https://www.instagram.com/ezrahaikall" 
     target="_blank" 
     rel="noopener noreferrer"
     class="p-2 bg-surface-container-high rounded-full hover:bg-primary-fixed-dim transition-colors flex items-center justify-center"
     aria-label="Kunjungi Instagram">
    <svg xmlns="http://www.w3.org/2000/svg" 
         class="text-primary w-[20px] h-[20px]" 
         fill="none" 
         stroke="currentColor" 
         stroke-width="2" 
         stroke-linecap="round" 
         stroke-linejoin="round" 
         viewBox="0 0 24 24">
      <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
      <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
      <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
    </svg>
  </a>
</div>
</button>
</div>
</div>
<div class="structure-connector-v"></div>
</div>
<!-- Level 2: Sekjen & Bendum -->
<div class="relative mb-12">
<div class="absolute top-0 left-1/2 -translate-x-1/2 w-1/2 h-[2px] bg-outline-variant/30 hidden md:block"></div>
<div class="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-32 pt-0 md:pt-4">
<!-- Sekjen -->
<div class="flex flex-col items-center w-full max-w-xs">
<div class="md:hidden structure-connector-v"></div>
<div class="w-full bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-6 text-center shadow-sm profile-card-hover transition-all duration-300">
<img class="w-24 h-24 mx-auto mb-4 object-cover rounded-full border-2 border-white shadow-sm" data-alt="A professional headshot of a clean-shaven Indonesian man in his 30s, wearing a crisp formal shirt. Professional organizational branding in the background with soft corporate lighting. Minimalist and formal visual style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD14Y-fTqiYcgKOM5EMVndtkVBJ0A51LlDIJ9x39NCGnD62e6wLSuZ-orvF4_7JKBN0K5wvP4YzuGjtj-iClNyVaRDXIf75_aJPXNuMtwob2zbxjO6SBYFj6chshYikhJhYz3gmuPXOy2thT_7_QgHdbGKBMcEFonT8nOXZYhRen19Wa2uJtkQ5r_gmSniXqZxoR7YcC3WnFU9EqYZ3cXLTp_gPHiECgvtqUQE8bibVvNfjd1dRGRrMbtfyRvHY8_tseFlSDDvp1lQ"/>
<h3 class="font-headline-md text-[20px] text-on-surface mb-1">Sehan Zaki Nurmilad</h3>
<p class="text-label-sm font-label-sm text-primary">Sekretaris</p>
</div>
</div>
<!-- Bendum -->
<div class="flex flex-col items-center w-full max-w-xs">
<div class="md:hidden structure-connector-v"></div>
<div class="w-full bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-6 text-center shadow-sm profile-card-hover transition-all duration-300">
<img class="w-24 h-24 mx-auto mb-4 object-cover rounded-full border-2 border-white shadow-sm" data-alt="A professional headshot of an Indonesian man wearing a formal batik shirt, smiling warmly. The lighting is soft and even, creating a professional and trustworthy atmosphere. Corporate studio setting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0zXz3fmuSM74uKqMd4jtbEg4ya2796A8DRWZ4_2ih-z5QVpj3wKAfYpk1M-hmVGiqLOuri_Xu7DQ9rHkm1l4eu7QGjQPkgjFQYtrXdZlEg0EFLiGBRy22C_hBOgdgJOvIZKJmTGLK-WDpZBMeUsxcIWmJXkQtS3ogmBngC0sZKaOT_cg4yW9qy2Gjc43RFzY1UVjPQP9Pa46uYjcj1AYXrNySJJwZWNJr0k4HAgia1NCr6QO-X9pRIg-qY4nhwFinqBVNL4o97Ow"/>
<h3 class="font-headline-md text-[20px] text-on-surface mb-1">Rhealita Shani</h3>
<p class="text-label-sm font-label-sm text-primary">Bendahara</p>
</div>
</div>
</div>
<div class="structure-connector-v mt-8"></div>
</div>
<!-- Level 3: Ketua Bidang & Wasekjen -->
<div class="mb-16">
<h3 class="text-center font-headline-md text-primary mb-12 relative">
<span class="bg-background px-6 relative z-10">Ketua Bidang & Kesekretariatan</span>
<div class="absolute top-1/2 left-0 w-full h-[1px] bg-outline-variant/30 -z-0"></div>
</h3>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Bidang Kaderisasi -->
<div class="bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-5 shadow-sm profile-card-hover transition-all duration-300 flex items-center gap-4">
<img class="w-16 h-16 object-cover rounded-xl border border-outline-variant/20" data-alt="Professional avatar of a young Indonesian leader, wearing a formal outfit, looking determined. Soft focus office background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAis00SmazW9EncMaF1TXNL8tDWU6Ue6xn-ywlaqiH1Qx_taAxhw2yHJHZUo0B7RhaiqqwTqKF0xLmgpJelHDCexCGauKmo1hnPR2PaC0kPwHONiTJPMOO1Z8MZ97aryPXE4TnfIpKuq4f3OFMFdmtfeif4NTqBW4VgkX6z_Qd2nZ-JOWQCRDAjpq6c5XLHzH73N8mJZDgq3MoX-kNRqnjGvn3b2lc-D-CBgxXdmpzmJ4roEkZrOtc9YXT07UenW5hXJGskHdx1a_s"/>
<div>
<h4 class="font-headline-md text-[16px] text-on-surface leading-tight mb-1">M. Hafiz Putra Sakti</h4>
<p class="text-label-sm text-primary text-[12px] uppercase">Ketua Bidang Kaderisasi</p>
</div>
</div>
<!-- Bidang Advokasi -->
<div class="bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-5 shadow-sm profile-card-hover transition-all duration-300 flex items-center gap-4">
<img class="w-16 h-16 object-cover rounded-xl border border-outline-variant/20" data-alt="Close up portrait of a male professional, focused look, wearing a blazer. Institutional aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkKdmbT7CQGafBH-VBIpHnmqkbjYqYZ8ZhzN3q17B54o_sy0Llb2BLgYY2b2bJnUYkgDGdfkrYf1-EhbzYq0a8LN3PtQuWpbmijjHv33xA0yWXxLyvS3AKRt5Np6o1LauBKEp7F2_J4OrIXtZGsHXVB10eNiT48q9EoTFteCBfcXogs-tzK_4UDt9JAaiCm1uq5ZlQUy4wCHmAIuLr_nVJmWKrwnyvcCP6yTpU3vUsty283vHRO0FLuiCTnRdAai5NQ8iqcv69I9A"/>
<div>
<h4 class="font-headline-md text-[16px] text-on-surface leading-tight mb-1">Khawarizmi</h4>
<p class="text-label-sm text-primary text-[12px] uppercase">Ketua Bidang Pendidikan, Keagamaan & Pengembangan Akademik </p>
</div>
</div>
<!-- Wasekjen 1 -->
<div class="bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-5 shadow-sm profile-card-hover transition-all duration-300 flex items-center gap-4">
<img class="w-16 h-16 object-cover rounded-xl border border-outline-variant/20" data-alt="Friendly young Indonesian professional man portrait, corporate style, bright lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtX79AoKR_OUpQztGLH8APy7OgSDcAQPD8eYI0bx426uhvC9JukI63StLz_pcOMKd3SCjuHmT4pJGfGcGtkMYk_HTfFplPVSlBvrv6dF1ClbVr-aXrsDKz8Kvn9xQq5DCuWEefMbvMh73Bvr4AEaaSJVMn4qwRDPF6hQeHfvVZQAZmf_KeEXCRyQholUW-PrMw4F-PTZeFbL_nvVIuvXb8g5YX2iggX1FBTjCRs3t-8WNynEGdWtCWkx38C25J8Cp0PHCpK7j7Kb8"/>
<div>
<h4 class="font-headline-md text-[16px] text-on-surface leading-tight mb-1">Huda Salsabila</h4>
<p class="text-label-sm text-primary text-[12px] uppercase">Sekretaris Bid.Kaderisasi</p>
</div>
</div>
<!-- Wasekjen 2 -->
<div class="bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-5 shadow-sm profile-card-hover transition-all duration-300 flex items-center gap-4">
<img class="w-16 h-16 object-cover rounded-xl border border-outline-variant/20" data-alt="Serene and professional Indonesian male portrait, neutral background, modern business attire." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDzHvqdVRb8zjVprQtTCQmwtG2mdOmlYHBm1zN8P4rua7BTEZPeG_BKcv8F1QqA-bBNnY9L0gF3Zk2zk1Xi5xtVz2oCRvuHEjd_qHOdgRvEz1lNuveik_WeXHZyVYsrVYIZ9cIy6LfEEuD_uL-3nBKoKyZkZBf7xRGGfZYM7zJYgumnO1rPPXDyDeNOAZ4w6o7P8yotAyNY4rkyWuaB3Zh9KQLBXwV1ui8-okqv3I4sWaLR3NujJC8nOMEuk9P3WJuJcxYR_yaSUN8"/>
<div>
<h4 class="font-headline-md text-[16px] text-on-surface leading-tight mb-1">M. Jafar Sodik</h4>
<p class="text-label-sm text-primary text-[12px] uppercase">Sekretaris Bid.Pendidikan, Keagamaan & Pengembangan Akademik </p>
</div>
</div>
<!-- Additional members to fulfill Level 3 -->
<div class="bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-5 shadow-sm profile-card-hover flex items-center gap-4">
<img class="w-16 h-16 object-cover rounded-xl" data-alt="Modern Indonesian male professional, studio portrait, clean aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYqbNaamXPN727W-NZgGnnapD43-ffHiJ-hQSkOrmhRuMZJGG4wVCRPYjP6AF-7uO9gMu2B_1_ce3SzQo_fLLYnaUQqzcNUsEVQs5g964E0hQv0MtX27OPGnFH_brvits0oDP6-tgKrTUkSdHFFSQKzTtrnoZbW8Lh0sxxYk3Bekf-1q9LMMQqOmyYMvmCY6E_I67Btx7V8OJX9RDSvM747DWl6bY6DeKWFndK2dwGib66lEX-u2-JycDeOW9hAYITd7E4AsVW3R0"/>
<div><h4 class="font-headline-md text-[16px] mb-1">Dasep Rizallaludin</h4><p class="text-label-sm text-primary uppercase text-[12px]">Ketua Bidang Penataan Aparatur Organisasi</p></div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-5 shadow-sm profile-card-hover flex items-center gap-4">
<img class="w-16 h-16 object-cover rounded-xl" data-alt="Corporate professional portrait, soft lighting, professional Indonesian man." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAaPNrynEorTdz3rPWhOms0STLO2ZjenSN6MHiIGgrRHMwGzSo6xYbkVUEAWDMgya9iTuwWAt__TgGWnmPBw8b3wiWGlH1vBpUD36a2LxQD37B0WTmkTQitUkYWqwE8NjGZc8agIOqBBgvIhyQf6l9Io-1KNuVyAD-vol-ZZderAgS5Pc3wqsRJoWovyt75Rb3QGoxfR2plGsvjRq4GDruHkiVA-xent0eGxUs09dbRPiTIxyYR5FtRMKSoDwJK7ayCOhehiH3YpM4"/>
<div><h4 class="font-headline-md text-[16px] mb-1">Arya Lukman Hakim</h4><p class="text-label-sm text-primary uppercase text-[12px]">Ketua Bidang Komunikasi & Hubungan Antar Lembaga</p></div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-5 shadow-sm profile-card-hover flex items-center gap-4">
<img class="w-16 h-16 object-cover rounded-xl" data-alt="Young professional leader, bright studio lighting, Indonesian." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBUVCa8WjwCPTGiW5CpYqpz3m3cIxfnfIUiOc3M3XjhVAUvU3jouXUEG5nvcoA8sAOq8wVTY_lmMM1W77Yw7Sb2DtPhQvSBYflyN4mmE87UELSVGBBLKNyqHMexmdOhnyDhpXSkCSNvk8zI7kgxG9kWB03FmA_ErvA_v_0OTgEdDCdfH8EgC5eVrMJ96vuceHvilsq9CdrnSKhr3Wrw4aIzw7ad-MhEEONoF9MJ2Bv72zvT_NzcRZ38PBKs6DR7yOXJWSkM1-UNjvM"/>
<div><h4 class="font-headline-md text-[16px] mb-1"> Hafi Fatih Agustian</h4><p class="text-label-sm text-primary uppercase text-[12px]">Sekretaris Bid.Penataan Aparatur Organisasi</p></div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant/30 rounded-xl p-5 shadow-sm profile-card-hover flex items-center gap-4">
<img class="w-16 h-16 object-cover rounded-xl" data-alt="Indonesian businessman portrait, professional photography." src="https://lh3.googleusercontent.com/aida-public/AB6AXuADk29oElKkjggXKKV8XbQFqpTSiD8tTK5y4TOxvQT5yDUuEiUFbZAK37TWfuYMldtl9wL84onXGDq6oI-MzMgh_SIPLEeUNTkHzghMc3HI2oB3XLEZ8I2wlCEJC5QSxH_aoOo4N6ZONk8_E6H6t-vYGK9VtyLmvNdPKYjL1lh5JfvsQbwh3rRIR7OwzlD4Gyy1FlGBzsGaBnI3wHCu5_yHyFBmQBJKZvVfHGp7Eyx6Z5thRm8rZYGCgnRPVoyobMnqCqcD12m3IoQ"/>
<div><h4 class="font-headline-md text-[16px] mb-1">Ananda Putra Utama</h4><p class="text-label-sm text-primary uppercase text-[12px]">Sekretaris Bid.Komunikasi & Hubungan Antar Lembaga</p></div>
</div>
</div>
</div>
<!-- Level 4: Departemen & Lembaga -->
<div>
<h3 class="text-center font-headline-md text-primary mb-12 relative">
<span class="bg-background px-6 relative z-10">Departemen & Lembaga Semi Otonom</span>
<div class="absolute top-1/2 left-0 w-full h-[1px] bg-outline-variant/30 -z-0"></div>
</h3>
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
<!-- Generating multiple small cards for departments -->
<script>
                        const names = [
                            "Agus Salim", "Dewi Sartika", "Hasan Basri", "Siti Aminah", "Rahmat Hidayat", 
                            "Laila Sari", "Irfan Hakim", "Yulia Rahma", "Taufik Ismail", "Nina Marlina",
                            "Eko Prasetyo", "Siska Putri", "Anton Wijaya", "Rina Astuti", "Andi Wijaya", "Ratna Sari"
                        ];
                        const roles = [
                            "Dept. Media & Opini", "Lembaga Profesi", "Dept. Kajian Strategis", "Lembaga Hukum", 
                            "Dept. Lingkungan Hidup", "Dept. Hubungan Pesantren", "Dept. Ekonomi Kreatif", "Lembaga Pers",
                            "Dept. Olahraga", "Dept. Seni Budaya", "Lembaga Penelitian", "Dept. IT & Digital"
                        ];

                        for(let i = 0; i < 16; i++) {
                            document.write(`
                                <div class="bg-surface-container-lowest border border-outline-variant/30 rounded-lg p-4 shadow-sm text-center profile-card-hover transition-all duration-300">
                                    <img src="placeholder" data-alt="Professional simple portrait of an Indonesian organization member, clean office attire, neutral background." class="w-12 h-12 mx-auto mb-3 object-cover rounded-full grayscale hover:grayscale-0 transition-all">
                                    <h5 class="font-headline-md text-[14px] text-on-surface mb-0.5 truncate">${names[i % names.length]}</h5>
                                    <p class="text-[11px] font-label-sm text-outline uppercase">${roles[i % roles.length]}</p>
                                </div>
                            `);
                        }
                    </script>
</div>
</div>
</section>

<<!-- Footer -->
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
<div id="loginModal" 
     onclick="if (event.target.id === 'loginModal') hideLoginModal()"
     class="hidden fixed inset-0 bg-black/60 flex items-center justify-center z-[999] p-4">

    <div onclick="event.stopImmediatePropagation()" 
         class="bg-surface w-full max-w-md rounded-2xl shadow-2xl border border-outline-variant overflow-hidden">
        
        <!-- Header Modal -->
        <div class="flex items-center justify-between px-6 py-4 border-b border-outline-variant">
            <div>
                <h3 class="font-semibold text-xl text-on-surface">Masuk ke Akun PMII</h3>
                <p class="text-xs text-on-surface-variant">Rayon FTKD - Universitas Nusa Putra</p>
            </div>
            <button onclick="hideLoginModal()" 
                    class="w-9 h-9 flex items-center justify-center text-on-surface-variant hover:bg-surface-container rounded-full transition">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <!-- Form -->
        <div class="p-6">
            <form id="loginForm">
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
    function showLoginModal() {
        const modal = document.getElementById('loginModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function hideLoginModal() {
        const modal = document.getElementById('loginModal');
        modal.classList.remove('flex');
        modal.classList.add('hidden');
    }

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

    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const email = document.getElementById('email').value.trim();
        
        hideLoginModal();
        updateLoginButton(email);
        
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