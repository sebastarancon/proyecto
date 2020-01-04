<?php

use Illuminate\Database\Seeder;

class tablaAnuncio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=10; $i++){
	        DB::table('anuncios')->insert([
	            'Nombre' => "anuncio".$i,
                'Inicio' => new DateTime(),
                'Fin' => new DateTime(),
	        ]);
    	}
    }
}
