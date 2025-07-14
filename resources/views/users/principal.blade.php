

<body class="bg-gray-100">
    <x-layout>
        <x-bar></x-bar>

        <main class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('img/tarjetahombre.png') }}')">

            <!-- Logo superior izquierdo -->
            <img src="{{ asset('img/logoBlanco.png') }}" alt="Logo" class="absolute top-4 left-4 w-16">

            <!-- Icono de usuario superior derecho -->
            <img src="{{ asset('img/iconoPerfil.png') }}" alt="Perfil" class="absolute top-4 right-4 w-10 h-10">

            <!-- Botones verticales lado derecho -->
            <div class="absolute top-1/2 right-4 transform -translate-y-1/2 text-white space-y-4 text-right">
                <a href="" class="block border-b border-white pb-1 hover:underline">Iniciar sesión</a>
                <a href="" class="block border-b border-white pb-1 hover:underline">Registrarse</a>

            </div>

            <!-- Logo central -->
            <div class="absolute top-1/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <img src="{{ asset('img/clicksave_logo.png') }}" alt="Click & Save Logo" class="w-72">
            </div>

            <!-- Cuadro inferior con accesos directos -->
            <div class="absolute bottom-0 inset-x-0 flex justify-center items-end mb-12">
                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 gap-12 p-8 bg-black bg-opacity-50 rounded-xl">
                    <a href="offer" class="bg-white bg-opacity-80 rounded-lg shadow-lg p-10 text-center text-black transform hover:scale-105 transition-transform">
                        <div class="mb-6">
                            <span class="material-icons" style="font-size: 64px;">shopping_bag</span>
                        </div>
                        <h3 class="text-2xl font-semibold">Promotions</h3>
                    </a>

                    <a href="education" class="bg-white bg-opacity-80 rounded-lg shadow-lg p-10 text-center text-black transform hover:scale-105 transition-transform">
                        <div class="mb-6">
                            <span class="material-icons" style="font-size: 64px;">menu_book</span>
                        </div>
                        <h3 class="text-2xl font-semibold">Financial Education</h3>
                    </a>

                    <a href="calendar" class="bg-white bg-opacity-80 rounded-lg shadow-lg p-10 text-center text-black transform hover:scale-105 transition-transform">
                        <div class="mb-6">
                            <span class="material-icons" style="font-size: 64px;">event</span>
                        </div>
                        <h3 class="text-2xl font-semibold">Calendar</h3>
                    </a>
                </div>
            </div>
        </main>
    </x-layout>
</body>
