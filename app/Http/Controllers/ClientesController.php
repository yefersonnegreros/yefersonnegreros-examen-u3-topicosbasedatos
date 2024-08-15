<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Cliente::latest()->paginate(3);
        return view('clientes.index', compact('clientes'));
    }

    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.show', compact('cliente'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $camposValidados = $request->validate([
            'nombres' => 'required|max:100',
            'email' => 'required|email|max:100|unique:clientes,email',
            'direccion' => 'nullable|max:150',
            'fono' => 'nullable|digits:9',
        ]);

        Cliente::create($camposValidados);

        return redirect()->route('clientes.index')
                        ->with('success', 'Cliente creado exitosamente.');
    }

    public function edit(Cliente $id)
    {
        return view('clientes.edit', [
            'cliente' => $id
        ]);
    }

    public function update(Request $request, Cliente $id)
    {
        $camposValidados = $request->validate([
            'nombres' => 'required|max:100',
            'email' => 'required|email|max:100|unique:clientes,email,'.$id->id,
            'direccion' => 'nullable|max:150',
            'fono' => 'nullable|digits:9',
        ]);

        $id->update($camposValidados);

        return redirect()->route('clientes.index', $id)
                        ->with('success', 'Cliente actualizado exitosamente.');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente.');
    }
}
