<x-layout>
     <x-bar/>

    <div class="flex justify-center items-center h-screen  ">
        <div class=" bg-white/50 px-20 py-20 rounded-md shadow-lg w-1/2 flex flex-col items-center ">

            <h2 class="text-7xl font-bold mb-2 ">Perfil</h2>
             <p class="text-sm text-gray-600 mb-4">Información del usuario</p>


              <div class="w-full p-4 border rounded bg-gray-100 mb-4 block text-sm font-medium">
                {{ $user->name }}
            </div>

            <div class="w-full p-4 border rounded bg-gray-100 mb-4 block text-sm font-medium">
                {{ $user->email }}
            </div>

            <select name="proveedor" class="w-full p-4 border rounded bg-gray-100 mb-4 ">
                    <option value="">Proveedor de tarjeta</option>
                    <option value="Banco Cuscatlán">Banco Cuscatlán</option>
                    <option value="Banco Agrícola">Banco Agrícola</option>
                    <option value="Banco Fedecrédito">Banco Fedecrédito</option>
                    <option value="Banco Davivienda Salvadoreño">Banco Davivienda Salvadoreño</option>
                    <option value="Banco de América Central">Banco de América Central</option>
                    <option value="Banco Promerica">Banco Promerica</option>
                </select>

            <select name="tipo_tarjeta" class="w-full p-4 border rounded bg-gray-100 mb-4">
                    <option value="">Tipo de tarjeta</option>
                    <option value="credito">Crédito</option>
                    <option value="debito">Débito</option>
                </select>

            <input type="date" name="fecha_corte" class="w-full p-4 border rounded bg-gray-100 mb-4">
            <input type="date" name="fecha_pago" class="w-full p-4 border rounded bg-gray-100 mb-4">



</x-layout>
