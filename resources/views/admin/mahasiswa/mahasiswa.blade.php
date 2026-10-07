<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        .animate-float { animation: float 3s ease-in-out infinite; }
        .animate-float-slow { animation: float 4s ease-in-out infinite; }
    </style>
</head>
<body class="bg-slate-100 h-screen overflow-hidden">

    <div class="flex h-full">

        <!-- ================= SIDEBAR ================= -->
        <aside class="w-64 bg-slate-800 flex flex-col justify-between py-8 shrink-0 shadow-xl">
            <div>
                <div class="px-6 mb-10 flex items-center gap-3">
                    <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <span class="text-white font-bold text-lg tracking-wide">Griya Bintang Quran</span>
                </div>

                <nav class="flex flex-col gap-1 px-3 text-slate-300 text-sm font-medium">
                    <a href="{{ route('admin.dashboard') }}"
                       class="flex items-center gap-3 px-4 py-3 rounded-lg
                       {{ request()->routeIs('admin.dashboard')
                            ? 'bg-blue-500 text-white shadow-lg shadow-blue-500/30'
                            : 'text-slate-300 hover:bg-slate-700 hover:text-white transition-colors' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        Dashboard
                    </a>

                    <a href="{{ route('admin.mahasiswa') }}"
                       class="flex items-center gap-3 px-4 py-3 rounded-lg
                       {{ request()->routeIs('admin.mahasiswa')
                            ? 'bg-blue-500 text-white shadow-lg shadow-blue-500/30'
                            : 'text-slate-300 hover:bg-slate-700 hover:text-white transition-colors' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        Mahasiswa
                    </a>

                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-700 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        Guru
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-700 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                        Absensi
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-700 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        Tagihan
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-700 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
                        Pembayaran
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-700 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        Laporan
                    </a>
                </nav>
            </div>

            <div class="px-3">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg
                               text-slate-300 text-sm font-medium
                               hover:bg-red-500 hover:text-white
                               transition-colors w-full text-left">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- ================= MAIN CONTENT ================= -->
        <main class="flex-1 overflow-y-auto p-8">

            <!-- Header + Search -->
            <div class="mb-6 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-slate-800">Data Mahasiswa</h1>
                    <p class="text-sm text-slate-500 mt-1">Daftar seluruh mahasiswa terdaftar</p>
                </div>

                <!-- Form Search -->
                <form action="{{ route('admin.mahasiswa') }}" method="GET"
                      class="flex items-center gap-2 w-full md:w-auto">
                    <div class="relative flex-1 md:w-72">
                        <!-- Icon search -->
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z"/>
                            </svg>
                        </div>

                        <input type="text"
                               name="search"
                               value="{{ request('search') }}"
                               placeholder="Cari nama, NIM, atau alamat..."
                               class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-slate-200
                                      bg-white text-sm text-slate-700 placeholder-slate-400
                                      focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent
                                      transition-all">

                        <!-- Tombol clear (muncul kalau ada isi) -->
                        @if(request('search'))
                            <a href="{{ route('admin.mahasiswa') }}"
                               class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </a>
                        @endif
                    </div>

                    <button type="submit"
                            class="px-4 py-2.5 rounded-lg bg-blue-500 text-white text-sm font-semibold
                                   hover:bg-blue-600 transition-colors shadow-sm shadow-blue-500/30">
                        Cari
                    </button>
                </form>
            </div>

            <!-- Info hasil pencarian -->
            @if(request('search'))
                <div class="mb-4 flex items-center gap-2 text-sm text-slate-600">
                    
                    
                </div>
            @endif

            <!-- Card Tabel -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                    <thead class="bg-[#3176e4] text-white">
                            <tr>
                                <th class="px-6 py-4 font-semibold">No</th>
                                <th class="px-6 py-4 font-semibold">Nama</th>
                                <th class="px-6 py-4 font-semibold">NIM</th>
                                <th class="px-6 py-4 font-semibold">Alamat</th>
                                <th class="px-6 py-4 font-semibold">No Telepon</th>
                                <th class="px-6 py-4 font-semibold text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse ($mahasiswa as $item)
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-6 py-4 text-slate-700">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-slate-800">{{ $item->nama }}</td>
                                    <td class="px-6 py-4 text-slate-700">{{ $item->nim }}</td>
                                    <td class="px-6 py-4 text-slate-700">{{ $item->alamat }}</td>
                                    <td class="px-6 py-4 text-slate-700">{{ $item->no_hp }}</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center justify-center gap-2">
                                            <a href="{{ route('admin.mahasiswa.edit', $item->idMahasiswa) }}"
                                               class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg
                                                      bg-amber-100 text-amber-700 text-xs font-semibold
                                                      hover:bg-amber-200 transition-colors">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <button type="button"
                                                    class="inline-flex items-center gap-1 px-3 py-1.5 rounded-lg
                                                           bg-red-100 text-red-700 text-xs font-semibold
                                                           hover:bg-red-200 transition-colors">
                                                <i class="fas fa-trash-alt"></i> Hapus
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-16 text-center">
                                        <div class="flex flex-col items-center gap-2 text-slate-400">
                                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                      d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z"/>
                                            </svg>
                                            <p class="font-medium">
                                                @if(request('search'))
                                                    Tidak ada data yang cocok dengan "{{ request('search') }}"
                                                @else
                                                    Belum ada data mahasiswa
                                                @endif
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="px-6 py-4 border-t border-slate-100">
                    {{ $mahasiswa->links('pagination::bootstrap-5') }}
                </div>
            </div>

        </main>

    </div>

</body>
</html>