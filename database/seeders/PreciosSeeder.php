<?php

namespace Database\Seeders;

use Illuminate\support\Facades\DB;
use Illuminate\Database\Seeder;

class PreciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $precio = [
            [
                'tipo'=>'HABITACIÓN CLASSIC DELUXE',
                'precio'=> 65000
            ],

            [
                'tipo'=> 'HABITACIÓN COLONIAL DELUXE',
                'precio'=>  75000
            ],

            [
                'tipo'=> 'HABITACIÓN SUPERIOR LAGUITO',
                'precio'=> 65000 
            ],

            [
                'tipo'=>'HABITACIÓN PREMIUM LAGOMAR',
                'precio'=>  80000
            ],

            [
                'tipo'=> 'HABITACIÓN FAMILIAR',
                'precio'=>  55000
            ]
        ];
        DB::table('precio')->insert($precio);
    }
}
