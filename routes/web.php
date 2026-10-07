
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\MahasiswaController;



// Halaman awal
Route::get('/', function () {
    return redirect()->route('login');
});

// Login dan Register
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'proseslogin'])
        ->name('proseslogin');

    Route::get('/register', [AuthController::class, 'register'])
        ->name('register');

    Route::post('/register', [AuthController::class, 'prosesregister'])
        ->name('prosesregister');

    // Halaman lupa password
    Route::view('/forgot-password', 'auth.forgot-password')
        ->name('password.request');

    // Halaman reset password
    Route::get('/reset-password/{token}', function ($token) {
        return view('auth.reset-password', [
            'token' => $token,
            'email' => request('email'),
        ]);
    })->name('password.reset');
});

// Dashboard berdasarkan role
Route::get('/dashboard', function (Request $request) {
    $role = $request->session()->get('role');

    if ($role === 'admin') {
        return redirect()->route('admin.dashboard');
    }

    if (in_array($role, ['guru', 'siswa'], true)) {
        return view('dashboard');
    }

    abort(403, 'Role tidak dikenali.');
})->middleware('auth')->name('dashboard');

// Dashboard Admin
Route::get('/admin/dashboard', function () {
    if (session('role') !== 'admin') {
        abort(403, 'Akses khusus Admin.');
    }

    return view('admin.dashboard');
})->middleware('auth')->name('admin.dashboard');

// Logout
Route::post('/logout', function () {
    Auth::logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()->route('login');
})->middleware('auth')->name('logout');

// Proses Forgot Password
Route::post('/forgot-password', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
    ]);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    if ($status === Password::RESET_LINK_SENT) {
        return back()->with('status', __($status));
    }

    return back()->withErrors([
        'email' => __($status),
    ]);
})->middleware('guest')->name('password.email');


Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ], [
        'password.required' => 'Password baru wajib diisi.',
        'password.min' => 'Password minimal 8 karakter.',
        'password.confirmed' => 'Konfirmasi password tidak cocok.',
    ]);

    $status = Password::reset(
        $request->only(
            'email',
            'password',
            'password_confirmation',
            'token'
        ),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password),
            ])->save();
        }
    );

    if ($status === Password::PASSWORD_RESET) {
        return redirect()
            ->route('login')
            ->with('success', 'Password berhasil diubah. Silakan login.');
    }

    return back()
        ->withInput($request->only('email'))
        ->withErrors([
            'email' => __($status),
        ]);
})->middleware('guest')->name('password.update');


use App\Models\Mahasiswa;

Route::get('/mahasiswa/admin', [MahasiswaController::class, 'index'])
    ->middleware('auth')
    ->name('admin.mahasiswa');

Route::get('/{id}/edit',[MahasiswaController::class, 'edit'])->name('admin.mahasiswa.edit');
Route::put('/{id}/update',[MahasiswaController::class, 'update'])->name('admin.mahasiswa.update');