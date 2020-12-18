<?php

namespace Database\Seeders;

use Illuminate\support\Facades\DB;
use Illuminate\Database\Seeder;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reserva =[
            [
                'numero'=>2,
                'cliente' => 1,
                'entrada' => '2020-12-24',
                'salida' => '2020-12-27',
            ],
            
            [
                'numero'=>2,
                'cliente' => 5,
                'entrada' => '2020-12-30',
                'salida' => '2021-01-07',
            ],

            [
                'numero'=>3,
                'cliente' => 1,
                'entrada' => '2020-11-01',
                'salida' => '2020-11-06',
            ],

            [
                'numero'=>1,
                'cliente' => 4,
                'entrada' => '2020-11-24',
                'salida' => '2020-11-30',
            ],

            [
                'numero'=>5,
                'cliente' => 2,
                'entrada' => '2020-11-24',
                'salida' => '2020-11-30',
            ],

            [
                'numero'=>5,
                'cliente' => 1,
                'entrada' => '2020-11-17',
                'salida' => '2020-11-20',
            ],
        ];
        DB::table('reserva')->insert($reserva);
    }
}
