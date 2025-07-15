<x-layout>
    <x-bar/>

   
    <section class="w-full h-64 bg-gradient-to-r from-cyan-700 to-blue-600 flex items-center justify-center shadow-lg mb-16 animate-fade-down duration-1000">
        <h1 class="text-5xl font-extrabold text-white tracking-widest drop-shadow-md animate-pulse">PROMOCIONES</h1>
    </section>


    <div class="w-full px-6 lg:px-20 space-y-24 pb-24">
        @foreach ($offers as $category => $categoryOffers)

            <div class="flex items-center gap-4 mb-8 animate-fade-left">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-cyan-500 to-blue-500 flex items-center justify-center shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h2 class="text-3xl lg:text-4xl font-extrabold uppercase tracking-wide bg-gradient-to-r from-cyan-500 to-blue-500 bg-clip-text text-transparent">
                    {{ $category }}
                </h2>
                <div class="flex-grow border-t border-dashed border-cyan-300 ml-2"></div>
            </div>


            <div class="grid gap-10 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
                @foreach ($categoryOffers as $index => $offer)
                    <div class="group relative bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition animate-fade-up" style="animation-delay: {{ $index * 100 }}ms">

                        <div class="relative h-48 overflow-hidden">
                            <img src="{{ asset('img/' . $offer->image) }}" alt="{{ $offer->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500 ease-in-out">
                            <span class="absolute top-2 right-2 bg-white/80 backdrop-blur-sm px-2 py-0.5 rounded-full text-xs font-semibold text-gray-800 shadow">{{ $offer->category }}</span>
                        </div>


                        <div class="p-5 space-y-2 flex flex-col h-56">
                            <h3 class="text-xl font-bold line-clamp-2 text-gray-900 group-hover:text-cyan-600 transition-all">{{ $offer->title }}</h3>
                            <p class="text-sm text-gray-600 line-clamp-2">{{ $offer->benefit }}</p>
                            <p class="text-xs text-gray-400 italic line-clamp-1">{{ $offer->restriction }}</p>


                            <div class="mt-auto flex items-center justify-between">

                                <form action="{{ route('offers.toggleFavorite', $offer) }}" method="POST">
                                    @csrf
                                    <button type="submit" aria-label="Marcar favorito" class="rounded-full p-2 hover:bg-gray-100 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 {{ auth()->check() && auth()->user()->favorites->contains($offer->id) ? 'text-red-500' : 'text-gray-400' }}" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                        </svg>
                                    </button>
                                </form>


                                <a href="{{ route('offers.show', $offer) }}" class="inline-flex items-center gap-2 bg-cyan-600 hover:bg-cyan-700 text-white text-sm font-semibold px-4 py-2 rounded-full shadow transition transform hover:scale-105">
                                    Ver más
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</x-layout>
