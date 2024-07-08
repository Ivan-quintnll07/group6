<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Kodchasan:wght@400;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Document</title>

    <style>
        .sidebar {
            transition: transform 0.3s ease;
        }
        .sidebar-closed {
            transform: translateX(-100%);
        }
    </style>
</head>

<body>
    {{ $slot }}

    <script>
        document.getElementById('menuButton').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('sidebar-closed');
        });

        document.getElementById('closeButton').addEventListener('click', function() {
            document.getElementById('sidebar').classList.add('sidebar-closed');
        });
    </script>
</body>

</html>
