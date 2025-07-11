<x-layout>
    <x-bar> </x-bar>

    <div style="background-color: #ffffff95;">
        <div class="py-12 px-6 bg-white" style="background-color: #ffdab9; position: relative; padding-bottom: 177px;">


<aside class="absolute left-0 top-0 h-full w-[300px] bg-gradient-to-b from-white via-gray-50 to-white shadow-xl p-6 flex flex-col space-y-8 border-r border-gray-200">
    <button class="w-full py-3 bg-sky-600 text-white font-semibold shadow hover:shadow-lg rounded-xl transition duration-200 hover:bg-sky-700 mt-6">
        + Crear tablero
    </button>
    <div class="space-y-4">
        <p class="text-sm text-gray-500 font-semibold uppercase tracking-wide">Tus tableros</p>

        <button class="w-full py-2.5 bg-white text-gray-800 text-center shadow-sm hover:shadow-md rounded-lg border border-gray-200 hover:bg-gray-100 transition">
             Comida
        </button>
        <button class="w-full py-2.5 bg-white text-gray-800 text-center shadow-sm hover:shadow-md rounded-lg border border-gray-200 hover:bg-gray-100 transition">
             Viajes
        </button>
        <button class="w-full py-2.5 bg-white text-gray-800 text-center shadow-sm hover:shadow-md rounded-lg border border-gray-200 hover:bg-gray-100 transition">
             Fashion
        </button>
    </div>
                </aside>

            @php
    $imagenes = [
        'Principal1.jpg',
       'Principal2.jpg',
       'Principal3.jpg',
    ];
@endphp

<div class="py-6 px-6 pb-14 max-w-6xl ml-[310px] grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @foreach ($imagenes as $imagen)
        <div class="bg-white rounded-lg overflow-hidden flex flex-col items-center pt-8 shadow-xl p-6 space-y-4">
            <img src="{{ asset('img/' . $imagen) }}" alt="{{ $imagen }}" class="rounded-xl w-[280px] h-[180px] object-cover shadow-md">
            <div class="p-6 text-center">
                <p class="text-2xl font-normal mb-4 text-center">20% de descuento</p>
                <button onclick="toggleHeart(this)" class="focus:outline-none">
                    <i class="far fa-heart text-black text-3xl transition-colors duration-300"></i>
                </button>
                <button class=" w-[150px] text-white text-black px-2 py-2 rounded-full hover:bg-click-secondaryCyan transition" style="background-color: #01798f90;">
                    Ver más
                </button>
            </div>
        </div>
    @endforeach
</div>

<script>
    function toggleHeart(btn) {
        const icon = btn.querySelector('i');
        icon.classList.toggle('text-red-500');
        icon.classList.toggle('fa-solid');
        icon.classList.toggle('far');
    }
</script>

        </div>
    </div>
</x-layout>
