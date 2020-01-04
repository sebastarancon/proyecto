<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(tablaProfesor::class);	
        $this->call(tablaGrupo::class);
        $this->call(tablaAula::class);	
        $this->call(tablaAlumno::class);
        $this->call(tablaMateria::class);	
        $this->call(tablaAnuncio::class);	
        $this->call(tablaAusencia::class);	
        $this->call(tablaReserva::class);	
        $this->call(tablaHorario::class);
    }
}
