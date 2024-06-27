<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class Productos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productos = new Producto();
        $productos->nombre = $request->input('nombre');
        $productos->descripcion = $request->input('descripcion');
        $productos->precio = $request->input('precio');

        if ($request->hasFile('imagen')){
            $productos->imagen = $request->file('imagen')->store('public/productos');
        }

        $productos->save();
        return 'Registro exitoso';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $productos = Producto::find($id);
        return view('productos.show', compact('productos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
