<x-layout>
    <x-bar></x-bar>

    <div class="py-12 px-6 bg-white min-h-screen" style="background-color: #ffdab9;">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl font-bold mb-6 text-center">Asignar Promoción a Categoría Personalizada</h1>

            @if(session('success'))
                <div class="mb-4 text-green-600 font-semibold">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('asignar.promocion.store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="promotion_id" class="block text-gray-700 font-medium">Selecciona una Promoción:</label>
                    <select name="promotion_id" id="promotion_id" required
                        class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring focus:ring-opacity-50">
                        @foreach ($promotions as $promotion)
                            <option value="{{ $promotion->id }}">{{ $promotion->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="category_id" class="block text-gray-700 font-medium">Selecciona una Categoría Personalizada:</label>
                    <select name="category_id" id="category_id" required
                        class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:ring focus:ring-opacity-50">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="bg-sky-600 hover:bg-sky-700 text-white font-bold py-2 px-6 rounded-full transition duration-200">
                        Asignar Promoción
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
