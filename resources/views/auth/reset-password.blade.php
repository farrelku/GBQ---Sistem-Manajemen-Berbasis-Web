<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-white flex items-center justify-center p-4">

  <div class="w-full max-w-5xl">
    <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden">
      <div class="grid md:grid-cols-2">

        <!-- ================= ILUSTRASI (KIRI) ================= -->
        <div class="hidden md:flex flex-col justify-center items-center bg-gradient-to-br from-indigo-600 via-blue-600 to-purple-600 p-10 relative overflow-hidden">
          <!-- Ornamen lingkaran -->
          <div class="absolute -top-16 -left-16 w-48 h-48 bg-white/10 rounded-full"></div>
          <div class="absolute -bottom-20 -right-20 w-64 h-64 bg-white/10 rounded-full"></div>
          <div class="absolute top-1/3 right-6 w-20 h-20 bg-white/10 rounded-full"></div>

          <!-- Ilustrasi SVG -->
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 400" class="w-full max-w-sm relative z-10 drop-shadow-xl">
            <!-- Background card -->
            <rect x="60" y="40" width="380" height="320" rx="24" fill="#ffffff" opacity="0.15"/>
            <rect x="90" y="70" width="320" height="260" rx="20" fill="#ffffff" opacity="0.9"/>

            <!-- Header bar -->
            <rect x="90" y="70" width="320" height="60" rx="20" fill="#4f46e5"/>
            <rect x="90" y="110" width="320" height="20" fill="#4f46e5"/>

            <!-- Gembok terbuka (unlocked) -->
            <g transform="translate(250, 175)">
              <circle r="42" fill="#e0e7ff"/>
              <!-- Body gembok -->
              <rect x="-22" y="-2" width="44" height="34" rx="6" fill="#22c55e"/>
              <!-- Shackle terbuka (miring ke kanan) -->
              <path d="M-12 -2 V-14 A12 12 0 0 1 12 -14 V-8" stroke="#22c55e" stroke-width="6" fill="none" stroke-linecap="round"/>
              <!-- Keyhole -->
              <circle cx="0" cy="12" r="5" fill="#ffffff"/>
              <rect x="-2" y="14" width="4" height="8" rx="2" fill="#ffffff"/>
            </g>

            <!-- Kunci kuning -->
            <g transform="translate(360, 130)">
              <circle r="20" fill="#facc15" opacity="0.95"/>
              <g transform="rotate(45)">
                <circle cx="-4" cy="0" r="4" fill="none" stroke="#ffffff" stroke-width="2.5"/>
                <line x1="0" y1="0" x2="10" y2="0" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round"/>
                <line x1="6" y1="0" x2="6" y2="4" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round"/>
                <line x1="9" y1="0" x2="9" y2="4" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round"/>
              </g>
            </g>

            <!-- Form lines -->
            <rect x="130" y="235" width="240" height="14" rx="7" fill="#e5e7eb"/>
            <rect x="130" y="260" width="240" height="14" rx="7" fill="#e5e7eb"/>
            <rect x="130" y="290" width="160" height="26" rx="13" fill="#22c55e"/>

            <!-- Floating icons -->
            <g transform="translate(60, 300)">
              <circle r="26" fill="#22c55e" opacity="0.9"/>
              <path d="M-8 0 L-2 6 L10 -8" stroke="#ffffff" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
            <g transform="translate(430, 320)">
              <circle r="18" fill="#3b82f6" opacity="0.9"/>
              <!-- Ikon shield -->
              <path d="M0 -8 L6 -5 V0 Q6 5 0 8 Q-6 5 -6 0 V-5 Z" fill="none" stroke="#ffffff" stroke-width="2" stroke-linejoin="round"/>
            </g>
          </svg>

          <h2 class="text-white text-2xl font-bold mt-6 relative z-10 text-center">Password Baru</h2>
          <p class="text-white/80 text-sm mt-2 relative z-10 text-center max-w-xs">
            Buat password baru yang kuat dan mudah Anda ingat untuk mengamankan akun Anda.
          </p>
        </div>

        <!-- ================= FORM (KANAN) ================= -->
        <div class="p-8 md:p-10">

          <!-- Header -->
          <div class="text-center mb-8">
            <div class="w-16 h-16 bg-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
              </svg>
            </div>
            <h1 class="text-2xl font-bold text-gray-800">Buat Password Baru</h1>
            <p class="text-gray-500 text-sm mt-1">Masukkan password baru Anda</p>
          </div>

          <!-- ================= ALERT BERHASIL ================= -->
          @if (session('status'))
            <div id="alert-success" class="mb-5 flex items-start gap-3 p-4 bg-green-50 border border-green-200 text-green-800 rounded-xl shadow-sm animate-[fadeIn_0.3s_ease-out]">
              <div class="flex-shrink-0 w-9 h-9 rounded-full bg-green-100 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <div class="flex-1 pt-1">
                <p class="font-semibold text-sm">Berhasil!</p>
                <p class="text-sm text-green-700 mt-0.5">{{ session('status') }}</p>
              </div>
              <button type="button" onclick="document.getElementById('alert-success').remove()" class="flex-shrink-0 text-green-500 hover:text-green-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          @endif

          <!-- ================= ALERT GAGAL (session error) ================= -->
          @if (session('error'))
            <div id="alert-error" class="mb-5 flex items-start gap-3 p-4 bg-red-50 border border-red-200 text-red-800 rounded-xl shadow-sm animate-[fadeIn_0.3s_ease-out]">
              <div class="flex-shrink-0 w-9 h-9 rounded-full bg-red-100 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </div>
              <div class="flex-1 pt-1">
                <p class="font-semibold text-sm">Gagal!</p>
                <p class="text-sm text-red-700 mt-0.5">{{ session('error') }}</p>
              </div>
              <button type="button" onclick="document.getElementById('alert-error').remove()" class="flex-shrink-0 text-red-500 hover:text-red-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          @endif

          <!-- ================= ALERT GAGAL (validasi) ================= -->
          @if ($errors->any())
            <div id="alert-errors" class="mb-5 flex items-start gap-3 p-4 bg-red-50 border border-red-200 text-red-800 rounded-xl shadow-sm animate-[fadeIn_0.3s_ease-out]">
              <div class="flex-shrink-0 w-9 h-9 rounded-full bg-red-100 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01M4.93 4.93a10 10 0 1114.14 14.14A10 10 0 014.93 4.93z" />
                </svg>
              </div>
              <div class="flex-1 pt-1">
                <p class="font-semibold text-sm">Terdapat kesalahan:</p>
                <ul class="mt-1 space-y-0.5 text-sm text-red-700">
                  @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              <button type="button" onclick="document.getElementById('alert-errors').remove()" class="flex-shrink-0 text-red-500 hover:text-red-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          @endif

          <!-- Form -->
          <form action="{{ route('password.update') }}" method="POST" class="space-y-5">
            @csrf

      

       <!-- Hidden token dari URL reset link -->
