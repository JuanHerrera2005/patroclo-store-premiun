<a href="{{ route('productos.show', ['producto' => $producto->id_producto]) }}" class="group bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
    <div class="h-48 overflow-hidden bg-gray-100">
        <img src="{{ $producto->imagen_url }}" 
             alt="{{ $producto->nombre }}" 
             class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-300 p-4">
    </div>
    <div class="p-4">
        <h2 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600 truncate">
            {{ $producto->nombre }}
        </h2>
        <div class="mt-2 flex justify-between items-center">
            <span class="text-gray-600 text-sm">Código: {{ $producto->codigo }}</span>
            <span class="font-bold text-blue-600">${{ number_format($producto->precio_dolares, 2) }}</span>
        </div>
    </div>
</a>
