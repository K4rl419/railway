@extends('layout/base')

@section('contenido')


    

<body>
    

    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="{{ asset('img/carruselitem1.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/carruselitem2.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/carruselitem3.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/carruselitem4.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('img/carruselitem5.jpeg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
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
        <h2> <br> <br> <br> </h2>
        <h1 class="text-6xl font-bold text-green-700">
            Inspírate, actúa y transforma: el planeta te necesita.
        </h1>
        <h2> <br> <br> <br> </h2>
    </div>
    
    <!-- Filtros de noticias con checkboxes visibles -->
<div class="w-full flex justify-center py-4 space-x-4">
    <!-- Filtro: Empresa de la semana -->
    <label class="flex items-center space-x-2 px-4 py-2 bg-green-600 text-white rounded-lg cursor-pointer hover:bg-gray-700 focus:ring-4 focus:ring-green-300 focus:outline-none">
        <input type="checkbox" id="chkEmpresa" class="w-5 h-5 text-green-600 border-gray-300 rounded focus:ring-green-500">
        <span>Empresa de la semana</span>
    </label>

    <!-- Filtro: País del mes -->
    <label class="flex items-center space-x-2 px-4 py-2 bg-green-600 text-white rounded-lg cursor-pointer hover:bg-gray-700 focus:ring-4 focus:ring-green-300 focus:outline-none">
        <input type="checkbox" id="chkPais" class="w-5 h-5 text-green-600 border-gray-300 rounded focus:ring-green-500">
        <span>País del mes</span>
    </label>

    <!-- Filtro: Comunidad -->
    <label class="flex items-center space-x-2 px-4 py-2 bg-green-600 text-white rounded-lg cursor-pointer hover:bg-gray-700 focus:ring-4 focus:ring-green-300 focus:outline-none">
        <input type="checkbox" id="chkComunidad" class="w-5 h-5 text-green-600 border-gray-300 rounded focus:ring-green-500">
        <span>Comunidad</span>
    </label>

    <!-- Filtro: Desechos comunes -->
    <label class="flex items-center space-x-2 px-4 py-2 bg-green-600 text-white rounded-lg cursor-pointer hover:bg-gray-700 focus:ring-4 focus:ring-green-300 focus:outline-none">
        <input type="checkbox" id="chkDesechos" class="w-5 h-5 text-green-600 border-gray-300 rounded focus:ring-green-500">
        <span>Desechos comunes</span>
    </label>

    <!-- Filtro: Ver todos -->
    <label class="flex items-center space-x-2 px-4 py-2 bg-green-600 text-white rounded-lg cursor-pointer hover:bg-gray-700 focus:ring-4 focus:ring-green-300 focus:outline-none">
        <input type="checkbox" id="chkTodos" class="w-5 h-5 text-green-600 border-gray-300 rounded focus:ring-green-500">
        <span>Ver todos</span>
    </label>
</div>

<!-- Filtros adicionales de subcategorías -->
<div class="w-full flex justify-center py-4 space-x-4 mt-6">
    <!-- Filtro: Subcategoría - Empresa semana pasada -->
    <label class="flex items-center space-x-2 px-4 py-2 bg-blue-600 text-white rounded-lg cursor-pointer hover:bg-gray-700 focus:ring-4 focus:ring-blue-300 focus:outline-none">
        <input type="checkbox" id="chkSubcategoriaEmpresa" class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
        <span>Mas sobre empresas</span>
    </label>

    <!-- Filtro: Subcategoría - País mes pasado -->
    <label class="flex items-center space-x-2 px-4 py-2 bg-blue-600 text-white rounded-lg cursor-pointer hover:bg-gray-700 focus:ring-4 focus:ring-blue-300 focus:outline-none">
        <input type="checkbox" id="chkSubcategoriaPais" class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
        <span>Mas sobre paises</span>
    </label>

    <!-- Filtro: Subcategoría - Comunidad -->
    <label class="flex items-center space-x-2 px-4 py-2 bg-blue-600 text-white rounded-lg cursor-pointer hover:bg-gray-700 focus:ring-4 focus:ring-blue-300 focus:outline-none">
        <input type="checkbox" id="chkSubcategoriaComunidad" class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
        <span>Mas sobre la comunidad</span>
    </label>

    <!-- Filtro: Subcategoría - Desechos -->
    <label class="flex items-center space-x-2 px-4 py-2 bg-blue-600 text-white rounded-lg cursor-pointer hover:bg-gray-700 focus:ring-4 focus:ring-blue-300 focus:outline-none">
        <input type="checkbox" id="chkSubcategoriaDesechos" class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
        <span>Mas sobre desechos</span>
    </label>
