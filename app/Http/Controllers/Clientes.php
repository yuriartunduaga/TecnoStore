<?php
namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;


class Clientes extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index')->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clientes = new Cliente();
        $clientes->id = $request->get('id');
        $clientes->nombre = $request->get('nombre');
        $clientes->telefono = $request->get('telefono');
        $clientes->direccion = $request->get('direccion');
        $clientes->email = $request->get('email');

        $clientes->save();

        return redirect('/clientes');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.edit')->with('articulo',$cliente);
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
        $cliente = Cliente::find($id);

        if ($cliente) {
            $cliente->delete();
            return redirect('/clientes')->with('success', 'Cliente eliminado exitosamente.');
        } else {
            return redirect('/clientes')->with('error', 'Cliente no encontrado.');
        }
    }

}
