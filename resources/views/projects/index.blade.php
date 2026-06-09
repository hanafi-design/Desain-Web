<x-app-layout>
    <div class="max-w-6xl mx-auto px-6 py-10 transition-colors duration-300">
        
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">Dashboard Kelola Proyek</h1>
                <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Manajemen seluruh karya dan portofolio yang ditampilkan.</p>
            </div>
            
            <a href="{{ route('projects.create') }}"
               class="inline-flex items-center justify-center px-5 py-2.5 bg-primaryBlue text-white font-medium text-sm rounded-lg shadow-sm hover:bg-blue-800 transition-all gap-2 self-start sm:self-auto">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Tambah Project
            </a>
        </div>

        <div class="overflow-hidden bg-white border border-slate-100 rounded-xl shadow-sm dark:bg-[#1E1E1E] dark:border-zinc-800">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-slate-100 bg-slate-50/70 text-xs font-semibold uppercase tracking-wider text-slate-500 dark:bg-zinc-800/50 dark:border-zinc-800 dark:text-zinc-400">
                            <th class="px-6 py-4">Judul Proyek</th>
                            <th class="px-6 py-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-zinc-800 text-sm">
                        @forelse($projects as $project)
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-zinc-800/30 transition-colors">
                                <td class="px-6 py-4 font-medium text-slate-900 dark:text-white">
                                    {{ $project->title }}
                                </td>
                                
                                <td class="px-6 py-4 text-right">
                                    <div class="flex items-center justify-end gap-3">
                                        <a href="{{ route('projects.edit', $project) }}"
                                           class="inline-flex items-center px-3 py-1.5 border border-slate-200 dark:border-zinc-700 rounded-md text-xs font-medium text-slate-600 dark:text-zinc-300 hover:bg-slate-50 dark:hover:bg-zinc-800 transition">
                                            Edit
                                        </a>

                                        <form action="{{ route('projects.destroy', $project) }}" 
                                              method="POST" 
                                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus proyek ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="inline-flex items-center px-3 py-1.5 bg-red-50 text-red-600 dark:bg-red-950/30 dark:text-red-400 rounded-md text-xs font-medium hover:bg-red-100 dark:hover:bg-red-950/50 transition">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" class="px-6 py-12 text-center text-slate-400 dark:text-zinc-500">
                                    <div class="flex flex-col items-center justify-center gap-2">
                                        <svg class="w-8 h-8 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                        </svg>
                                        <span>Belum ada project yang terdaftar.</span>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-app-layout>