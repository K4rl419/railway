@extends('layout/base')

@section('contenido')

<body class="bg-white text-gray-900">
    <section class="natura py-16 px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl font-bold text-green-700 mb-4">Natura: Líder en Sustentabilidad</h1>
            <p class="text-lg mb-6 text-gray-700">
                Natura es una empresa global comprometida con la belleza, la innovación y la sostenibilidad. A través de su modelo de negocio responsable, ha liderado el camino en la industria cosmética con iniciativas ecológicas, reducción de impacto ambiental y apoyo a comunidades locales.
            </p>
        </div>

        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 mt-10">
            <!-- Card: Compromiso Ambiental -->
            <div class="bg-white border border-gray-300 rounded-lg shadow-md">
                <img class="w-full rounded-t-lg" src="{{ asset('img/natura1.jpg') }}" alt="Compromiso Ambiental" />
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold text-green-800">Compromiso Ambiental</h5>
                    <p class="text-gray-700">
                        Natura ha implementado políticas de producción sustentable, priorizando ingredientes naturales y envases reciclables para reducir su huella de carbono.
                    </p>
                </div>
            </div>

            <!-- Card: Innovación Sustentable -->
            <div class="bg-white border border-gray-300 rounded-lg shadow-md">
                <img class="w-full rounded-t-lg" src="{{ asset('img/natura2.jpg') }}" alt="Innovación Sustentable" />
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold text-green-800">Innovación Sustentable</h5>
                    <p class="text-gray-700">
                        Desde biocosméticos hasta eliminación de pruebas en animales, Natura desarrolla productos con el menor impacto ambiental posible.
                    </p>
                </div>
            </div>

            <!-- Card: Impacto Social -->
            <div class="bg-white border border-gray-300 rounded-lg shadow-md">
                <img class="w-full rounded-t-lg" src="{{ asset('img/natura3.jpg') }}" alt="Impacto Social" />
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold text-green-800">Impacto Social</h5>
                    <p class="text-gray-700">
                        A través de su red de consultoras y apoyo a comunidades amazónicas, Natura fomenta el comercio justo y el desarrollo sostenible.
                    </p>
                </div>
            </div>

            <!-- Card: Certificaciones y Premios -->
            <div class="bg-white border border-gray-300 rounded-lg shadow-md">
                <img class="w-full rounded-t-lg" src="{{ asset('img/natura4.jpeg') }}" alt="Certificaciones y Premios" />
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold text-green-800">Certificaciones y Premios</h5>
                    <p class="text-gray-700">
                        Natura ha recibido certificaciones como B Corp y Carbon Neutral, demostrando su liderazgo en prácticas ecológicas y éticas.
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>

@endsection
