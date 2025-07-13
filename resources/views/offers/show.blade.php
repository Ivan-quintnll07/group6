<x-layout>
    <x-bar></x-bar>

    <main class="min-h-screen flex bg-gray-100 p-12 gap-12">
        <div class="w-2/5 bg-white shadow-lg p-8 flex items-center justify-center">
            <img src="{{ asset('img/' . $offer->image) }}" alt="{{ $offer->title }}"
                 class="w-[350px] h-[350px] object-contain rounded-lg shadow-lg">
        </div>

        <div class="flex-1 bg-white shadow-md rounded-lg p-12 flex flex-col justify-center">
            <h1 class="text-5xl font-extrabold mb-8 text-gray-900">{{ $offer->title }}</h1>

            <div class="space-y-6 text-gray-700 text-lg leading-relaxed max-w-3xl">
                <p><span class="font-semibold text-gray-900">Beneficio:</span> {{ $offer->benefit }}</p>
                <p><span class="font-semibold text-gray-900">Restricciones:</span> {{ $offer->restriction }}</p>
                <p><span class="font-semibold text-gray-900">Categoría:</span> {{ $offer->category }}</p>
                <p><span class="font-semibold text-gray-900">Condiciones:</span> {{ $offer->condiciones }}</p>
                <p><span class="font-semibold text-gray-900">Aplica para:</span> {{ $offer->aplica_para }}</p>
                <p><span class="font-semibold text-gray-900">Nota:</span> {{ $offer->nota }}</p>
            </div>

            <div class="mt-12">
                <a href="{{ url()->previous() }}"
                   class="inline-block px-12 py-3 bg-cyan-600 hover:bg-cyan-700 text-white font-semibold rounded-full shadow transition">
                    Volver
                </a>
            </div>
        </div>
    </main>
</x-layout>
