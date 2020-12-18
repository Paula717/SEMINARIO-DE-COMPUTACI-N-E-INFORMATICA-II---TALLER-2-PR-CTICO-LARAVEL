<?php

namespace Database\Seeders;

use Illuminate\support\Facades\DB;
use Illuminate\Database\Seeder;

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factura =[
            [
                'numero' => 2,
                'cliente' => 1,
                'formaPago' => 2,
                'entrada' => '2020-12-14',
                'salida' => '2020-12-20',
                'total' => '525000'
            ],

            [
                'numero' => 5,
                'cliente' => 3,
                'formaPago' => 1,
                'entrada' => '2020-12-16',
                'salida' => '2020-12-18',
                'total' => '165000'
            ],

            [
                'numero' => 1,
                'cliente' => 4,
                'formaPago' => 1,
                'entrada' => '2020-12-14',
                'salida' => '2020-12-17',
                'total' => '220000'
            ],

            [
                'numero' => 4,
                'cliente' => 2,
                'formaPago' => 2,
                'entrada' => '2020-12-22',
                'salida' => '2020-12-26',
                'total' => '900000'
            ],

            [
                'numero' => 3,
                'cliente' => 5,
                'formaPago' => 3,
                'entrada' => '2020-12-18',
                'salida' => '2020-12-20',
                'total' => '360000'
            ]
        ];
        DB::table('factura')->insert($factura);
    }
}
