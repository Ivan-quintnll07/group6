<x-layout>
    <x-bar />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    <div class="grid grid-cols-1 md:grid-cols-2 h-screen">

        <!-- Columna izquierda: Imagen -->
        <div class="hidden md:block">
            <img src="{{ asset('img/newlogin.png') }}" alt="Login" class="w-full h-full object-cover">
        </div>

        <!-- Columna derecha: Formulario -->
        <div class="flex items-center justify-center bg-white px-8">
            <div class="w-full max-w-md">

                <!-- Logo -->
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('img/Logo largoxd.png') }}" alt="Click&Save Logo" class="h-10">
                </div>

                <!-- Texto -->
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Hola,</h2>
                <h3 class="text-xl text-gray-600 mb-6">Bienvenido de nuevo</h3>

                {{-- Mostrar error general --}}
                @if ($errors->has('email'))
                    <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
                        {{ $errors->first('email') }}
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST" class="space-y-4">
                    @csrf

                    <!-- Usuario -->
                    <div>
                        <label class="block text-gray-700">Email o usuario</label>
                        <input type="text" name="email" value="{{ old('email') }}" required
                            class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-click-primaryCyan focus:outline-none">
                        @error('email')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Contraseña -->
                    <div>
                        <label class="block text-gray-700">Contraseña</label>
                        <input type="password" name="password" required
                            class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-click-primaryCyan focus:outline-none">
                        @error('password')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Checkbox -->
                    <div class="flex items-center justify-between">
                        <label class="flex items-center">
                            <input type="checkbox" name="remember" class="form-checkbox text-click-primaryCyan">
                            <span class="ml-2 text-gray-600 text-sm">Recuérdame</span>
                        </label>
                        <a href="/signup" class="text-sm text-click-primaryCyan hover:underline">¿Olvidaste tu contraseña?</a>
                    </div>

                    <!-- Botón -->
                    <button type="submit"
                        class="bg-blue-500 hover:bg-gray-700 items-center text-gray font-poppins rounded px-12 py-3 focus:outline-none focus:shadow-outline">
                        Iniciar Sesión
                    </button>
                </form>

                <p class="text-sm text-center mt-4">
                    ¿No tienes una cuenta?
                    <a href="/register" class="text-click-primaryCyan font-semibold hover:underline">Crear cuenta</a>
                </p>
            </div>
        </div>
    </div>

</x-layout>
