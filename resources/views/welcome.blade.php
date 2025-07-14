<x-layout>

    <x-bar></x-bar>

    <style>
        @keyframes floatUpDown {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        .animate-float {
            animation: floatUpDown 4s ease-in-out infinite;
        }
        @keyframes slideInRight {
            0% { opacity: 0; transform: translateX(50px); }
            100% { opacity: 1; transform: translateX(0); }
        }
        .animate-slide-in-right {
            animation: slideInRight 1s ease forwards;
        }
        @keyframes pulseSlow {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        .animate-pulse-slow {
            animation: pulseSlow 3s ease-in-out infinite;
        }
    </style>

    <main class="relative h-[calc(100vh-50px)] w-full">
        <div class="absolute inset-0 bg-cover bg-center"
             style="background-image: url('{{ asset('img/welcomemain.png') }}');">
        </div>

        <div class="absolute inset-0 flex items-center justify-center z-10">
            <img src="{{ asset('img/Main.png') }}"
                 class="max-w-[550px] absolute left-16 w-full pl-32 animate-float"
                 style="top: 120px;">
        </div>

        <div class="absolute right-8 flex flex-col gap-7 z-10
                    text-2xl text-white text-center pr-20 pl-20 pt-[90px] pb-[90px] mr-72
                    bg-[#003f5d95] rounded-lg shadow-lg animate-slide-in-right"
             style="top: 120px; backdrop-filter: saturate(180%) blur(10px);">
            <a href="{{ route('login') }}"
               class="border-b border-white hover:text-blue-300 transition transform hover:scale-110 duration-300 ease-in-out">
                Iniciar sesión
            </a>
            <a href="{{ route('register') }}"
               class="border-b border-white hover:text-blue-300 transition transform hover:scale-110 duration-300 ease-in-out">
                Registrarse
            </a>
        </div>
    </main>

    <div class="relative w-full h-[400px]">
        <img src="{{ asset('img/promotionsim.png') }}" alt="Promociones"
             class="w-full h-full object-cover pt-12 pr-14 pl-14 pb-14">
        <h2 class="absolute top-2/4 left-2/4 transform -translate-x-1/2 -translate-y-1/2
                   text-white text-[120px] font-bold drop-shadow-md animate-pulse-slow">
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
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
            @foreach ($imagenes as $imagen)
                <div class="bg-white rounded-lg overflow-hidden flex flex-col items-center pt-8
                            shadow-xl transition-transform duration-300 hover:scale-105 hover:shadow-2xl
                            opacity-0 animate-fadeIn" style="animation-fill-mode: forwards; animation-delay: {{ $loop->index * 0.2 }}s;">
                    <img src="{{ asset('img/' . $imagen) }}" alt="{{ $imagen }}" class="w-full h-48 object-cover rounded-md">
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

    <style>
        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
            from {
                opacity: 0;
                transform: translateY(15px);
            }
        }
        .animate-fadeIn {
            animation: fadeIn 0.8s ease forwards;
        }
    </style>

</x-layout>
