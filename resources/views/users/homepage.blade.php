<x-layout>
    <div class="flex flex-col h-screen bg-cover bg-center"
        style="background-image: url('https://www.rrd.com/uploads/thoughts/items/independent-health-upgrades-to-digital-payment-and-distribution-system-healthcare_20230228_pageimage.jpg');">

        <!-- Barra gris :D -->
        <header class="bg-gray-200 p-4 flex justify-between items-center shadow-md">
            <span class="material-icons-outlined cursor-pointer" id="menuButton">menu</span>
            <span class="material-icons-outlined">account_circle</span>
        </header>

        <!-- Sidebar  :< -->
        <aside id="sidebar"
            class="fixed inset-y-0 left-0 w-64 bg-white shadow-md transform -translate-x-full transition-transform duration-300 ease-in-out">
            <div class="p-4">
                <span class="material-icons-outlined cursor-pointer" id="closeButton">close</span>
                <nav class="mt-8">
                    <a href="aboutUs" class="block text-gray-600 hover:text-gray-900 mb-4">Sobre nosotros</a>
                    <a href="register" class="block text-gray-600 hover:text-gray-900 mb-4">Registrarse</a>
                    <a href="login" class="block text-gray-600 hover:text-gray-900 mb-4">Iniciar Sesión</a>
                    <a href="homepage" class="block text-gray-600 hover:text-gray-900">Pagina Principal</a>
                </nav>
            </div>
        </aside>


        <div class="flex-grow flex items-center justify-center">
            <div class="bg-white bg-opacity-75 p-8 rounded-lg shadow-lg max-w-lg w-full"
                style="background-color: rgba(255, 255, 255, 0.85);">
                <h1 class="text-4xl font-bold mb-6 text-center">Mis datos</h1>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center">
                        <span class="material-icons-outlined mr-2">person</span>
                        <input type="text"
                            class="text-gray-700 border-b-2 border-gray-300 w-full focus:border-blue-500 focus:outline-none"
                            placeholder="Usuario">
                    </div>
                    <div class="flex items-center">
                        <span class="material-icons-outlined mr-2">event</span>
                        <input type="date"
                            class="text-gray-700 border-b-2 border-gray-300 w-full focus:border-blue-500 focus:outline-none"
                            placeholder="Fecha de corte">
                    </div>
                    <div class="flex items-center">
                        <span class="material-icons-outlined mr-2">password</span>
                        <input type="password"
                            class="text-gray-700 border-b-2 border-gray-300 w-full focus:border-blue-500 focus:outline-none"
                            placeholder="Contraseña">
                    </div>
                    <div class="flex items-center">
                        <span class="material-icons-outlined mr-2">event</span>
                        <input type="date"
                            class="text-gray-700 border-b-2 border-gray-300 w-full focus:border-blue-500 focus:outline-none"
                            placeholder="Fecha de pago">
                    </div>
                    <div class="flex items-center">
                        <span class="material-icons-outlined mr-2">account_balance</span>
                        <select
                            class="text-gray-700 border-b-2 border-gray-300 w-full focus:border-blue-500 focus:outline-none">
                            <option value="" disabled selected>Banco perteneciente</option>
                            <option value="cuscatlan">Cuscatlan</option>
                            <option value="agricola">Agricola</option>
                            <option value="davivienda">Davivienda</option>
                        </select>
                    </div>
                </div>
                <div class="text-right mt-4">
                    <x-primary-button>Editar</x-primary-button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('menuButton').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        });

        document.getElementById('closeButton').addEventListener('click', function() {
            document.getElementById('sidebar').classList.add('-translate-x-full');
        });
    </script>
</x-layout>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
