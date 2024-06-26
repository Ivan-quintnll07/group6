<x-layout>
    <div class="flex flex-col bg-cover bg-center">

        <header class="bg-gray-200 p-4 flex justify-between items-center shadow-md">
            <span class="material-icons-outlined cursor-pointer" id="menuButton"> menu </span>
            <span class="flex justify-items-center items-center "> Ofertas </span>
            <span class="material-icons-outlined"> account_circle </span>

        </header>

    </div>

    <div class="grid grid-cols-4 my-4 space-x-5 space-y-5">
        <h1 class="col-span-1 row-span-2 flex items-center justify-center">Restaurantes</h1>
        <x-card-offer title=" Por una quesadilla y un café de 9oz por:" price="$2.99" image="img/Juan Valdez Cafe.jpg" logo="img/Cafe.jpeg" description="Acompaña una deliciosa taza de café con una quesadilla a un ¡Súper precio! al pagar con tu Tarjeta Crédito o Débito. Válido desde el 1 al 31 de mayo."/>

    </div>
</x-layout>
