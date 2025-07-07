<x-layout>
    <x-bar/>

      <div class="flex justify-center items-center h-screen">
            <div class="backdrop-blur-sm bg-white/30 rounded-md px-6 py-6">
                <h1 class="text-6xl block text-center font-poppins">Perfil</h1>
                <hr class="mt-3">

                <form action="/login" method="POST" class="bg-gray shadow-md space-y-4 rounded px-8 pt-6 pb-8 mb-4">
                    @csrf

                  <div class="mb-4" >
                    {{ $user->email }}


                </form>
</x-layout> 
