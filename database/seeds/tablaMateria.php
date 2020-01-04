<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class tablaMateria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$arrayDepartamento=["lengua","matematicas","informatica","ingles","historia","naturales"];

        for($i=1; $i<=10; $i++){
	        DB::table('materia')->insert([
	            'nombre' => "materia".$i,
	            'departamento' => Arr::random($arrayDepartamento),	            	          
	        ]);
    	}
    }
}
