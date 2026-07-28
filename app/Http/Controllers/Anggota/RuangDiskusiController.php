<?php

namespace App\Http\Controllers\Anggota;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RuangDiskusiController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'ikon' => ['nullable', 'string', 'max:50'],
        ]);

        $rooms = collect(session('ruang_diskusi.rooms', []));

        $new = [
            'id' => time(),
            'nama' => $data['nama'],
            'ikon' => $data['ikon'] ?? 'message-circle',
            'terakhir' => '',
            'waktu' => now()->format('H:i'),
            'unread' => 0,
            'status' => 'Aktif',
        ];

        $rooms->push($new);
        session()->put('ruang_diskusi.rooms', $rooms->toArray());

        return redirect()->route('dashboard', ['view' => 'ruang-diskusi'])->with('success', 'Topik diskusi baru berhasil dibuat.');
    }

    public function destroy($roomId)
    {
        $rooms = collect(session('ruang_diskusi.rooms', []))
            ->filter(function ($room) use ($roomId) {
                $id = is_array($room) ? $room['id'] : $room->id;

                return $id != $roomId;
            })
            ->values();

        session()->put('ruang_diskusi.rooms', $rooms->toArray());

        $pesans = session('ruang_diskusi.pesans', []);
        if (array_key_exists($roomId, $pesans)) {
            unset($pesans[$roomId]);
            session()->put('ruang_diskusi.pesans', $pesans);
        }

        return redirect()->route('dashboard', ['view' => 'ruang-diskusi'])->with('success', 'Topik diskusi berhasil dihapus.');
    }

    public function message(Request $request, $roomId)
    {
        $data = $request->validate([
            'isi' => ['required', 'string', 'max:1000'],
        ]);

        $rooms = collect(session('ruang_diskusi.rooms', []));
        $roomIndex = $rooms->search(function ($room) use ($roomId) {
            $id = is_array($room) ? $room['id'] : $room->id;

            return $id == $roomId;
        });

        if ($roomIndex === false) {
            return response()->json(['message' => 'Topik tidak ditemukan.'], 404);
        }

        $messages = session('ruang_diskusi.pesans', []);
        $roomMessages = collect($messages[$roomId] ?? []);

        $newMessage = [
            'id' => time(),
            'nama' => Auth::user()->name ?? 'Saya',
            'foto' => 'https://i.pravatar.cc/80?u='.urlencode(Auth::user()->name ?? 'user'),
            'isi' => $data['isi'],
            'waktu' => now()->format('H:i'),
            'saya' => true,
        ];

        $roomMessages->push($newMessage);
        $messages[$roomId] = $roomMessages->toArray();
        session()->put('ruang_diskusi.pesans', $messages);

        $room = $rooms[$roomIndex];
        $room['terakhir'] = Str::limit($data['isi'], 40);
        $room['waktu'] = now()->format('H:i');
        $room['unread'] = ($room['unread'] ?? 0) + 1;
        $rooms[$roomIndex] = $room;
        session()->put('ruang_diskusi.rooms', $rooms->toArray());

        return response()->json([
            'message' => $newMessage,
            'stats' => [
                'topikAktif' => $rooms->count(),
                'pesanHariIni' => $roomMessages->count(),
            ],
        ], 201);
    }
}
