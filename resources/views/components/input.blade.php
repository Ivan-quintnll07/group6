@props(['title'])

<div class="mt-3">
    <label for="password" class="block text-base mb-2">{{ $title }}</label>
    <input {{ $attributes }}
        class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-stone-900">

    @error('{{ $attributes["name"] }}')
        <p> {{ $message }} </p>
    @enderror
</div>
