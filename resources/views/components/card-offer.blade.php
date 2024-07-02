@props(['title', 'price', 'description', 'image', 'logo'])

<div class="grid grid-cols-2 bg-slate-200 shadow-md ;">
    <div class="flex flex-col items-center justify-center p-3">
        <h1> {{ $title }}</h1>
        <p class="text-4xl p-1"> {{ $price }} </p>
        <img src='{{ asset("$image") }}' class="mt-4 h-16">

    </div>

    <div class="bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset("$logo") }})"> </div>

    <div class="col-span-2 p-4 items-center justify-center">
        <p> {{ $description }}</p>
    </div>
</div>
