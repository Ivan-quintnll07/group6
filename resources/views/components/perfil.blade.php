<x-layout>
    <x-bar/>

      <div class="flex justify-center items-center h-screen">
            <div class="backdrop-blur-sm bg-white/30 rounded-md px-6 py-6">
                <h1 class="text-6xl block text-center font-poppins">Perfil</h1>
                <hr class="mt-3">

                <form action="/login" method="POST" class="bg-gray shadow-md space-y-4 rounded px-8 pt-6 pb-8 mb-4">
                    @csrf
                    
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

                </div>
            </div>
        </div>
    </div>

</x-layout>
