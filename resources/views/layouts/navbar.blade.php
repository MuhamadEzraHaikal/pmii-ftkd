<!-- Enhanced Navbar with PMII Branding -->
<nav class="fixed top-0 w-full z-50 transition-all duration-300 bg-white/95 backdrop-blur-md border-b border-slate-200/50 shadow-sm" id="mainNavbar">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 md:px-6 py-3">
        <!-- Logo & Brand -->
        <a href="/beranda" class="flex items-center gap-3 group">
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-[#004481] to-[#005baa] rounded-full opacity-0 group-hover:opacity-30 transition-opacity duration-300 blur-2xl"></div>
                <div class="w-12 h-12 rounded-full overflow-hidden shadow-lg border-2 border-white bg-white/5 flex items-center justify-center">
                    <img src="{{ asset('logo_rayon.png') }}" alt="Logo Rayon FTKD" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                </div>
            </div>
            <div class="hidden sm:flex flex-col">
                <span class="text-sm font-bold text-[#004481]">Rayon Pergerakan Mahasiswa Islam Indonesia </span>
                <span class="text-xs text-slate-500 font-medium">Fakultas Teknik Komputer dan Desain</span>
                <span class="text-xs text-slate-500 font-medium">Komisariat Universitas Nusa Putra</span>
            </div>
        </a>

        <!-- Navigation Links -->
        <div class="hidden md:flex items-center gap-8">
            <a href="/beranda" class="relative text-sm font-medium text-slate-700 hover:text-[#004481] transition-colors duration-200 group">
                Beranda
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-[#004481] to-[#fecb00] group-hover:w-full transition-all duration-300"></span>
            </a>
            <a href="/struktur pengurus" class="relative text-sm font-medium text-slate-700 hover:text-[#004481] transition-colors duration-200 group">
                Struktur Pengurus
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-[#004481] to-[#fecb00] group-hover:w-full transition-all duration-300"></span>
            </a>
        </div>

        <!-- Join Us Button -->
        <div class="flex items-center gap-3">
            <button onclick="window.open('https://chat.whatsapp.com/K4U7K6vQdyp8lmxXqWJaTi', '_blank'); return false;"
                    class="relative px-5 py-2.5 bg-gradient-to-r from-[#004481] to-[#005baa] text-white text-sm font-semibold rounded-full shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden group">
                <span class="relative flex items-center gap-2">
                    <i class="material-symbols-outlined text-base">chat</i>
                    <span>Join Us</span>
                </span>
            </button>

            <!-- Login Button (kept for modal trigger) -->
            <button id="loginBtn" onclick="showLoginModal()" class="hidden md:inline-flex items-center gap-2 px-4 py-2 border border-slate-200 rounded-full text-sm font-medium hover:bg-slate-50 transition">
                <i class="material-symbols-outlined">person</i>
                <span>Login</span>
            </button>
        </div>

        <!-- Mobile Menu Toggle -->
        <button onclick="toggleMobileMenu()" class="md:hidden p-2 hover:bg-slate-100 rounded-lg transition-colors">
            <i class="material-symbols-outlined text-slate-700">menu</i>
        </button>
    </div>

        <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden border-t border-slate-200/50 bg-white">
        <div class="flex flex-col gap-0 px-4 py-3">
            <a href="/beranda" class="px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-[#004481] rounded-lg transition-colors">
                <span class="flex items-center gap-2">
                    <i class="material-symbols-outlined text-base">home</i>
                    Beranda
                </span>
            </a>
            <a href="/struktur pengurus" class="px-4 py-2.5 text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-[#004481] rounded-lg transition-colors">
                <span class="flex items-center gap-2">
                    <i class="material-symbols-outlined text-base">people</i>
                    Struktur Pengurus
                </span>
            </a>
                <button onclick="showLoginModal()" class="mt-2 text-sm text-slate-700 text-left px-4 py-2.5 rounded-lg hover:bg-blue-50 flex items-center gap-2">
                    <i class="material-symbols-outlined">person</i>
                    Login
                </button>
        </div>
    </div>
</nav>

<!-- Navbar Spacer -->
<div class="h-20"></div>

<style>
    #mainNavbar {
        animation: slideDown 0.5s ease-out;
    }

    @keyframes slideDown {
        from {
            transform: translateY(-100%);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobileMenu');
        menu.classList.toggle('hidden');
    }

    // Close mobile menu when clicking a link
    document.querySelectorAll('#mobileMenu a').forEach(link => {
        link.addEventListener('click', () => {
            document.getElementById('mobileMenu').classList.add('hidden');
        });
    });

    // Navbar scroll effect
    window.addEventListener('scroll', () => {
        const navbar = document.getElementById('mainNavbar');
        if (window.scrollY > 10) {
            navbar.classList.add('shadow-md', 'backdrop-blur-lg');
        } else {
            navbar.classList.remove('shadow-md', 'backdrop-blur-lg');
        }
    });
</script>
