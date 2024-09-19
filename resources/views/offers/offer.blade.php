<x-layout>
    <x-bar></x-bar>

    <div class="w-full my-8 ">
        <h1 class="text-4xl font-semibold text-center mb-10">Promociones</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-8">
            @foreach ($offers as $offer)
                <x-card-offer
                    title='{{ $offer->title }}'
                    price='{{ $offer->price }}'
                    image='{{ $offer->image }}'
                    logo='{{ $offer->logo }}'
                    description='{{ $offer->benefit }}'
                    page='{{ asset("/pages/offer-{$offer->id}.html") }}' />
            @endforeach
        </div>
    </div>
</x-layout>
