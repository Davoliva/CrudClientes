<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //hace referencia a la base de datos
        $clientes=Cliente::all();
        //hace referencia a la vista en la carpeta clientes en el archivo view llamado index.blade.php
        return view('clientes.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //se crea un nuevo objeto de Cliente
        $clientes = new Cliente;

        //Se recuperan los datos del modal, aqui se agregan los campos del modal
        $clientes->nombre=$request->input('name');
        $clientes->telefono=$request->input('phone');
        $clientes->correo=$request->input('mail');
        //Se guardan los datos en la BD
        $clientes->save();
        //Despues de guardar se usa back para redireccionar atras
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //se crea una variable clientes y luego buscamos el cliente por el id con el metodo find
        $clientes = Cliente::find($id);

        //Se recuperan los datos del modal, aqui se agregan los campos del modal
        $clientes->nombre=$request->input('name');
        $clientes->telefono=$request->input('phone');
        $clientes->correo=$request->input('mail');
        //Se guardan los cambios en la BD
        $clientes->update();
        //Despues de guardar se usa back para redireccionar atras
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $clientes = Cliente::find($id);
        $clientes->delete();
        return redirect()->back();

    }
}
