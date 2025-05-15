@extends('layout/base')

@section('contenido')

<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold text-center mb-6">Desafíos Ecológicos</h1>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="grid gap-4">
            <div class="relative group">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/reto1.jpg') }}" alt="Reto 1">
                <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity p-2 rounded-lg">
                    <span class="text-xl text-white bg-gray-900 bg-opacity-80 px-4 py-2 rounded-lg">
                        Reto 1: Recicla 5 botellas plásticas.
                    </span>
                </div>
            </div>
            <div class="relative group">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/reto2.jpg') }}" alt="Reto 2">
                <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity p-2 rounded-lg">
                    <span class="text-xl text-white bg-gray-900 bg-opacity-80 px-4 py-2 rounded-lg">
                        Reto 2: Reduce tu consumo de papel por una semana.
                    </span>
                </div>
            </div>
            <div class="relative group">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/reto3.jpg') }}" alt="Reto 3">
                <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity p-2 rounded-lg">
                    <span class="text-xl text-white bg-gray-900 bg-opacity-80 px-4 py-2 rounded-lg">
                        Reto 3: Usa una bolsa reutilizable en tus compras.
                    </span>
                </div>
            </div>
        </div>

        <div class="grid gap-4">
            <div class="relative group">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/reto4.jpg') }}" alt="Reto 4">
                <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity p-2 rounded-lg">
                    <span class="text-xl text-white bg-gray-900 bg-opacity-80 px-4 py-2 rounded-lg">
                        Reto 4: Evita los plásticos de un solo uso por 3 días.
                    </span>
                </div>
            </div>
            <div class="relative group">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/reto5.jpg') }}" alt="Reto 5">
                <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity p-2 rounded-lg">
                    <span class="text-xl text-white bg-gray-900 bg-opacity-80 px-4 py-2 rounded-lg">
                        Reto 5: Apaga las luces cuando no las necesites.
                    </span>
                </div>
            </div>
            <div class="relative group">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/reto6.jpg') }}" alt="Reto 6">
                <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity p-2 rounded-lg">
                    <span class="text-xl text-white bg-gray-900 bg-opacity-80 px-4 py-2 rounded-lg">
                        Reto 6: Planta un árbol en tu comunidad.
                    </span>
                </div>
            </div>
        </div>

        <div class="grid gap-4">
            <div class="relative group">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/reto7.jpg') }}" alt="Reto 7">
                <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity p-2 rounded-lg">
                    <span class="text-xl text-white bg-gray-900 bg-opacity-80 px-4 py-2 rounded-lg">
                        Reto 7: Usa el transporte público en lugar del coche.
                    </span>
                </div>
            </div>
            <div class="relative group">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/reto8.jpg') }}" alt="Reto 8">
                <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity p-2 rounded-lg">
                    <span class="text-xl text-white bg-gray-900 bg-opacity-80 px-4 py-2 rounded-lg">
                        Reto 8: Reduce tu consumo de agua en la ducha.
                    </span>
                </div>
            </div>
            <div class="relative group">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/reto9.jpg') }}" alt="Reto 9">
                <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity p-2 rounded-lg">
                    <span class="text-xl text-white bg-gray-900 bg-opacity-80 px-4 py-2 rounded-lg">
                        Reto 9: Evita desperdiciar comida durante una semana.
                    </span>
                </div>
            </div>
        </div>

        <div class="grid gap-4">
            <div class="relative group">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/reto10.jpg') }}" alt="Reto 10">
                <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity p-2 rounded-lg">
                    <span class="text-xl text-white bg-gray-900 bg-opacity-80 px-4 py-2 rounded-lg">
                        Reto 10: Separa correctamente tus residuos.
                    </span>
                </div>
            </div>
            <div class="relative group">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/reto11.jpg') }}" alt="Reto 11">
                <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity p-2 rounded-lg">
                    <span class="text-xl text-white bg-gray-900 bg-opacity-80 px-4 py-2 rounded-lg">
                        Reto 11: Usa productos de limpieza ecológicos.
                    </span>
                </div>
            </div>
            <div class="relative group">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/reto12.jpg') }}" alt="Reto 12">
                <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity p-2 rounded-lg">
                    <span class="text-xl text-white bg-gray-900 bg-opacity-80 px-4 py-2 rounded-lg">
                        Reto 12: Comparte tu reto ecológico con amigos.
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<label for="message" class="block mb-2 text-xl font-medium text-gray-900">¿Ya te has unido a algún reto ecológico? ¡Cuéntanos tu experiencia y cómo estás contribuyendo al cuidado del planeta! 🌍💚</label>
<textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Escribe aqui tus experiencias..."></textarea>


@endsection
