<x-layout>
    <x-bar/>
    <div class="flex justify-center items-center h-screen">
        <div class="backdrop-blur-sm bg-white/30 rounded-md px-6 py-6">
            <h1 class="text-6xl block text-center font-poppins">Perfil</h1>


            <div class="mb-4 block text-sm font-medium">
                {{ $user->email }}
            </div>

            <div class="mb-4 block text-sm font-medium">
                {{ $user->name }}
            </div>

</x-layout>
