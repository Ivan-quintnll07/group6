  <x-layout>
    <div class="flex flex-col h-screen bg-cover bg-center"
    style="background-image: url('https://www.rrd.com/uploads/thoughts/items/independent-health-upgrades-to-digital-payment-and-distribution-system-healthcare_20230228_pageimage.jpg');">
    <form action="/cards/create" method="POST">
        @csrf
        <div class="flex-grow flex items-center justify-center">
            <div class="bg-white bg-opacity-75 p-8 rounded-lg shadow-lg max-w-lg w-full"
                style="background-color: rgba(255, 255, 255, 0.85);">
                <h1 class="text-4xl font-bold mb-6 text-center">Tarjetas</h1>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center">
                    </div>

        <x-input name="expiry_date" type="date">Fecha de corte</x-input>
        <x-input name="cut_off_date" type="date">Fecha de pago</x-input>

        <select name="bank_id">
            @foreach ($banks as $banco)
                <option value="{{$banco->id}}">{{$banco->name}}</option>
            @endforeach
        </select>

        <select name="card_type_id">
            @foreach ($CardType as $Tarjeta)
                <option value="{{$Tarjeta->id}}">{{$Tarjeta->type}}</option>
            @endforeach
        </select>

        <x-primary-button>Registrar Tarjeta</x-primary-button>
    </form>
   </x-layout>
