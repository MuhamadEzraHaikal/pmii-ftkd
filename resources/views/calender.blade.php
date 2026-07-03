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
<!-- TopNavBar (Shared Component) -->
<header class="fixed top-0 w-full bg-surface z-50 border-b border-outline-variant">

<nav class="flex justify-between items-center h-20 px-margin-desktop max-w-container-max mx-auto">
  <div class="flex items-center space-x-4 font-sans font-medium">
    
    <!-- === GANTI BAGIAN INI === -->
    <img 
      src="logo_rayon.png" 
      alt="Logo PMII Rayon FTKD" 
      class="h-12 w-auto object-contain"
    >
    <!-- ========================== -->

    <div class="flex-1">
      <h2 class="text-lg">Pergerakan Mahasiswa Islam Indonesia</h2>
      <p class="text-sm font-light text-gray-500">Rayon Fakultas Teknik Komputer dan Desain</p>
      <p class="text-sm font-light text-gray-500">Komisariat Universitas Nusa putra</p>
    </div>
  </div>

  <div class="hidden md:flex gap-8 items-center">
    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors duration-200" href="/beranda">Beranda</a>
    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors duration-200" href="/struktur pengurus">Struktur Pengurus</a>
    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors duration-200" href="/arsip administrasi">Arsip Administrasi</a>
    <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors duration-200" href="/calender">Calender</a>
  </div>

  <button class="bg-primary text-on-primary px-6 py-2 rounded-lg font-label-md text-label-md scale-95 active:opacity-80 transition-all">
    Join Us
  </button>
