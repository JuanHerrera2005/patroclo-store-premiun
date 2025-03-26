<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Subcategoria;
use Illuminate\Http\Request;

class SubcategoriaController extends Controller
{
    public function index($idCategoria)
    {
        $categoria = Categoria::findOrFail($idCategoria);
        $subcategorias = Subcategoria::where('id_categoria', $idCategoria)
                                     ->where('estado_auditoria', 'A')
                                     ->get();
        
        return view('Subcategoria', compact('categoria', 'subcategorias'));
    }
}
