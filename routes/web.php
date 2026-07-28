<?php

use App\Http\Controllers\AuthController;
use App\Models\Agenda;
use App\Models\Anggota;
use App\Models\Arsip;
use App\Models\BeritaTerbaruItem;
use App\Models\JejakPergerakanItem;
use App\Models\Konten;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }

    return redirect()->route('beranda');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// tampilan halaman publik

Route::redirect('/struktur pengurus', '/beranda#struktur');

Route::get('/struktur pengurus', function () {
    $pengurusRayon = Anggota::where('status', 'Pengurus')
        ->orderBy('created_at')
        ->get()
        ->map(function (Anggota $anggota): object {
            return (object) [
                'id' => $anggota->id,
                'nama' => $anggota->nama,
                'jabatan' => $anggota->jabatan,
                'jurusan' => $anggota->jurusan,
                'status' => $anggota->status,
                'foto_url' => $anggota->foto_url,
            ];
        });

    // Log a compact payload for debugging: count and brief items
    try {
        Log::info('struktur_pengurus payload', [
            'count' => $pengurusRayon->count(),
            'items' => $pengurusRayon->map(function ($p) {
                return [
                    'id' => $p->id ?? null,
                    'nama' => $p->nama ?? null,
                    'jabatan' => $p->jabatan ?? null,
                ];
            })->toArray(),
        ]);
    } catch (Throwable $e) {
        // don't break the page if logging fails
        Log::error('Failed to log struktur_pengurus payload', ['error' => $e->getMessage()]);
    }

    if ($pengurusRayon->isEmpty()) {
        $pengurusRayon = collect([
            ['nama' => 'Muhamad Ezra Haikal Purboyo', 'jabatan' => 'Ketua Rayon', 'jurusan' => 'Teknik Informatika', 'status' => 'Pengurus'],
            ['nama' => 'Sehan Zaki Nurmilad', 'jabatan' => 'Sekretaris', 'jurusan' => 'Teknik Informatika', 'status' => 'Pengurus'],
            ['nama' => 'Rhealita Shani', 'jabatan' => 'Bendahara', 'jurusan' => 'Teknik Informatika', 'status' => 'Pengurus'],
            ['nama' => 'M. Hafiz Putra', 'jabatan' => 'Ketua Bidang Kaderisasi', 'jurusan' => 'Teknik Informatika', 'status' => 'Pengurus'],
        ])->map(function (array $item): object {
            return (object) [
                'nama' => $item['nama'],
                'jabatan' => $item['jabatan'],
                'jurusan' => $item['jurusan'],
                'status' => $item['status'],
                'foto_url' => 'https://i.pravatar.cc/80?u='.urlencode($item['nama']),
            ];
        });
    }

    $berandaSections = Konten::whereIn('section', ['home_carousel_1', 'home_carousel_2', 'home_carousel_3', 'home_pengurus', 'home_profil', 'home_jejak', 'home_last_update', 'struktur_pengurus', 'struktur_carousel_1', 'struktur_carousel_2', 'struktur_carousel_3'])
        ->orderBy('section')
        ->get()
        ->keyBy('section');

    return view('public.struktur', compact('berandaSections', 'pengurusRayon'));
})->name('struktur pengurus');

Route::get('/arsip administrasi', function () {
    return view('admin.arsip');
})->name('arsip');

