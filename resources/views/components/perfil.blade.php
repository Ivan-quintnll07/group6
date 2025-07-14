<x-layout>
    <x-bar />

    <div class="flex justify-center items-center h-screen">
        <div class="bg-white/50 px-20 py-20 rounded-md shadow-lg w-1/2 flex flex-col items-center">
            <h2 class="text-7xl font-bold mb-2">Perfil</h2>
            <p class="text-sm text-gray-600 mb-4">Información del usuario</p>

            @if(session('success'))
                <div class="bg-green-200 text-green-800 p-2 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('perfil.update') }}" class="w-full">
                @csrf

                <div class="mb-4">
                    <label class="block mb-1 font-medium">Nombre</label>
                    <input type="text" value="{{ $user->name }}" disabled
                        class="w-full p-3 border rounded bg-gray-100 cursor-not-allowed" />
                </div>

                <div class="mb-4">
                    <label class="block mb-1 font-medium">Email</label>
                    <input type="email" value="{{ $user->email }}" disabled
                        class="w-full p-3 border rounded bg-gray-100 cursor-not-allowed" />
                </div>

                <div class="mb-4">
                    <label class="block mb-1 font-medium">Proveedor</label>
                    <select name="proveedor" class="w-full p-3 border rounded bg-gray-100">
                        <option value="">Seleccione proveedor</option>
                        <option value="Banco Cuscatlán" {{ $user->proveedor == 'Banco Cuscatlán' ? 'selected' : '' }}>Banco Cuscatlán</option>
                        <option value="Banco Agrícola" {{ $user->proveedor == 'Banco Agrícola' ? 'selected' : '' }}>Banco Agrícola</option>
                        <option value="Banco Fedecrédito" {{ $user->proveedor == 'Banco Fedecrédito' ? 'selected' : '' }}>Banco Fedecrédito</option>
                        <option value="Banco Davivienda Salvadoreño" {{ $user->proveedor == 'Banco Davivienda Salvadoreño' ? 'selected' : '' }}>Banco Davivienda Salvadoreño</option>
                        <option value="Banco de América Central" {{ $user->proveedor == 'Banco de América Central' ? 'selected' : '' }}>Banco de América Central</option>
                        <option value="Banco Promerica" {{ $user->proveedor == 'Banco Promerica' ? 'selected' : '' }}>Banco Promerica</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block mb-1 font-medium">Tipo de tarjeta</label>
                    <select name="tipo_tarjeta" class="w-full p-3 border rounded bg-gray-100">
                        <option value="">Seleccione tipo</option>
                        <option value="credito" {{ $user->tipo_tarjeta == 'credito' ? 'selected' : '' }}>Crédito</option>
                        <option value="debito" {{ $user->tipo_tarjeta == 'debito' ? 'selected' : '' }}>Débito</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block mb-1 font-medium">Fecha de corte</label>
                    <input type="date" name="fecha_corte" value="{{ $user->fecha_corte }}" class="w-full p-3 border rounded bg-gray-100" />
                </div>

                <div class="mb-4">
                    <label class="block mb-1 font-medium">Fecha de pago</label>
                    <input type="date" name="fecha_pago" value="{{ $user->fecha_pago }}" class="w-full p-3 border rounded bg-gray-100" />
                </div>

                <button type="submit" class="w-full bg-blue-900 text-white py-3 rounded hover:bg-blue-800">
                    Guardar Cambios
                </button>
            </form>
        </div>
    </div>
</x-layout>

