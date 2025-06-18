<x-layout>
    <x-bar/>

    <div class="flex h-screen font-sans">
        {{-- Lado Izquierdo: Formulario --}}
        <div class="w-1/2 flex flex-col justify-center items-center px-10 bg-white">

            <h2 class="text-2xl font-bold mb-1">¡Bienvenido!</h2>
            <p class="text-sm mb-6">Crea tu cuenta aquí</p>


            <!-- Formulario -->
            <form method="POST" action="/register" class="w-full max-w-md space-y-3">
                @csrf
                <x-input name="name" type="text">Usuario</x-input>
                <x-input name="email" type="email">Email</x-input>
                <x-input name="password" type="password">Contraseña</x-input>
                <x-input name="card_provider" type="text">Proveedor de tarjeta</x-input>
                <x-input name="card_type" type="text">Tipo de tarjeta</x-input>
                <x-input name="cut_date" type="date">Fecha de corte</x-input>
                <x-input name="pay_date" type="date">Fecha de pago</x-input>

                <x-primary-button class="w-full bg-blue-900 text-white py-3 rounded mt-2">

                </x-primary-button>
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
        <img src="{{ asset('img/Main.png') }}" class="max-w-[300px] absolute top 1/2 left-20 w-full">

    </div>
        </div>
    </div>
</x-layout>
