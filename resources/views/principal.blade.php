<x-layout>
    <x-bar> </x-bar>

    <main class="relative h-[calc(100vh-50px)] w-full">
    <div class="absolute inset-0 bg-cover bg-center"
         style="background-image: url('{{ asset('img/PP2.jpg') }}');">
    </div>


</main>

@php
    $imagenes = [
        'Principal1.jpg',
       'Principal2.jpg',
       'Principal3.jpg',
       'principal4.jpg',
       'principal5.jpg',
       'principal6.jpg',
    ];
@endphp

<div class="py-12 px-6 bg-white pb-14">
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach ($imagenes as $imagen)
            <div class="bg-white rounded-lg overflow-hidden flex flex-col items-center pt-8 shadow-xl p-6 space-y-4">
                <img src="{{ asset('img/' . $imagen) }}" alt="{{ $imagen }}" class="rounded-xl w-[280px] h-[180px] object-cover shadow-md">
                <div class="p-6 text-center">
                    <p class="text-2xl font-normal mb-2 pb-4">20% de descuento</p>
                     <button onclick="toggleHeart(this)" class="focus:outline-none">
                    <i class="far fa-heart text-black text-3xl transition-colors duration-300"></i>
                </button>
                    <button class="text-white w-[150px] text-black px-4 py-2 pt-4 rounded-full hover:bg-click-secondaryCyan transition" style=" background-color: #01798f90;">
                        Ver más
                    </button>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script>
    function toggleHeart(btn) {
        const icon = btn.querySelector('i');
        icon.classList.toggle('text-red-500');
        icon.classList.toggle('fa-solid');
        icon.classList.toggle('far');
    }
</script>

</x-layout>
