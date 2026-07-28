<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class AnggotaController extends Controller
{
    public function index(Request $request)
    {
        $role = $request->query('role');

        $anggotas = Anggota::when($role === 'pengurus', fn ($query) => $query->where('status', 'Pengurus'))
            ->when($role === 'anggota', fn ($query) => $query->where('status', '!=', 'Pengurus'))
            ->when($request->q, function ($query, $q) {
                $query->where('nama', 'like', "%{$q}%")->orWhere('nim', 'like', "%{$q}%");
            })
            ->when($request->status, fn ($query, $status) => $query->where('status', $status))
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.anggota.index', compact('anggotas', 'role'));
    }

    public function create(Request $request)
    {
        $role = $request->query('role') === 'pengurus' ? 'pengurus' : 'anggota';

        return view('admin.anggota.form', [
            'anggota' => new Anggota,
            'role' => $role,
            'jabatanOptions' => $this->jabatanOptions(),
        ]);
    }

    public function store(Request $request)
    {
        $role = $request->input('role') === 'pengurus' ? 'pengurus' : 'anggota';
        if ($role === 'pengurus') {
            $request->merge(['status' => 'Pengurus']);
        }

        $request->merge(['role' => $role]);
        $data = $this->validated($request);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('anggota', 'public');
            Log::info('Anggota store: foto uploaded', ['foto' => $data['foto'], 'nama' => $data['nama'] ?? null, 'nim' => $data['nim'] ?? null]);
        }

        Anggota::create($data);

        return redirect()->route('admin.anggota.index')->with('success', 'Anggota berhasil ditambahkan.');
    }

    public function edit(Request $request, Anggota $anggota)
    {
        $role = $request->query('role') === 'pengurus' || $anggota->status === 'Pengurus' ? 'pengurus' : 'anggota';

        return view('admin.anggota.form', [
            'anggota' => $anggota,
            'role' => $role,
            'jabatanOptions' => $this->jabatanOptions(),
        ]);
    }

    public function update(Request $request, Anggota $anggota)
    {
        $role = $request->input('role') === 'pengurus' || $anggota->status === 'Pengurus' ? 'pengurus' : 'anggota';
        if ($role === 'pengurus') {
            $request->merge(['status' => 'Pengurus']);
        }

        $request->merge(['role' => $role]);
        $data = $this->validated($request, $anggota->id);

        if ($request->hasFile('foto')) {
            if ($anggota->foto) {
                Storage::disk('public')->delete($anggota->foto);
            }
            $data['foto'] = $request->file('foto')->store('anggota', 'public');
            Log::info('Anggota update: foto replaced', ['old' => $anggota->foto, 'new' => $data['foto'], 'id' => $anggota->id]);
        }

        $anggota->update($data);

        return redirect()->route('admin.anggota.index')->with('success', 'Data anggota berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Log::info('Anggota destroy called (entry)', ['param_id' => $id, 'user_id' => optional(auth()->user())->id]);

        $anggota = Anggota::find($id);
        if (! $anggota) {
            Log::warning('Anggota not found for delete', ['id' => $id]);

            return back()->with('error', 'Anggota tidak ditemukan.');
        }

        try {
            Log::info('Anggota attributes before delete', $anggota->toArray());
        } catch (\Throwable $e) {
            Log::error('Failed to toArray anggota before delete', ['error' => $e->getMessage()]);
        }

        try {
            if ($anggota->foto) {
                Storage::disk('public')->delete($anggota->foto);
            }
            $anggota->delete();
            Log::info('Anggota deleted', ['id' => $anggota->id, 'nim' => $anggota->nim]);

            return back()->with('success', 'Anggota berhasil dihapus.');
        } catch (\Throwable $e) {
            Log::error('Failed to delete anggota', ['id' => $anggota->id, 'error' => $e->getMessage()]);

            return back()->with('error', 'Gagal menghapus anggota. Periksa log untuk detail.');
        }
    }

    private function validated(Request $request, $ignoreId = null): array
    {
        $role = $request->input('role');

        return $request->validate([
            'nama' => 'required|string|max:150',
            'nim' => 'required|string|max:30|unique:anggotas,nim'.($ignoreId ? ",$ignoreId" : ''),
            'jurusan' => 'required|string|max:150',
            'angkatan' => 'required|string|max:10',
            'status' => 'required|in:Anggota Baru,Anggota Biasa,Kader,Pengurus',
            'jabatan' => $role === 'pengurus'
                ? ['required', 'string', Rule::in($this->jabatanOptions())]
                : 'nullable|string|max:150',
            'jenis_kelamin' => 'required|in:L,P',
            'kontak' => 'nullable|string|max:30',
            // max in kilobytes (5120 KB = 5 MB)
            'foto' => 'nullable|image|max:5120',
        ]);
    }

    private function jabatanOptions(): array
    {
        return [
            'Ketua Rayon',
            'Wakil Ketua',
            'Sekretaris',
            'Bendahara',
            'Ketua Bidang Pendidikan, Keagamaan & Pengembangan Akademik',
            'Ketua Bidang Penataan Aparatur Organisasi',
            'Ketua Bidang Komunikasi & Hubungan Antar Lembaga',
            'Sekretaris Bid.Kaderisasi',
            'Sekretaris Bid.Pendidikan, Keagamaan & Pengembangan Akademik',
            'Sekretaris Bid.Penataan Aparatur Organisasi',
            'Sekretaris Bid.Komunikasi & Hubungan Antar Lembaga',
            'Ketua Bidang Kaderisasi',
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
    }
}
