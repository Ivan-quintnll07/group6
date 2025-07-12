<x-layout>
    <x-bar></x-bar>

    <div class="w-full my-8">
        <h1 class="text-4xl font-semibold text-center mb-10">Promociones</h1>

        @foreach ($offers as $category => $categoryOffers)
            <h2 class="text-2xl font-semibold mb-4">{{ $category }}</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-8 mb-10">
                @foreach ($categoryOffers as $offer)
                    <div class="bg-white shadow-md rounded-xl p-4 relative">
                        <img src="{{ asset('img/' . $offer->image) }}" alt="Imagen de la promoción" class="w-full h-48 object-cover rounded-lg mb-4">

                        <h3 class="text-xl font-bold mb-2">{{ $offer->title }}</h3>
                        <p class="text-sm mb-2">{{ $offer->benefit }}</p>
                        <p class="text-xs text-gray-500">{{ $offer->restriction }}</p>

                        @auth
                            <form action="{{ route('offers.toggleFavorite', $offer) }}" method="POST" class="absolute top-4 right-4">
                                @csrf
                                <button type="submit" class="focus:outline-none">
                                    @if(auth()->user()->favorites->contains($offer->id))
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500" fill="currentColor" viewBox="0 0 24 24" stroke="none">
                                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42
                                            4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3
                                            19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                                        </svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400 hover:text-red-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 19.071a6.06 6.06 0 01-1.65-4.29c0-1.58.62-3.06 1.71-4.16l6.19-6.19a3 3 0 014.24 0l.54.54a3 3 0 010 4.24l-6.19 6.19a6.06 6.06 0 01-4.29 1.65z" />
                                        </svg>
                                    @endif
                                </button>
                            </form>
                        @else
                            <!-- Corazón gris sin funcionalidad para usuarios no autenticados -->
                            <div class="absolute top-4 right-4 cursor-not-allowed" title="Inicia sesión para agregar a favoritos">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 19.071a6.06 6.06 0 01-1.65-4.29c0-1.58.62-3.06 1.71-4.16l6.19-6.19a3 3 0 014.24 0l.54.54a3 3 0 010 4.24l-6.19 6.19a6.06 6.06 0 01-4.29 1.65z" />
                                </svg>
                            </div>
                        @endauth

                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</x-layout>