<input type="hidden" name="token" value="{{ $token ?? '' }}">

<!-- TAMBAHKAN INI: Hidden email dari request/URL -->
<input type="hidden" name="email" value="{{ request()->email }}">

            <!-- Password Baru -->
            <div>
              <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password Baru</label>
              <div class="relative">
                <input
                  type="password"
                  id="password"
                  name="password"
                  placeholder="••••••••"
                  required
                  class="w-full px-4 py-2.5 pr-11 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition @error('password') border-red-400 focus:ring-red-500 @enderror"
                >
                <button type="button" onclick="togglePassword('password', this)" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-indigo-600 transition">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 eye-open" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 eye-closed hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                  </svg>
                </button>
              </div>
              @error('password')
                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
              @enderror
            </div>

            <!-- Konfirmasi Password -->
            <div>
              <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password</label>
              <div class="relative">
                <input
                  type="password"
                  id="password_confirmation"
                  name="password_confirmation"
                  placeholder="••••••••"
                  required
                  class="w-full px-4 py-2.5 pr-11 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                >
                <button type="button" onclick="togglePassword('password_confirmation', this)" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-indigo-600 transition">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 eye-open" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 eye-closed hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                  </svg>
                </button>
              </div>
            </div>

            <!-- Password strength indicator -->
            <div class="space-y-1.5">
              <div class="flex gap-1">
                <div class="h-1.5 flex-1 rounded-full bg-gray-200" id="strength-1"></div>
                <div class="h-1.5 flex-1 rounded-full bg-gray-200" id="strength-2"></div>
                <div class="h-1.5 flex-1 rounded-full bg-gray-200" id="strength-3"></div>
                <div class="h-1.5 flex-1 rounded-full bg-gray-200" id="strength-4"></div>
              </div>
              <p class="text-xs text-gray-500" id="strength-text">Masukkan password Anda</p>
            </div>

            <!-- Info box -->
            <div class="flex items-start gap-3 p-3 bg-indigo-50 border border-indigo-100 rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
              </svg>
              <p class="text-xs text-indigo-700">
                Gunakan minimal 8 karakter dengan kombinasi huruf besar, huruf kecil, angka, dan simbol agar password lebih aman.
              </p>
            </div>

            <!-- Submit -->
            <button
              type="submit"
              class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2.5 rounded-lg transition duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5"
            >
              Simpan Password Baru
            </button>

          </form>

          <!-- Footer -->
          <p class="text-center text-sm text-gray-500 mt-6">
            Ingat password Anda?
            <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-800 font-medium">
              Kembali ke Login
            </a>
          </p>

        </div>
      </div>
    </div>

    <p class="text-center text-gray-400 text-xs mt-6">
      &copy; 2024 Sistem Informasi Sekolah. All rights reserved.
    </p>
  </div>

  <!-- Style animasi fadeIn -->
  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-8px); }
      to   { opacity: 1; transform: translateY(0); }
    }
  </style>

  <!-- Script -->
  <script>
    // Toggle show/hide password
    function togglePassword(inputId, btn) {
      const input = document.getElementById(inputId);
      const eyeOpen = btn.querySelector('.eye-open');
      const eyeClosed = btn.querySelector('.eye-closed');

      if (input.type === 'password') {
        input.type = 'text';
        eyeOpen.classList.add('hidden');
        eyeClosed.classList.remove('hidden');
      } else {
        input.type = 'password';
        eyeOpen.classList.remove('hidden');
        eyeClosed.classList.add('hidden');
      }
    }

    // Password strength indicator
    const passwordInput = document.getElementById('password');
    const strengthBars = [
      document.getElementById('strength-1'),
      document.getElementById('strength-2'),
      document.getElementById('strength-3'),
      document.getElementById('strength-4')
    ];
    const strengthText = document.getElementById('strength-text');

    passwordInput.addEventListener('input', function () {
      const val = this.value;
      let score = 0;

      if (val.length >= 8) score++;
      if (/[A-Z]/.test(val) && /[a-z]/.test(val)) score++;
      if (/[0-9]/.test(val)) score++;
      if (/[^A-Za-z0-9]/.test(val)) score++;

      // Reset
      strengthBars.forEach(bar => {
        bar.className = 'h-1.5 flex-1 rounded-full bg-gray-200';
      });

      const colors = ['bg-red-500', 'bg-orange-500', 'bg-yellow-500', 'bg-green-500'];
      const labels = ['Password lemah', 'Password cukup', 'Password kuat', 'Password sangat kuat'];
      const textColors = ['text-red-600', 'text-orange-600', 'text-yellow-600', 'text-green-600'];

      if (val.length === 0) {
        strengthText.textContent = 'Masukkan password Anda';
        strengthText.className = 'text-xs text-gray-500';
        return;
      }

      const level = Math.max(score, 1);
      for (let i = 0; i < level; i++) {
        strengthBars[i].classList.remove('bg-gray-200');
        strengthBars[i].classList.add(colors[level - 1]);
      }

      strengthText.textContent = labels[level - 1];
      strengthText.className = 'text-xs ' + textColors[level - 1];
    });

    // Auto-hide alert sukses setelah 5 detik
    document.addEventListener('DOMContentLoaded', function () {
      const successAlert = document.getElementById('alert-success');
      if (successAlert) {
        setTimeout(() => {
          successAlert.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
          successAlert.style.opacity = '0';
          successAlert.style.transform = 'translateY(-8px)';
          setTimeout(() => successAlert.remove(), 400);
        }, 5000);
      }
    });
  </script>

</body>
</html>