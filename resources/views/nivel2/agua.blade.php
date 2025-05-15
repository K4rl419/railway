@extends('layout/base')

@section('contenido')

<body>
    <section class="bg-white">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Noticias sobre Cuidado del Agua Más Importantes de la Semana</h2>
                <p class="mb-4">El cuidado del agua es un tema urgente, y esta semana varias noticias subrayan la importancia de la conservación de este recurso vital. Con el cambio climático y la creciente demanda de agua, se están llevando a cabo esfuerzos globales para preservar y gestionar este recurso de manera más eficiente.</p>
                <ul class="list-disc pl-5">
                    <li><strong>Iniciativa de ahorro de agua en la industria agrícola:</strong> Un nuevo programa busca reducir el uso de agua en la agricultura mediante el uso de tecnologías avanzadas para la irrigación eficiente, ayudando a preservar los recursos hídricos en zonas áridas.</li>
                    <li><strong>Reutilización de aguas residuales urbanas:</strong> En varias ciudades, se están implementando sistemas para tratar y reutilizar aguas residuales en actividades industriales y agrícolas, reduciendo así la presión sobre los recursos hídricos naturales.</li>
                    <li><strong>Campaña de sensibilización sobre el ahorro de agua:</strong> Organizaciones no gubernamentales han lanzado una campaña global para educar a la población sobre la importancia de reducir el consumo de agua en actividades cotidianas, como el baño y el riego de jardines.</li>
                </ul>
                <p class="mt-4">Estas acciones reflejan la creciente preocupación por la escasez de agua y destacan la necesidad de tomar medidas efectivas para garantizar el acceso al agua para futuras generaciones.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="{{ asset('img/agua1.jpg') }}" alt="noticia 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{ asset('img/agua2.jpeg') }}" alt="noticia 2">
            </div>
        </div>
    </section>
</body>

@endsection
