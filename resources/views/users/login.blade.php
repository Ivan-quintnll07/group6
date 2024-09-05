<x-layout>
    <x-bar> </x-bar>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <div class="flex flex-col h-screen bg-cover bg-center bg-['url({{asset('img/bg/creditCard.jpg')}})']"
            style="background-image: url('img/bg/thumbnail_iniciar sesion.jpg')"
         >
        <div class="flex justify-center items-center h-screen">
            <div class="backdrop-blur-sm bg-white/30 rounded-md px-6 py-6">
                <h1 class="text-6xl block text-center font-poppins"><i class="fa-regular fa-user"></i> Iniciar Sesión</h1>
                <hr class="mt-3">
                <form action="/login" method="POST" class="bg-gray shadow-md space-y-4 rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    <div class="flex items-center">
                    <span class="material-symbols-outlined">
                        person
                        </span>
                        <x-input name="name" type="text">Nombre completo</x-input>
                    </div>

                    <div class="flex items-center">
                    <span class="material-symbols-outlined">
                        key
                    </span>
                    <x-input name="password" type="password">Contraseña</x-input>

                    </div>

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
