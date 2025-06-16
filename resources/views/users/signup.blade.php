<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Click & Save</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex font-sans">

  <!-- Lado izquierdo: Formulario -->
  <div class="w-1/2 flex flex-col justify-center items-center px-12">
    <!-- Logo -->
    <div class="flex items-center space-x-2 mb-6">
      <div class="text-2xl font-bold text-blue-600">●</div>
      <h1 class="text-2xl font-bold text-black">Click <span class="text-sky-400">& Save</span></h1>
    </div>

    <!-- Título -->
    <h2 class="text-2xl font-bold mb-1">¡Bienvenido!</h2>
    <p class="mb-6 text-sm">Crea tu cuenta aquí</p>

    <!-- Formulario -->
    <form class="w-full max-w-md space-y-3">
      <input class="w-full bg-gray-200 p-3 rounded" type="text" placeholder="Usuario"/>
      <input class="w-full bg-gray-200 p-3 rounded" type="email" placeholder="Email"/>
      <input class="w-full bg-gray-200 p-3 rounded" type="password" placeholder="Contraseña"/>
      <input class="w-full bg-gray-200 p-3 rounded" type="text" placeholder="Proveedor de tarjeta"/>
      <input class="w-full bg-gray-200 p-3 rounded" type="text" placeholder="Tipo de tarjeta"/>
      <input class="w-full bg-gray-200 p-3 rounded" type="date" placeholder="Fecha de corte"/>
      <input class="w-full bg-gray-200 p-3 rounded" type="date" placeholder="Fecha de pago"/>
      <button type="submit" class="w-full bg-blue-900 text-white py-3 rounded mt-2">Registrarse</button>
    </form>

    <!-- Enlace a iniciar sesión -->
    <p class="mt-6 text-sm">
      ¿Ya tienes una cuenta? <a href="#" class="font-bold">Iniciar Sesión</a>
    </p>
  </div>

  <!-- Lado derecho: Imagen con logo -->
  <div class="w-1/2 relative">
    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c" class="w-full h-full object-cover" alt="Fondo con laptop"/>

    <!-- Logo superpuesto -->
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
      <h1 class="text-6xl font-bold text-black">
        <span class="text-blue-600">C</span>lick<br/>
        <span class="text-black">&</span> <span class="text-sky-400">Save</span>
      </h1>
    </div>
  </div>

</body>
</html>


