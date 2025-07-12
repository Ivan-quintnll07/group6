<x-layout>
    <x-bar></x-bar>

    <div class="w-full my-8">
        <h1 class="text-4xl font-semibold text-center mb-10">Promociones</h1>

        @foreach ($offers as $category => $categoryOffers)
            <h2 class="text-2xl font-semibold mb-4">{{ $category }}</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-8 mb-10">
                @foreach ($categoryOffers as $offer)
                    <div class="bg-white shadow-md rounded-xl p-4">
                        <img src="{{ asset('img/' . $offer->image) }}" alt="Imagen de la promoción" class="w-full h-48 object-cover rounded-lg mb-4">
                        <h3 class="text-xl font-bold mb-2">{{ $offer->title }}</h3>
                        <p class="text-sm mb-2">{{ $offer->benefit }}</p>
                        <p class="text-xs text-gray-500">{{ $offer->restriction }}</p>
                    </div>
                   
                @endforeach
            </div>
        @endforeach
    </div>
</x-layout>
