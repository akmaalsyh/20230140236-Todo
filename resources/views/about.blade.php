<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('About Me') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-bold mb-4">Biodata</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li><strong>Nama:</strong> Muhammad Akmal Taufansyah</li>
                        <li><strong>NIM:</strong> 20230140236</li>
                        <li><strong>Program Studi:</strong> Teknologi Informasi</li>
                        <li><strong>Hobi:</strong> Programming, Bermain Game, Desain Grafis</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>