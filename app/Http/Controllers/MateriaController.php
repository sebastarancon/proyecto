<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;

class MateriaController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listado_materias=Materia::all();  
        return view('materias.index', ['materias'=>$listado_materias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materia=new Materia();
        $materia->nombre=$request->input('nombre');
        $materia->departamento=$request->input('departamento');
        $materia->observaciones=$request->input('observaciones');

        $materia->save();
        return redirect()->action('MateriaController@index')->with('notice', 'Registro creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materia=Materia::find($id);    
        return view('materias.show', ['materia'=>$materia]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materia=Materia::find($id);    
        return view('materias.update', ['materia'=>$materia]);
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
        $materia=new Materia($id);
        $materia->nombre=$request->input('nombre');
        $materia->departamento=$request->input('departamento');
        $materia->observaciones=$request->input('observaciones');

        $materia->save();
        return redirect()->action('MateriaController@index')->with('notice', 'Registro creado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materia=Materia::find($id);
        $materia->delete();
        return redirect()->action('MateriaController@index')->with('notice', 'Se ha borrado el registro');
    }
    
}
