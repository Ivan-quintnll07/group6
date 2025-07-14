<x-layout>
    <x-bar></x-bar>

    <div style="background-color:#ffffff95;">
        <div class="py-12 px-6" style="background-color:#ffdab9; position:relative; min-height:100vh;">

            <aside class="absolute left-0 top-0 h-full w-[300px] bg-gradient-to-b from-white via-gray-50 to-white shadow-xl p-6 flex flex-col space-y-8 border-r border-gray-200">
                <div class="space-y-4">
                    <p class="text-sm text-gray-500 font-semibold uppercase tracking-wide">Tus tableros</p>

                    <a href="{{ route('favoritos') }}"
                       class="block w-full py-2.5 text-center rounded-lg border
                              {{ !isset($categoryName) ? 'bg-blue-500 text-white' : 'hover:bg-gray-100 text-gray-800' }}">
                        Todas
                    </a>

                    @foreach ($categories as $cat)
                        <a href="{{ route('favoritos.categoria', $cat) }}"
                           class="block w-full py-2.5 text-center rounded-lg border
                                  {{ (isset($categoryName) && $categoryName === $cat) ? 'bg-blue-500 text-white' : 'hover:bg-gray-100 text-gray-800' }}">
                            {{ $cat }}
                        </a>
                    @endforeach
                </div>
            </aside>

            <div class="max-w-6xl ml-[310px] space-y-12 min-h-screen pb-20 pt-6">
                @if ($favorites->isEmpty())
                    <p class="text-center text-gray-500 text-xl">Aún no tienes promociones favoritas.</p>
                @else
                    @foreach ($favorites as $category => $offers)
                        <h2 class="text-3xl font-semibold mb-6">{{ $category }}</h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                            @foreach ($offers as $offer)
                                <div class="bg-white rounded-lg overflow-hidden flex flex-col items-center pt-8 shadow-xl">
                                    <img src="{{ asset('img/' . $offer->image) }}" alt="{{ $offer->title }}" class="w-full h-48 object-cover">
                                    <div class="p-6 text-center">
                                        <p class="text-2xl font-bold mb-2">{{ $offer->title }}</p>
                                        <p class="text-sm mb-2">{{ $offer->benefit }}</p>
                                        <p class="text-xs text-gray-500">{{ $offer->restriction }}</p>

                                        <form action="{{ route('offers.toggleFavorite', $offer) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="pt-4">
                                                <i class="fas fa-heart text-red-500 text-2xl"></i>
                                            </button>
                                        </form>

                                        <a href="{{ route('offers.show', $offer) }}">
                                            <button class="text-white w-[150px] text-black px-4 py-2 pt-4 rounded-full hover:bg-click-secondaryCyan transition" style="background-color:#01798f90;">
                                                Ver más
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</x-layout>
