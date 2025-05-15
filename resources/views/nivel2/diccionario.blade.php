@extends('layout/base')

@section('contenido')

<body>
    <section class="bg-white bg-gray-100">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Desechos comunes</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Conoce sobre los desechos comunes</p>
            </div> 
            <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('img/dicc1.jpg') }}" alt="Bonnie Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">diccionario 1</a>
                    </h3>
                    <p>Madera</p>
                    <p class="text-gray-400">La madera es un material orgánico que proviene de los árboles. Se utiliza en la fabricación de muebles y construcción.</p>
                </div>
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('img/dicc2.jpg') }}" alt="Helene Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">diccionario 2</a>
                    </h3>
                    <p>Plástico</p>
                    <p class="text-gray-400">El plástico es un material sintético muy utilizado en envases y productos de uso cotidiano. Es reciclable, pero tiene un alto impacto ambiental si no se maneja adecuadamente.</p>
                </div>
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('img/dicc3.jpeg') }}" alt="Jese Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">diccionario 3</a>
                    </h3>
                    <p>Cartón</p>
                    <p class="text-gray-400">El cartón es un material compuesto por capas de papel y es ampliamente utilizado para embalajes. Es fácilmente reciclable y biodegradable.</p>
                </div>
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('img/dicc4.webp') }}" alt="Joseph Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">diccionario 4</a>
                    </h3>
                    <p>Latas de aluminio</p>
                    <p class="text-gray-400">Las latas de aluminio se utilizan comúnmente en bebidas y alimentos. Son fácilmente reciclables y tienen un proceso de reciclaje eficiente.</p>
                </div>
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('img/dicc5.jpg') }}" alt="Sofia Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">diccionario 5</a>
                    </h3>
                    <p>Botes de detergente PVC</p>
                    <p class="text-gray-400">Los botes de detergente hechos de PVC son comunes en los hogares, pero pueden ser difíciles de reciclar debido a su material resistente y poco flexible.</p>
                </div>
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('img/dicc6.jpeg') }}" alt="Leslie Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">diccionario 6</a>
                    </h3>
                    <p>Tetra Pack</p>
                    <p class="text-gray-400">El Tetra Pak es un envase utilizado para bebidas y productos lácteos. Aunque es reciclable, requiere de un proceso especial para separarlo del aluminio y papel.</p>
                </div>
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('img/diic7.jpg') }}" alt="Neil Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">diccionario 7</a>
                    </h3>
                    <p>Ropa</p>
                    <p class="text-gray-400">La ropa, aunque no se considera tradicionalmente un desecho reciclable, puede ser reutilizada o reciclada en centros especializados en textiles.</p>
                </div>
                <div class="text-center text-gray-500 dark:text-gray-400">
                    <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('img/dicc8.jpg') }}" alt="Neil Avatar">
                    <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">diccionario 8</a>
                    </h3>
                    <p>Bolsas de plástico</p>
                    <p class="text-gray-400">Las bolsas de plástico son uno de los residuos más comunes y dañinos para el medio ambiente, ya que pueden tardar cientos de años en descomponerse.</p>
                </div>
            </div> 
        </div>            
    </section>
</body>

@endsection
