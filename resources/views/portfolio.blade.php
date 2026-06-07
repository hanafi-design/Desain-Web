<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hanafi Rizki Fikrillah | Portfolio Multimedia Broadcasting</title>
    <meta name="description" content="Portfolio profesional Hanafi Rizki Fikrillah - Mahasiswa Multimedia Broadcasting fokus pada UI/UX, Web Development, dan Video Production.">
    
    <!-- Google Font: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

    <!-- Tambahkan link CDN CSS Framework pilihanmu di sini (Misal: Tailwind / Bootstrap 5) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Konfigurasi Tailwind untuk warna custom portfolio kamu
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primaryBlue: '#033E8C',
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white text-slate-800 dark:bg-[#121212] dark:text-slate-100 font-sans transition-colors duration-300">

    <!-- NAVBAR -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur dark:bg-[#121212]/90 border-b border-slate-100 dark:border-zinc-800">
        <nav class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-primaryBlue dark:text-blue-400 tracking-tight">Hanafi.R</a>
            <div class="flex items-center gap-6 font-medium text-sm">
                <a href="#hero" class="hover:text-primaryBlue dark:hover:text-blue-400">Home</a>
                <a href="#about" class="hover:text-primaryBlue dark:hover:text-blue-400">About</a>
                <a href="#projects" class="hover:text-primaryBlue dark:hover:text-blue-400">Projects</a>
                <button onclick="document.documentElement.classList.toggle('dark')" class="p-2 bg-slate-100 dark:bg-zinc-800 rounded-full" aria-label="Toggle Dark Mode">🌙</button>
            </div>
        </nav>
    </header>

    <main class="max-w-6xl mx-auto px-6">
        <!-- 1. HERO SECTION -->
        <section id="hero" class="py-20 flex flex-col md:flex-row items-center justify-between gap-12">
            <div class="flex-1 space-y-6">
                <span class="text-sm font-semibold uppercase tracking-wider text-primaryBlue dark:text-blue-400">Selamat Datang di Portofolio Saya</span>
                <h1 class="text-4xl md:text-5xl font-bold tracking-tight">Hanafi Rizki Fikrillah</h1>
                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">Multimedia Broadcasting Student & Front-End Enthusiast</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#" class="px-6 py-3 bg-primaryBlue text-white font-medium text-sm rounded-lg shadow-md hover:bg-blue-800 transition-all">Download CV</a>
                    <a href="#contact" class="px-6 py-3 border-2 border-primaryBlue text-primaryBlue dark:border-blue-400 dark:text-blue-400 font-medium text-sm rounded-lg hover:bg-primaryBlue hover:text-white dark:hover:bg-blue-400 dark:hover:text-zinc-900 transition-all">Hubungi Saya</a>
                </div>
            </div>
            <div class="flex-1 flex justify-center">
                <div class="w-64 h-64 md:w-80 md:h-80 rounded-2xl overflow-hidden shadow-xl border-4 border-white dark:border-zinc-800 bg-slate-200">
                    <!-- Ganti src dengan foto profilmu nanti -->
                    <img src="https://via.placeholder.com/400" alt="Foto Hanafi Rizki Fikrillah" class="w-full h-full object-cover">
                </div>
            </div>
        </section>

        <hr class="border-slate-100 dark:border-zinc-800">

        <!-- 2 & 3. TENTANG SAYA & SKILLS -->
        <section id="about" class="py-20 grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold tracking-tight">Tentang Saya</h2>
                <p class="leading-relaxed text-slate-600 dark:text-slate-400">Saya adalah mahasiswa Multimedia Broadcasting yang berfokus pada perancangan pengalaman digital (UI/UX) dan pengembangan front-end yang responsif.</p>
                <div class="space-y-2">
                    <h3 class="font-semibold text-lg text-primaryBlue dark:text-blue-400">Pendidikan</h3>
                    <p class="text-sm"><strong>Multimedia Broadcasting</strong> — Class MMB A</p>
                </div>
                <div class="space-y-2">
                    <h3 class="font-semibold text-lg text-primaryBlue dark:text-blue-400">Pengalaman</h3>
                    <ul class="list-disc list-inside text-sm space-y-1 text-slate-600 dark:text-slate-400">
                        <li>Presenter Laboratory Podcast — Expo Prodi</li>
                        <li>Front of House (FOH) — DTMK Expo</li>
                    </ul>
                </div>
            </div>
            <div class="space-y-6">
                <h2 class="text-3xl font-bold tracking-tight">Keahlian</h2>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1.5 bg-slate-100 dark:bg-zinc-800 rounded-lg text-xs font-medium">UI/UX Design</span>
                    <span class="px-3 py-1.5 bg-slate-100 dark:bg-zinc-800 rounded-lg text-xs font-medium">Bootstrap 5</span>
                    <span class="px-3 py-1.5 bg-slate-100 dark:bg-zinc-800 rounded-lg text-xs font-medium">Laravel Blade</span>
                    <span class="px-3 py-1.5 bg-slate-100 dark:bg-zinc-800 rounded-lg text-xs font-medium">Video Production</span>
                    <span class="px-3 py-1.5 bg-slate-100 dark:bg-zinc-800 rounded-lg text-xs font-medium">CapCut & Premiere</span>
                    <span class="px-3 py-1.5 bg-slate-100 dark:bg-zinc-800 rounded-lg text-xs font-medium">Public Speaking</span>
                </div>
            </div>
        </section>

        <hr class="border-slate-100 dark:border-zinc-800">

        <!-- 4. PORTFOLIO / PROJECT -->
        <section id="projects" class="py-20 space-y-10">
            <div class="flex justify-between items-end">
                <h2 class="text-3xl font-bold tracking-tight">Proyek Pilihan</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card Project -->
                <article class="overflow-hidden bg-white border border-slate-100 rounded-xl shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-md dark:bg-[#1E1E1E] dark:border-zinc-800">
                    <div class="aspect-video bg-slate-100 dark:bg-zinc-700 overflow-hidden">
                        <img src="https://via.placeholder.com/600x400" alt="Preview Proyek" class="object-cover w-full h-full">
                    </div>
                    <div class="p-6 space-y-3">
                        <span class="text-xs font-semibold uppercase tracking-wider text-primaryBlue dark:text-blue-400">UI/UX • Design Thinking</span>
                        <h3 class="text-xl font-bold">Microsite "Lewat Kopi"</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Sistem reservasi dan portofolio untuk bisnis mobile coffee menggunakan metodologi Design Thinking.</p>
                        <a href="#" class="inline-flex items-center text-sm font-semibold text-primaryBlue hover:underline dark:text-blue-400">Detail Proyek →</a>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="border-t border-slate-100 dark:border-zinc-800 py-8 text-center text-xs text-slate-500">
        <p>&copy; 2026 Hanafi Rizki Fikrillah. All Rights Reserved.</p>
    </footer>

</body>
</html>