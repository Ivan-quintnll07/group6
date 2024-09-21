<x-layout>
    <x-bar> </x-bar>

    <x-card-offer
    title='{{ $offer->title }}'
    price='{{ $offer->price }}'
    image='{{ $offer->image }}'
    logo='{{ $offer->logo }}'
    description='{{ $offer->benefit }}'
    id='{{ $offer->id }}' />

</x-layout>
