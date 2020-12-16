<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class HabitacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $habitacion =[
            [
                'descripcion' => 'Las habitaciones Classic Deluxe del Hotel Caribe son una opción muy recomendable para aquellos viajeros que quieren descansar en una atmósfera acogedora. ',
                'numCama' => 100,
                'foto' => 'h1.jpg',
                'precio_id' => 1  
            ],

            [
                'descripcion' => 'Las habitaciones Colonial Deluxe del Hotel Caribe son espacios repletos de encanto que le garantizan un descanso muy tranquilo en primera línea de mar.',
                'numCama' => 101,
                'foto' => 'h2.jpg',
                'precio_id' => 2 
            ],

            [
                'descripcion' => 'Las habitaciones superiores Laguito del Hotel Caribe son dormitorios llenos de magia perfectos para parejas que quieren enamorarse de Cartagena.',
                'numCama' => 102,
                'foto' => 'h3.jpg',
                'precio_id' => 3 
            ],

            [
                'descripcion' => 'Las habitaciones Premium Lagomar del Hotel Caribe te invitan a disfrutar de un descanso muy especial en un ambiente muy elegante y cálido.',
                'numCama' => 103,
                'foto' => 'h4.jpg',
                'precio_id' => 4 
            ],

            [
                'descripcion' => 'Las habitaciones familiares del Hotel Caribe son alojamientos amplios y muy confortables perfectos para descansar junto a tus seres queridos.',
                'numCama' => 104,
                'foto' => 'h5.jpg',
                'precio_id' => 5 
            ]
        ];
        DB::table('habitacion')->insert($habitacion);
    }
}
