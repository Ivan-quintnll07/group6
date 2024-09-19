<x-layout>

   <x-bar></x-bar>

        <div class="flex items-center justify-center min-h-screen container mx-auto">

            <div class="grid grid-cols-1 md:grid-cols-2">

                <div class="card">

                        <div class="p-5 flex flex-col">

                            <video width="550" height="340" controls>
                                <source src="{{ asset("img/video/Video2.mp4") }}" type="video/mp4">  *se debe cambiar el videoooo*
                             </video>
                            <h5 class="text-2xl md:text-3xl font-medium mt-3">Tarjetas de crédito: ¿Qué son y cómo usarlas responsablemente?</h5>
                            <p>  El siguiente video muestra lo que es una tarjeta de crédito, también los beneficios que te puede brindar. Hacer uso responsable es clave. Las tarjetas de crédito tienen diferentes ventajas que te pueden ser útil. </p>

                        </div>

                </div>

                <div class="card">

                        <div class="p-5 flex flex-col">
                            <video width="550" height="340" controls>
                                <source src="{{ asset("img/video/Video1.mp4") }}" type="video/mp4">
                              </video>
                            <h5 class="text-2xl md:text-3xl font-medium mt-3"> Conceptos clave</h5>
                            <p> Este video explicará los conceptos clave de una tarjeta de crédito,
                                 como las fechas de corte y pago, estado de cuenta,etc</p>


                        </div>

                </div>
            </div>
            </div>
        </div>
</x-layout>
