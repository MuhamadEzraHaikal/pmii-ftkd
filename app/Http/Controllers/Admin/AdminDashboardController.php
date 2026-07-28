<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Anggota;
use App\Models\Arsip;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_anggota' => Anggota::count(),
            'total_pengurus' => Anggota::where('status', 'Pengurus')->count(),
            'total_agenda' => Agenda::where('tanggal', '>=', now())->count(),
            'total_arsip' => Arsip::count(),
        ];

        $agendaTerdekat = Agenda::where('tanggal', '>=', now())->orderBy('tanggal')->limit(5)->get();

        return view('admin.dashboard', compact('stats', 'agendaTerdekat'));
    }
}