</nav>
</header>

    <main class="mx-auto max-w-6xl px-4 py-8 sm:px-6 lg:px-8 pt-24">
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-sky-600">Kalender Kegiatan</p>
                <h1 class="text-3xl font-semibold text-slate-800">Informasi agenda dan aktivitas</h1>
            </div>
            <div class="rounded-full border border-sky-200 bg-sky-50 px-4 py-2 text-sm text-sky-700">
                Klik tanggal untuk melihat detail kegiatan
            </div>
        </div>

        <div class="grid gap-6 lg:grid-cols-[2fr_1fr]">
            <div class="rounded-3xl border border-slate-200 bg-white p-4 shadow-xl shadow-slate-200">
                <div class="mb-4 flex items-center justify-between">
                    <button id="prevMonth" type="button" class="rounded-full border border-sky-200 bg-sky-50 px-3 py-2 text-sm text-sky-700 transition hover:bg-sky-100">← Sebelumnya</button>
                    <h2 id="monthTitle" class="text-xl font-semibold text-slate-800"></h2>
                    <button id="nextMonth" type="button" class="rounded-full border border-sky-200 bg-sky-50 px-3 py-2 text-sm text-sky-700 transition hover:bg-sky-100">Berikutnya →</button>
                </div>

                <div class="mb-2 grid grid-cols-7 gap-2 text-center text-sm font-semibold text-slate-500">
                    <div>Min</div>
                    <div>Sen</div>
                    <div>Sel</div>
                    <div>Rab</div>
                    <div>Kam</div>
                    <div>Jum</div>
                    <div>Sab</div>
                </div>
                <div id="calendarGrid" class="grid grid-cols-7 gap-2"></div>
            </div>

            <div class="rounded-3xl border border-slate-200 bg-white p-5 shadow-xl shadow-slate-200">
                <h3 class="mb-3 text-lg font-semibold text-slate-800">Detail kegiatan</h3>
                <div id="selectedDate" class="mb-4 text-sm text-slate-500"></div>
                <div id="eventList" class="space-y-3"></div>
            </div>
        </div>
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

    <script>
        const monthTitle = document.getElementById('monthTitle');
        const calendarGrid = document.getElementById('calendarGrid');
        const selectedDateEl = document.getElementById('selectedDate');
        const eventListEl = document.getElementById('eventList');
        const prevMonthBtn = document.getElementById('prevMonth');
        const nextMonthBtn = document.getElementById('nextMonth');

        const today = new Date();
        let currentDate = new Date(today.getFullYear(), today.getMonth(), 1);
        let selectedDate = new Date(today.getFullYear(), today.getMonth(), today.getDate());

        const events = [
            {
                title: 'Rapat Rayon',
                date: new Date(today.getFullYear(), today.getMonth(), 5),
                type: 'Meeting',
                description: 'Pembahasan agenda kegiatan bulan ini.',
                color: 'bg-sky-100 text-sky-700'
            },
            {
                title: 'Latihan Pramuka',
                date: new Date(today.getFullYear(), today.getMonth(), 12),
                type: 'Kegiatan',
                description: 'Latihan rutin bersama anggota.',
                color: 'bg-amber-100 text-amber-700'
            },
            {
                title: 'Bakti Sosial',
                date: new Date(today.getFullYear(), today.getMonth(), 20),
                type: 'Sosial',
                description: 'Kegiatan bantu masyarakat di sekitar sekolah.',
                color: 'bg-sky-100 text-sky-700'
            },
            {
                title: 'Evaluasi Bulan',
                date: new Date(today.getFullYear(), today.getMonth(), 27),
                type: 'Evaluasi',
                description: 'Penilaian hasil kegiatan dan rencana berikutnya.',
                color: 'bg-amber-100 text-amber-700'
            }
        ];

        function formatDateKey(date) {
            return `${date.getFullYear()}-${String(date.getMonth() + 1).padStart(2, '0')}-${String(date.getDate()).padStart(2, '0')}`;
        }

        function formatDateLabel(date) {
            return date.toLocaleDateString('id-ID', {
                weekday: 'long',
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            });
        }

        function getEventsForDate(date) {
            const key = formatDateKey(date);
            return events.filter(event => formatDateKey(event.date) === key);
        }

        function renderCalendar() {
            monthTitle.textContent = currentDate.toLocaleDateString('id-ID', {
                month: 'long',
                year: 'numeric'
            });

            const year = currentDate.getFullYear();
            const month = currentDate.getMonth();
            const firstDay = new Date(year, month, 1);
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            const startDay = firstDay.getDay();
            const prevMonthDays = new Date(year, month, 0).getDate();

            const cells = [];

            for (let i = startDay - 1; i >= 0; i--) {
                const date = new Date(year, month - 1, prevMonthDays - i);
                cells.push(`<button type="button" class="calendar-day rounded-2xl border border-slate-200 bg-slate-50 px-2 py-3 text-left text-sm text-slate-400" data-date="${formatDateKey(date)}">${date.getDate()}</button>`);
            }

            for (let day = 1; day <= daysInMonth; day++) {
                const date = new Date(year, month, day);
                const isToday = formatDateKey(date) === formatDateKey(today);
                const isSelected = formatDateKey(date) === formatDateKey(selectedDate);
                const hasEvent = getEventsForDate(date).length > 0;
                const classes = [
                    'calendar-day',
                    'rounded-2xl',
                    'border',
                    'px-2',
                    'py-3',
                    'text-left',
                    'text-sm',
                    'transition',
                    isToday ? 'border-sky-400 bg-sky-100 text-sky-700' : 'border-slate-200 bg-white text-slate-700',
                    isSelected ? 'ring-2 ring-sky-400' : ''
                ];

                cells.push(`<button type="button" class="${classes.join(' ')}" data-date="${formatDateKey(date)}">${day}${hasEvent ? '<span class="mt-2 block h-2 w-2 rounded-full bg-amber-400"></span>' : ''}</button>`);
            }

            const nextMonthDays = 42 - cells.length;
            for (let day = 1; day <= nextMonthDays; day++) {
                const date = new Date(year, month + 1, day);
                cells.push(`<button type="button" class="calendar-day rounded-2xl border border-slate-200 bg-slate-50 px-2 py-3 text-left text-sm text-slate-400" data-date="${formatDateKey(date)}">${day}</button>`);
            }

            calendarGrid.innerHTML = cells.join('');
            document.querySelectorAll('.calendar-day').forEach(button => {
                button.addEventListener('click', () => {
                    selectedDate = new Date(button.dataset.date);
                    renderCalendar();
                    renderEvents();
                });
            });

            renderEvents();
        }

        function renderEvents() {
            selectedDateEl.textContent = `Terpilih: ${formatDateLabel(selectedDate)}`;
            const eventsForDate = getEventsForDate(selectedDate);

            if (eventsForDate.length === 0) {
                eventListEl.innerHTML = '<div class="rounded-2xl border border-dashed border-slate-300 bg-slate-50 p-4 text-sm text-slate-500">Tidak ada kegiatan pada tanggal ini.</div>';
                return;
            }

            eventListEl.innerHTML = eventsForDate.map(event => `
                <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
                    <div class="mb-2 flex items-center justify-between gap-3">
                        <h4 class="font-semibold text-slate-800">${event.title}</h4>
                        <span class="rounded-full px-3 py-1 text-xs font-medium ${event.color}">${event.type}</span>
                    </div>
                    <p class="text-sm text-slate-500">${event.description}</p>
                </div>
            `).join('');
        }

        prevMonthBtn.addEventListener('click', () => {
            currentDate = new Date(currentDate.getFullYear(), currentDate.getMonth() - 1, 1);
            renderCalendar();
        });

        nextMonthBtn.addEventListener('click', () => {
            currentDate = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 1);
            renderCalendar();
        });

        renderCalendar();
    </script>

    <script>
        // smooth-scroll for internal anchors
        document.querySelectorAll('a[href^="#"]').forEach(a=>a.addEventListener('click',e=>{e.preventDefault();document.querySelector(a.getAttribute('href'))?.scrollIntoView({behavior:'smooth'})}));

        // sticky header shadow
        window.addEventListener('scroll',()=>{const h=document.querySelector('header');if(!h) return; if(window.scrollY>20) h.classList.add('shadow-md'); else h.classList.remove('shadow-md');});
    </script>
</body>
</html>
