<x-layout>
    <x-bar></x-bar>

    <div class="w-full my-4 ">
        <h1 class="w-64 flex items-center justify-center h-[calc(100vh-75px)] mx-4 fixed">Promociones</h1>

        <div class="grid grid-cols-3 w-3/4 ms-64">
            @foreach ($offers as $offer)
                <x-card-offer title='{{ $offer -> title}}' price='{{$offer -> price}}' image='{{$offer -> image}}' logo='{{$offer -> logo}}' description='{{$offer -> benefit}}'/>
            @endforeach
        </div>
    </div>
</x-layout>
