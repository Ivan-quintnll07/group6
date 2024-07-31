<body class="bg-gray-100">
    <header class="bg-click-primaryYellow p-4 shadow-md flex justify-between items-center">
        <span class="material-symbols-outlined cursor-pointer" id="menuButton">
            menu
        </span>

        <nav class="space-x-4">
            <a href="aboutUs" class="text-slate-950	 hover:text-gray-100">Sobre nosotros</a>
            <a href="signup" class="text-slate-950	 hover:text-gray-100">Registrarse</a>
            <a href="login" class="text-slate-950	 hover:text-gray-100">Iniciar Sesión</a>
        </nav>
    </header>

    <aside class="fixed inset-y-0 left-0 w-64 bg-click-primaryYellow shadow-md sidebar sidebar-closed" id="sidebar">
        <div class="p-4">
            <span class="material-symbols-outlined cursor-pointer" id="closeButton">
                close
            </span>
            <nav class="mt-8">
                <img src="Principal.png"/>

                <a href="aboutUs" class="block text-slate-950 hover:text-gray-900 mb-4">Sobre nosotros</a>

                @guest
                <a href="signup" class="block text-slate-950 hover:text-gray-900 mb-4">Registrarse</a>
                <a href="login" class="block text-slate-950 hover:text-gray-900">Iniciar Sesión</a>
                @endguest

                @auth
                <a href="signup" class="block text-slate-950 hover:text-gray-900 mb-4">XDXXDXD</a>
                @endauth

                <a href="welcome" class="block text-slate-950 hover:text-gray-900">Pagina Principal</a>
            </nav>

        </div>
    </aside>
