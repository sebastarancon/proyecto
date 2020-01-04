<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class tablaReserva extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $arrayHora=['1', '2', '3', '4', '5', '6', '7', 'R'];

        for($i=1; $i<=10; $i++){
	        DB::table('reservas')->insert([
	            'Profesor_Id' => $i,
	            'Aula_Id' => $i,
                'hora' => Arr::random($arrayHora),
                'fecha' => new DateTime(),
	        ]);
    	}
    }
}
