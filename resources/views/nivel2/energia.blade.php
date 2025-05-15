@extends('layout/base')

@section('contenido')

<body>
    <section class="bg-white">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Noticias de Energía Más Importantes de la Semana</h2>
                <p class="mb-4">Esta semana, importantes avances en el sector energético global han captado la atención. Desde la transición hacia energías renovables hasta las iniciativas para mejorar la eficiencia energética en las ciudades, se están tomando medidas clave para asegurar un futuro más sostenible.</p>
                <ul class="list-disc pl-5">
                    <li><strong>Iniciativa solar en África:</strong> Varios países africanos han unido fuerzas para implementar un proyecto masivo de energía solar, con el objetivo de abastecer a millones de hogares y reducir la dependencia de combustibles fósiles.</li>
                    <li><strong>Revolución de la energía eólica:</strong> Se han establecido nuevas instalaciones eólicas en el mar del norte, que generarán suficiente energía para abastecer a más de 10 millones de personas anualmente.</li>
                    <li><strong>Innovaciones en baterías:</strong> Los avances en tecnologías de almacenamiento de energía están mejorando la eficiencia de las baterías solares, permitiendo una mayor capacidad de almacenamiento y mayor autonomía para hogares y empresas.</li>
                </ul>
                <p class="mt-4">Estos proyectos representan un paso significativo hacia un futuro más limpio y ecológico, promoviendo la sostenibilidad y la eficiencia energética en todo el mundo.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="{{ asset('img/energia1.jpeg') }}" alt="noticia 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{ asset('img/energia2.webp') }}" alt="noticia 2">
            </div>
        </div>
    </section>
</body>

@endsection
