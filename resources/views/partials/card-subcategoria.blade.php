<a href="{{ route('productos.index', ['subcategoria' => $subcategoria->id_subcategoria]) }}" class="group bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
    <div class="h-48 overflow-hidden">
        <img src="{{ $subcategoria->imagen_url }}" 
             alt="{{ $subcategoria->nombre }}" 
             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
    </div>
    <div class="p-4">
        <h2 class="text-xl font-semibold text-gray-800 group-hover:text-blue-600">
            {{ $subcategoria->nombre }}
        </h2>
    </div>
</a>
