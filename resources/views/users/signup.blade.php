<x-layout>
    <div class="flex justify-center items-center h-screen">
        <div class="w-96 p-6 shadow-lg bg-gray-400 rounded-md">
            <h1 class="text-6   x1 block text-center font-bold"> <i class="fa-regular fa-user"></i>Registrate</h1>
            <hr class="mt-3">
            <form class="bg-gray shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
    <form action="/register" method="POST">
        @csrf

        <x-input name="name" type="text">Nombre completo</x-input>
        <x-input name="email" type="text">Email</x-input>
        <x-input name="password" type="password">Password</x-input>

        <div class="flex items-center justify-between">

        </div>

        <x-primary-button>Crear cuenta</x-primary-button>
    </form>
</x-layout>