Route::get('/beranda', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }

    $agendas = Agenda::where('tanggal', '>=', now())
        ->orderBy('tanggal')
        ->get();

    $arsips = Arsip::latest()->get();
    $kontens = Konten::orderBy('section')->get();
    $anggotaCount = Anggota::count();
    $pengurusRayon = Anggota::where('status', 'Pengurus')
        ->orderBy('created_at')
        ->get()
        ->map(fn (Anggota $anggota): object => (object) [
            'id' => $anggota->id,
            'nama' => $anggota->nama,
            'jabatan' => $anggota->jabatan,
            'jurusan' => $anggota->jurusan,
            'status' => $anggota->status,
            'foto_url' => $anggota->foto_url,
        ]);

    if ($pengurusRayon->isEmpty()) {
        $pengurusRayon = collect([
            ['nama' => 'Muhamad Ezra Haikal Purboyo', 'jabatan' => 'Ketua Rayon', 'jurusan' => 'Teknik Informatika', 'status' => 'Pengurus'],
            ['nama' => 'Sehan Zaki Nurmilad', 'jabatan' => 'Sekretaris', 'jurusan' => 'Teknik Informatika', 'status' => 'Pengurus'],
            ['nama' => 'Rhealita Shani', 'jabatan' => 'Bendahara', 'jurusan' => 'Teknik Informatika', 'status' => 'Pengurus'],
            ['nama' => 'M. Hafiz Putra', 'jabatan' => 'Ketua Bidang Kaderisasi', 'jurusan' => 'Teknik Informatika', 'status' => 'Pengurus'],
        ])->map(fn (array $item): object => (object) [
            'nama' => $item['nama'],
            'jabatan' => $item['jabatan'],
            'jurusan' => $item['jurusan'],
            'status' => $item['status'],
            'foto_url' => 'https://i.pravatar.cc/80?u='.urlencode($item['nama']),
        ]);
    }
    $berandaSections = Konten::whereIn('section', ['home_carousel_1', 'home_carousel_2', 'home_carousel_3', 'home_pengurus', 'home_profil', 'home_jejak', 'home_last_update', 'struktur_pengurus', 'struktur_carousel_1', 'struktur_carousel_2', 'struktur_carousel_3'])
        ->orderBy('section')
        ->get()
        ->keyBy('section');
    $jejakItems = JejakPergerakanItem::orderBy('sort_order')->orderBy('id')->limit(4)->get();

    if ($jejakItems->isEmpty()) {
        $jejakItems = collect([
            ['judul' => 'Grand Assembly 2023', 'caption' => 'Momentum kesatuan dan kebersamaan', 'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBBwIrTRi0YaLQxgHieIddSXX_gHlX29L4Y_k1dxhkQc7zl_U6I_LKw_1znITI5wfVPpL5_0x40CUHP2GsFHhURoIbWJbzg-XriL1cCj3I8r-4xSunc5IkztZhIPhLmUgyuTDD_ZA7atZ-3BIeU1JDNVhRS4LCPybvA53vMVSndCLe7pAkkGSR58e8xepfmXrgKfuHQvHUojdzsP9-Wv8zY33xLF9JW_XV9Gdb-5N5J_9ub7MLuToN0iDKyDWZgdiAUm0uFJ_Znm7E'],
            ['judul' => 'Kajian Malam Aswaja', 'caption' => 'Pendalaman nilai-nilai organisasi', 'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCKbCbtYzFPQPeJeFi_duTR0o9UEPrtzjmepkN2DgZvZPLtbq-0QVH8TJCtVcCPSmBFG1OHOpAeo7yfuGC-W067OJxgjEulN2aETi5RiEGzh-KxX3IuzlXjT_jodf49YsTbvy1kuDXI-ml7c_TRczayqkBXie5bmfUTRX-m3zeHKsRc6cPIjiUpaEtGGFxHtl3GzdCeeNaUh-WdcwpfR8Uf6DIRTbTwi4FxBVmKfdpCBR1fewVR9h4cZtExpwSUC9CKWD7HRHG3Zg4'],
            ['judul' => 'Gerakan Hijau', 'caption' => 'Desa Cibolang & Amal Sholeh', 'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBShlZouHfpHdPR86F1Sn2mel8rkUume75WSrsDCPQWYlXCVid4U9J3aQx7NrpbXO1ZH2Fac2rqQ59IQqy_-aZwrwjYKeadIZEwOuVPTkPX0efqGoTubUYgeviUs95HYkE3B7LyPjCqxYyqrA72a2E6BrRk8w60H6GDs-RtLQcyW8DfPxAx8MYn8D0fPa-pdtvLZYVlnNP5QyMnqUg3aRSXFIdpiX2jigAAeXP-ifkE0uiin45BDlGGl6uvXrDZGl0-x2WaTo_HRSQ'],
            ['judul' => 'Pidato Kepemimpinan', 'caption' => 'Visi & Misi Rayon', 'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB-2YBSTkHvEJBLXbFTRvYMMp4027j9GF4tYNlqR0TJ3HKeIbkMYtA1vbvcSj0lFH9xNH5ZvhXaVl1QwT-iMky2NlqufobbQlYq-WOfEOaqxwDinBYj74zxiZhHPAmrNkZpdbnyt13qV7XGZiPszhhiEAVstkoCklicJRnZfnNR2GNkEPhD9_CO33BawYpr0nj8Dnc-n0JD8j-O2AAhkJ16i_4oE-DdNoD7hdE_IPqG8pGfE_CbmdgcASCu1ZZZwZ1XDYk1iZIhxz4'],
        ])->map(fn (array $item): object => (object) $item);
    }

    $beritaItems = BeritaTerbaruItem::orderBy('sort_order')->orderBy('id')->limit(2)->get();

    if ($beritaItems->isEmpty()) {
        $beritaItems = collect([
            [
                'judul' => 'Seminar Literasi Digital Sukses Digelar',
                'kategori' => '📢 Kabar Gembira',
                'status_label' => 'Sukses',
                'isi' => 'Menghadirkan pakar teknologi nasional, PMII Nusa Putra sukses membekali 200+ mahasiswa dengan skill digital yang relevan untuk era modern.',
                'tanggal_label' => '2 Minggu yang lalu',
                'link_url' => '#',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB1c_Pst4RVzGiiuwAIOHUTd66XbZ-r2IhWEjs6kZtzAAgWUuKdYUe-H-AWykkj7KbTq7dGDGhFiJUZloXdcCoYEAmrs9XfhPAmPDYS2ZdiiZZ8oUKyrBGjwX3edGLOQQqfkNb5ERArNQS7oIqLtHLObhOYETTaRM0pVuMgdTtG7qsoGmIEUS2dvsoRCswMdqV_ObBa4PY9uBlkTvYgO-4VXDVyxIAGCZPrebY82m_hz6j9ntc2LPkciX1c4tMx1td0fz6B62s9uF8',
            ],
            [
                'judul' => 'Gerakan Hijau di Desa Cibolang',
                'kategori' => '🌱 Lingkungan',
                'status_label' => 'Aksi Nyata',
                'isi' => 'Dalam rangka memperingati Harlah PMII, Komisariat Nusa Putra melakukan penanaman 1000 bibit pohon untuk menjaga kelestarian lingkungan alam.',
                'tanggal_label' => '1 Bulan yang lalu',
                'link_url' => '#',
                'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBLT298vBCInucF6GHlah7aql9fIfcF34eZOWqhrjNKKO7q2Y7T-y9pOpWwAOO395Oe-Cpf71b71MfATFdFjBg_UWa2ok8GGFeUEUp-0MsE0Fs-8YLbsl7H6zlp6bkJiZZjWQKCaXCzs0vU1WC0igy-Tm7rSYM8pPFfovjbcA3WvGxlkwDU2QcqLqNWEGS94Xg9SqqqSHzDwLKW_ZvwttZYZuaLTJdffmu2eI-MQ9L-UDWB27fw6bRtNCSUGVRT-MhSa_fQdGpf1to',
            ],
        ])->map(fn (array $item): object => (object) $item);
    }

    return view('public.home', compact('agendas', 'arsips', 'kontens', 'berandaSections', 'anggotaCount', 'pengurusRayon', 'jejakItems', 'beritaItems'));
})->name('beranda');

use App\Http\Controllers\Admin\AnggotaController;

Route::post('/anggota', [AnggotaController::class, 'store'])->name('anggota.store');

// tampilan halaman anggota

Route::get('/calender', function () {
    $agendas = Agenda::where('tanggal', '>=', now())
        ->orderBy('tanggal')
        ->get();

    return view('anggota.agenda', compact('agendas'));
})->name('calender');

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

use App\Http\Controllers\Anggota\RuangDiskusiController;

Route::post('/dashboard/ruang-diskusi', [RuangDiskusiController::class, 'store'])->name('ruang-diskusi.store');
Route::post('/dashboard/ruang-diskusi/{room}/message', [RuangDiskusiController::class, 'message'])->name('ruang-diskusi.message');
Route::delete('/dashboard/ruang-diskusi/{room}', [RuangDiskusiController::class, 'destroy'])->name('ruang-diskusi.destroy');

require __DIR__.'/admin.php';
