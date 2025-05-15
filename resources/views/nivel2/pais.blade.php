@extends('layout/base')

@section('contenido')

<body class="bg-white text-gray-900">
    <section class="bg-gray-100">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-800 sm:text-lg">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-green-700">
                    🌿 Finlandia: Líder en Sostenibilidad 🌍
                </h2>
                <p class="mb-4">
                    Finlandia es un referente mundial en sostenibilidad y protección del medio ambiente. 
                    Con vastos bosques, miles de lagos y un fuerte compromiso ecológico, el país ha implementado diversas 
                    iniciativas para combatir el cambio climático y promover el desarrollo sustentable.
                </p>
                <p>
                    Desde el uso de energías renovables hasta la economía circular, Finlandia es un ejemplo 
                    de cómo un país puede equilibrar el desarrollo económico con la conservación ambiental.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg shadow-md" src="{{ asset('img/finla1.jpg') }}">
                <img class="mt-4 w-full lg:mt-10 rounded-lg shadow-md" src="{{ asset('img/finla2.jpg') }}">
            </div>
        </div>
    </section>
    
    
</body>

@endsection
