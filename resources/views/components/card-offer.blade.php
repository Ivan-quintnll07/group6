@props(['title', 'price' => '', 'image', 'logo', 'description', 'id'])

<div class="bg-white rounded-lg shadow p-4 hover:shadow-lg transition">
    <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-40 object-cover rounded">
    <div class="mt-3 flex items-center space-x-3">
        <img src="{{ $logo }}" alt="Logo" class="w-10 h-10 rounded-full border">
        <h3 class="text-lg font-semibold">{{ $title }}</h3>
    </div>
    <p class="mt-2 text-gray-600">{{ $description }}</p>
    @if($price)
        <p class="mt-2 text-green-600 font-bold">Precio: {{ $price }}</p>
    @endif
</div>
