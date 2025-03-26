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
        $producto = Producto::with(['marca', 'proveedor', 'subcategoria.categoria'])
                          ->findOrFail($idProducto);
        
        $imagenes = [$producto->imagen_url]; // Array con la imagen principal
        
        return view('Detalleproducto', compact('producto', 'imagenes'));
    }
}