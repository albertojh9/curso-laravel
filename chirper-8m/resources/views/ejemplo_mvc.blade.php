
<x-layout>
    <x-slot:title>
        {{ $nombre_titulo }}
    </x-slot:title>
    
    <div class="max-w-2xl mx-auto space-y-6">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">
            {{ $nombre_titulo }}
        </h2>
        
        @foreach ($datos_modelo as $dato)
            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
                <div class="border-l-4 border-blue-500 pl-4">
                    <div class="text-sm text-gray-600 dark:text-gray-400 font-medium">
                        Usuario: {{ $dato['usuario'] }}
                    </div>
                    <div class="mt-2 text-lg text-gray-900 dark:text-white">
                        {{ $dato['meme'] }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>