<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $mahasiswa = Mahasiswa::with('user')          // ⬅️ relasi user tetap dipanggil
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', '%' . $search . '%')
                      ->orWhere('nim', 'like', '%' . $search . '%')
                      ->orWhere('alamat', 'like', '%' . $search . '%')
                      ->orWhere('no_hp', 'like', '%' . $search . '%');
                });
            })
            ->orderBy('nama', 'asc')
            ->paginate(10)
            ->withQueryString();

        return view('admin.mahasiswa.mahasiswa', compact('mahasiswa'));
    }

       public function edit(string $id)
    {
            $mahasiswa = Mahasiswa::findOrFail($id);
            return view('admin.mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->update([

            'nama' => $request->nama,
            'nim' => $request->nim,
            'alamat' => $request->alamat,
            'no_hp' => $request->np_hp
            
        ]);

        return redirect('/mahasiswa/admin')->with('success', 'Data berhasil diupdate');
    }
}