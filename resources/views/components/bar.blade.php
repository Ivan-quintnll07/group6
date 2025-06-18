<body class="bg-gray-100">
    <header class="bg-sky-950 p-4 shadow-md flex justify-between items-center">
        <head>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
          </head>

        <div class="flex items-center">
            <span class="material-symbols-outlined cursor-pointer" id="menuButton" style="color: white">
                menu
            </span>

            <img src="{{ asset('img/c&c white.png') }}" width="50" aling="center" class="ml-4">
        </div>

        @guest
        <nav class="space-x-4">

          <span flex itemas-center class="text-white">
            <i  class="fas fa-user-plus"></i>
            <a href="perfil" class="text-white hover:text-gray-300">Perfil</a>

        </nav>
        @endguest
    </header>

    <aside class="fixed z-40 inset-y-0 left-0 w-64 shadow-xl sidebar sidebar-closed" id="sidebar" style="background-image: url('img/xiaoxiao.jpg'); background-size: cover; background-position: center; backdrop-filter: blur(8px); background-color: rgba(0,0,0,0.4);">
    <div class="p-4" style="color: white;">
        <span class="material-symbols-outlined cursor-pointer" id="closeButton" style="color: white;">
            close
        </span>
        <nav style="margin-top: 2rem;">
            <img src="{{ asset('img/Principal.png') }}" width="140" style="margin: 0 auto 1.5rem auto; display: block;">

            @guest
            <b><a href="/" style="display: inline-block; color: #60A5FA hover:text-gray-100; text-decoration: none; font-size: 18px; h; margin-bottom: 15px;">
                <i class="fas fa-home"></i> Página Principal</a></b><br>

            <b><a href="signup" style="display: inline-block; color: #60A5FA; text-decoration: none; font-size: 18px; margin-bottom: 15px;">
                <i class="fas fa-user-plus"></i> Registrarse</a></b><br>

            <b><a href="login" style="display: inline-block; color: #60A5FA; text-decoration: none; font-size: 18px; margin-bottom: 15px;">
                <i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a></b><br>

            <b><a href="calendar" style="display: inline-block; color: #60A5FA; text-decoration: none; font-size: 18px; margin-bottom: 15px;">
                <i class="fas fa-calendar-alt"></i> Calendario</a></b><br>

            <b><a href="addCard" style="display: inline-block; color: #60A5FA; text-decoration: none; font-size: 18px; margin-bottom: 15px;">
                <i class="fas fa-credit-card"></i> Agregar Tarjeta</a></b><br>

            <b><a href="education" style="display: inline-block; color: #60A5FA; text-decoration: none; font-size: 18px; margin-bottom: 15px;">
                <i class="fas fa-graduation-cap"></i> Educación</a></b><br>

            <b><a href="offers" style="display: inline-block; color: #60A5FA; text-decoration: none; font-size: 18px; margin-bottom: 15px;">
                <i class="fas fa-tags"></i> Ofertas</a></b><br>
            @endguest

            @auth
            <b><a href="/" style="display: inline-block; color: #eeeff1; text-decoration: none; font-size: 18px; margin-bottom: 10px;">
                <i class="fas fa-home"></i> Página Principal</a></b><br>

            <b><a href="calendar" style="display: inline-block; color: #f1f2f5; text-decoration: none; font-size: 18px; margin-bottom: 10px;">
                <i class="fas fa-calendar-alt"></i> Calendario</a></b><br>

            <b><a href="education" style="display: inline-block; color: #eeeff1; text-decoration: none; font-size: 18px; margin-bottom: 10px;">
                <i class="fas fa-graduation-cap"></i> Educación</a></b><br>

            <b><a href="addCard" style="display: inline-block; color: #f4f6fa; text-decoration: none; font-size: 18px; margin-bottom: 10px;">
                <i class="fas fa-credit-card"></i> Agregar Tarjeta</a></b><br>

            <b><a href="offers" style="display: inline-block; color: #f4f5f7; text-decoration: none; font-size: 18px; margin-bottom: 10px;">
                <i class="fas fa-tags"></i> Ofertas</a></b><br>
            @endauth
        </nav>
    </div>
</aside>
