<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revista Ecológica</title>

    <!-- Cargar estilos con Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

   <!-- Barra de navegación -->
<nav class="bg-green-700 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center gap-4">
            <img class="w-10 h-10 rounded-full" src="{{ asset('img/logo.png') }}" alt="Jese Leos">
            <div class="font-medium dark:text-white">
                <div>Revista ecológica</div>
                <div class="text-sm text-gray-500 dark:text-gray-400">Conoce, cuida y protege el planeta.</div>
            </div>
        </div>
        <a class="text-white text-lg font-bold" href="#">Revista Ecológica</a>
        <button class="text-white lg:hidden" id="menu-toggle">☰</button>
        <ul class="hidden lg:flex space-x-4 text-white" id="menu">
            <li><a href="/inicio">Inicio</a></li>
            <li><a href="/noticias">Noticias</a></li>
            <li><a href="/retos">Retos</a></li>
            <li><a href="/quien">Quiénes Somos</a></li>
        </ul>
    </div>
</nav>

    <!-- Contenido dinámico -->
    <main class="container mx-auto p-6">
        @yield('contenido')
    </main>

    <!-- Footer -->
    <footer class="text-center p-4 bg-green-700 text-white mt-10">
        &copy; 2025 Revista Ecológica. Todos los derechos reservados.
    </footer>

</body>
</html>
