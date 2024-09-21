<x-layout>
    <div class="bg-gray-100 overflow-clip ">
        <x-bar />

        <main class="flex items-center justify-center relative">

            <section class="h-[calc(100vh-50px)] w-1/2 bg-cover " style="background-image: url({{ asset('img/home1.jpg') }})"></section>
            <section class="h-[calc(100vh-50px)] w-1/2 bg-cover "
                style="background-image: url({{ asset('img/home2.jpg') }})"></section>

            <div class="absolute flex items-center justify-start h-full p-8 opacity-100 text-white">
                <div class="p-8 rounded-lg text-center max-w-lg ">
                    <h1 class="text-2xl text-justify mb-4">Ready to save money? Join "Click & Save" today and get the best credit card deals in one place. </h1>
                    <a href="{{ route('login') }}"
                        class="text-black text-2xl px-4 py-2 underline underline-offset-1">Login</a>
                    <a href="{{ route('registro') }}"
                        class="text-black text-2xl px-4 py-2 underline underline-offset-1">Register</a>
                </div>
            </div>
        </main>


        <div class="bg-white flex flex-col justify-start pt-16 w-full">
            <div class="text-center mx-auto mb-8 max-w-5xl mx-auto">
                <h2 class="text-5xl mb-4 italic font-thin">"Click and Save: gathering the best deals in one
                    place"</h2>
            </div>

            <hr class="border-t-2 border-black mx-auto w-full" style="margin-top: 80px;" />
        </div>

        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
            <div class="parallax-bg" data-swiper-parallax="-23%" style="background-image: url({{ asset('img/PP1.jpg') }})"></div>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="title" data-swiper-parallax="-300">Tarjetas de crédito</div>
                <div class="subtitle" data-swiper-parallax="-200">¿Qué son y cómo usarlas responsablemente?</div>
                <div class="text" data-swiper-parallax="-100">
                  <p>
                    El siguiente video muestra lo que es una tarjeta de crédito, también los beneficios que te puede brindar. Hacer uso responsable es clave. Las tarjetas de crédito tienen diferentes ventajas que te pueden ser útil.
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="title" data-swiper-parallax="-300">Conceptos clave</div>
                <div class="subtitle" data-swiper-parallax="-200"></div>
                <div class="text" data-swiper-parallax="-100">
                  <p>
                    Este video explicará los conceptos clave de una tarjeta de crédito, como las fechas de corte y pago, estado de cuenta,etc
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="title" data-swiper-parallax="-300">Slide 3</div>
                <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
                <div class="text" data-swiper-parallax="-100">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                    dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
                    laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
                    Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
                    Aliquam hendrerit lorem at elit facilisis rutrum. Ut at
                    ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec,
                    tincidunt ut libero. Aenean feugiat non eros quis feugiat.
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
          </div>

        <hr class="border-t-2 border-black mx-auto w-full" style="margin-top: -0px;" />
        <div class="bg-click-primaryYellow text-click-primaryYellow">hola</div>

        <div class="relative h-screen">
            <div class="w-full h-[calc(100vh-125px)]  bg-cover text-center text-5xl text-white pt-12 font-bold"
                style="height: 125px; background-image: url({{ asset('img/PP1.jpg') }})"> About us</div>


            <div class="text-wrap pl-20 mb-8 w-full">
                <h3 class="text-6xl font-bold text-gray-800 mt-14 pl-6 text-center pr-14">Our history</h3>
                <p class="text-xl font-bold text-gray-800 w-1/2 mt-6 mt-10 text-left pl-6 mb-20 size-60 pt-20">Click and Save, a website created with the objective to help people saving money by offers, getting the most out of their credit cards and a tool to learn about financial education. Our backend and frontend members used Laravel, CSS, MySQL, Tailwind, and JavaScript (JSS) for the development of the website, which took 7 months to complete and our branding member who used Adobe Ilustrator to create the website desing. This whole process is also thanks to our mentor Ms. Alejandra Quiroa who was in charge of our project.</p>
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
            <p class="text-center text-5xl font-bold text-gray-800">All members</p>
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
