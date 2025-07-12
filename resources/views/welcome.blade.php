<x-layout>
    <x-bar></x-bar>

    <main class="relative h-[calc(100vh-50px)] w-full">

        <div class="absolute inset-0 bg-cover bg-center"
             style="background-image: url('{{ asset('img/welcomemain.png') }}');">
        </div>


        <div class="absolute top-8 left-8 z-10">
            <img src="{{ asset('img/Main.png') }}" class="w-[150px] h-auto object-contain" alt="Logo Click & Save">
        </div>

        <div class="absolute top-1/2 right-8 transform -translate-y-1/2 z-10 bg-[#003f5d95] px-12 py-10 flex flex-col gap-6 rounded-md text-white text-center text-lg">
            <a href="{{ route('login') }}" class="border-b border-white hover:text-blue-300">Iniciar sesión</a>
            <a href="{{ route('register') }}" class="border-b border-white hover:text-blue-300">Registrarse</a>


        </div>
    </main>


    <div class="relative w-full h-[400px]">
        <img src="{{ asset('img/promotionsim.png') }}" alt="Promociones"
             class="w-full h-full object-cover pt-12 pr-14 pl-14 pb-14">
        <h2 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-[120px] font-bold drop-shadow-md">
            Promociones
        </h2>
    </div>

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
                <div class="bg-white rounded-lg overflow-hidden flex flex-col items-center pt-8 shadow-xl">
                    <img src="{{ asset('img/' . $imagen) }}" alt="{{ $imagen }}" class="w-full h-48 object-cover">
                    <div class="p-6 text-center">
                        <p class="text-2xl font-normal mb-2 pb-4">20% de descuento</p>
                        <a href="/login">
                            <i class="far fa-heart text-gray-500 hover:text-red-500 text-4xl cursor-pointer pt-4"></i>
                        </a>
                        <button class="text-white w-[200px] text-black px-4 py-2 pt-4 rounded-full hover:bg-click-secondaryCyan transition" style="background-color: #01798f90;">
                            Ver más
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
