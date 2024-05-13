<x-layout>
    <div class="flex justify-center items-center h-screen bg-white">
        <div class="w-96 p-6 shadow-lg bg-gray-200 rounded-md">
            <h1 class="text-6xl block text-center font-bold text-gray-800"> <i class="fa-regular fa-user"></i> LOGIN  </h1>
            <hr class="mt-3 border-gray-400">
            <form action="/login" method="POST">
                @csrf

                <x-input title="Email" name="email" type="text" placeholder="Ej: Luis Peréz"/>
                <x-input title="Password" name="password" type="password" placeholder="XD"/>

                <button type="submit" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Log In
                </button>

            </form>
        </div>
    </div>
</x-layout>
