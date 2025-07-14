<x-layout>


    <x-bar></x-bar>

    <style>
        @keyframes fadeInBg {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .animate-fadeInBg {
            animation: fadeInBg 2s ease forwards;
        }

        @keyframes fadeSlideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fadeSlideUp {
            animation: fadeSlideUp 0.8s ease forwards;
        }

        @keyframes pulseHeart {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.15); }
        }
        .animate-pulseHeart:hover {
            animation: pulseHeart 0.6s ease infinite;
            color: #e0245e !important;
        }

        .btn-animate:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 15px rgba(1, 121, 143, 0.4);
            background-color: #01798fcc !important;
        }
        .btn-animate {
            transition: all 0.3s ease;
        }
    </style>

     <x-bar> </x-bar>


     <x-bar> </x-bar>


    <main class="relative h-[calc(100vh-50px)] w-full">
        <div class="absolute inset-0 bg-cover bg-center animate-fadeInBg"
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
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
            @forelse ($imagenes as $imagen)
                <div class="bg-white rounded-lg overflow-hidden flex flex-col items-center pt-8 shadow-xl
                            opacity-0 animate-fadeSlideUp"
                     style="animation-delay: {{ $loop->index * 0.15 }}s; animation-fill-mode: forwards;
                            transition: transform 0.3s ease, box-shadow 0.3s ease;"
                     onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(1,121,143,0.4)'"
                     onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 0 15px rgba(0,0,0,0.1)'">
                    <img src="{{ asset('img/' . $imagen) }}" alt="{{ $imagen }}" class="w-full h-48 object-cover rounded-md">
                    <div class="p-6 text-center">
                        <p class="text-2xl font-normal mb-2 pb-4">20% de descuento</p>
                        <a class="inline-block">
                            <i class="far fa-heart text-gray-500 text-4xl cursor-pointer pt-4 animate-pulseHeart hover:text-red-600"></i>
                        </a>
                        <button
                            class="btn-animate text-white w-[200px] text-black px-4 py-2 pt-4 rounded-full mt-4"
                            style="background-color: #01798f90;">
                            Ver más
                        </button>
                    </div>
                </div>
            @empty

                <div class="bg-white rounded-lg overflow-hidden flex flex-col items-center pt-8 shadow-xl opacity-0 animate-fadeSlideUp"
                     style="animation-delay: 0s; animation-fill-mode: forwards;
                            transition: transform 0.3s ease, box-shadow 0.3s ease;"
                     onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 10px 20px rgba(1,121,143,0.4)'"
                     onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 0 15px rgba(0,0,0,0.1)'">
                    <img src="{{ asset('img/ejemplo.jpg') }}" alt="Ejemplo" class="w-full h-48 object-cover rounded-md">
                    <div class="p-6 text-center">
                        <p class="text-2xl font-normal mb-2 pb-4">Ejemplo de promoción</p>
                        <a href="/login" class="inline-block">
                            <i class="far fa-heart text-gray-500 text-4xl cursor-pointer pt-4 animate-pulseHeart hover:text-red-600"></i>
                        </a>
                        <button
                            class="btn-animate text-white w-[200px] text-black px-4 py-2 pt-4 rounded-full mt-4"
                            style="background-color: #01798f90;">
                            Ver más
                        </button>
                    </div>
                </div>
            @endforelse
        </div>
    </div>

</x-layout>
