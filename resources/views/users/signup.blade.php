<x-layout>
    <x-bar/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <div class="flex flex-col h-screen bg-cover bg-center bg-['url({{asset('img/bg/registrarse.jpg')}})']"
            style="background-image: url('img/bg/registrarse.jpg')"
        >

        <div class="flex justify-center items-center h-screen">
            <div class="backdrop-blur-sm bg-white/30 rounded-md">
                <h1 class="text-6   x1 block text-center font-poppins"> <i class="fa-regular fa-user"></i>Registrate</h1>
                <hr class="mt-3">
                <form action="/register" method="POST" class="bg-gray shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    <span class="material-symbols-outlined">
                        person
                        </span>
                    <x-input name="name" type="text">Nombre completo</x-input>
                    <span class="material-symbols-outlined">
                        mail
                        </span>
                    <x-input name="email" type="text">Email</x-input>
                    <span class="material-symbols-outlined">
                        key
                        </span>
                    <x-input name="password" type="password">Password</x-input>
                    <x-primary-button>Crear cuenta</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
