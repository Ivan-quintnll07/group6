<x-layout>
    <x-bar></x-bar>

    <div class="w-full my-8">
        <h1 class="text-4xl font-semibold text-center mb-10">Promociones</h1>

        @foreach ($offers as $category => $categoryOffers)
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-left mb-6 px-8 text-blue-700">{{ $category }}</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-8">
                    @foreach ($categoryOffers as $offer)
                        <x-card-offer
                            :title="$offer->title"
                            :price="$offer->price ?? ''"
                            :image="asset('storage/' . $offer->image)"
                            :logo="asset('storage/' . $offer->logo)"
                            :description="$offer->benefit"
                            :id="$offer->id" />
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
