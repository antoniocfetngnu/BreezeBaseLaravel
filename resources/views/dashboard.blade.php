<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Canchas Deportivas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                
                
                
            </div> --}}
            <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
                <img class="w-96 h-96 object-cover" src="{{ asset('images/FotografiaCanchas/cancha_de_arena.jpg') }}" alt="Imagen de tarjeta">
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-2">Título de la Tarjeta</h2>
                    <p class="text-gray-700">Este es un ejemplo de una tarjeta usando Tailwind CSS. Puedes personalizarla como desees.</p>
                    <a href="#" class="mt-4 inline-block text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">Acción</a>
                </div>
            </div>
            <div>
                <h1 class="text-red-500">Hola</h1>
            </div>
            
        </div>
    </div>
</x-app-layout>
