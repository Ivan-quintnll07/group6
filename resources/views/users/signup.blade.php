<x-layout>
    <form action="/register" method="POST">
        @csrf

        <x-input name="name" type="text">Nombre completo</x-input>
        <x-input name="email" type="text">Email</x-input>
        <x-input name="password" type="password">Password</x-input>

        <x-primary-button>Crear cuenta</x-primary-button>
    </form>
</x-layout>
