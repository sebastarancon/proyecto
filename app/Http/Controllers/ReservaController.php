<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;

class ReservaController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listado_reservas=Reserva::all();    //recogo los datos de la tabla
        return view('reservas.index', ['reservas'=>$listado_reservas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reserva= new Reserva();
        $reserva->profesor_Id=$request->input('profesor_Id');
        $reserva->aula_Id=$request->input('aula_Id');
        $reserva->fecha=$request->input('fecha');
        $reserva->hora=$request->input('hora');
        $reserva->observaciones=$request->input('observaciones');

        $reserva->save();
        return redirect()->action('ReservaController@index')->with('notice', 'Registro creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reserva=Reserva::find($id);    
        return view('reservas.show', ['reserva'=>$reserva]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserva=Reserva::find($id);    
        return view('reservas.update', ['reserva'=>$reserva]);
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
        $reserva= new Reserva($id);
        $reserva->profesor_Id=$request->input('profesor_Id');
        $reserva->aula_Id=$request->input('aula_Id');
        $reserva->fecha=$request->input('fecha');
        $reserva->hora=$request->input('hora');
        $reserva->observaciones=$request->input('observaciones');

        $reserva->save();
        return redirect()->action('ReservaController@index')->with('notice', 'Registro modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reserva=Reserva::find($id);
        $reserva->delete();
        return redirect()->action('ReservaController@index')->with('notice', 'Se ha borrado el registro');
    }
    
}
