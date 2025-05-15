@extends('layout/base')

@section('contenido')

<body>

    <div class="w-full py-4 pl-4">
        <h2 class="text-4xl font-bold text-green-700">
            Algunas actividades que realizan nuestra comunidad:
        </h2>
    </div>


    <div class="grid gap-2 max-w-2/3 mx-auto"> <!-- Ajuste de tamaño -->
        <div class="relative group">
            <img class="h-96 w-full rounded-lg object-cover" src="{{ asset('img/comunidad2.png') }}" alt="">
            <div class="absolute inset-0 flex items-center justify-center bg-white bg-opacity-90 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                <p class="text-gray-900 font-semibold text-lg">Viajes ecológicos</p>
            </div>
        </div>
        <div class="grid grid-cols-5 gap-2">
            <!-- Tarjetas con efecto -->
            @php
            $imagenes = [
                ["src" => asset('img/comunidad1.png'), "texto" => "Ciclismo de montaña"],
                ["src" => asset('img/comunidad3.png'), "texto" => "UDG verde"],
                ["src" => asset('img/comunidad4.jpeg'), "texto" => "Limpiar areas  verdes"],
                ["src" => asset('img/comunidad5.jpg'), "texto" => "Plantar arbolitos"],
                ["src" => asset('img/comunidad6.jpg'), "texto" => "Recoger basura"]
            ];
            @endphp
        
            
            @foreach ($imagenes as $imagen)
            <div class="relative group">
                <img class="h-64 w-full rounded-lg object-cover" src="{{ $imagen['src'] }}" alt="">
                <div class="absolute inset-0 flex items-center justify-center bg-white bg-opacity-90 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                    <p class="text-gray-900 font-semibold text-sm">{{ $imagen['texto'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    
<form class="max-w-sm mx-auto"> 
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900"><br>Dejanos tu correo para que te unas a nuestra comunidad</label>
    <input type="email" id="email" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@flowbite.com">
  
    <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">Nunca compartas tus datos. Revisa nuestra <a href="/politica" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Privacy Policy</a>.</p>
  </form>
  
    

    
</body>

@endsection
