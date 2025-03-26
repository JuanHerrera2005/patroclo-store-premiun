<?php

namespace App\Http\Controllers;

use App\Models\ProductoImagen;
use Illuminate\Http\Request;

class ProductoImagenController extends Controller
{
    
    public function index()
    {
        $imagenes = ProductoImagen::all();
        return response()->json($imagenes);
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'id_producto'       => 'required|integer|exists:productos,id_producto',
            'imagen_url'        => 'required|string|max:255',
            'estado_auditoria'  => 'required|string|size:1',
        ]);

        $data['fecha_creacion_auditoria'] = now();

        $imagen = ProductoImagen::create($data);

        return response()->json($imagen, 201);
    }


    public function show($id)
    {
        $imagen = ProductoImagen::findOrFail($id);
        return response()->json($imagen);
    }

   
    public function update(Request $request, $id)
    {
        $imagen = ProductoImagen::findOrFail($id);

        $data = $request->validate([
            'id_producto'      => 'sometimes|required|integer|exists:productos,id_producto',
            'imagen_url'       => 'sometimes|required|string|max:255',
            'estado_auditoria' => 'sometimes|required|string|size:1',
        ]);

        $imagen->update($data);

        return response()->json($imagen);
    }

   
    public function destroy($id)
    {
        $imagen = ProductoImagen::findOrFail($id);
        $imagen->delete();

        return response()->json(null, 204);
    }
}
