<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class tablaProfesor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$arrayNombres=["ana","pepe","luis","marta","felix","carlos","maria"];
    	$arrayApellidos=["lopez","martinez","sanchez","gutierrez","perez","gonzalez","vizcaino","torres"];
    	$arrayDepartamento=["lengua","matematicas","informatica","ingles","historia","naturales"];

        for($i=1; $i<=10; $i++){
	        DB::table('profesor')->insert([
	            'Nombre' => Arr::random($arrayNombres),
	            'Apellidos' => Arr::random($arrayApellidos)." ".Arr::random($arrayApellidos),
	            'Departamento' => Arr::random($arrayDepartamento),
	            'codigo' => "codigo".$i,
	        ]);
    	}
    }
}
