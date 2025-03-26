@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-center text-2xl font-medium text-gray-800 mb-6">
            Subcategorías de {{ $categoria->nombre }}
        </h1>

        @if($subcategorias->isEmpty())
            <div class="text-center text-gray-500">
                No hay subcategorías disponibles.
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($subcategorias as $subcategoria)
                    @include('partials.card-subcategoria', [
                        'subcategoria' => $subcategoria,
                        'route' => route('productos.index', ['subcategoria' => $subcategoria->id_subcategoria])
                    ])
                @endforeach
            </div>
        @endif
    </div>
@endsection
