<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
                    <span class="text-white font-bold text-lg tracking-wide">EduAdmin</span>
                </div>

                <nav class="flex flex-col gap-1 px-3 text-slate-300 text-sm font-medium">
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-blue-500 text-white shadow-lg shadow-blue-500/30">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                        Dashboard
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-700 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
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

            <svg class="w-5 h-5" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
            </svg>

            Logout
        </button>
    </form>
</div>
        </aside>

        <!-- ================= MAIN CONTENT ================= -->
        <main class="flex-1 overflow-y-auto">
            
            <!-- Top Bar -->
            <header class="bg-white border-b border-slate-200 px-8 py-4 flex justify-between items-center sticky top-0 z-10">
                <div>
                    <h1 class="text-xl font-bold text-slate-800">Welcome, Admin 👋</h1>
                    <p class="text-sm text-slate-500">Berikut adalah ringkasan data hari ini</p>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center text-white font-semibold">
                        A
                    </div>
                </div>
            </header>

            <!-- Content -->
            <div class="p-8 flex flex-col gap-6 max-w-6xl">

                <!-- ============================================= -->
                <!-- HERO - SIMPLE & CLEAN                         -->
                <!-- ============================================= -->
                <div class="relative w-full h-72 rounded-3xl overflow-hidden bg-gradient-to-br from-indigo-600 via-blue-600 to-cyan-500 shadow-xl flex items-center">
                    
                    <!-- Dekorasi Background -->
                    <div class="absolute inset-0 opacity-20">
                        <div class="absolute -top-20 -left-20 w-72 h-72 bg-white rounded-full blur-3xl"></div>
                        <div class="absolute -bottom-32 -right-10 w-96 h-96 bg-cyan-300 rounded-full blur-3xl"></div>
                    </div>
                    
                    <!-- Dot Pattern -->
                    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 20px 20px;"></div>

                    <!-- Konten -->
                    <div class="relative z-10 w-full grid grid-cols-1 md:grid-cols-2 gap-6 items-center px-10 md:px-14">
                        
                        <!-- Kiri: Kata-kata Simpel -->
                        <div class="text-white">
                            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight mb-2">
                               Selamat Datang di Dashboard Admin!
                            </h2>
                            <p class="text-blue-100 text-base md:text-lg">
                                Kelola data mahasiswa, guru, absensi, dan pembayaran dengan mudah dalam satu platform.
                            </p>
                        </div>

                        <!-- Kanan: Ilustrasi -->
                        <div class="flex justify-center md:justify-end items-center">
                            <svg class="w-full max-w-[260px] animate-float" viewBox="0 0 300 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Platform -->
                                <ellipse cx="150" cy="200" rx="110" ry="10" fill="rgba(255,255,255,0.15)"/>
                                
                                <!-- Laptop -->
                                <rect x="75" y="130" width="150" height="60" rx="5" fill="white"/>
                                <rect x="83" y="138" width="134" height="44" rx="3" fill="#1e293b"/>
                                <rect x="92" y="147" width="45" height="5" rx="2.5" fill="#3b82f6"/>
                                <rect x="92" y="157" width="70" height="3" rx="1.5" fill="#64748b"/>
                                <rect x="92" y="165" width="55" height="3" rx="1.5" fill="#64748b"/>
                                <rect x="92" y="173" width="60" height="3" rx="1.5" fill="#64748b"/>
                                <!-- Chart mini -->
                                <rect x="150" y="147" width="55" height="29" rx="3" fill="#3b82f6" opacity="0.3"/>
                                <path d="M155 170 L168 158 L180 164 L195 150" stroke="#22d3ee" stroke-width="2" fill="none"/>
                                <circle cx="168" cy="158" r="2" fill="#22d3ee"/>
                                <circle cx="195" cy="150" r="2" fill="#22d3ee"/>
                                <rect x="60" y="190" width="180" height="6" rx="3" fill="white"/>
                                
                                <!-- Badge Wisuda mengambang -->
                                <g class="animate-float-slow">
                                    <circle cx="60" cy="65" r="28" fill="white"/>
                                    <path d="M44 60 L60 52 L76 60 L60 68 Z" fill="#1e293b"/>
                                    <rect x="56" y="64" width="8" height="10" fill="#3b82f6"/>
                                    <circle cx="60" cy="78" r="2" fill="#fbbf24"/>
                                </g>
                                
                                <!-- Icon User mengambang -->
                                <g class="animate-float">
                                    <circle cx="245" cy="55" r="22" fill="white"/>
                                    <circle cx="245" cy="49" r="7" fill="#3b82f6"/>
                                    <path d="M233 70 C233 62 238 58 245 58 C252 58 257 62 257 70" fill="#3b82f6"/>
                                </g>
                                
                                <!-- Chart bar mengambang -->
                                <g class="animate-float-slow">
                                    <rect x="215" y="110" width="65" height="50" rx="6" fill="white"/>
                                    <rect x="224" y="138" width="8" height="14" rx="2" fill="#3b82f6"/>
                                    <rect x="237" y="128" width="8" height="24" rx="2" fill="#60a5fa"/>
                                    <rect x="250" y="120" width="8" height="32" rx="2" fill="#22d3ee"/>
                                    <rect x="263" y="132" width="8" height="20" rx="2" fill="#06b6d4"/>
                                </g>
                                
                                <!-- Sparkles -->
                                <circle cx="120" cy="45" r="2.5" fill="white" opacity="0.8"/>
                                <circle cx="180" cy="30" r="2" fill="white" opacity="0.6"/>
                                <circle cx="30" cy="140" r="2" fill="white" opacity="0.7"/>
                                <circle cx="280" cy="95" r="2" fill="white" opacity="0.6"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 mb-1">Jumlah Mahasiswa</p>
                                <h3 class="text-3xl font-bold text-slate-800">1,245</h3>
                                <p class="text-xs text-green-600 font-medium mt-2 flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
                                    +12% dari bulan lalu
                                </p>
                            </div>
                            <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500 mb-1">Jumlah Guru</p>
                                <h3 class="text-3xl font-bold text-slate-800">87</h3>
                                <p class="text-xs text-green-600 font-medium mt-2 flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
                                    +3% dari bulan lalu
                                </p>
                            </div>
                            <div class="w-14 h-14 bg-purple-50 rounded-xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </main>

    </div>

</body>
</html>