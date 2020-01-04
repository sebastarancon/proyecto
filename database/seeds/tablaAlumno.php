<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class tablaAlumno extends Seeder
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
	    
    	for($i=1; $i<=10; $i++){
	        DB::table('alumno')->insert([
	            'Nombre' => Arr::random($arrayNombres),
	            'Apellidos' => Arr::random($arrayApellidos)." ".Arr::random($arrayApellidos),
	            'Grupo_Id' => $i,
	            'NombrePadre' => "padre".$i,
	            'NombreMadre' => "madre".$i,
	        ]);
    	}
    }
}
