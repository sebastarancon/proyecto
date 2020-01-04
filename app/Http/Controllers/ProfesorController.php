<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesor;

class ProfesorController extends Controller
{
    //CONSTRUCTOR PARA QUE SEA NECESARIO LOGEARSE
    /*public function __construct(){
        $this->middleware('auth');
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listado_profesores=Profesor::all();    //recogo los datos de la tabla
        return view('profesores.index', ['profesores'=>$listado_profesores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //GUARDAR LOS DATOS QUE SE ENVIAN

        $profesor= new Profesor();
        $profesor->nombre=$request->input('nombre');
        $profesor->apellidos=$request->input('apellidos');
        $profesor->departamento=$request->input('departamento');
        $profesor->especialidad=$request->input('especialidad');
        $profesor->cargo=$request->input('cargo');
        $profesor->observaciones=$request->input('observaciones');
        $profesor->codigo=$request->input('codigo');

        $profesor->save();
        return redirect()->action('ProfesorController@index')->with('notice', 'Contacto creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //MOSTRAR EL REGISTRO SELECCIONADO
        $profesor=Profesor::find($id);
        return view('profesores.show', ['profesor'=>$profesor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    
        $profesor=Profesor::find($id);
        return view('profesores.update', ['profesor'=>$profesor]);
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
        //ACTUALIZAR REGISTROS
        $profesor=Profesor::find($id);
        $profesor->nombre=$request->input('nombre');
        $profesor->apellidos=$request->input('apellidos');
        $profesor->departamento=$request->input('departamento');
        $profesor->especialidad=$request->input('especialidad');
        $profesor->cargo=$request->input('cargo');
        $profesor->observaciones=$request->input('observaciones');
        $profesor->codigo=$request->input('codigo');
        
        $profesor->save();
        return redirect()->action('ProfesorController@index')->with('notice', 'Se ha modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //BORRAR REGISTRO
        $profesor= Profesor::find($id);
        $profesor->delete();        
        return redirect()->action('ProfesorController@index')->with('notice', 'Se ha borrado el registro');
    }
}
