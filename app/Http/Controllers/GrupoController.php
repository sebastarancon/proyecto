<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupo;

class GrupoController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listado_grupos=Grupo::all();
        return view('grupos.index', ['grupos'=>$listado_grupos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grupos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grupo=new Grupo();
        $grupo->nombre=$request->input('nombre');
        $grupo->nombreTutor=$request->input('nombreTutor');
        $grupo->curso=$request->input('curso');
        $grupo->descripcion=$request->input('descripcion');

        $grupo->save();
        return redirect()->action('GrupoController@index')->with('notice', 'Grupo creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grupo=Grupo::find($id);
        return view('grupos.show', ['grupo'=>$grupo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grupo=Grupo::find($id);
        return view('grupos.update', ['grupo'=>$grupo]);
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
        $grupo=Grupo::find($id);
        $grupo->nombre=$request->input('nombre');
        $grupo->nombreTutor=$request->input('nombreTutor');
        $grupo->curso=$request->input('curso');
        $grupo->descripcion=$request->input('descripcion');

        $grupo->save();
        return redirect()->action('GrupoController@index')->with('notice', 'Grupo modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grupo=Grupo::find($id);
        $grupo->delete();
        return redirect()->action('GrupoController@index')->with('notice', 'Grupo eliminado');
    }
    
}
