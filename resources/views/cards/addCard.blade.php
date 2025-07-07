<x-layout>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    <form action="/cards/create" method="POST" class="flex flex-col min-h-screen bg-white">
        @csrf


        <x-bar />


        <div class="flex-grow flex flex-col items-center justify-start pt-10">


            <div class="flex space-x-6 text-3xl text-black mb-4">
                <button class="flex space-x-6 items-center focus:outline-none">
                    <span class="material-symbols-outlined">home</span>
                    <span class="material-symbols-outlined">favorite</span>
                    <span class="material-symbols-outlined">shopping_bag</span>
                    <span class="material-symbols-outlined">calendar_month</span>
                </button>
            </div>

            <!-- Título -->
            <h1 class="text-3xl font-semibold text-center mb-6">Agregar tarjeta</h1>

            <!-- Ícono tarjeta -->
            <div class="text-center mb-4">
                <span class="material-symbols-outlined text-5xl">credit_card</span>
            </div>

            <!-- Formulario -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl w-full px-6 md:px-0">

                <!-- Banco -->
                <div class="flex flex-col">
                    <label for="bank_id" class="text-center font-medium mb-1">Proveedor de la tarjeta</label>
                    <select name="bank_id" id="bank_id"
                        class="border border-gray-300 bg-gray-100 px-4 py-2 rounded text-center focus:outline-none">
                        @foreach ($banks as $bank)
                            <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Tipo de tarjeta -->
                <div class="flex flex-col">
                    <label for="card_type_id" class="text-center font-medium mb-1">Tipo de tarjeta</label>
                    <select name="card_type_id" id="card_type_id"
                        class="border border-gray-300 bg-gray-100 px-4 py-2 rounded text-center focus:outline-none">
                        @foreach ($CardType as $Tarjeta)
                            <option value="{{ $Tarjeta->id }}">{{ $Tarjeta->type }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Botón -->
                <div class="md:col-span-2 flex justify-center mt-4">
                    <button type="submit"
                        class="flex items-center gap-2 bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">
                        <span class="material-symbols-outlined">add_card</span>
                        Agregar tarjeta
                    </button>
                </div>
            </div>
        </div>

        <!-- Imagen decorativa inferior -->
        <div class="w-full mt-10">
            <img src="{{ asset('img/Tarjetas de Credito.png') }}" alt="Tarjetas de Crédito" class="w-full object-cover">
        </div>
    </form>
</x-layout>
