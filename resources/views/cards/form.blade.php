  <x-layout>
    <form action="/cards/create" method="POST">
        @csrf

        <x-input name="expiry_date" type="date">Fecha de corte</x-input>
        <x-input name="cut_off_date" type="date">Fecha de pago</x-input>

        <select name="select">
            @foreach ($banks as $banco)
                <option value="{{$banco->id}}">{{$banco->name}}</option>
            @endforeach
        </select>

        <x-primary-button>Registrar tarjeta</x-primary-button>
    </form>
   </x-layout>
