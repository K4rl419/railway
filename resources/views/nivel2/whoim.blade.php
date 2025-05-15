@extends('layout/base')

@section('contenido')

<body>
    <section class="quienes-somos bg-whithe py-16 px-8 text-gray-800">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl font-bold text-green-700 mb-4">¿Quiénes somos?</h1>
            <p class="text-lg mb-6">
                Somos una comunidad apasionada por el medio ambiente, comprometida con la difusión de información, retos ecológicos y acciones concretas para generar un impacto positivo en el planeta. Creemos que el cambio comienza con pequeñas acciones y que, juntos, podemos marcar la diferencia.
            </p>
        </div>

        <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-10 mt-10">
            <!-- Misión -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <h2 class="text-2xl font-semibold text-green-600 mb-3">Nuestra Misión</h2>
                <p>
                    Inspirar y educar a las personas sobre la importancia de la sostenibilidad mediante retos, noticias y contenido ecológico, fomentando un estilo de vida más responsable con el planeta.
                </p>
            </div>

            <!-- Visión -->
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <h2 class="text-2xl font-semibold text-green-600 mb-3">Nuestra Visión</h2>
                <p>
                    Ser un referente en información ambiental y acciones sostenibles, logrando que cada vez más personas se sumen al movimiento ecológico y contribuyan activamente al bienestar del planeta.
                </p>
            </div>
        </div>

        <div class="max-w-3xl mx-auto text-center mt-12">
            <h2 class="text-3xl font-semibold text-green-700 mb-4"><br>Únete a nosotros</h2>
            <p class="text-lg">
                Te invitamos a ser parte de nuestra comunidad ecológica. Juntos podemos aprender, compartir experiencias y tomar acciones concretas para preservar nuestro hogar, la Tierra. 🌍💚
            </p>
            <a href="/contactanos" class="inline-block mt-6 px-6 py-3 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 transition">Contáctanos</a>
        </div>
    </section>
</body>

@endsection
