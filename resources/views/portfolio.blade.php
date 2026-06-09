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

    <script src="https://unpkg.com/three@0.160.0/build/three.min.js"></script>
    <script src="https://unpkg.com/three@0.160.0/examples/js/loaders/GLTFLoader.js"></script>
    <script src="https://unpkg.com/three@0.160.0/examples/js/controls/OrbitControls.js"></script>

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
    <script>
        let scene, camera, renderer, model, controls;

        function init3D() {
            const canvas = document.getElementById('avatar3d');

            scene = new THREE.Scene();
            scene.background = new THREE.Color(0x0f0f0f);

            camera = new THREE.PerspectiveCamera(
                45,
                canvas.clientWidth / canvas.clientHeight,
                0.1,
                1000
            );

            camera.position.set(0, 1.5, 3);

            renderer = new THREE.WebGLRenderer({
                canvas: canvas,
                antialias: true
            });

            renderer.setSize(canvas.clientWidth, canvas.clientHeight);

            // LIGHTING
            const light = new THREE.DirectionalLight(0xffffff, 1);
            light.position.set(2, 2, 5);
            scene.add(light);

            const ambient = new THREE.AmbientLight(0xffffff, 0.5);
            scene.add(ambient);

            // CONTROLS
            controls = new THREE.OrbitControls(camera, renderer.domElement);
            controls.enableDamping = true;

            // LOAD MODEL (ganti file nanti)
            const loader = new THREE.GLTFLoader();

            loader.load(
                '/models/avatar.glb', // 👈 nanti kamu ganti file wajah 3D kamu di sini
                function (gltf) {
                    model = gltf.scene;
                    model.scale.set(1.5, 1.5, 1.5);
                    model.position.y = -1;
                    scene.add(model);
                },
                undefined,
                function (error) {
                    console.error(error);
                }
            );

            animate();
        }

        function animate() {
            requestAnimationFrame(animate);

            if (model) {
                model.rotation.y += 0.002; // auto rotate pelan
            }

            controls.update();
            renderer.render(scene, camera);
        }

        init3D();
    </script>
