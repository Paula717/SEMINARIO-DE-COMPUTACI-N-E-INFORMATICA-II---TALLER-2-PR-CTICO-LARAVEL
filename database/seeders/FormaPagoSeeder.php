<?php

namespace Database\Seeders;

use Illuminate\support\Facades\DB;
use Illuminate\Database\Seeder;

class FormaPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pago =[
            [
                'descripcion' => 'Efectivo'
            ],

            [
                'descripcion' => 'Tarjeta Debito'
            ],

            [
                'descripcion' => 'Tarjeta Credito'
            ]
        ];
        DB::table('formapago')->insert($pago);
    }
}
