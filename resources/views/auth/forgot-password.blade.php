<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lupa Password</title>
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

            <!-- Gembok / Lock icon besar -->
            <g transform="translate(250, 175)">
              <circle r="42" fill="#e0e7ff"/>
              <!-- Body gembok -->
              <rect x="-22" y="-4" width="44" height="34" rx="6" fill="#6366f1"/>
              <!-- Shackle -->
              <path d="M-12 -4 V-14 A12 12 0 0 1 12 -14 V-4" stroke="#6366f1" stroke-width="6" fill="none" stroke-linecap="round"/>
              <!-- Keyhole -->
              <circle cx="0" cy="10" r="5" fill="#ffffff"/>
              <rect x="-2" y="12" width="4" height="8" rx="2" fill="#ffffff"/>
            </g>

            <!-- Kunci kecil mengambang -->
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
            <rect x="130" y="290" width="140" height="26" rx="13" fill="#4f46e5"/>

            <!-- Floating icons -->
            <g transform="translate(60, 300)">
              <circle r="26" fill="#22c55e" opacity="0.9"/>
              <path d="M-8 0 L-2 6 L10 -8" stroke="#ffffff" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
            <g transform="translate(430, 320)">
              <circle r="18" fill="#f97316" opacity="0.9"/>
              <path d="M-6 -6 L6 6 M6 -6 L-6 6" stroke="#ffffff" stroke-width="3.5" stroke-linecap="round"/>
            </g>
          </svg>

          <h2 class="text-white text-2xl font-bold mt-6 relative z-10 text-center">Lupa Password?</h2>
          <p class="text-white/80 text-sm mt-2 relative z-10 text-center max-w-xs">
            Jangan khawatir! Masukkan email Anda dan kami akan mengirimkan link untuk mengatur ulang password.
          </p>
        </div>

        <!-- ================= FORM (KANAN) ================= -->
        <div class="p-8 md:p-10">

          <!-- Header -->
          <div class="text-center mb-8">
            <div class="w-16 h-16 bg-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
              </svg>
            </div>
            <h1 class="text-2xl font-bold text-gray-800">Reset Password</h1>
            <p class="text-gray-500 text-sm mt-1">Masukkan email terdaftar Anda</p>
          </div>

          @if (session('status'))
            <div class="mb-5 p-4 bg-green-100 border border-green-300 text-green-700 rounded-lg">
              <p class="font-medium">
                {{ session('status') }}
              </p>
            </div>
          @endif

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
          <form action="{{ route('password.email') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Email -->
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
              <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder=""
                required
                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
              >
            </div>

            <!-- Info box -->
            <div class="flex items-start gap-3 p-3 bg-indigo-50 border border-indigo-100 rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <p class="text-xs text-indigo-700">
                Kami akan mengirimkan link reset password ke email Anda. Pastikan email yang dimasukkan sudah benar.
              </p>
            </div>

            <!-- Submit -->
            <button
              type="submit"
              class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2.5 rounded-lg transition duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5"
            >
              Kirim Link Reset
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

</body>
</html>