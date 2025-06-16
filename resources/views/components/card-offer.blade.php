@props(['title', 'price', 'description', 'image', 'logo', 'id'])

<div class="grid grid-cols-2 shadow-md mx-4 my-4 rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">

    <div class="flex flex-col items-center justify-center p-1 bg-click-greenlime text-black">
        <h1 class="text-xl font-bold"> {{ $title }} </h1>
        <p class="text-4xl p-1"> {{ $price }} </p>
        <img src="{{ asset("img/$logo") }}" class="mt-2 h-12">
    </div>


    <div class="flex flex-col items-center justify-center">
        <img src="{{ asset("img/$image") }}" class="mt-2 h-35">
    </div>


    <div class="col-span-2 p-4 items-center justify-center bg-click-blue1 text-white">
        <p> {{ $description }} </p>
        <a href="{{ route('offerDetails', $id) }}" class="mt-4 inline-block px-6 py-2 items-center justify-center bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition duration-300">Ver Más</a>
    </div>
</div>

