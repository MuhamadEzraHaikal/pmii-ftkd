<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Anggota;
use App\Models\Arsip;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect()->to($this->redirectDestination());
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            $redirect = $this->redirectDestination();

            if ($request->expectsJson()) {
                return response()->json(['redirect' => $redirect]);
            }

            return redirect()->intended($redirect);
        }

        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'Email atau password salah.',
            ], 422);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function showRegistrationForm()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'date'],
            'jenis_kelamin' => ['required', 'in:L,P'],
            'email' => ['required', 'email', 'unique:users,email'],
            'whatsapp' => ['required', 'string', 'max:20'],
            'password' => ['required', 'confirmed', 'min:8'],
            'alamat' => ['required', 'string'],
            'jurusan' => ['required', 'string', 'max:255'],
            'angkatan' => ['required', 'integer', 'min:2000'],
            'motivasi' => ['required', 'string'],
        ]);

        $user = User::create([
            'name' => $data['name'],
            'tempat_lahir' => $data['tempat_lahir'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'email' => $data['email'],
            'whatsapp' => $data['whatsapp'],
            'password' => $data['password'],
            'alamat' => $data['alamat'],
            'jurusan' => $data['jurusan'],
            'angkatan' => $data['angkatan'],
            'motivasi' => $data['motivasi'],
        ]);

        return redirect()->route('beranda')->with('success', 'Selamat! Kamu berhasil mendaftar.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('beranda');
    }

    protected function redirectDestination(): string
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return route('admin.dashboard');
        }

        return route('dashboard');
    }

    public function dashboard(Request $request)
    {
        if (! Auth::check()) {
            return redirect()->route('login');
        }

        $agendas = Agenda::where('tanggal', '>=', now())
            ->orderBy('tanggal')
            ->get();

        $arsips = Arsip::latest()->get();

        $anggotas = Anggota::latest()->get();

        $rooms = collect(session('ruang_diskusi.rooms', []))->map(function ($room) {
            return is_object($room) ? (array) $room : (array) $room;
        });

        $selectedRoomId = $request->query('room');
        $currentRoom = $rooms->firstWhere('id', (int) $selectedRoomId) ?: $rooms->first();

        $messages = collect(session('ruang_diskusi.pesans.'.($currentRoom['id'] ?? ''), []))
            ->map(function ($message) {
                return is_object($message) ? (array) $message : (array) $message;
            });

        return view('anggota.dashboard', compact(
            'agendas',
            'arsips',
            'anggotas',
            'rooms',
            'currentRoom',
            'messages'
        ));
    }
}