</head>
<body class="bg-white text-slate-800 dark:bg-[#121212] dark:text-slate-100 font-sans transition-colors duration-300">

    <!-- NAVBAR -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur dark:bg-[#121212]/90 border-b border-slate-100 dark:border-zinc-800">
        <nav class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-primaryBlue dark:text-blue-400 tracking-tight">Hanafi.R</a>
        <div class="flex items-center gap-4 font-medium text-sm">
            <a href="#hero" class="hover:text-primaryBlue dark:hover:text-blue-400">
                Home
            </a>
            <a href="#about" class="hover:text-primaryBlue dark:hover:text-blue-400">
                About
            </a>
            <a href="#projects" class="hover:text-primaryBlue dark:hover:text-blue-400">
                Projects
            </a>

            @guest
                <a href="{{ route('login') }}"
                class="px-4 py-2 bg-primaryBlue text-white rounded-lg hover:bg-blue-800 transition">
                    Admin Login
                </a>
            @endguest

            @auth

                <a href="{{ route('projects.index') }}"
                class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                    Kelola Project
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button
                        type="submit"
                        class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                        Logout
                    </button>
                </form>

            @endauth

            <button
                onclick="document.documentElement.classList.toggle('dark')"
                class="p-2 bg-slate-100 dark:bg-zinc-800 rounded-full"
                aria-label="Toggle Dark Mode">
                🌙
            </button>

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
                <div class="w-full md:w-96 h-96 rounded-2xl overflow-hidden border dark:border-zinc-800 shadow-xl bg-black">
                    <canvas id="avatar3d"></canvas>
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

                @forelse($projects as $project)

                <article class="overflow-hidden bg-white border border-slate-100 rounded-xl shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-md dark:bg-[#1E1E1E] dark:border-zinc-800">

                    <div class="aspect-video bg-slate-100 dark:bg-zinc-700 overflow-hidden">

                        @if($project->image)

                            <img
                                src="{{ asset('storage/'.$project->image) }}"
                                alt="{{ $project->title }}"
                                class="object-cover w-full h-full">

                        @else

                            <img
                                src="https://via.placeholder.com/600x400"
                                alt="{{ $project->title }}"
                                class="object-cover w-full h-full">

                        @endif

                    </div>

                    <div class="p-6 space-y-3">

                        <h3 class="text-xl font-bold">
                            {{ $project->title }}
                        </h3>

                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            {{ $project->description }}
                        </p>

                        <div class="flex gap-4">

                            @if($project->github)
                                <a href="{{ $project->github }}"
                                target="_blank"
                                class="text-blue-600 font-semibold">
                                    GitHub
                                </a>
                            @endif

                            @if($project->demo)
                                <a href="{{ $project->demo }}"
                                target="_blank"
                                class="text-green-600 font-semibold">
                                    Demo
                                </a>
                            @endif

                        </div>

                    </div>

                </article>

                @empty

                    <p>Belum ada project.</p>

                @endforelse

            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="border-t border-slate-100 dark:border-zinc-800 py-8 text-center text-xs text-slate-500">
        <p>&copy; 2026 Hanafi Rizki Fikrillah. All Rights Reserved.</p>
    </footer>
    <!-- AI CHATBOT -->
    <div id="chatbot-container"
        class="fixed bottom-5 right-5 w-80 bg-white dark:bg-[#1E1E1E] border border-slate-200 dark:border-zinc-800 rounded-2xl shadow-xl overflow-hidden z-50">

        <!-- HEADER -->
        <div class="bg-primaryBlue text-white px-4 py-3 flex justify-between items-center">
            <span class="font-semibold text-sm">AI Assistant</span>
            <button onclick="toggleChat()" class="text-white text-lg">✕</button>
        </div>

        <!-- CHAT BOX -->
        <div id="chat-messages"
            class="h-64 p-3 overflow-y-auto text-sm space-y-2 bg-slate-50 dark:bg-[#121212]">
        </div>

        <!-- INPUT -->
        <div class="p-2 border-t border-slate-200 dark:border-zinc-800 flex gap-2">
            <input id="chat-input"
                type="text"
                placeholder="Tanya sesuatu..."
                class="flex-1 px-3 py-2 text-sm rounded-lg border border-slate-300 dark:border-zinc-700 dark:bg-[#1E1E1E]">

            <button onclick="sendMessage()"
                    class="px-3 py-2 bg-primaryBlue text-white rounded-lg text-sm hover:bg-blue-800">
                ➤
            </button>
        </div>
    </div>

    <!-- TOGGLE BUTTON (kalau chat ditutup) -->
    <button id="open-chat"
            onclick="toggleChat()"
            class="fixed bottom-5 right-5 bg-primaryBlue text-white p-3 rounded-full shadow-lg hidden z-50">
        💬
    </button>
    <script>
let chatOpen = true;

function toggleChat() {
    chatOpen = !chatOpen;

    const box = document.getElementById('chatbot-container');
    const btn = document.getElementById('open-chat');

    if (chatOpen) {
        box.classList.remove('hidden');
        btn.classList.add('hidden');
    } else {
        box.classList.add('hidden');
        btn.classList.remove('hidden');
    }
}

async function sendMessage() {
    let input = document.getElementById('chat-input');
    let message = input.value.trim();

    if (!message) return;

    // tampilkan user message
    document.getElementById('chat-messages').innerHTML += `
        <div class="text-right">
            <span class="inline-block bg-blue-500 text-white px-3 py-1 rounded-lg">
                ${message}
            </span>
        </div>
    `;

    input.value = '';

    // loading indicator
    let loadingId = 'loading-' + Date.now();
    document.getElementById('chat-messages').innerHTML += `
        <div id="${loadingId}" class="text-left text-gray-400 text-xs">
            AI sedang mengetik...
        </div>
    `;

    let res = await fetch('/chatbot', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ message })
    });

    let data = await res.json();

    document.getElementById(loadingId).remove();

    document.getElementById('chat-messages').innerHTML += `
        <div class="text-left">
            <span class="inline-block bg-slate-200 dark:bg-zinc-800 px-3 py-1 rounded-lg">
                ${data.reply}
            </span>
        </div>
    `;

    document.getElementById('chat-messages').scrollTop =
        document.getElementById('chat-messages').scrollHeight;
}
</script>
</body>
</html>