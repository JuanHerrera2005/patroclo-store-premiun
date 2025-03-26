<?php
namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Subcategoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index($idSubcategoria)
    {
        $subcategoria = Subcategoria::with('categoria')
                                      ->findOrFail($idSubcategoria);
        
        $productos = Producto::where('id_subcategoria', $idSubcategoria)
                              ->where('estado_auditoria', 'A')
                              ->get();
        
        return view('Producto', compact('subcategoria', 'productos'));
    }
    

    public function show($idProducto)
    {
        $producto = Producto::with(['marca', 'proveedor', 'subcategoria.categoria', 'imagenes'])
                            ->findOrFail($idProducto);
        
      
        $imagenes = $producto->imagenes->pluck('imagen_url')->toArray();
        if (!in_array($producto->imagen_url, $imagenes)) {
            array_unshift($imagenes, $producto->imagen_url);
        }
        
        return view('Detalleproducto', compact('producto', 'imagenes'));
    }
    
}