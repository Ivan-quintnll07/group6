<x-layout>
    <div class="bg-gray-100 overflow-clip ">
        <x-bar> </x-bar>

        <main class="relative h-[calc(100vh-50px)] w-full">
    <!-- Imagen de fondo -->
    <div class="absolute inset-0 bg-cover bg-center"
         style="background-image: url('{{ asset('img/welcomemain.png') }}');">
    </div>

    <!-- Capa opcional para oscurecer un poco -->
    <div class="absolute inset-0 bg-black/20"></div>

    <!-- Logo centrado -->
    <div class="absolute inset-0 flex items-center justify-center z-10">
        <img src="{{ asset('img/Main.png') }}" class="max-w-[550px] absolute top 1/2 left-16 w-full pl-32">
    </div>

    <!-- Menú lateral derecho -->
    <div class="absolute top-1/2 right-8 transform -translate-y-1/2 flex flex-col gap-7 z-10 text-2xl text-white text-center pr-20 pl-20 pt-[90px]  pb-[90px]  mr-72 color: trans" style=" background-color: #003f5d95;">
        <a href="{{ route('login') }}" class="border-b border-white hover:text-blue-300">Iniciar sesión</a>
        <a href="{{ route('registro') }}" class="border-b border-white hover:text-blue-300">Registrarse</a>
         <a href="{{ route('registro') }}" class="border-b border-white hover:text-blue-300">Inicio</a>
    </div>
</main>

<div class="relative w-full h-[400px]">
    <img src="{{ asset('img/promotionsim.png') }}" alt="Promociones"
         class="w-full h-full object-cover pt-12 pr-14 pl-14 pb-14">
    <h2 class="absolute top-2/4 left-2/4 transform -translate-x-1/2 -translate-y-1/2 text-white text-[120px] font-bold drop-shadow-md">
        Promociones
    </h2>
</div>



</div class="">
<!-- Grid de promociones -->
        <div class="py-12 px-6 bg-white pb-14">
            <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @for ($i = 0; $i < 6; $i++)
                    <div class="bg-white rounded-lg overflow-hidden flex flex-col items-center pt-8 shadow-xl ">
                        <img src="{{ asset('img/promo' . ($i+1) . '.jpg') }}" alt="Promo {{ $i+1 }}" class="w-full h-48 object-cover ">
                        <div class="p-6 text-center">
                            <p class="text-2xl font-normal mb-2 pb-4">20% de descuento</p>
                            <i class="far fa-heart text-gray-500 hover:text-red-500 text-4xl cursor-pointer pt-4"></i>
                            <button class="text-white w-[200px] text-black px-4 py-2 pt-4 rounded-full hover:bg-click-secondaryCyan transition" style=" background-color: #01798f90;">
                                Ver más
                            </button>
                         </div>
                    </div>
                @endfor
            </div>
        </div>"
    </div>
</x-layout>
