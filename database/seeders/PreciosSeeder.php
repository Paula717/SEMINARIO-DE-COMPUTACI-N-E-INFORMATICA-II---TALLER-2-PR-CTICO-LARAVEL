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
                'tipo'=>'Sencilla',
                'precio'=> 55000,
            ],

            [
                'tipo'=> 'Doble',
                'precio'=>  75000,
            ],

            [
                'tipo'=> 'Matrimonial',
                'precio'=> 120000,
            ],

            [
                'tipo'=>'suite',
                'precio'=>  180000,
            ]
        ];
        DB::table('precio')->insert($precio);
    }
}
