<x-layout>
    <div class="flex flex-col h-screen bg-cover bg-center"
        style="background-image: url('https://img.freepik.com/fotos-premium/pared-blanca-hoja-palma-sombra-palmera_902049-16530.jpg');">
        <div class="flex justify-center items-center h-screen">
            <div class="backdrop-blur-sm bg-white/30 rounded-md">
                <h1 class="text-6   x1 block text-center font-bold"> <i class="fa-regular fa-user"></i>Registrate</h1>
                <hr class="mt-3">
                <form action="/register" method="POST" class="bg-gray shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    <x-input name="name" type="text">Nombre completo</x-input>
                    <x-input name="email" type="text">Email</x-input>
                    <x-input name="password" type="password">Password</x-input>
                    <x-primary-button>Crear cuenta</x-primary-button>
                </form>
            </div>
        </div>
</x-layout>
