<body class="bg-gray-100">
    <header class="bg-sky-950 p-4 shadow-md flex justify-between items-center">
        <head>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
          </head>

        <div class="flex items-center">
            <span class="material-symbols-outlined cursor-pointer" id="menuButton">
                menu
            </span>

            <img src="{{ asset('img/logoBlanco.png') }}" width="150" aling="center" class="ml-4">
        </div>

        @guest
        <nav class="space-x-4">

            <a href="signup" class="text-slate-950	 hover:text-gray-100">Registrarse</a>
            <a href="login" class="text-slate-950	 hover:text-gray-100">Iniciar Sesión</a>

        </nav>
        @endguest
    </header>

    <aside class="fixed z-40 inset-y-0 left-0 w-64 bg-sky-950 shadow-md sidebar sidebar-closed" id="sidebar">
        <div class="p-4">
            <span class="material-symbols-outlined cursor-pointer" id="closeButton">
                close
            </span>
            <nav class="mt-8">
                <img src="{{ asset('img/Principal.png') }}" width="140" height="10" aling="center">

                @guest
                <b><a href="/" class="block text-slate-950 hover:text-gray-100 text-xl h-9">
                    <i class="fas fa-home"></i> Página Principal</a></b>

                <b><a href="signup" class="block text-slate-950 hover:text-gray-100 text-xl h-9">
                    <i class="fas fa-user-plus"></i> Registrarse</a></b>

                <b><a href="login" class="block text-slate-950 hover:text-gray-100 text-xl h-9">
                    <i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a></b>

                <b><a href="calendar" class="block text-slate-950 hover:text-gray-100 text-xl h-9">
                    <i class="fas fa-calendar-alt"></i> Calendario</a></b>

                <b><a href="addCard" class="block text-slate-950 hover:text-gray-100 text-xl h-9">
                    <i class="fas fa-credit-card"></i> Agregar Tarjeta</a></b>

                <b><a href="education" class="block text-slate-950 hover:text-gray-100 text-xl h-9">
                    <i class="fas fa-graduation-cap"></i> Educación</a></b>

                <b><a href="offers" class="block text-slate-950 hover:text-gray-100 text-xl h-9">
                    <i class="fas fa-tags"></i> Ofertas</a></b>
                @endguest

                @auth
                <b><a href="/" class="block text-slate-950 hover:text-gray-100 text-xl h-9">
                    <i class="fas fa-home"></i> Página Principal</a></b>

                <b><a href="calendar" class="block text-slate-950 hover:text-gray-100 text-xl h-9">
                    <i class="fas fa-calendar-alt"></i> Calendario</a></b>

                <b><a href="education" class="block text-slate-950 hover:text-gray-100 text-xl h-9">
                    <i class="fas fa-graduation-cap"></i> Educación</a></b>

                <b><a href="addCard" class="block text-slate-950 hover:text-gray-100 text-xl h-9">
                    <i class="fas fa-credit-card"></i> Agregar Tarjeta</a></b>

                <b><a href="offers" class="block text-slate-950 hover:text-gray-100 text-xl h-9">
                    <i class="fas fa-tags"></i> Ofertas</a></b>
                @endauth



            </nav>

        </div>
    </aside>
