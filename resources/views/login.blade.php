<x-layout>
    <div class="flex justify-center items-center h-screen bg-teal-900">
        <div class="w-96 p-6 shadow-lg bg-yellow-800 rounded-md">
            <h1 class="text-6   x1 block text-center font-bold"> <i class="fa-regular fa-user"></i> LOGIN HERE </h1>
            <hr class="mt-3">
            <form action="/login" method="POST">
                @csrf

                <x-input title="Email" name="email" type="text" placeholder="Ej: Luis Peréz"/>
                <x-input title="Password" name="password" type="password" placeholder="XD"/>




                    <button type="submit"
                        class="border-2 border-red-950 mt-5 bg-red-950 text-white py-1 w-full rounder-md hover:bg-transparent hover:text-indigo-700 font-semibold">
                        Log In </button>


            </form>
        </div>
    </div>
</x-layout>
