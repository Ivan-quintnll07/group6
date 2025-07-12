<x-layout>
    <x-bar></x-bar>

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

                        <form method="POST" action="{{ url('/promotions/' . $offer->id . '/favorite') }}">
                            @csrf
                            <button type="submit" class="focus:outline-none">
                                @if(auth()->check() && auth()->user()->favorites->contains($offer->id))
                                    <i class="fas fa-heart text-red-500 text-2xl"></i>
                                @else
                                    <i class="far fa-heart text-gray-500 hover:text-red-500 text-2xl"></i>
                                @endif
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</x-layout>
