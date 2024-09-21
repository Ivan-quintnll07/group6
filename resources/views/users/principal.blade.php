
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <x-layout>
        <x-bar></x-bar>
        <main class="flex relative h-screen">

            <section class="h-full w-1/2 bg-cover" style="background-image: url('img/home1.jpg');"></section>

            <section class="h-full w-1/2 bg-cover" style="background-image: url('img/home2.jpg');"></section>


            <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-50">

                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 gap-12 p-8">

                    <a href="offer" class="bg-white bg-opacity-80 rounded-lg shadow-lg p-10 text-center text-black transform scale-125 hover:scale-135 transition-transform">

                        <div class="mb-6">
                            <span class="material-icons" style="font-size: 64px;">
                                shopping_bag
                            </span>
                        </div>
                        <h3 class="text-2xl font-semibold">Promotions</h3>
                    </a>

                    <a href="education" class="bg-white bg-opacity-80 rounded-lg shadow-lg p-10 text-center text-black transform scale-125 hover:scale-135 transition-transform">

                        <div class="mb-6">
                            <span class="material-icons" style="font-size: 64px;">
                                menu_book
                            </span>
                        </div>
                        <h3 class="text-2xl font-semibold">Financial Education</h3>
                    </a>


                    <a href="calendar" class="bg-white bg-opacity-80 rounded-lg shadow-lg p-10 text-center text-black transform scale-125 hover:scale-135 transition-transform">

                        <div class="mb-6">
                            <span class="material-icons" style="font-size: 64px;">
                                event
                            </span>
                        </div>
                        <h3 class="text-2xl font-semibold">Calendar</h3>
                    </a>
                </div>
            </div>
        </main>
    </x-layout>
</body>

