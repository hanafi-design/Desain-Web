<x-app-layout>
    <div class="max-w-3xl mx-auto px-6 py-10 transition-colors duration-300">
        
        <div class="mb-8">
            <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 text-sm font-medium text-slate-500 dark:text-slate-400 hover:text-primaryBlue dark:hover:text-blue-400 transition mb-3">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Kembali ke Dashboard
            </a>
            <h1 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">Edit Project</h1>
            <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Perbarui detail, tautan, atau gambar untuk proyek portfolio kamu.</p>
        </div>

        <div class="bg-white border border-slate-100 rounded-xl shadow-sm p-6 md:p-8 dark:bg-[#1E1E1E] dark:border-zinc-800">
            <form method="POST" action="{{ route('projects.update', $project) }}" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="space-y-2">
                    <label for="title" class="block text-sm font-semibold text-slate-700 dark:text-slate-300">Judul Project</label>
                    <input type="text" id="title" name="title" value="{{ $project->title }}" required
                           class="w-full px-4 py-2.5 rounded-lg border border-slate-200 bg-white text-slate-900 focus:border-primaryBlue focus:ring-2 focus:ring-primaryBlue/20 dark:border-zinc-700 dark:bg-zinc-900 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500/20 transition text-sm outline-none">
                </div>

                <div class="space-y-2">
                    <label for="description" class="block text-sm font-semibold text-slate-700 dark:text-slate-300">Deskripsi</label>
                    <textarea id="description" name="description" rows="5" required
                              class="w-full px-4 py-2.5 rounded-lg border border-slate-200 bg-white text-slate-900 focus:border-primaryBlue focus:ring-2 focus:ring-primaryBlue/20 dark:border-zinc-700 dark:bg-zinc-900 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500/20 transition text-sm outline-none resize-y leading-relaxed">{{ $project->description }}</textarea>
                </div>

                <div class="space-y-3">
                    <label class="block text-sm font-semibold text-slate-700 dark:text-slate-300">Gambar Project</label>
                    
                    @if($project->image)
                        <div class="space-y-1">
                            <span class="text-xs text-slate-400 dark:text-zinc-500 block">Gambar saat ini:</span>
                            <div class="w-48 aspect-video rounded-lg overflow-hidden border border-slate-100 dark:border-zinc-700 bg-slate-50 dark:bg-zinc-800">
                                <img src="{{ asset('storage/'.$project->image) }}" alt="Preview {{ $project->title }}" class="w-full h-full object-cover">
                            </div>
                        </div>
                    @endif

                    <div class="flex items-center justify-center w-full">
                        <label class="flex flex-col items-center justify-center w-full h-28 border-2 border-dashed border-slate-200 rounded-lg cursor-pointer bg-slate-50/50 hover:bg-slate-50 dark:border-zinc-700 dark:bg-zinc-900/50 dark:hover:bg-zinc-900 transition">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6 text-center px-4">
                                <svg class="w-6 h-6 mb-2 text-slate-400 dark:text-zinc-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a1 1 0 011.414 0L16 17m0 0l1-1m-1 1k-3-3m0 0l-3 3m3-3V8m0 13a9 9 0 110-18 9 9 0 010 18z"/>
                                </svg>
                                <p class="text-xs text-slate-500 dark:text-slate-400"><span class="font-semibold text-primaryBlue dark:text-blue-400">Klik untuk upload</span> gambar baru atau drag & drop</p>
                                <p class="text-[10px] text-slate-400 dark:text-zinc-500 mt-0.5">PNG, JPG, atau WEBP (Biarkan kosong jika tidak ingin mengubah)</p>
                            </div>
                            <input type="file" name="image" class="hidden">
                        </label>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label for="github" class="block text-sm font-semibold text-slate-700 dark:text-slate-300">Repository GitHub</label>
                        <input type="url" id="github" name="github" value="{{ $project->github }}" placeholder="https://github.com/..."
                               class="w-full px-4 py-2.5 rounded-lg border border-slate-200 bg-white text-slate-900 focus:border-primaryBlue focus:ring-2 focus:ring-primaryBlue/20 dark:border-zinc-700 dark:bg-zinc-900 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500/20 transition text-sm outline-none">
                    </div>

                    <div class="space-y-2">
                        <label for="demo" class="block text-sm font-semibold text-slate-700 dark:text-slate-300">Link Live Demo</label>
                        <input type="url" id="demo" name="demo" value="{{ $project->demo }}" placeholder="https://..."
                               class="w-full px-4 py-2.5 rounded-lg border border-slate-200 bg-white text-slate-900 focus:border-primaryBlue focus:ring-2 focus:ring-primaryBlue/20 dark:border-zinc-700 dark:bg-zinc-900 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500/20 transition text-sm outline-none">
                    </div>
                </div>

                <div class="pt-4 border-t border-slate-100 dark:border-zinc-800 flex flex-col-reverse sm:flex-row sm:justify-end gap-3">
                    <a href="{{ route('projects.index') }}" 
                       class="px-5 py-2.5 border border-slate-200 dark:border-zinc-700 text-slate-700 dark:text-zinc-300 font-medium text-sm rounded-lg hover:bg-slate-50 dark:hover:bg-zinc-800 transition text-center">
                        Batal
                    </a>
                    <button type="submit"
                            class="px-5 py-2.5 bg-primaryBlue text-white font-medium text-sm rounded-lg shadow-sm hover:bg-blue-800 transition-all dark:bg-blue-600 dark:hover:bg-blue-700 text-center">
                        Simpan Perubahan
                    </button>
                </div>

            </form>
        </div>

    </div>
</x-app-layout>