</div>

<div class="flex justify-center my-4">
    <input type="text" id="searchInput" placeholder="Buscar..." class="w-1/2 p-2 border rounded-lg shadow-sm">
  </div>
  

    <!-- Main Categorias -->
    <div class="flex space-x-4 overflow-x-auto">
        <!-- Tarjeta 1 -->
        <div class="card empresa  w-96 bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col justify-between">
            <a href="/natura">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('img/cardNatura.jpeg') }}" alt="Natura" />
            </a>
            <div class="p-5 h-40 overflow-hidden mt-4">
                <a href="/natura">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Empresa de la semana</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">Natura, una empresa brasileña de cosméticos, destaca por su compromiso con el medio ambiente. Su enfoque incluye ingredientes naturales y prácticas de comercio justo, promoviendo el reciclaje de envases y la sostenibilidad global.</p>
                <a href="/natura" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Saber más
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    
        <!-- Tarjeta 2 -->
        <div class="card pais  w-96 bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col justify-between">
            <a href="/finlandia">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('img/cardFinlandia.jpg') }}" alt="Finlandia" />
            </a>
            <div class="p-5 h-40 overflow-hidden mt-4">
                <a href="/finlandia">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Pais del mes</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">Finlandia es un líder mundial en sostenibilidad. Su enfoque en la economía circular, la protección de recursos naturales y el uso de energías renovables lo convierten en un ejemplo global de conciencia ambiental.

                    .</p>
                <a href="/finlandia" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Saber más
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    
        <!-- Tarjeta 3 -->
        <div class="card comunidad  w-96 bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col justify-between">
            <a href="/comunidad">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('img/cardComunidad.jpg') }}" alt="Comunidad" />
            </a>
            <div class="p-5 h-40 overflow-hidden mt-" >
                <a href="/comunidad">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Comunidad</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700"><br>La participación activa de la comunidad es clave para lograr cambios significativos. Juntos, promovemos la conciencia ecológica y buscamos soluciones prácticas para un futuro más sostenible y responsable.</p>
                <a href="/comunidad" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Saber más
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <!-- Tarjeta 4 -->
        <div class="card desechos  w-96 bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col justify-between">
            <a href="/desechos">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('img/card4.jpeg') }}" alt="Comunidad" />
            </a>
            <div class="p-5  h-40 overflow-hidden mt-8">
                <a href="/desechos">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Desechos</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700"><br>Los desechos comunes incluyen plásticos, papeles y vidrios generados a diario. Aprender a separarlos correctamente reduce el impacto ambiental y facilita el reciclaje efectivo y responsable.</p>
                <a href="/desechos" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Saber más
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        
    </div>
    <!-- Sub Categorias1 -->
    <div class="flex space-x-4 overflow-x-auto">
        <!-- Tarjeta 5 -->
        <div class=" card SubcategoriaEmpresa w-96 bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col justify-between">
            
            <!-- Título de la subcategoría -->
            <div class="SubcategoriaEmpresa px-4 py-2 bg-gray-100 text-sm text-gray-700 font-semibold uppercase">
                Subcategoría: Empresa semana pasada
            </div>
            
            <a href="/natura">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('img/cardNatura.jpeg') }}" alt="Natura" />
            </a>
            
            <div class="p-5 h-40 overflow-hidden mt-4">
                <a href="/natura">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Empresa de la semana (Pasada)</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">Natura, una empresa brasileña de cosméticos, destaca por su compromiso con el medio ambiente. Su enfoque incluye ingredientes naturales y prácticas de comercio justo, promoviendo el reciclaje de envases y la sostenibilidad global.</p>
                <a href="/natura" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Saber más
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        
    
        <!-- Tarjeta 6 -->
        <div class="card SubcategoriaPais  w-96 bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col justify-between">
            <!-- Título de la subcategoría -->
            <div class="PaPasado px-4 py-2 bg-gray-100 text-sm text-gray-700 font-semibold uppercase">
                Subcategoría: Pais  mes pasado
            </div>
            <a href="/finlandia">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('img/cardFinlandia.jpg') }}" alt="Finlandia" />
            </a>
            <div class="p-5 h-40 overflow-hidden mt-4">
                <a href="/finlandia">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Pais del mes (Pasado)</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">Finlandia es un líder mundial en sostenibilidad. Su enfoque en la economía circular, la protección de recursos naturales y el uso de energías renovables lo convierten en un ejemplo global de conciencia ambiental.

                    .</p>
                <a href="/finlandia" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Saber más
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    
        <!-- Tarjeta 7 -->
        <div class="card SubcategoriaComunidad w-96 bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col justify-between">
            <!-- Título de la subcategoría -->
            <div class="coAportaciones px-4 py-2 bg-gray-100 text-sm text-gray-700 font-semibold uppercase">
                Subcategoría: comunidad
            </div>
            <a href="/comunidad">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('img/cardComunidad.jpg') }}" alt="Comunidad" />
            </a>
            <div class="p-5 h-40 overflow-hidden mt-" >
                <a href="/comunidad">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Comunidad: Aportaciones </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700"><br>La participación activa de la comunidad es clave para lograr cambios significativos. Juntos, promovemos la conciencia ecológica y buscamos soluciones prácticas para un futuro más sostenible y responsable.</p>
                <a href="/comunidad" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Saber más
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <!-- Tarjeta 8 -->
        <div class="card SubcategoriaDesechos  w-96 bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col justify-between">
            <!-- Título de la subcategoría -->
            <div class="DeConsecuencias px-4 py-2 bg-gray-100 text-sm text-gray-700 font-semibold uppercase">
                Subcategoría: Desechos
            </div>
            <a href="/desechos">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('img/card4.jpeg') }}" alt="Comunidad" />
            </a>
            <div class="p-5  h-40 overflow-hidden mt-8">
                <a href="/desechos">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Desechos: Consecuencias</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700"><br>Los desechos comunes incluyen plásticos, papeles y vidrios generados a diario. Aprender a separarlos correctamente reduce el impacto ambiental y facilita el reciclaje efectivo y responsable.</p>
                <a href="/desechos" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Saber más
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        
    </div>

    <!-- Sub Categorias 2 -->
    <div class="flex space-x-4 overflow-x-auto">
        <!-- Tarjeta 9 -->
        <div class="card  SubcategoriaEmpresa w-96 bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col justify-between">
            
            <!-- Título de la subcategoría -->
            <div class="SubcategoriaEmpresa px-4 py-2 bg-gray-100 text-sm text-gray-700 font-semibold uppercase">
                Subcategoría: Empresa semana pasada
            </div>
            
            <a href="/natura">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('img/cardNatura.jpeg') }}" alt="Natura" />
            </a>
            
            <div class="p-5 h-40 overflow-hidden mt-4">
                <a href="/natura">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Empresas con ecoplanes (Historial)</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">Natura, una empresa brasileña de cosméticos, destaca por su compromiso con el medio ambiente. Su enfoque incluye ingredientes naturales y prácticas de comercio justo, promoviendo el reciclaje de envases y la sostenibilidad global.</p>
                <a href="/natura" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Saber más
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        
    
        <!-- Tarjeta 10 -->
        <div class="SubcategoriaPais  w-96 bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col justify-between">
            <!-- Título de la subcategoría -->
            <div class=" card PaPasado px-4 py-2 bg-gray-100 text-sm text-gray-700 font-semibold uppercase">
                Subcategoría: Pais  mes pasado
            </div>
            <a href="/finlandia">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('img/cardFinlandia.jpg') }}" alt="Finlandia" />
            </a>
            <div class="p-5 h-40 overflow-hidden mt-4">
                <a href="/finlandia">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Paises con ecoacciones (Historial)</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">Finlandia es un líder mundial en sostenibilidad. Su enfoque en la economía circular, la protección de recursos naturales y el uso de energías renovables lo convierten en un ejemplo global de conciencia ambiental.

                    .</p>
                <a href="/finlandia" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Saber más
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    
        <!-- Tarjeta 11 -->
        <div class="SubcategoriaComunidad w-96 bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col justify-between">
            <!-- Título de la subcategoría -->
            <div class="card coAportaciones px-4 py-2 bg-gray-100 text-sm text-gray-700 font-semibold uppercase">
                Subcategoría: comunidad
            </div>
            <a href="/comunidad">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('img/cardComunidad.jpg') }}" alt="Comunidad" />
            </a>
            <div class="p-5 h-40 overflow-hidden mt-" >
                <a href="/comunidad">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Comunidad: Agenda </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700"><br>La participación activa de la comunidad es clave para lograr cambios significativos. Juntos, promovemos la conciencia ecológica y buscamos soluciones prácticas para un futuro más sostenible y responsable.</p>
                <a href="/comunidad" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Saber más
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <!-- Tarjeta 12 -->
        <div class="card SubcategoriaDesechos  w-96 bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col justify-between">
            <!-- Título de la subcategoría -->
            <div class="DeConsecuencias px-4 py-2 bg-gray-100 text-sm text-gray-700 font-semibold uppercase">
                Subcategoría: Desechos
            </div>
            <a href="/desechos">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('img/card4.jpeg') }}" alt="Comunidad" />
            </a>
            <div class="p-5  h-40 overflow-hidden mt-8">
                <a href="/desechos">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Desechos: Dificil reciclaje</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700"><br>Los desechos comunes incluyen plásticos, papeles y vidrios generados a diario. Aprender a separarlos correctamente reduce el impacto ambiental y facilita el reciclaje efectivo y responsable.</p>
                <a href="/desechos" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Saber más
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        
    </div>
    <!-- Sub Categorias -->
    <div class="flex space-x-4 overflow-x-auto">
        <!-- Tarjeta 14 -->
        <div class="card SubcategoriaEmpresa w-96 bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col justify-between">
            
            <!-- Título de la subcategoría -->
            <div class="SubcategoriaEmpresa px-4 py-2 bg-gray-100 text-sm text-gray-700 font-semibold uppercase">
                Subcategoría: Empresa semana pasada
            </div>
            
            <a href="/natura">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('img/cardNatura.jpeg') }}" alt="Natura" />
            </a>
            
            <div class="p-5 h-40 overflow-hidden mt-4">
                <a href="/natura">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">El lado oscuro de las empresas</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">Natura, una empresa brasileña de cosméticos, destaca por su compromiso con el medio ambiente. Su enfoque incluye ingredientes naturales y prácticas de comercio justo, promoviendo el reciclaje de envases y la sostenibilidad global.</p>
                <a href="/natura" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Saber más
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        
    
        <!-- Tarjeta 14 -->
        <div class="SubcategoriaPais  w-96 bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col justify-between">
            <!-- Título de la subcategoría -->
            <div class="card PaPasado px-4 py-2 bg-gray-100 text-sm text-gray-700 font-semibold uppercase">
                Subcategoría: Pais  mes pasado
            </div>
            <a href="/finlandia">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('img/cardFinlandia.jpg') }}" alt="Finlandia" />
            </a>
            <div class="p-5 h-40 overflow-hidden mt-4">
                <a href="/finlandia">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Paises con pesimas practicas ecologicas</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">Finlandia es un líder mundial en sostenibilidad. Su enfoque en la economía circular, la protección de recursos naturales y el uso de energías renovables lo convierten en un ejemplo global de conciencia ambiental.

                    .</p>
                <a href="/finlandia" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Saber más
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    
        <!-- Tarjeta 15 -->
        <div class="SubcategoriaComunidad w-96 bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col justify-between">
            <!-- Título de la subcategoría -->
            <div class="card coAportaciones px-4 py-2 bg-gray-100 text-sm text-gray-700 font-semibold uppercase">
                Subcategoría: comunidad
            </div>
            <a href="/comunidad">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('img/cardComunidad.jpg') }}" alt="Comunidad" />
            </a>
            <div class="p-5 h-40 overflow-hidden mt-" >
                <a href="/comunidad">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Comunidad: foro </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700"><br>La participación activa de la comunidad es clave para lograr cambios significativos. Juntos, promovemos la conciencia ecológica y buscamos soluciones prácticas para un futuro más sostenible y responsable.</p>
                <a href="/comunidad" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Saber más
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <!-- Tarjeta 16 -->
        <div class="SubcategoriaDesechos  w-96 bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col justify-between">
            <!-- Título de la subcategoría -->
            <div class="card DeConsecuencias px-4 py-2 bg-gray-100 text-sm text-gray-700 font-semibold uppercase">
                Subcategoría: Desechos
            </div>
            <a href="/desechos">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('img/card4.jpeg') }}" alt="Comunidad" />
            </a>
            <div class="p-5  h-40 overflow-hidden mt-8">
                <a href="/desechos">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Desechos: Di adios a lo innecesario</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700"><br>Los desechos comunes incluyen plásticos, papeles y vidrios generados a diario. Aprender a separarlos correctamente reduce el impacto ambiental y facilita el reciclaje efectivo y responsable.</p>
                <a href="/desechos" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Saber más
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        
    </div>



</body>

<script src={{ asset('js/kinds.js') }}></script> 
@endsection