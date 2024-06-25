<x-layout>
    <div class="flex flex-col bg-cover bg-center">

        <header class="bg-gray-200 p-4 flex justify-between items-center shadow-md">
            <span class="material-icons-outlined cursor-pointer" id="menuButton"> menu </span>
            <span class="flex justify-items-center items-center "> Ofertas </span>
            <span class="material-icons-outlined"> account_circle </span>

        </header>

    </div>

    <div class="grid grid-cols-4 my-7">
        <h1 class="col-span-1 flex items-center justify-center">Restaurantes</h1>
        <x-card-offer> </x-card-offer>
    </div>

</x-layout>
