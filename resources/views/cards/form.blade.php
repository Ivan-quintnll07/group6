<x-layout>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <div class="flex flex-col h-screen bg-cover bg-center bg-['url({{asset('img/bg/creditCard.jpg')}})']"
            style="background-image: url('img/bg/creditCard.jpg')"
        >
        <form action="/cards/create" method="POST">
            @csrf

            <x-bar/>

            <div class="flex-grow flex h-[calc(100vh-57px)] items-center justify-center">
                <div class="bg-white p-8 rounded-lg shadow-lg max-w-lg w-full"
                     style="background-color: rgba(255, 253, 253, 0.85);">
                    <h1 class="text-4xl font-bold mb-6 text-center">Agregar tarjeta</h1>
                    <div class="grid grid-cols-2 items-center gap-4">
                        <div class="col-span-1 flex items-center">
                            <x-input name="expiry_date" type="date" class="flex-1" placeholder="Fecha de corte">
                                <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3M16 7V3M3 13h18M5 9h14M5 17h14M5 21h14M5 3h14a2 2 0 012 2v16a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z"></path>
                                </svg>
                            </x-input>
                        </div>
                        <div class="col-span-1">
                            <label for="bank_id" class="block text-gray-700 text-right">Banco perteneciente</label>
                            <span class="material-symbols-outlined">
                                account_balance
                                </span>
                            <select name="bank_id" id="bank_id" class="form-select mt-1 block w-full">
                                @foreach ($banks as $banco)
                                    <option value="{{$banco->id}}">{{$banco->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-1 flex items-center">
                            <x-input name="cut_off_date" type="date" class="flex-1" placeholder="Fecha de pago">
                                <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3M16 7V3M3 13h18M5 9h14M5 17h14M5 21h14M5 3h14a2 2 0 012 2v16a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z"></path>
                                </svg>
                            </x-input>
                        </div>
                        <div class="col-span-1">
                            <label for="card_type_id" class="block text-gray-700">Tarjeta</label>
                            <select name="card_type_id" id="card_type_id" class="form-select mt-1 block w-full">
                                @foreach ($CardType as $Tarjeta)
                                    <option value="{{$Tarjeta->id}}">{{$Tarjeta->type}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-2 flex justify-center">
                            <x-primary-button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Agregar</x-primary-button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-layout>
