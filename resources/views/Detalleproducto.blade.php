@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="md:flex">
                <!-- Carrusel de imágenes del producto -->
                <div class="md:w-1/2 bg-gray-50">
                    <div class="swiper-container h-96">
                        <div class="swiper-wrapper">
                            @foreach($imagenes as $imagen)
                                <div class="swiper-slide flex items-center justify-center p-8">
                                    {{-- Si $imagen comienza con http, se usará tal cual; de lo contrario, se asume que es una ruta relativa y se usa asset() --}}
                                    @php
                                        $imgUrl = (strpos($imagen, 'http') === 0) 
                                            ? $imagen 
                                            : asset('storage/' . $imagen);
                                    @endphp
                                    <img src="{{ $imgUrl }}" 
                                         alt="{{ $producto->nombre }}" 
                                         class="max-h-full max-w-full object-contain">
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next bg-white bg-opacity-70 rounded-full p-2"></div>
                        <div class="swiper-button-prev bg-white bg-opacity-70 rounded-full p-2"></div>
                    </div>
                </div>
                
                <!-- Información del producto -->
                <div class="md:w-1/2 p-6 md:p-8">
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $producto->nombre }}</h1>
                    <p class="text-gray-600 mb-4">Código: {{ $producto->codigo }}</p>
                    
                    <div class="mb-4">
                        <span class="font-bold text-blue-600 text-xl">
                            ${{ number_format($producto->precio_dolares, 2) }}
                        </span>
                        <span class="text-gray-700 ml-2">Stock: {{ $producto->stock }}</span>
                    </div>
                    
                    <div class="mb-4">
                        <p class="text-gray-800">{{ $producto->descripcion }}</p>
                        @if($producto->especificaciones)
                            <p class="text-gray-700 mt-2">{{ $producto->especificaciones }}</p>
                        @endif
                    </div>
                    
                    {{-- Metadata del producto --}}
                    @include('partials.producto-metadata', [
                        'marca' => $producto->marca->nombre,
                        'proveedor' => $producto->proveedor->nombre
                    ])
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @include('partials.carousel-scripts')
@endpush