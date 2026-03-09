<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $categorias = Categoria::all();
        $productos = Producto::all();
        return view("productos.index", compact("productos", "categorias"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all(); 
        return view('productos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductoRequest $request)
    {   
        $categoria = Categoria::where('uuid', $request->categoria_id)->firstOrFail();

        Producto::create([
            'nombre' => $request->nombre,
            'precio_venta' => $request->precio_venta,
            'precio_compra' => $request->precio_compra,
            'unidad_medida' => $request->unidad_medida,
            'categoria_id'  => $categoria->id,
        ]);

        return redirect('/productos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view('productos.show', [
            'producto' => $producto,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {   
        $producto->load('categoria');
        $categorias = Categoria::all(); 

        return view('productos.edit', [
            'producto' => $producto,
            'categorias' => $categorias,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductoRequest $request, Producto $producto)
    {
        $producto->update([
            'nombre' => $request->nombre,
            'precio_venta' => $request->precio_venta,
            'precio_compra' => $request->precio_compra,
            'unidad_medida' => $request->unidad_medida,
        ]);

        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
