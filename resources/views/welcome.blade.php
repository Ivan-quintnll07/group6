<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>C&S</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
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
    <header class="bg-white p-4 shadow-md flex justify-between items-center">
        <span class="material-symbols-outlined cursor-pointer" id="menuButton">
            menu
        </span>
        <nav class="space-x-4">
            <a href="aboutUs" class="text-gray-600 hover:text-gray-900">Sobre nosotros</a>
            <a href="register" class="text-gray-600 hover:text-gray-900">Registrarse</a>
            <a href="login" class="text-gray-600 hover:text-gray-900">Iniciar Sesión</a>
        </nav>
    </header>

    <aside class="fixed inset-y-0 left-0 w-64 bg-white shadow-md sidebar sidebar-closed" id="sidebar">
        <div class="p-4">
            <span class="material-symbols-outlined cursor-pointer" id="closeButton">
                close
            </span>
            <nav class="mt-8">
                <a href="aboutUs" class="block text-gray-600 hover:text-gray-900 mb-4">Sobre nosotros</a>
                <a href="singup" class="block text-gray-600 hover:text-gray-900 mb-4">Registrarse</a>
                <a href="login" class="block text-gray-600 hover:text-gray-900">Iniciar Sesión</a>

                <a href="homepage" class="block text-gray-600 hover:text-gray-900">Pagina Principal</a>
            </nav>
        </div>
    </aside>

    <main class="flex items-center justify-center h-screen bg-cover" style="background-image: url('https://clubwyndham.wyndhamdestinations.com/content/dam/wyndham/wyndham-vacation-clubs/city-guide/myrtle-beach-destination-guide/myrtle-beach-destination-boardwalk-shopping-1990x810.jpg');">
        <div class="flex items-center justify-start h-full p-8">
            <div class="bg-white bg-opacity-75 p-8 rounded-lg shadow-lg text-center max-w-lg">
                <h1 class="text-5xl font-bold mb-4">C&S</h1>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
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
