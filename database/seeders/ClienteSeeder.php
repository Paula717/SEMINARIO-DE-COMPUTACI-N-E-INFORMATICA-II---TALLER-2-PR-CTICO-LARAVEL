<?php

namespace Database\Seeders;

use Illuminate\support\Facades\DB;
use Illuminate\Database\Seeder;


class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cliente =[
            [
                'dni' => '1025875636',
                'nombre' => 'Jose Martinez',
                'genero' => 'M',
                'domicilio' => 'El triunfo',
                'telefono' => '3126589654',
                'foto' => 'p1.jpg',
            ],

            [
                'dni' => '1158963254',
                'nombre' => 'Claudia Moreno',
                'genero' => 'F',
                'domicilio' => 'El triunfo',
                'telefono' => '3125698542',
                'foto' => 'p2.jpg'
            ],

            [
                'dni' => '1025986325',
                'nombre' => 'Luz Gomez',
                'genero' => 'F',
                'domicilio' => 'La Florida',
                'telefono' => '3156254875',
                'foto' => 'p3.jpg'
            ],

            [
                'dni' => '1002305896',
                'nombre' => 'Mario Perez',
                'genero' => 'M',
                'domicilio' => 'Ciudadela',
                'telefono' => '3165985632',
                'foto' => 'p4.jpg'
            ],

            [
                'dni' => '1155896320',
                'nombre' => 'Cecilia Garcia',
                'genero' => 'F',
                'domicilio' => 'Morro',
                'telefono' => '3125698745',
                'foto' => 'p5.jpg'
            ]
        ];
        DB::table('cliente')->insert($cliente);
    }
}
