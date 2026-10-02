<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Login</title>
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
            <circle cx="120" cy="100" r="8" fill="#ffffff" opacity="0.8"/>
            <circle cx="145" cy="100" r="8" fill="#ffffff" opacity="0.6"/>
            <circle cx="170" cy="100" r="8" fill="#ffffff" opacity="0.4"/>

            <!-- Avatar -->
            <circle cx="250" cy="180" r="35" fill="#e0e7ff"/>
            <circle cx="250" cy="170" r="14" fill="#6366f1"/>
            <path d="M225 200 Q250 185 275 200 L275 205 Q250 195 225 205 Z" fill="#6366f1"/>

            <!-- Form lines -->
            <rect x="130" y="235" width="240" height="14" rx="7" fill="#e5e7eb"/>
            <rect x="130" y="260" width="240" height="14" rx="7" fill="#e5e7eb"/>
            <rect x="130" y="290" width="120" height="26" rx="13" fill="#4f46e5"/>

            <!-- Floating icons -->
            <g transform="translate(60, 300)">
              <circle r="26" fill="#facc15" opacity="0.9"/>
              <path d="M-8 0 L-2 6 L10 -8" stroke="#ffffff" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
            <g transform="translate(440, 120)">
              <circle r="22" fill="#22c55e" opacity="0.9"/>
              <path d="M-8 0 L-2 6 L10 -8" stroke="#ffffff" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
            <g transform="translate(430, 320)">
              <circle r="18" fill="#f97316" opacity="0.9"/>
              <path d="M0 -8 L0 8 M-8 0 L8 0" stroke="#ffffff" stroke-width="4" stroke-linecap="round"/>
            </g>
          </svg>

          <h2 class="text-white text-2xl font-bold mt-6 relative z-10 text-center">Griya Bintang Quran</h2>
          <p class="text-white/80 text-sm mt-2 relative z-10 text-center max-w-xs">
            Kelola data akademik dengan mudah, cepat, dan aman dalam satu platform.
          </p>
        </div>

        <!-- ================= FORM (KANAN) ================= -->
        <div class="p-8 md:p-10">

          <!-- Header -->
          <div class="text-center mb-8">
            <div class="w-16 h-16 bg-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
            </div>
            <h1 class="text-2xl font-bold text-gray-800">Selamat Datang</h1>
            <p class="text-gray-500 text-sm mt-1">Silakan login ke akun Anda</p>
          </div>

          @if (session('error'))
            <div class="mb-5 p-4 bg-red-100 border border-red-300 text-red-700 rounded-lg">
              <p class="font-medium">
                {{ session('error') }}
              </p>
            </div>
          @endif

          @if ($errors->any())
            <div class="mb-5 p-4 bg-red-100 border border-red-300 text-red-700 rounded-lg">
              @foreach ($errors->all() as $error)
                <p>• {{ $error }}</p>
              @endforeach
            </div>
          @endif

          <!-- Form -->
          <form action="{{ route('proseslogin') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Email -->
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
              <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="email"
                required
                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
              >
            </div>

            <!-- Password -->
            <div>
              <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
              <input
                type="password"
                id="password"
                name="password"
                placeholder="••••••••"
                required
                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
              >
            </div>

            <!-- Role -->
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Login Sebagai</label>
              <div class="grid grid-cols-3 gap-2">

                <!-- Admin -->
                <label class="cursor-pointer">
                  <input type="radio" name="role" value="admin" class="peer sr-only" required>
                  <div class="text-center py-2.5 px-3 border-2 border-gray-300 rounded-lg text-sm font-medium text-gray-600 peer-checked:border-indigo-600 peer-checked:bg-indigo-50 peer-checked:text-indigo-700 hover:border-gray-400 transition">
                    Admin
                  </div>
                </label>

                <!-- Siswa -->
                <label class="cursor-pointer">
                  <input type="radio" name="role" value="siswa" class="peer sr-only">
                  <div class="text-center py-2.5 px-3 border-2 border-gray-300 rounded-lg text-sm font-medium text-gray-600 peer-checked:border-indigo-600 peer-checked:bg-indigo-50 peer-checked:text-indigo-700 hover:border-gray-400 transition">
                    Siswa
                  </div>
                </label>

                <!-- Guru -->
                <label class="cursor-pointer">
                  <input type="radio" name="role" value="guru" class="peer sr-only">
                  <div class="text-center py-2.5 px-3 border-2 border-gray-300 rounded-lg text-sm font-medium text-gray-600 peer-checked:border-indigo-600 peer-checked:bg-indigo-50 peer-checked:text-indigo-700 hover:border-gray-400 transition">
                    Guru
                  </div>
                </label>

              </div>
            </div>

            <!-- Remember & Forgot -->
            <div class="flex items-center justify-between text-sm">
              <label class="flex items-center text-gray-600 cursor-pointer">
                <input type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                <span class="ml-2">Ingat saya</span>
              </label>
              <a href="#" class="text-indigo-600 hover:text-indigo-800 font-medium">Lupa password?</a>
            </div>

            <!-- Submit -->
            <button
              type="submit"
              class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2.5 rounded-lg transition duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5"
            >
              Masuk
            </button>

          </form>

          <!-- Footer -->
          <p class="text-center text-sm text-gray-500 mt-6">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-800 font-medium">
              Register
            </a>
          </p>

        </div>
      </div>
    </div>

    <p class="text-center text-gray-400 text-xs mt-6">
      &copy; 2026 Griya Bintang Quran. All rights reserved.
    </p>
  </div>

</body>
</html>