<x-layout> <x-bar/>

    <div class="flex h-screen font-sans">
        {{-- Lado Izquierdo: Formulario --}}
        <div class="w-1/2 flex flex-col justify-center items-center px-10 bg-white">
            <h2 class="text-4xl font-bold mt-4">¡Bienvenido!</h2>
            <p class="text-xl mb-6 text-gray-600">Crea tu cuenta aquí</p>


            <!-- Formulario -->
            <form method="POST" action="/register" class="space-y-4 w-full max-w-md">
                @csrf
                <input type="text" name="username" placeholder="Usuario" class="w-full p-3 border rounded bg-gray-100" required>
                <input type="email" name="email" placeholder="Email" class="w-full p-3 border rounded bg-gray-100" required>
                <input type="password" name="password" placeholder="Contraseña" class="w-full p-3 border rounded bg-gray-100" required>

                 <select name="proveedor" class="w-full p-3 border rounded bg-gray-100">
                    <option value="">Proveedor de tarjeta</option>
                    <option value="visa">Visa</option>
                    <option value="mastercard">MasterCard</option>
                </select>

                <select name="tipo_tarjeta" class="w-full p-3 border rounded bg-gray-100">
                    <option value="">Tipo de tarjeta</option>
                    <option value="credito">Crédito</option>
                    <option value="debito">Débito</option>
                </select>
                  <input type="date" name="fecha_corte" class="w-full p-3 border rounded bg-gray-100">
                <input type="date" name="fecha_pago" class="w-full p-3 border rounded bg-gray-100">

                <x-primary-button class="w-full bg-blue-900 text-white py-3 rounded mt-2 hover:bg-blue-800"> </x-primary-button>
            </form>

            <p class="mt-6 text-sm">
                ¿Ya tienes una cuenta?
                <a href="{{ route('login') }}" class="font-bold">Iniciar Sesión</a>
            </p>
        </div>

        {{-- Lado Derecho: Imagen de fondo con logo --}}
        <div class="w-1/2 relative">
            <img src="{{ asset('img/bg/registrarse.jpg') }}" alt="Fondo Click & Save"
                 class="w-full h-full object-cover"/>

            <!-- Logo centrado -->
            <div class="absolute inset-0 flex items-center justify-center z-10">
        <img src="{{ asset('img/Main.png') }}" class="max-w-[300px] absolute top 1/2 left-50 w-full">

            </div>
        </div>
    </div>
</x-layout>
