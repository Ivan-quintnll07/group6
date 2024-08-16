<x-layout>
    <div class="bg-gray-100 overflow-clip">
        <x-bar/>

        <!-- Modificación en el 'main' para agregar dos imágenes de fondo -->
        <main class="flex items-center justify-center relative">

                <section class="h-[calc(100vh-50px)] w-1/2 bg-cover " style="background-image: url({{asset('img/home1.jpg')}})"></section>
                <section class="h-[calc(100vh-50px)] w-1/2 bg-cover " style="background-image: url({{asset('img/home2.jpg')}})"></section>

                <div class="absolute flex items-center justify-start h-full p-8 opacity-100 text-white">
                    <div class="p-8 rounded-lg text-center max-w-lg">
                        <h1 class="text-2xl text-justify mb-4">¿Listo para ahorrar dinero? Únete a "Click & Save" hoy mismo y consigue las mejores ofertas de tarjetas de crédito en un solo lugar.   . </h1>
                        <a href="{{ route('login') }}" class="text-black text-lg px-4 py-2 underline underline-offset-1">Iniciar sesion</a>
                        <a href="{{ route('registro') }}" class="text-black text-lg px-4 py-2 underline underline-offset-1">Registrarse</a>
                    </div>
                </div>
        </main>


        <div class="bg-white flex flex-col justify-start py-20 w-full">
            <div class="text-center mx-auto mb-8 max-w-5xl mx-auto">
                <h2 class="text-5xl mb-4 italic font-thin">"Click and Save: Gathering the Best Credit Card Deals in one place"</h2>
            </div>

            <hr class="border-t-2 border-black mx-auto w-full" style="margin-top: 80px;" />
        </div>

        <div class="swiper-container" style="max-width: 100%; margin: 0 auto; height: 400px; margin-top: -60px;">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ '/img/welcome1' }}" alt="Slide 1" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" alt="Slide 2" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://media.kasperskydaily.com/wp-content/uploads/sites/87/2023/03/16170745/how-to-protect-EMV-and-NFC-bank-cards-featured.jpg" alt="Slide 3" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" alt="Slide 4" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" alt="Slide 5" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" alt="Slide 6" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" alt="Slide 7" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" alt="Slide 8" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-9.jpg" alt="Slide 9" />
                    </div>
                </div>
            </div>
        </div>

        <hr class="border-t-2 border-black mx-auto w-full" style="margin-top: -0px;" />
        <div class="relative h-screen">
            <hr class="border-yellow-500 mx-auto w-full" style="margin-top: 0; border-top-width: 20px;" />

            <img src="https://clubwyndham.wyndhamdestinations.com/content/dam/wyndham/wyndham-vacation-clubs/city-guide/myrtle-beach-destination-guide/myrtle-beach-destination-boardwalk-shopping-1990x810.jpg" alt="Descripción de la imagen"
            class="w-full object-cover" style="height: 125px;" />


            <div class="absolute top-60 left-10">
                <p class="text-2xl font-bold text-gray-800">Nuestra historia</p>
            </div>

            <div class="absolute bottom-5 right-20">
                <img src="https://clubwyndham.wyndhamdestinations.com/content/dam/wyndham/wyndham-vacation-clubs/city-guide/myrtle-beach-destination-guide/myrtle-beach-destination-boardwalk-shopping-1990x810.jpg" alt="Descripción de la imagen" class="w-90 h-40" />
            </div>

            <div class="absolute bottom-[-90px] left-2 w-full bg-white py-0">
                <p class="text-center text-2xl font-semibold text-gray-800">Todos los miembros</p>
            </div>
            <div class="h-screen">

            </div>

        </div>
    </div>
    </div>
</x-layout>
