<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aula;

class AulaController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listado_aulas=Aula::all();  
        return view('aulas.index', ['aulas'=>$listado_aulas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aulas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aula=new Aula();
        $aula->nombre=$request->input('nombre');
        $aula->descripcion=$request->input('descripcion');
        $aula->numero=$request->input('numero');
        $aula->reservable=$request->input('reservable');

        $aula->save();
        return redirect()->action('AulaController@index')->with('notice', 'Registro creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aula=Aula::find($id);    
        return view('aulas.show', ['aula'=>$aula]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aula=Aula::find($id);    
        return view('aulas.update', ['aula'=>$aula]);
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
        $aula=new Aula($id);
        $aula->nombre=$request->input('nombre');
        $aula->descripcion=$request->input('descripcion');
        $aula->numero=$request->input('numero');
        $aula->reservable=$request->input('reservable');

        $aula->save();
        return redirect()->action('AulaController@index')->with('notice', 'Registro creado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aula=Aula::find($id);
        $aula->delete();
        return redirect()->action('AulaController@index')->with('notice', 'Se ha borrado el registro');
    }
   
}
