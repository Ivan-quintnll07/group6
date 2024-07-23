<x-layout>
    <x-bar></x-bar>

    <div class="grid grid-cols-4 my-4 space-x-5 space-y-5">
        <h1 class="col-span-1 row-span-2 flex items-center justify-center">Restaurantes</h1>
        @foreach ($offers as $offer)
            <x-card-offer title='{{ $offer -> title}}' price='{{$offer -> price}}' image='{{$offer -> image}}' logo='{{$offer -> logo}}' description='{{$offer -> benefit}}'/>
        @endforeach

    </div>
</x-layout>
