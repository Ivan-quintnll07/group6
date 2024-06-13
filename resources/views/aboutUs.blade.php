<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .sidebar {
            transition: transform 0.3s ease;
        }
        .sidebar-closed {
            transform: translateX(-100%);
        }
    </style>
</head>
<body class="bg-gray-100">
    <header class="bg-white text-black p-4 flex justify-between items-center shadow">
        <button id="menuButton" class="mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
        <div class="rounded-full bg-gray-200 h-8 w-8 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c2.21 0 4-1.79 4-4S14.21 3 12 3 8 4.79 8 7s1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z" />
            </svg>
        </div>
    </header>

    <aside class="fixed inset-y-0 left-0 w-64 bg-white shadow-md sidebar sidebar-closed" id="sidebar">
        <div class="p-4">
            <span class="material-symbols-outlined cursor-pointer" id="closeButton">
                close
            </span>
            <nav class="mt-8">
                <a href="aboutUs" class="block text-gray-600 hover:text-gray-900 mb-4">Sobre nosotros</a>
                <a href="register" class="block text-gray-600 hover:text-gray-900 mb-4">Registrarse</a>
                <a href="login" class="block text-gray-600 hover:text-gray-900 mb-4">Iniciar Sesión</a>
                <a href="homepage" class="block text-gray-600 hover:text-gray-900">Pagina Principal</a>
            </nav>
        </div>
    </aside>

    <main class="max-w-5xl mx-auto p-6 bg-white mt-8 rounded-lg shadow-lg">
        <section class="md:flex md:space-x-6">
            <div class="md:w-1/2 space-y-4">
                <img src="Descargas/descarga.png" alt="us" width="500" height="600">
            </div>
            <div class="md:w-1/2 mt-6 md:mt-0">
                <h2 class="text-2xl font-bold mb-4">Sobre nosotros</h2>
                <p class="text-gray-700 mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <p class="text-gray-700">
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
        </section>
    </main>

    <script>
        document.getElementById('menuButton').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('sidebar-closed');
        });

        document.getElementById('closeButton').addEventListener('click', function() {
            document.getElementById('sidebar').classList.add('sidebar-closed');
        });
    </script>
</body>
</html>
