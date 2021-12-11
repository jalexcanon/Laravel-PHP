<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Cliente;

class ClienteController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-cliente|crear-cliente|editar-cliente|borrar-cliente')->only('index');
         $this->middleware('permission:crear-cliente', ['only' => ['create','store']]);
         $this->middleware('permission:editar-cliente', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-cliente', ['only' => ['destroy']]);
    }

    public function index()
    {
        $clientes=Cliente::all();
        return view('clientes.index')->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new Cliente();
        $clientes->clienteNombre=$request->get('clienteNombre');
        $clientes->clienteCedula=$request->get('clienteCedula');
        $clientes->telefono=$request->get('telefono');
        $clientes->emailCliente=$request->get('emailCliente');

        $clientes->save();

        return redirect('/clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes=Cliente::find($id);
        return view('clientes.edit')->with('cliente',$clientes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clientes = Cliente::find($id);
        $clientes->clienteNombre=$request->get('clienteNombre');
        $clientes->clienteCedula=$request->get('clienteCedula');
        $clientes->telefono=$request->get('telefono');
        $clientes->emailCliente=$request->get('emailCliente');

        $clientes->save();

        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes= Cliente::find($id);
        $clientes->delete();
        return redirect('/clientes');
    }
}
