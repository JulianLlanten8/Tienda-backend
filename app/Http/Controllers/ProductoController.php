<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Http\Controllers\Controller;
use App\Http\Resources\Productocollection;
use App\Http\Resources\Producto as ProductoResource;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::paginate(15);
        return new Productocollection($productos);
    }
    public function create(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',
        ]);

        //imagen
        /* if (Request::hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombre_imagen = time().$imagen->getClientOriginalName();
            $imagen->move(public_path().'/imagenes/',$nombre_imagen);
        } */

        $producto = Producto::create($request->all());
        return (new ProductoResource($producto))
            ->response()
            ->setStatusCode(201);
    }
    public function delete($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return response(null)->setStatusCode(204);
    }
    public function getById($id)
    {
        return new ProductoResource(Producto::findOrFail($id));
    }
}
