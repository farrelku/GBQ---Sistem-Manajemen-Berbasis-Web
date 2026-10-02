<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Register</title>
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

            <!-- Avatar tambah user -->
            <circle cx="250" cy="175" r="38" fill="#e0e7ff"/>
            <circle cx="250" cy="165" r="15" fill="#6366f1"/>
            <path d="M222 197 Q250 180 278 197 L278 203 Q250 192 222 203 Z" fill="#6366f1"/>
            <!-- Plus badge -->
            <circle cx="285" cy="150" r="16" fill="#22c55e"/>
            <path d="M285 143 L285 157 M278 150 L292 150" stroke="#ffffff" stroke-width="3.5" stroke-linecap="round"/>

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

          <h2 class="text-white text-2xl font-bold mt-6 relative z-10 text-center">Bergabung Sekarang</h2>
          <p class="text-white/80 text-sm mt-2 relative z-10 text-center max-w-xs">
            Daftarkan diri Anda dan nikmati kemudahan mengelola data akademik dalam satu platform.
          </p>
        </div>

        <!-- ================= FORM (KANAN) ================= -->
        <div class="p-8 md:p-10">

          <!-- Header -->
          <div class="text-center mb-8">
            <div class="w-16 h-16 bg-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
              </svg>
            </div>
            <h1 class="text-2xl font-bold text-gray-800">Buat Akun Baru</h1>
            <p class="text-gray-500 text-sm mt-1">Silakan isi data di bawah ini</p>
          </div>

          <!-- Form -->
          <form action="{{ route('prosesregister') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Pilih Role -->
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Daftar Sebagai</label>
              <div class="grid grid-cols-3 gap-2">
                <label class="cursor-pointer">
                  <input type="radio" name="role" value="admin" class="peer sr-only" onchange="updateForm()" checked>
                  <div class="text-center py-2.5 px-3 border-2 border-gray-300 rounded-lg text-sm font-medium text-gray-600 peer-checked:border-indigo-600 peer-checked:bg-indigo-50 peer-checked:text-indigo-700 hover:border-gray-400 transition">
                    Admin
                  </div>
                </label>
                <label class="cursor-pointer">
                  <input type="radio" name="role" value="guru" class="peer sr-only" onchange="updateForm()">
                  <div class="text-center py-2.5 px-3 border-2 border-gray-300 rounded-lg text-sm font-medium text-gray-600 peer-checked:border-indigo-600 peer-checked:bg-indigo-50 peer-checked:text-indigo-700 hover:border-gray-400 transition">
                    Guru
                  </div>
                </label>
                <label class="cursor-pointer">
                  <input type="radio" name="role" value="siswa" class="peer sr-only" onchange="updateForm()">
                  <div class="text-center py-2.5 px-3 border-2 border-gray-300 rounded-lg text-sm font-medium text-gray-600 peer-checked:border-indigo-600 peer-checked:bg-indigo-50 peer-checked:text-indigo-700 hover:border-gray-400 transition">
                    Siswa
                  </div>
                </label>
              </div>
            </div>

            <hr class="border-gray-200">

            <!-- Field: Nama (untuk Guru & Siswa) -->
            <div id="field-nama" class="hidden">
              <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
              <input
                type="text"
                id="nama"
                name="nama"
                placeholder="Masukkan nama lengkap"
                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
              >
            </div>

            <!-- Field: Email (selalu tampil) -->
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
              <input
                type="email"
                id="email"
                name="email"
                placeholder="nama@email.com"
                required
                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
              >
            </div>

            <!-- Field: Password (selalu tampil) -->
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

            <!-- Field: Mata Pelajaran (untuk Guru) -->
            <div id="field-mapel" class="hidden">
              <label for="mata_pelajaran" class="block text-sm font-medium text-gray-700 mb-1">Mata Pelajaran</label>
              <input
                type="text"
                id="mata_pelajaran"
                name="mata_pelajaran"
                placeholder="Contoh: Matematika"
                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
              >
            </div>

            <!-- Field: No Telepon (untuk Guru) -->
            <div id="field-telepon" class="hidden">
              <label for="no_telepon" class="block text-sm font-medium text-gray-700 mb-1">No. Telepon</label>
              <input
                type="tel"
                id="no_telepon"
                name="no_telepon"
                placeholder="08123456789"
                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
              >
            </div>

            <!-- Field: NIM (untuk Siswa) -->
            <div id="field-nim" class="hidden">
              <label for="nim" class="block text-sm font-medium text-gray-700 mb-1">NIM</label>
              <input
                type="text"
                id="nim"
                name="nim"
                placeholder="Contoh: 2024001234"
                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
              >
            </div>

                          <!-- Field: No HP (untuk Siswa) -->
