  <x-layout>
    <form action="/cards/create" method="POST">
        @csrf

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
