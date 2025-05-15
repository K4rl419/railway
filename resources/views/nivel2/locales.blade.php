@extends('layout/base')

@section('contenido')

<body>
    <section class="bg-white ">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg ">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 ">Noticias Locales Más Importantes de la Semana</h2>
                <p class="mb-4">Esta semana, varios eventos clave han marcado la agenda local. Desde el compromiso de las autoridades con el cuidado del medio ambiente hasta los avances en el sector energético, pasando por los esfuerzos por mejorar la infraestructura urbana.</p>
                <ul class="list-disc pl-5">
                    <li><strong>Nuevo programa de reciclaje:</strong> La ciudad lanza una campaña para promover el reciclaje en hogares y empresas locales, con incentivos a la participación.</li>
                    <li><strong>Iniciativa ecológica:</strong> Un grupo de jóvenes locales organiza una jornada de limpieza en las playas, recibiendo apoyo de la comunidad.</li>
                    <li><strong>Mejoras en el transporte público:</strong> El gobierno local anuncia una ampliación de rutas para mejorar la accesibilidad y reducir la congestión.</li>
                </ul>
                <p class="mt-4">Estos eventos destacan el esfuerzo conjunto de la comunidad por enfrentar desafíos urbanos y ambientales, demostrando el compromiso con el bienestar común.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="{{ asset('img/locales1.jpg') }}" alt="noticia 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{ asset('img/locales2.jpeg') }}" alt="noticia 2">
            </div>
        </div>
    </section>
</body>

@endsection

