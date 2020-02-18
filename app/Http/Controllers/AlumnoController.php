<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Alumno;

class AlumnoController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos=Alumno::all();    //recogo los datos de la tabla
        return view('alumnos.index', ['alumnos'=>$alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno= new Alumno();
        $alumno->nombre=$request->input('nombre');
        $alumno->apellidos=$request->input('apellidos');
        $alumno->fechaNac=$request->input('fechaNac');
        $alumno->grupo_Id=$request->input('grupo_Id');
        $alumno->telefono1=$request->input('telefono1');
        $alumno->telefono2=$request->input('telefono2');
        $alumno->nombrePadre=$request->input('nombrePadre');
        $alumno->nombreMadre=$request->input('nombreMadre');
        $alumno->observaciones=$request->input('observaciones');
        $alumno->imagen=$request->input('imagen');

        $alumno->save();
        return redirect()->action('AlumnoController@index')->with('notice', 'Registro creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno=Alumno::find($id);    
        return view('alumnos.show', ['alumno'=>$alumno]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno=Alumno::find($id);    
        return view('alumnos.update', ['alumno'=>$alumno]);
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
        $alumno=Alumno::find($id);
        $alumno->nombre=$request->input('nombre');
        $alumno->apellidos=$request->input('apellidos');
        $alumno->fechaNac=$request->input('fechaNac');
        $alumno->grupo_Id=$request->input('grupo_Id');
        $alumno->telefono1=$request->input('telefono1');
        $alumno->telefono2=$request->input('telefono2');
        $alumno->nombrePadre=$request->input('nombrePadre');
        $alumno->nombreMadre=$request->input('nombreMadre');
        $alumno->observaciones=$request->input('observaciones');

        $image= $request->file('imagen');
        $input['imagename']= time(). '.' .$image->getClientOriginalExtension();
        $destino= public_path('/storage');
        $image->move($destino, $input['imagename']);

        /* echo $image.'<br>';
        echo $input['imagename'].'<br>';
        echo $destino.'<br>';
        exit; */
        $alumno->imagen=$request->file($image);

        $alumno->save();
        return redirect()->action('AlumnoController@index')->with('notice', 'Registro modificado');
    }//rcrv82 usuario Roberto

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno= Alumno::find($id);
        $alumno->delete();        
        return redirect()->action('AlumnoController@index')->with('notice', 'Se ha borrado el registro');
    }   
}
