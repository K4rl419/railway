@extends('layout/base')

@section('contenido')

<body>
    <div class="flex space-x-4">
        <!-- Tarjeta 1 -->
        <div class="w-72 bg-white border border-gray-200 rounded-lg shadow-sm">
            <div class="flex justify-end px-4 pt-4">
            </div>
            <div class="flex flex-col items-center pb-10">
                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('img/paola.jpg') }}" alt="Paola image"/>
                <h5 class="mb-1 text-xl font-medium text-gray-900 ">Paola Nicole</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Diseñadora gráfica</span>
                <div class="flex mt-4 md:mt-6">
                    <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Linkedin</a>
                    <a href="#" class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">3312457865</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta 2 -->
        <div class="w-72 bg-white border border-gray-200 rounded-lg shadow-sm">
            <div class="flex justify-end px-4 pt-4">
            </div>
            <div class="flex flex-col items-center pb-10">
                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('img/nat.jpg') }}" alt="Nataly image"/>
                <h5 class="mb-1 text-xl font-medium text-gray-900 ">Nataly Limon</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Diseñadora gráfica</span>
                <div class="flex mt-4 md:mt-6">
                    <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Linkedin</a>
                    <a href="#" class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">3312457865</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta 3 -->
        <div class="w-72 bg-white border border-gray-200 rounded-lg shadow-sm">
            <div class="flex justify-end px-4 pt-4">
            </div>
            <div class="flex flex-col items-center pb-10">
                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('img/karla.jpg') }}" alt="Karla image"/>
                <h5 class="mb-1 text-xl font-medium text-gray-900 ">Karla Rodriguez</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Diseñadora gráfica</span>
                <div class="flex mt-4 md:mt-6">
                    <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Linkedin</a>
                    <a href="#" class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">3312457865</a>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
