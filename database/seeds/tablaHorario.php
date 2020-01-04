<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class tablaHorario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayHora=['1', '2', '3', '4', '5', '6', '7', 'R'];
        $arrayDia=['L', 'M', 'X', 'J', 'V'];

        for($i=1; $i<=10; $i++){
	        DB::table('horario')->insert([
	            'Profesor_Id' => $i,
	            'Aula_Id' => $i,
	            'Grupo_Id' => $i,
	            'Materia_Id' => $i,
                'hora' => Arr::random($arrayHora),
                'dia' => Arr::random($arrayDia),
	        ]);
    	}
    }
}
