@extends('layouts.app')

@section('title', 'Pendaftaran Anggota Baru')

@section('content')
<!-- Menyisipkan Tailwind CDN & Fonts agar langsung aktif di halaman ini -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&family=Manrope:wght@600&display=swap" rel="stylesheet">

<script>
    // Konfigurasi custom warna sesuai dengan prototype HTML-mu
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    "primary": "#004481",
                    "primary-fixed": "#d5e3ff",
                    "on-primary-fixed-variant": "#004787",
                    "on-surface-variant": "#414751",
                    "surface-container-lowest": "#ffffff",
                    "outline": "#727783"
                }
            }
        }
    }
</script>

<main class="min-h-screen bg-[#f8f9fa] font-['Plus_Jakarta_Sans'] text-[#191c1d] antialiased">
    <!-- Hero Section -->
    <section class="pt-20 pb-12 px-5 md:px-0 text-center max-w-3xl mx-auto">
        <div class="inline-flex items-center gap-2 bg-[#d5e3ff] text-[#004787] px-4 py-2 rounded-full mb-6">
            <span class="text-xs font-semibold uppercase tracking-wider text-center">
                Daftar Menjadi Anggota PMII Universitas Nusa Putra<br>Rayon Fakultas Teknik Komputer dan Desain
            </span>
        </div>
        
        <div class="flex flex-col md:flex-row items-center justify-center gap-6 mb-4">
            <div id="title-wrapper">
                <h1 class="text-4xl md:text-5xl font-extrabold text-[#004481] tracking-tight">
                    Registrasi Anggota Baru
                </h1>
            </div>
        </div>
        
        <p class="text-lg text-[#414751] mt-2">
            Jadilah bagian dari pergerakan mahasiswa yang progresif dan berintegritas. Mari berproses bersama untuk mewujudkan cita-cita kemerdekaan bangsa.
        </p>
    </section>

    <!-- Registration Form Card -->
    <section class="px-5 md:px-0 pb-20">
        <div class="max-w-4xl mx-auto bg-white rounded-xl overflow-hidden relative border border-[#E9ECEF] shadow-[0px_4px_20px_rgba(0,0,0,0.05)]">
            
            <form method="POST" action="{{ route('register') }}" class="p-8 md:p-12 space-y-12">
                @csrf

                <!-- Error Alert Box -->
                @if ($errors->any())
                    <div class="rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-600">
                        <div class="font-semibold mb-1">Ada kendala dalam pendaftaran Anda:</div>
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Personal Info -->
                <div class="space-y-6">
                    <div class="flex items-center gap-3 border-b border-[#c1c6d3]/30 pb-2">
                        <span class="text-[#004481] font-bold text-xl">👤</span>
                        <h2 class="text-xl font-bold text-[#004481]">Informasi Pribadi</h2>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-2">
                            <label for="name" class="block text-sm font-semibold text-[#414751] mb-2">Nama Lengkap</label>
                            <input id="name" name="name" type="text" value="{{ old('name') }}" required
                                class="w-full px-4 py-3 rounded-lg border border-[#727783] bg-white text-sm text-[#191c1d] outline-none transition duration-300 focus:border-[#004481] focus:ring-2 focus:ring-[#004481]/10" 
                                placeholder="Masukkan nama lengkap sesuai KTP">
                        </div>
                        
                        <div>
                            <label for="tempat_lahir" class="block text-sm font-semibold text-[#414751] mb-2">Tempat Lahir</label>
                            <input id="tempat_lahir" name="tempat_lahir" type="text" value="{{ old('tempat_lahir') }}" required
                                class="w-full px-4 py-3 rounded-lg border border-[#727783] bg-white text-sm text-[#191c1d] outline-none transition duration-300 focus:border-[#004481] focus:ring-2 focus:ring-[#004481]/10" 
                                placeholder="Kota Kelahiran">
                        </div>
                        
                        <div>
                            <label for="tanggal_lahir" class="block text-sm font-semibold text-[#414751] mb-2">Tanggal Lahir</label>
                            <input id="tanggal_lahir" name="tanggal_lahir" type="date" value="{{ old('tanggal_lahir') }}" required
                                class="w-full px-4 py-3 rounded-lg border border-[#727783] bg-white text-sm text-[#191c1d] outline-none transition duration-300 focus:border-[#004481] focus:ring-2 focus:ring-[#004481]/10">
                        </div>
                        
                        <div class="md:col-span-2">
                            <label for="jenis_kelamin" class="block text-sm font-semibold text-[#414751] mb-2">Jenis Kelamin</label>
                            <select id="jenis_kelamin" name="jenis_kelamin" required
                                class="w-full px-4 py-3 rounded-lg border border-[#727783] bg-white text-sm text-[#191c1d] outline-none transition duration-300 focus:border-[#004481] focus:ring-2 focus:ring-[#004481]/10">
                                <option disabled {{ old('jenis_kelamin') ? '' : 'selected' }} value="">Pilih Jenis Kelamin</option>
                                <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Contact & Account Info -->
                <div class="space-y-6">
                    <div class="flex items-center gap-3 border-b border-[#c1c6d3]/30 pb-2">
                        <span class="text-[#004481] font-bold text-xl">📞</span>
                        <h2 class="text-xl font-bold text-[#004481]">Informasi Kontak & Akun</h2>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-semibold text-[#414751] mb-2">Alamat Email</label>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" required
                                class="w-full px-4 py-3 rounded-lg border border-[#727783] bg-white text-sm text-[#191c1d] outline-none transition duration-300 focus:border-[#004481] focus:ring-2 focus:ring-[#004481]/10" 
                                placeholder="contoh@email.com">
                        </div>
                        
                        <div>
                            <label for="whatsapp" class="block text-sm font-semibold text-[#414751] mb-2">Nomor WhatsApp</label>
                            <input id="whatsapp" name="whatsapp" type="tel" value="{{ old('whatsapp') }}" required
                                class="w-full px-4 py-3 rounded-lg border border-[#727783] bg-white text-sm text-[#191c1d] outline-none transition duration-300 focus:border-[#004481] focus:ring-2 focus:ring-[#004481]/10" 
                                placeholder="08xxxxxxxxx">
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-semibold text-[#414751] mb-2">Password</label>
                            <input id="password" name="password" type="password" required
                                class="w-full px-4 py-3 rounded-lg border border-[#727783] bg-white text-sm text-[#191c1d] outline-none transition duration-300 focus:border-[#004481] focus:ring-2 focus:ring-[#004481]/10" 
                                placeholder="Minimal 8 karakter">
                        </div>

                        <div>
                            <label for="password_confirmation" class="block text-sm font-semibold text-[#414751] mb-2">Konfirmasi Password</label>
                            <input id="password_confirmation" name="password_confirmation" type="password" required
                                class="w-full px-4 py-3 rounded-lg border border-[#727783] bg-white text-sm text-[#191c1d] outline-none transition duration-300 focus:border-[#004481] focus:ring-2 focus:ring-[#004481]/10" 
                                placeholder="Ulangi password">
                        </div>
                        
                        <div class="md:col-span-2">
                            <label for="alamat" class="block text-sm font-semibold text-[#414751] mb-2">Alamat Domisili</label>
                            <textarea id="alamat" name="alamat" rows="3" required
                                class="w-full px-4 py-3 rounded-lg border border-[#727783] bg-white text-sm text-[#191c1d] outline-none transition duration-300 focus:border-[#004481] focus:ring-2 focus:ring-[#004481]/10" 
                                placeholder="Masukkan alamat tempat tinggal saat ini">{{ old('alamat') }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Academic Info -->
                <div class="space-y-6">
                    <div class="flex items-center gap-3 border-b border-[#c1c6d3]/30 pb-2">
                        <span class="text-[#004481] font-bold text-xl">🎓</span>
                        <h2 class="text-xl font-bold text-[#004481]">Informasi Akademik</h2>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="jurusan" class="block text-sm font-semibold text-[#414751] mb-2">Jurusan</label>
                            <select id="jurusan" name="jurusan" required
                                class="w-full px-4 py-3 rounded-lg border border-[#727783] bg-white text-sm text-[#191c1d] outline-none transition duration-300 focus:border-[#004481] focus:ring-2 focus:ring-[#004481]/10">
                                <option disabled {{ old('jurusan') ? '' : 'selected' }} value="">Pilih Jurusan</option>
                                <option value="Teknik Informatika" {{ old('jurusan') == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
                                <option value="Sistem Informasi" {{ old('jurusan') == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
                                <option value="Arsitektur" {{ old('jurusan') == 'Arsitektur' ? 'selected' : '' }}>Arsitektur</option>
                                <option value="Teknik Sipil" {{ old('jurusan') == 'Teknik Sipil' ? 'selected' : '' }}>Teknik Sipil</option>
                                <option value="Desain Komunikasi Visual" {{ old('jurusan') == 'Desain Komunikasi Visual' ? 'selected' : '' }}>Desain Komunikasi Visual</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="angkatan" class="block text-sm font-semibold text-[#414751] mb-2">Angkatan</label>
                            <input id="angkatan" name="angkatan" type="number" value="{{ old('angkatan') }}" required
                                class="w-full px-4 py-3 rounded-lg border border-[#727783] bg-white text-sm text-[#191c1d] outline-none transition duration-300 focus:border-[#004481] focus:ring-2 focus:ring-[#004481]/10" 
                                placeholder="Contoh: 2024">
                        </div>
                    </div>
                </div>

                <!-- Motivation -->
                <div class="space-y-6">
                    <div class="flex items-center gap-3 border-b border-[#c1c6d3]/30 pb-2">
                        <span class="text-[#004481] font-bold text-xl">💡</span>
                        <h2 class="text-xl font-bold text-[#004481]">Motivasi</h2>
                    </div>
                    
                    <div>
                        <label for="motivasi" class="block text-sm font-semibold text-[#414751] mb-2">Motivasi Singkat</label>
                        <textarea id="motivasi" name="motivasi" rows="4" required
                            class="w-full px-4 py-3 rounded-lg border border-[#727783] bg-white text-sm text-[#191c1d] outline-none transition duration-300 focus:border-[#004481] focus:ring-2 focus:ring-[#004481]/10" 
                            placeholder="Apa alasan Anda ingin bergabung dengan PMII Rayon FTKD?">{{ old('motivasi') }}</textarea>
                        <p class="text-xs text-[#414751] mt-2 italic">Sampaikan dengan jujur semangat pergerakan Anda.</p>
                    </div>
                </div>

                <!-- Submit Button Area -->
                <div class="pt-6 text-center space-y-6">
                    <button type="submit" 
                        class="w-full md:w-auto px-12 py-4 bg-[#004481] text-white font-bold text-base rounded-lg border-b-4 border-[#fecb00] transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-lg hover:bg-[#005baa]">
                        Daftar Sekarang
                    </button>
                    
                    <div class="pt-4">
                        <p class="text-sm text-[#414751]">
                            Sudah memiliki akun? 
                            <a class="text-[#004481] font-bold hover:underline ml-1" href="{{ route('login') }}">Masuk di sini</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>
@endsection