<x-layout>
    <div class="flex flex-col h-screen bg-cover bg-center"
        style="background-image: <img src="{{ asset('img/logoBlanco.png') }} width="150" aling="center" class="ml-4">

        <x-bar></x-bar>


        <div class="flex-grow flex items-center justify-center">
            <div class="bg-white bg-opacity-75 p-8 rounded-lg shadow-lg max-w-lg w-full"
                style="background-color: rgba(255, 255, 255, 0.85);">
                <h1 class="text-4xl font-bold mb-6 text-center">Perfil</h1>
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


</x-layout>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
