@extends('layout/base')

@section('contenido')
<body>

    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="{{ asset('img/cardLocales.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/cardEnergia.jpeg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/cardCambio.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/cardAgua.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/agua1.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>


     <!-- Letrero debajo del carrusel -->
     <div class="w-full py-4 pl-4 text-center mx-auto">
        <h2 class="text-6xl font-bold text-green-700">
           Noticias.<br>
        </h2>
        <h2 class="text-4xl font-bold text-black-700">
            <br>Enterate de las noticias mas relevantes sobre el planeta.<br><br>
         </h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
        <!-- Tarjeta 1 -->
        <div class="max-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
            <a href="/locales">
                <img class="w-full h-64 object-cover rounded-t-lg" src="{{ asset('img/cardLocales.jpg') }}" alt="Natura" />
            </a>
            <div class="p-5">
                <a href="/locales">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Locales</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">Esta semana, los esfuerzos locales por cuidar el medio ambiente han ganado fuerza. Se ha lanzado una nueva campaña de reforestación en las áreas cercanas al río, con la participación de ciudadanos y organizaciones ambientales...</p>
                <a href="/locales" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Saber más
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    
        <!-- Tarjeta 2 -->
        <div class="max-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
            <a href="/energia">
                <img class="w-full h-64 object-cover rounded-t-lg" src="{{ asset('img/cardEnergia.jpeg') }}" alt="Finlandia" />
            </a>
            <div class="p-5">
                <a href="/energia">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Energia</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">A nivel mundial, la transición hacia energías renovables continúa ganando terreno. Esta semana, un importante acuerdo internacional ha sido firmado para promover la inversión en energía solar en países en desarrollo...</p>
                <a href="/energia" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Saber más
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
        <!-- Tarjeta 3 -->
        <div class="max-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
            <a href="/cambioclimatico">
                <img class="w-full h-64 object-cover rounded-t-lg" src="{{ asset('img/cardCambio.jpg') }}" alt="Comunidad" />
            </a>
            <div class="p-5">
                <a href="/cambioclimatico">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Cambio climatico</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">La participación de la comunidad es clave para alcanzar nuestros objetivos. Es a través del esfuerzo conjunto que logramos transformar nuestras metas en acciones reales, creando un impacto significativo para todos...</p>
                <a href="/cambioclimatico" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Saber más
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    
        <!-- Tarjeta 4 -->
        <div class="max-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
            <a href="/cuidadoagua">
                <img class="w-full h-64 object-cover rounded-t-lg" src="{{ asset('img/cardAgua.jpg') }}" alt="Comunidad" />
            </a>
            <div class="p-5">
                <a href="/cuidadoagua">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Cuidado del agua</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">En esta semana, diversos organismos internacionales han subrayado la importancia de la conservación del agua como recurso vital. Un informe global revela que el 30% de la población mundial enfrenta escasez de agua, lo que afecta tanto a la agricultura como a la salud pública...</p>
                <a href="/cuidadoagua" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Saber más
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/animaciones.js') }}"></script>

</body>
@endsection