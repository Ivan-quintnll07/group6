<x-layout>
    <x-bar></x-bar>

    <div class="grid grid-cols-4 my-5 space-x-7  space-y-7">
        <h1 class="col-span-1 row-span-4 flex items-center justify-center">Restaurantes</h1>
        @foreach ($offers as $offer)
            <x-card-offer title='{{ $offer -> title}}' price='{{$offer -> price}}' image='{{$offer -> image}}' logo='{{$offer -> logo}}' description='{{$offer -> benefit}}'/>
        @endforeach

    </div>
</x-layout>
