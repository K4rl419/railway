@extends('layout/base')

@section('contenido')

<body>
    <section class="bg-white">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Noticias sobre Cambio Climático Más Importantes de la Semana</h2>
                <p class="mb-4">Esta semana, el cambio climático continúa siendo uno de los temas más urgentes a nivel mundial. Diversos eventos e iniciativas subrayan la necesidad de tomar medidas inmediatas para mitigar sus efectos y adaptarse a los cambios que ya están en marcha.</p>
                <ul class="list-disc pl-5">
                    <li><strong>Informe alarmante sobre el derretimiento de glaciares:</strong> Un nuevo informe científico ha revelado que el derretimiento de los glaciares en las regiones polares se ha acelerado significativamente, lo que contribuirá al aumento del nivel del mar.</li>
                    <li><strong>Acuerdo internacional contra la deforestación:</strong> Varios países han firmado un acuerdo global para combatir la deforestación, comprometiéndose a reducir la tala ilegal y a implementar programas de reforestación masiva.</li>
                    <li><strong>La COP30 enfoca sus esfuerzos en la adaptación climática:</strong> La próxima conferencia sobre el cambio climático, COP30, centrará su agenda en la adaptación a los efectos del cambio climático, con énfasis en los países más vulnerables.</li>
                </ul>
                <p class="mt-4">Estos eventos reflejan la creciente urgencia de abordar el cambio climático a nivel global, con acciones que van desde la conservación de los ecosistemas hasta la adaptación de las infraestructuras urbanas y rurales.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="{{ asset('img/cambio1.jpeg') }}" alt="noticia 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{ asset('img/cambio2.jpeg') }}" alt="noticia 2">
            </div>
        </div>
    </section>
</body>

@endsection
