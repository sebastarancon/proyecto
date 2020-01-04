<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class tablaGrupo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$arrayNombres=["ana","pepe","luis","marta","felix","carlos","maria"];

        for($i=1; $i<=10; $i++){
	        DB::table('grupo')->insert([
	            'Nombre' => "grupo".$i,
	            'NombreTutor' => Arr::random($arrayNombres),	          
	        ]);
    	}
    }
}
