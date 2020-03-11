<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ausencia;

class AusenciaController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listado_ausencias=Ausencia::all();  
        return view('ausencias.index', ['ausencias'=>$listado_ausencias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ausencias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ausencia=new Ausencia();
        $ausencia->fecha=$request->input('fecha');
        $ausencia->hora=$request->input('hora');
        $ausencia->profesor_Id=$request->input('profesor_Id');
        $ausencia->profesor_Sustituye_Id=$request->input('profesor_Sustituye_Id');
        $ausencia->observaciones1=$request->input('observaciones1');
        $ausencia->observaciones2=$request->input('observaciones2');

        $ausencia->save();
        return redirect()->action('AusenciaController@index')->with('notice', 'Registro creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ausencia=Ausencia::find($id);    
        return view('ausencias.show', ['ausencia'=>$ausencia]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ausencia=Ausencia::find($id);    
        return view('ausencias.update', ['ausencia'=>$ausencia]);
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
        $ausencia=new Ausencia($id);
        $ausencia->fecha=$request->input('fecha');
        $ausencia->hora=$request->input('hora');
        $ausencia->profesor_Id=$request->input('profesor_Id');
        $ausencia->profesor_Sustituye_Id=$request->input('profesor_Sustituye_Id');
        $ausencia->observaciones1=$request->input('observaciones1');
        $ausencia->observaciones2=$request->input('observaciones2');

        $ausencia->save();
        return redirect()->action('AusenciaController@index')->with('notice', 'Registro modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ausencia=Ausencia::find($id);
        $ausencia->delete();
        return redirect()->action('AusenciaController@index')->with('notice', 'Se ha borrado el registro');
    }
    
}
