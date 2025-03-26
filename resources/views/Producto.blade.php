@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <!-- Encabezado con título y enlace "Volver" -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-medium text-gray-800">
                Productos de {{ $subcategoria->nombre }}
            </h1>
            <a href="{{ route('subcategorias.index', ['categoria' => $subcategoria->id_categoria]) }}" 
               class="text-blue-600 hover:text-blue-800">
                Volver
            </a>
        </div>

        @if($productos->isEmpty())
            <div class="text-center text-gray-500">
                No hay productos disponibles.
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($productos as $producto)
                    @include('partials.card-producto', [
                        'producto' => $producto,
                        'route' => route('productos.show', ['producto' => $producto->id_producto])
                    ])
                @endforeach
            </div>
        @endif
    </div>
@endsection
