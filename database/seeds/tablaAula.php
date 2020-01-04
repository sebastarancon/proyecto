<?php

use Illuminate\Database\Seeder;

class tablaAula extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=10; $i++){
	        DB::table('aula')->insert([
	            'Nombre' => "aula".$i,	            	          
	        ]);
    	}
    }
}
