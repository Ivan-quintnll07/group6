<x-layout>
    <div class="bg-gray-100 overflow-clip ">
        <x-bar />

        <main class="flex items-center justify-center relative">

            <section class="h-[calc(100vh-50px)] w-1/2 bg-cover " style="background-image: url({{ asset('img/home1.jpg') }})"></section>
            <section class="h-[calc(100vh-50px)] w-1/2 bg-cover "
                style="background-image: url({{ asset('img/home2.jpg') }})"></section>

            <div class="absolute flex items-center justify-start h-full p-8 opacity-100 text-white">
                <div class="p-8 rounded-lg text-center max-w-lg">
                    <h1 class="text-2xl text-justify mb-4">¿Listo para ahorrar dinero? Únete a "Click & Save" hoy mismo y
                        consigue las mejores ofertas de tarjetas de crédito en un solo lugar. . </h1>
                    <a href="{{ route('login') }}"
                        class="text-black text-lg px-4 py-2 underline underline-offset-1">Iniciar sesion</a>
                    <a href="{{ route('registro') }}"
                        class="text-black text-lg px-4 py-2 underline underline-offset-1">Registrarse</a>
                </div>
            </div>
        </main>


        <div class="bg-white flex flex-col justify-start py-20 w-full">
            <div class="text-center mx-auto mb-8 max-w-5xl mx-auto">
                <h2 class="text-5xl mb-4 italic font-thin">"Click and Save: Gathering the Best Credit Card Deals in one
                    place"</h2>
            </div>

            <hr class="border-t-2 border-black mx-auto w-full" style="margin-top: 80px;" />
        </div>

        <div class="swiper-container" style="max-width: 100%; margin: 0 auto; height: 400px; margin-top: -60px;">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide ">
                        <img src="https://media.kasperskydaily.com/wp-content/uploads/sites/87/2023/03/16170745/how-to-protect-EMV-and-NFC-bank-cards-featured.jpg" alt="Slide 1" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" alt="Slide 2" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://media.kasperskydaily.com/wp-content/uploads/sites/87/2023/03/16170745/how-to-protect-EMV-and-NFC-bank-cards-featured.jpg"
                            alt="Slide 3" />
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
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
            </div>
        </div>

        <hr class="border-t-2 border-black mx-auto w-full" style="margin-top: -0px;" />
        <div class="bg-click-primaryYellow text-click-primaryYellow">hola</div>
        <div class="relative h-screen">

            <div class="w-full h-[calc(100vh-125px)]  bg-cover"
                style="height: 125px; background-image: url({{ asset('img/crediCart.jpg') }})"></div>


            <div class="absolute top-60 left-10">
                <p class="text-5xl font-bold text-gray-800 mt-[-14]">Nuestra historia</p>
            </div>

            <div class="absolute bottom-5 right-20">
                <img src="{{ asset('img/Principal.png') }}" alt="Descripción de la imagen" class="w-70 h-80" />
            </div>

            <div class="absolute bottom-60 left-10">
                <p class="text-xl font-bold text-gray-800 w-96 mt-6">Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                    1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
            </div>
        </div>
    </div>
    <div class="h-screen">
        <div class="left-2 w-full pt-10">
            <p class="text-center text-5xl font-bold text-gray-800">Todos los miembros</p>
        </div>

        <div class="grid grid-cols-5 my-10 mx-16 gap-5">
             <img src="{{ asset('img/foto1.jpg') }}" alt="Descripción de la imagen" class="w-full mx-auto" />
             <img src="{{ asset('img/foto1.jpg') }}" alt="Descripción de la imagen" class="w-full mx-auto" />
            <img src="{{ asset('img/foto1.jpg') }}" alt="Descripción de la imagen" class="w-full mx-auto col-start-4" />
            <img src="{{ asset('img/foto1.jpg') }}" alt="Descripción de la imagen" class="w-full mx-auto" />
        </div>

        <div class="Text-right mx-60 Text-5Xl"> Backend</div>

        <div class="grid grid-cols-5 my-5 mx-16 gap-5 mr-20">
            <img src="{{ asset('img/foto1.jpg') }}" alt="Descripción de la imagen" class="w-full mx-auto" />
            <div class="mt-40 Text-right Text-5Xl">Branding</div>
        </div>

        <div class="grid grid-cols-5 my-10 mx-16 gap-5 -mt-60">
            <img src="{{ asset('img/foto1.jpg') }}" alt="Descripción de la imagen" class="w-full mx-auto col-start-5" />
        </div>

        <div class="Text-right mx-80 Text-5Xl"> UX/UI</div>

        <div class="grid grid-cols-5 my-10 mx-16 gap-5">
            <img src="{{ asset('img/foto1.jpg') }}" alt="Descripción de la imagen" class="w-full mx-auto" />
            <img src="{{ asset('img/foto1.jpg') }}" alt="Descripción de la imagen" class="w-full mx-auto" />
        </div>
        <div class="pl-60 Text-5Xl">Frontend</div>
       </div>
    </div>

    {{-- esta onda no funciona --}}
    {{-- <div class="h-screen">
        <hr class="border-t-2 border-black mx-auto w-full" style="margin-top: 80px;" />
    </div> --}}

    </div>
    <div>
    </div>
    </div>
    </div>
</x-layout>
