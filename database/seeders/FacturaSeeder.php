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
                'formaPago' => 1,
                'entrada' => '2020-12-14',
                'salida' => '2020-12-20',
                'total' => '450000'
            ],

            [
                'numero' => 5,
                'cliente' => 3,
                'formaPago' => 2,
                'entrada' => '2020-12-16',
                'salida' => '2020-12-28',
                'total' => '165000'
            ],

            [
                'numero' => 1,
                'cliente' => 4,
                'formaPago' => 1,
                'entrada' => '2020-12-14',
                'salida' => '2020-12-17',
                'total' => '260000'
            ],

            [
                'numero' => 4,
                'cliente' => 2,
                'formaPago' => 2,
                'entrada' => '2020-12-22',
                'salida' => '2020-12-26',
                'total' => '400000'
            ],

            [
                'numero' => 3,
                'cliente' => 5,
                'formaPago' => 1,
                'entrada' => '2020-12-18',
                'salida' => '2020-12-20',
                'total' => '195000'
            ]
        ];
        DB::table('factura')->insert($factura);
    }
}
