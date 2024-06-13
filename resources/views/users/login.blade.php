<x-layout>
    <div class="flex flex-col h-screen bg-cover bg-center"
        style="background-image: url('https://img.freepik.com/fotos-premium/pared-blanca-hoja-palma-sombra-palmera_902049-16530.jpg');">
        <div class="flex justify-center items-center h-screen">
            <div class="backdrop-blur-sm bg-white/30 rounded-md">
                <h1 class="text-6xl block text-center font-bold"><i class="fa-regular fa-user"></i> Inicia Sesión</h1>
                <hr class="mt-3">
                <form action="/login" method="POST" class="bg-gray shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    <x-input name="name" type="text">Nombre completo</x-input>
                    <x-input name="password" type="password">Contraseña</x-input>
                    <label class="flex items-center mt-2">
                        <input type="checkbox" class="form-checkbox">
                        <span class="ml-2 text-gray-600">Recuérdame</span>
                    </label>
                    <x-primary-button>Crear cuenta</x-primary-button>
                </form>
                <div class="flex justify-center mt-4">
                    <a href="#" class="text-blue-500 hover:underline"><i
                            class="fa-regular fa-question-circle"></i> ¿Olvidaste tu contraseña?</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
