<body class="bg-gray-100">
    <header class="bg-click-primaryYellow p-4 shadow-md flex justify-between items-center">
        <div class="flex items-center">
            <span class="material-symbols-outlined cursor-pointer" id="menuButton">
                menu
            </span>

            <img src="{{ asset('img/logoBlanco.png') }}" width="150" aling="center" class="ml-4">
        </div>

        <nav class="space-x-4">

            <a href="signup" class="text-slate-950	 hover:text-gray-100">Registrarse</a>
            <a href="login" class="text-slate-950	 hover:text-gray-100">Iniciar Sesión</a>

        </nav>
    </header>

    <aside class="fixed z-40 inset-y-0 left-0 w-64 bg-click-primaryYellow shadow-md sidebar sidebar-closed" id="sidebar">
        <div class="p-4">
            <span class="material-symbols-outlined cursor-pointer" id="closeButton">
                close
            </span>
            <nav class="mt-8">
                <img src="{{ asset('img/Principal.png') }}" width="140" height="10" aling="center">

                @guest
                <b><a href="/" class="block text-slate-950 hover:text-gray-100 text-xl h-9">Página Principal</a></b>
                <b><a href="signup" class="block text-slate-950 hover:text-gray-100 text-xl h-9">Registrarse</a></b>
                <b><a href="login" class="block text-slate-950 hover:text-gray-100 text-xl h-9">Iniciar Sesión</a></b>
                <b><a href="calendar" class="block text-slate-950 hover:text-gray-100 text-xl h-9">Calendario</a></b>
                <b><a href="education" class="block text-slate-950 hover:text-gray-100 text-xl h-9">Educacion </a></b>
                <b><a href="offer" class="text-slate-950 hover:text-gray-100 text-xl h-9">Ofertas</a></b>

                @endguest

                @auth
                <b><a href="/" class="block text-slate-950 hover:text-gray-100 text-xl h-9">Página Principal</a></b>
                <b><a href="calendar" class="block text-slate-950 hover:text-gray-100 text-xl h-9">Calendario</a></b>
                <b><a href="education" class="block text-slate-950 hover:text-gray-100 text-xl h-9">Educacion </a></b>
                <b><a href="offer" class="text-slate-950 hover:text-gray-100 text-xl h-9">Ofertas</a></b>
                @endauth


            </nav>

        </div>
    </aside>
