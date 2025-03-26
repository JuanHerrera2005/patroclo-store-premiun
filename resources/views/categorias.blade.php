@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Encabezado mejorado -->
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary-400 to-primary-600 mb-4">
                Explora Nuestras Categorías
            </h1>
            <p class="text-gray-300 max-w-2xl mx-auto text-lg">
                Descubre nuestra cuidadosa selección de productos organizados para tu comodidad
            </p>
        </div>

        <!-- Grid de categorías mejorado -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach($categorias as $categoria)
                <a href="{{ route('subcategorias.index', ['categoria' => $categoria->id_categoria]) }}" 
                   class="group relative overflow-hidden rounded-2xl bg-gray-800/80 hover:bg-gray-700/90 transition-all duration-300 shadow-xl hover:shadow-2xl hover:-translate-y-2 border border-gray-700 hover:border-primary-500/30">
                    <!-- Imagen con efecto de brillo -->
                    <div class="h-52 overflow-hidden relative">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-900/30 z-10"></div>
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
                             src="{{ $categoria->imagen_url }}" 
                             alt="{{ $categoria->nombre }}"
                             onerror="this.src='https://via.placeholder.com/300x200/1f2937/9ca3af?text=Imagen+no+disponible'">
                    </div>
                    
                    <!-- Contenido de la tarjeta -->
                    <div class="p-6 relative z-20">
                        <h3 class="text-xl font-bold text-white group-hover:text-primary-400 transition-colors duration-300 flex items-center">
                            {{ $categoria->nombre }}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </h3>
                        <div class="flex justify-between items-center mt-3">
                            <span class="text-sm font-medium text-gray-400 group-hover:text-gray-300 transition-colors duration-300">
                                {{ $categoria->productos_count ?? 0 }} productos
                            </span>
                            <span class="text-xs px-2 py-1 rounded-full bg-primary-900/30 text-primary-400">
                                Ver más
                            </span>
                        </div>
                    </div>
                    
                    <!-- Efecto de resplandor al hacer hover -->
                    <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                        <div class="absolute -inset-1 bg-gradient-to-r from-primary-600 to-primary-800 rounded-2xl blur-sm group-hover:blur-md transition-all duration-500"></div>
                    </div>
                </a>
            @endforeach
        </div>

        <!-- Sección adicional para mejorar la experiencia -->
        <div class="mt-20 text-center">
            <h2 class="text-3xl font-semibold text-white mb-6">¿No encuentras lo que buscas?</h2>
            <p class="text-gray-400 max-w-2xl mx-auto mb-8">
                Explora nuestro catálogo completo o contáctanos para ayudarte a encontrar exactamente lo que necesitas.
            </p>
            <div class="flex justify-center gap-4">
                <a href="#" class="px-6 py-3 bg-primary-600 hover:bg-primary-700 rounded-lg text-white font-medium transition-colors duration-300 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd" />
                    </svg>
                    Catálogo completo
                </a>
                <a href="#" class="px-6 py-3 bg-transparent hover:bg-gray-800 border border-gray-700 rounded-lg text-white font-medium transition-colors duration-300 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                        <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                    </svg>
                    Contactar soporte
                </a>
            </div>
        </div>
    </div>
@endsection