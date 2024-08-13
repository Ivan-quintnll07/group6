@props(['title', 'price', 'description', 'image', 'logo'])

<div class="grid grid-cols-2 bg-slate-200 shadow-md ">
    <div class="flex flex-col items-center justify-center p-1  ">
        <h1> {{ $title }}</h1>
        <p class="text-4xl p-1"> {{ $price }} </p>
        <img src="{{ asset("img/$logo") }}" class="mt-2 h-12">

    </div>

    <div class="flex flex-col items-center justify-center">

    <img src="{{ asset("img/$image") }}" class="mt-2 h-35">
    </div>

    <div class="col-span-2 p-4 items-center justify-center">
        <p> {{ $description }}</p>
    </div>
</div>
