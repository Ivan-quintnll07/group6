<x-layout>
    <x-bar></x-bar>

    <div class="grid grid-cols-4 my-4 space-x-5 space-y-5">
        <h1 class="col-span-1 row-span-2 flex items-center justify-center">Restaurantes</h1>

        <x-card-offer title='{{ $supply -> title}}' price="$2.99" image="img/Juan Valdez Cafe.jpg" logo="img/Cafe.jpeg" description="Acompaña una deliciosa taza de café con una quesadilla a un ¡Súper precio! al pagar con tu Tarjeta Crédito o Débito. Válido desde el 1 al 31 de mayo."/>

    </div>
</x-layout>