<div id="field-no_hp" class="hidden">
  <label for="no_hp" class="block text-sm font-medium text-gray-700 mb-1">
    No. Handphone
  </label>

  <input
    type="tel"
    id="no_hp"
    name="no_hp"
    placeholder="08123456789"
    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
  >
</div>

            <!-- Field: Alamat (untuk Siswa) -->
            <div id="field-alamat" class="hidden">
              <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
              <textarea
                id="alamat"
                name="alamat"
                rows="3"
                placeholder="Masukkan alamat lengkap"
                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition resize-none"
              ></textarea>
            </div>



            <!-- Submit -->
            <button
              type="submit"
              class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2.5 rounded-lg transition duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5"
            >
              Daftar
            </button>

          </form>

          <!-- Footer -->
          <p class="text-center text-sm text-gray-500 mt-6">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-800 font-medium">
              Login di sini
            </a>
          </p>

        </div>
      </div>
    </div>

    <p class="text-center text-gray-400 text-xs mt-6">
      &copy; 2024 Sistem Informasi Sekolah. All rights reserved.
    </p>
  </div>

  <!-- Script untuk dynamic form -->
  <script>
function updateForm() {
    const role = document.querySelector('input[name="role"]:checked').value;

    // Ambil semua field wrapper
    const fieldNama = document.getElementById('field-nama');
    const fieldMapel = document.getElementById('field-mapel');
    const fieldTelepon = document.getElementById('field-telepon');
    const fieldNim = document.getElementById('field-nim');
     const fieldNoHp = document.getElementById('field-no_hp');
    const fieldAlamat = document.getElementById('field-alamat');
   

    // Sembunyikan semua field
    [
        fieldNama,
        fieldMapel,
        fieldTelepon,
        fieldNim,
        fieldAlamat,
        fieldNoHp
    ].forEach(el => {
        el.classList.add('hidden');
    });

    // Reset required
    [
        'nama',
        'mata_pelajaran',
        'no_telepon',
        'nim',
        'alamat',
        'no_hp'
    ].forEach(id => {
        document.getElementById(id).removeAttribute('required');
    });

    // ADMIN
    if (role === 'admin') {
        // Admin hanya email dan password
    }

    // GURU
    else if (role === 'guru') {
        fieldNama.classList.remove('hidden');
        fieldMapel.classList.remove('hidden');
        fieldTelepon.classList.remove('hidden');

        document.getElementById('nama').setAttribute('required', '');
        document.getElementById('mata_pelajaran').setAttribute('required', '');
        document.getElementById('no_telepon').setAttribute('required', '');
    }

    // SISWA
    else if (role === 'siswa') {
        fieldNama.classList.remove('hidden');
        fieldNim.classList.remove('hidden');
        fieldAlamat.classList.remove('hidden');
        fieldNoHp.classList.remove('hidden');

        document.getElementById('nama').setAttribute('required', '');
        document.getElementById('nim').setAttribute('required', '');
        document.getElementById('no_hp').setAttribute('required', '');
        document.getElementById('alamat').setAttribute('required', '');
        
    }
}

document.addEventListener('DOMContentLoaded', updateForm);
</script>
</body>
</html>