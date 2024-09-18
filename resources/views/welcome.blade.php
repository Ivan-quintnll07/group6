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


        <div class="bg-white flex flex-col justify-start pt-16 w-full">
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
                        <img src="{{ asset('img/creditCard2.jpg') }}"alt="Slide 1" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/creditCard1.jpg') }}"  alt="Slide 2" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/creditCard3.jpg') }}"  alt="Slide 3" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/creditCard4.jpg') }}"  alt="Slide 4" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/creditCard5.jpg') }}"  alt="Slide 5" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/creditCard6.jpg') }}" alt="Slide 6" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/creditCard7.jpg') }}"  alt="Slide 7" />
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
                <p class="text-5xl font-bold text-gray-800 mt-14 pl-6">Nuestra historia</p>
                <p class="text-base font-bold text-gray-800 w-96 mt-6 mt-10 pb-8 text-left pl-6">Click and Save, a website created with the objective to help people saving money by offers, getting the most out of their credit cards and a tool to learn about financial education. Our backend and frontend members used Laravel, CSS, MySQL, Tailwind, and JavaScript (JSS) for the development of the website, which took 7 months to complete and our branding member who used Adobe Ilustrator to create the website desing. This whole process is also thanks to our mentor Ms. Alejandra Quiroa who was in charge of our project.</p>
            </div>

            <div class="absolute bottom-5 right-20 animate-bounce">
                <img src="{{ asset('img/Principal.png') }}" alt="Descripción de la imagen" class="w-70 h-80" />
            </div>

            <div class="absolute bottom-60 left-10">
            </div>
        </div>
    </div>
    <div class="h-screen">
        <div class="left-2 w-full pt-10">
            <p class="text-center text-5xl font-bold text-gray-800">Todos los miembros</p>
        </div>

        <div class="grid grid-cols-5 my-10 mx-16 gap-5">
             <img src="{{ asset('img/fernanda.jpeg') }}" alt="Descripción de la imagen" class="w-full mx-auto" />
             <img src="{{ asset('img/amelia.jpeg') }}" alt="Descripción de la imagen" class="w-full mx-auto" />
            <img src="{{ asset('img/Elias.jpeg') }}" alt="Descripción de la imagen" class="w-full mx-auto col-start-4" />
            <img src="{{ asset('img/iván.jpeg') }}" alt="Descripción de la imagen" class="w-full mx-auto col-start-5" />
        </div>

        <div class="grid grid-cols-5">
            {{-- <p class="text-5xl col-span-2 text-center col-span-4">Backend</p> --}}
        </div>


        <div class="grid grid-cols-5 my-5 mx-16 gap-5 mr-20">
            <img src="{{ asset('img/xiomara.jpeg') }}" alt="Descripción de la imagen" class="w-full mx-auto" />
            {{-- <div class="mt-40 Text-right Text-5Xl">Branding</div> --}}
        </div>

        <div class="grid grid-cols-5 my-10 mx-16 gap-5 -mt-60">
            <img src="{{ asset('img/mariana.jpeg') }}" alt="Descripción de la imagen" class="w-full mx-auto col-start-4" />
            <img src="{{ asset('img/Sonia.jpeg') }}" alt="Descripción de la imagen" class="w-full mx-auto " />
        </div>

        {{-- <div class="Text-right mx-80 Text-5Xl"> UX/UI</div> --}}

        <div class="grid grid-cols-5 my-10 mx-16 gap-5">
            <img src="{{ asset('img/sofia.jpeg') }}" alt="Descripción de la imagen" class="w-full mx-auto" />
            <img src="{{ asset('img/Brandon.jpeg') }}" alt="Descripción de la imagen" class="w-full mx-auto" />
        </div>
        {{-- <div class="pl-60 Text-5Xl">Frontend</div> --}}


        <div class="bg-gray-100">
            <hr class="border-t-2 border-black mx-auto w-full" style="margin-top: 80px;" />
            <div class="bg-click-primaryYellow text-click-primaryYellow">hola</div>
            <div class="pt-40">


            <div class="h-screen">
                <div class="grid grid-cols-3">

                    <div class="bg-gray-300 col-start-1 mr-20 h-30 drop-shadow-lg transition ease-in delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110  duration-600">
                        <div class="text-center pt-20 pb-8 font-poppins text-5xl">  Vision </div>
                     <div class="space-y-10 text-center px-8">
                        <p> To be a platform recognized for its reliability, where users turn to for a unique savings experience. Locally known where people have easy access to the promotions offered by credit cards.</p>
                     </div>
                    </div>

                    <div class="bg-gray-300 col-start-2 h-30 drop-shadow-lg transition ease-in delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 duration-600">
                        <div class="text-center pt-20 pb-8 font-poppins text-5xl"> Values </div>
                     <div class="space-y-10 text-center px-8">
                        <p>Integrity: In our website there will always be respect acting in a fair and ethical manner. </p>
                        <p>Honesty: To be transparent with the information collected. </p>
                        <p>Trustworthiness: Convey reliability through information supported by official sites. </p>
                        <p class="pb-8">Innovation: Constantly seek new and creative ways to address challenges and improve professionally.</p>
                     </div>
                    </div>

                    <div class="bg-gray-300 col-start-3 ml-20 drop-shadow-lg transition ease-in delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 duration-600">
                        <div class="text-center pt-20 pb-8 font-poppins text-5xl">  Mission </div>
                     <div class="space-y-10 text-center px-8">
                        <p>To provide the best user experience to consumers through the innovation of knowledge in terms of information and benefits of a credit card through the web site that we will provide, offering reliable information. </p>
                     </div>
                    </div>
                </div>
            </div>


            <footer class="bg-click-primaryYellow">
                <p class="text-center text-5xl pt-8 pb-20 ">Contact</p>
                <div class="px-20">
                    <div class="flex flex-wrap justify-between items-start">
                        <form action="{{ route('contact') }}" method="POST">
                            @csrf

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6 pb-10">
                                <div>
                                <label for="first_name" class="block text-sm font-medium space-y-4">Name</label>
                                <input type="text" name="first_name" id="first_name" class="w-full border-0 border-b-2 border-gray-400 bg-transparent focus:border-click-primaryYellow focus:outline-none" required></input>
                                </div>

                                <div>
                                <label for="last_name" class="block text-sm font-medium ">Last name</label>
                                <input type="text" name="last_name" id="last_name" class="w-full border-0 border-b-2 border-gray-400 bg-transparent focus:border-click-primaryYellow focus:outline-none" required></input>
                                </div>

                                <div>
                                <label for="email" class="block text-sm font-medium">Email</label>
                                <input type="email" name="email" id="email" class="w-full border-0 border-b-2 border-gray-400 bg-transparent focus:border-click-primaryYellow focus:outline-none" required></input>
                                </div>

                                <div>
                                <label for="cellphone" class="block text-sm font-medium">Cellphone</label>
                                <input type="text" name="cellphone" id="cellphone" class="w-full border-0 border-b-2 border-gray-400 bg-transparent focus:border-click-primaryYellow focus:outline-none" required></input>
                                </div>

                                <div class="absolute right-40">
                                <label for="comments" class="block text-sm font-medium">Send us a message...</label>
                                <input name="comments" id="comments" rows="4" class="w-80 border-0 border-b-2 border-gray-400 bg-transparent focus:border-click-primaryYellow focus:outline-none" required></input>
                                </div>

                                <div class="flex absolute right-40 pt-20">
                                <button type="submit" class="w-60 border-2 text-3xl border-slate-900 bg-transparent text-black py-2 px-2 transition ease-in delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 duration-600">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </footer>

                </div>
            </div>
        </div>
       </div>
    </div>
     </div>
    </div>
    </div>
</x-layout>
