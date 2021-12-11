<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Proceso;

class ProcesoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-proceso|crear-proceso|editar-proceso|borrar-proceso')->only('index');
         $this->middleware('permission:crear-proceso', ['only' => ['create','store']]);
         $this->middleware('permission:editar-proceso', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-proceso', ['only' => ['destroy']]);
    }

    public function index()
    {
        $procesos=Proceso::all();
        return view('procesos.index')->with('procesos',$procesos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('procesos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $procesos = new Proceso();
        $procesos->radicado=$request->get('radicado');
        $procesos->clienteNombre=$request->get('clienteNombre');
        $procesos->contraparteNombre=$request->get('contraparteNombre');
        $procesos->clienteCedula=$request->get('clienteCedula');
        $procesos->contraparteCedula=$request->get('contraparteCedula');
        $procesos->tipo=$request->get('tipo');
        $procesos->clase=$request->get('clase');
        $procesos->anuo=$request->get('anuo');
        $procesos->estado=$request->get('estado');
        $procesos->micrositio=$request->get('micrositio');
        $procesos->emailjuzgado=$request->get('emailjuzgado');

        $procesos->save();

        return redirect('/procesos');
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
        $proceso=Proceso::find($id);
        return view('procesos.edit')->with('proceso',$proceso);
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
        $proceso= Proceso::find($id);
        $proceso->radicado=$request->get('radicado');
        $proceso->clienteNombre=$request->get('clienteNombre');
        $proceso->contraparteNombre=$request->get('contraparteNombre');
        $proceso->clienteCedula=$request->get('clienteCedula');
        $proceso->contraparteCedula=$request->get('contraparteCedula');
        $proceso->tipo=$request->get('tipo');
        $proceso->clase=$request->get('clase');
        $proceso->anuo=$request->get('anuo');
        $proceso->estado=$request->get('estado');
        $proceso->micrositio=$request->get('micrositio');
        $proceso->emailjuzgado=$request->get('emailjuzgado');

        $proceso->save();

        return redirect('/procesos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proceso= Proceso::find($id);
        $proceso->delete();
        return redirect('/procesos');
    }
}
