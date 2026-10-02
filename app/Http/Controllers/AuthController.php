<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    // =========================
    // HALAMAN LOGIN
    // =========================
    public function login()
    {
        return view('auth.login');
    }

    // =========================
    // HALAMAN REGISTER
    // =========================
    public function register()
    {
        return view('auth.register');
    }

    // =========================
    // PROSES REGISTER
    // =========================
   
    public function prosesregister(Request $request)
{
    // Validasi umum
    $request->validate([
        'role' => 'required|in:admin,guru,siswa',
        'nama' => 'required|string|max:100',
        'email' => 'required|email|max:100|unique:users,email',
        'password' => 'required|min:6',
    ]);

    // Validasi mahasiswa
    if ($request->role === 'siswa') {
        $request->validate([
            'nim' => 'required|string|max:30|unique:mahasiswa,nim',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
        ]);
    }

    // Validasi guru
    if ($request->role === 'guru') {
        $request->validate([
            'mata_pelajaran' => 'required|string|max:100',
            'no_telepon' => 'required|string|max:20',
        ]);
    }

    try {

        DB::beginTransaction();

        // Buat user
        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // =========================
        // MAHASISWA
        // =========================

        if ($request->role === 'siswa') {

            DB::table('mahasiswa')->insert([
                'id_user' => $user->id,
                'nama' => $request->nama,
                'nim' => $request->nim,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
            ]);
        }

        // =========================
        // GURU
        // =========================

        if ($request->role === 'guru') {

            DB::table('guru')->insert([
                'id_user' => $user->id,
                'mataPelajaran' => $request->mata_pelajaran,
                'noTelepon' => $request->no_telepon,
            ]);
        }

        // =========================
        // ADMIN
        // =========================

        if ($request->role === 'admin') {

            DB::table('admin')->insert([
                'id_user' => $user->id,
            ]);
        }

        DB::commit();

        // =========================
        // LOGIN USER
        // =========================

        Auth::guard('web')->login($user);

        // Regenerate session
        $request->session()->regenerate();

        // Simpan role
        $request->session()->put('role', $request->role);

        // =========================
        // LANGSUNG KE DASHBOARD
        // =========================

        return redirect('/dashboard');

    } catch (\Throwable $e) {

        DB::rollBack();

        return back()
            ->withInput()
            ->with(
                'error',
                'Registrasi gagal: ' . $e->getMessage()
            );
    }
}

    // =========================
    // PROSES LOGIN
    // =========================
    public function proseslogin(Request $request)
    {
        // VALIDASI INPUT
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:admin,guru,siswa',
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Password wajib diisi.',
            'role.required' => 'Silakan pilih role login.',
            'role.in' => 'Role login tidak valid.',
        ]);

        // =========================
        // CARI USER
        // =========================
        $user = User::where('email', $request->email)->first();

        // =========================
        // CEK EMAIL & PASSWORD
        // =========================
        if (!$user || !Hash::check($request->password, $user->password)) {

            return back()
                ->withInput()
                ->with('error', 'Email atau password salah.');
        }

        // =========================
        // CEK ROLE
        // =========================
        $role = $request->role;

        if ($role === 'admin') {

            $exists = DB::table('admin')
                ->where('id_user', $user->id)
                ->exists();

            $namaRole = 'Admin';

        } elseif ($role === 'guru') {

            $exists = DB::table('guru')
                ->where('id_user', $user->id)
                ->exists();

            $namaRole = 'Guru';

        } else {

            $exists = DB::table('mahasiswa')
                ->where('id_user', $user->id)
                ->exists();

            $namaRole = 'Mahasiswa';
        }

        // =========================
        // ROLE TIDAK SESUAI
        // =========================
        if (!$exists) {

            return back()
                ->withInput()
                ->with(
                    'error',
                    'Akun dengan email tersebut tidak terdaftar sebagai ' . $namaRole . '.'
                );
        }

        // =========================
        // LOGIN
        // =========================
        Auth::login($user);

        // Regenerate session
        $request->session()->regenerate();

        // Simpan role
        $request->session()->put('role', $role);

        // =========================
        // REDIRECT DASHBOARD
        // =========================
        return redirect()
            ->route('dashboard');
    }
}