<x-layout>
    <x-bar> </x-bar>

    <div class="grid grid-cols-3 gap-4">
        {{ $offer }}
        <div class="...">01</div>
        <div class="...">02</div>
        <div class="...">03</div>

        <div class="col-span-2 ...">04</div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-8">

                <x-card-offer
                    title='{{ $offer->title }}'
                    price='{{ $offer->price }}'
                    image='{{ $offer->image }}'
                    logo='{{ $offer->logo }}'
                    description='{{ $offer->benefit }}'
                    id='{{ $offer->id}}' />

        </div>
        <div class="col-span-2 ...">07</div>


    </div>
</x-layout>
