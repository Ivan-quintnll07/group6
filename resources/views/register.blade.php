<x-layout>

    <div class="flex justify-center items-center h-screen">
        <div class="w-96 p-6 shadow-lg bg-gray-400 rounded-md">
            <h1 class="text-6   x1 block text-center font-bold"> <i class="fa-regular fa-user"></i>Registrate</h1>
            <hr class="mt-3">
            <form class="bg-gray shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">

                    <x-input type="text" title="User" name="string"></x-input>


                    <label class="block text-gray-900 text-sm font-bold mb-2" for="username">
                        Usuario
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="Nombre de usuario">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-900 text-sm font-bold mb-2" for="password">
                        Contraseña
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="Contraseña">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-900 text-sm font-bold mb-2" for="bank">
                        Banco perteneciente
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-tight focus:outline-none focus:shadow-outline"
                        id="bank" type="text" placeholder="Banco">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-900 text-sm font-bold mb-2" for="card">
                        Tarjeta
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-tight focus:outline-none focus:shadow-outline"
                        id="card" type="text" placeholder="Número de tarjeta">
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-gray-500 hover:bg-gray-700 text-gray font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        ENVIAR
                    </button>
                </div>
            </form>
        </div>
    </div>


</x-layout>
