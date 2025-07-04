<x-layout>
    <x-bar> </x-bar>

    <main class="relative h-[calc(100vh-50px)] w-full">
    <div class="absolute inset-0 bg-cover bg-center"
         style="background-image: url('{{ asset('img/welcomemain.png') }}');">
    </div>


</main>

</div class="">
        <div class="py-12 px-6 bg-white pb-14">
            <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @for ($i = 0; $i < 6; $i++)
                    <div class="bg-white rounded-lg overflow-hidden flex flex-col items-center pt-8 shadow-xl ">
                        <img src="{{ asset('img/promo' . ($i+1) . '.jpg') }}" alt="Promo {{ $i+1 }}" class="w-full h-48 object-cover ">
                        <div class="p-6 text-center">
                            <p class="text-2xl font-normal mb-2 pb-4">20% de descuento</p>
                            <a href="/login">
                                <i class="far fa-heart text-gray-500 hover:text-red-500 text-4xl cursor-pointer pt-4"></i>
                            </a>
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
