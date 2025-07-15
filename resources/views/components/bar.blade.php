<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Click&Save</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <header class="bg-sky-950 p-4 shadow-md flex justify-between items-center">
        <div class="flex items-center">
            <img
                id="menuButton"
                src="{{ asset('img/c&c white.png') }}"
                width="50"
                class="cursor-pointer"
                alt="Click&Save"
            >
        </div>

        @auth
            <nav class="space-x-4 flex items-center text-white">
                <i class="fas fa-user-plus"></i>
                <a href="{{ url('perfil') }}" class="hover:text-gray-300">Perfil</a>
            </nav>
        @endauth
    </header>

    <aside class="fixed z-40 inset-y-0 left-0 w-64 shadow-xl sidebar sidebar-closed"
           id="sidebar"
           style="background-image: url('{{ asset('img/xiaoxiao.jpg') }}'); background-size: cover; background-position: center; backdrop-filter: blur(8px); background-color: rgba(0,0,0,0.4);">
        <div class="p-4 text-white">
            <span class="material-symbols-outlined cursor-pointer" id="closeButton">
                close
            </span>

            <img src="{{ asset('img/Principal.png') }}" width="140" class="mx-auto mb-6">

            <nav class="space-y-4 text-[18px]">

                @guest
                    <a href="/" class="block text-[#f4f6fa] hover:text-gray-100">
                        <i class="fas fa-home"></i> Página Principal
                    </a>
                    <a href="{{ url('offers') }}" class="block text-[#f4f6fa] hover:text-gray-100">
                        <i class="fa-solid fa-cart-shopping"></i> Promociones
                    </a>
                    <a href="{{ url('signup') }}" class="block text-[#f4f6fa] hover:text-gray-100">
                        <i class="fas fa-user-plus"></i> Registrarse
                    </a>
                    <a href="{{ url('login') }}" class="block text-[#f4f6fa] hover:text-gray-100">
                        <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                    </a>
                    <a href="{{ url('calendar') }}" class="block text-[#f4f6fa] hover:text-gray-100">
                        <i class="fas fa-calendar-alt"></i> Calendario
                    </a>
                    <a href="{{ url('education') }}" class="block text-blue-400 hover:text-gray-100">
                        <i class="fas fa-graduation-cap"></i> Educación
                    </a>
                @endguest

                @auth
                    <a href="{{ url('/principal') }}" class="block text-[#eeeff1] hover:text-gray-100">
                        <i class="fas fa-home"></i> Página Principal
                    </a>
                    <a href="{{ url('offers') }}" class="block text-[#eeeff1] hover:text-gray-100">
                        <i class="fa-solid fa-cart-shopping"></i> Promociones
                    </a>
                    <a href="{{ url('favoritos') }}" class="block text-[#eeeff1] hover:text-gray-100">
                        <i class="fa-solid fa-cart-shopping"></i> Favoritos
                    </a>
                    <a href="{{ url('calendar') }}" class="block text-[#f1f2f5] hover:text-gray-100">
                        <i class="fas fa-calendar-alt"></i> Calendario
                    </a>
                    <a href="{{ url('education') }}" class="block text-[#eeeff1] hover:text-gray-100">
                        <i class="fas fa-graduation-cap"></i> Educación
                    </a>
                    <a href="{{ url('addCard') }}" class="block text-[#f4f6fa] hover:text-gray-100">
                        <i class="fas fa-credit-card"></i> Agregar Tarjeta
                    </a>
                    <a href="{{ url('changeCard') }}" class="block text-[#eeeff1] hover:text-gray-100">
                        <i class="fas fa-credit-card"></i> Cambiar Tarjeta
                    </a>
                @endauth

            </nav>
        </div>
    </aside>

</body>
</html>
