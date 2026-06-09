<x-app-layout>
    <div class="max-w-6xl mx-auto px-6 py-10 transition-colors duration-300">
        
        <div class="relative overflow-hidden bg-white border border-slate-100 dark:bg-[#1E1E1E] dark:border-zinc-800 rounded-2xl p-6 md:p-8 shadow-sm mb-8 transition-colors duration-300">
            <div class="relative z-10 space-y-2 max-w-xl">
                
                <span class="inline-block text-xs font-semibold uppercase tracking-wider bg-slate-100 text-primaryBlue dark:bg-zinc-800 dark:text-blue-400 px-2.5 py-1 rounded-md transition-colors">
                    Admin Workspace
                </span>
                
                <h1 class="text-2xl md:text-3xl font-bold tracking-tight text-slate-900 dark:text-white transition-colors">
                    Selamat Datang, {{ Auth::user()->name }}!
                </h1>
                
                <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed transition-colors">
                    Kendalikan seluruh data proyek portfolio, tautan demo, dan pratinjau media multimedia broadcasting Anda dari pusat kendali ini.
                </p>
                
            </div>
        </div>

        <div class="space-y-4">
            <h2 class="text-xs font-bold uppercase tracking-wider text-slate-400 dark:text-zinc-500 transition-colors">
                Aksi Cepat Manajemen
            </h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <a href="{{ route('projects.index') }}"
                   class="group p-6 bg-white border border-slate-100 rounded-xl shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 dark:bg-[#1E1E1E] dark:border-zinc-800 flex flex-col justify-between min-h-[160px]">
                    <div class="space-y-3">
                        <div class="w-10 h-10 rounded-lg bg-blue-50 dark:bg-blue-950/40 text-primaryBlue dark:text-blue-400 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5M5 19v-4a2 2 0 012-2h11a2 2 0 012 2v3m-7-3h.01M9 16h.01"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 dark:text-white text-base transition-colors">Kelola Project</h3>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1 transition-colors">Lihat tabel list portfolio, perbarui data, atau hapus proyek lama.</p>
                        </div>
                    </div>
                    <span class="text-xs font-semibold text-primaryBlue dark:text-blue-400 flex items-center gap-1 mt-4 group-hover:translate-x-1 transition-transform">
                        Buka Manajemen &rarr;
                    </span>
                </a>

                <a href="{{ route('projects.create') }}"
                   class="group p-6 bg-white border border-slate-100 rounded-xl shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 dark:bg-[#1E1E1E] dark:border-zinc-800 flex flex-col justify-between min-h-[160px]">
                    <div class="space-y-3">
                        <div class="w-10 h-10 rounded-lg bg-green-50 dark:bg-green-950/40 text-green-600 dark:text-green-400 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 dark:text-white text-base transition-colors">Tambah Project</h3>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1 transition-colors">Unggah dokumen studi kasus UI/UX, video capcut, atau proyek baru.</p>
                        </div>
                    </div>
                    <span class="text-xs font-semibold text-green-600 dark:text-green-400 flex items-center gap-1 mt-4 group-hover:translate-x-1 transition-transform">
                        Buat Baru &rarr;
                    </span>
                </a>

                <a href="{{ url('/') }}"
                   class="group p-6 bg-white border border-slate-100 rounded-xl shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 dark:bg-[#1E1E1E] dark:border-zinc-800 flex flex-col justify-between min-h-[160px] sm:col-span-2 lg:col-span-1">
                    <div class="space-y-3">
                        <div class="w-10 h-10 rounded-lg bg-slate-100 dark:bg-zinc-800 text-slate-600 dark:text-zinc-300 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9h18"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 dark:text-white text-base transition-colors">Lihat Portfolio</h3>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1 transition-colors">Keluar dari mode admin dan tinjau langsung visual tampilan utama situs.</p>
                        </div>
                    </div>
                    <span class="text-xs font-semibold text-slate-600 dark:text-slate-400 flex items-center gap-1 mt-4 group-hover:translate-x-1 transition-transform">
                        Kunjungi Landing Page &rarr;
                    </span>
                </a>

            </div>
        </div>

    </div>
</x-app-layout>