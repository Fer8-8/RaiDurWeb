<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Solar;

class SolarSeeder extends Seeder
{
    public function run()
    {
        Solar::create([
            'nombre' => 'Panel Solar 500W',
            'descripcion' => 'Panel solar de alta eficiencia con 500W de potencia.',
            'precio' => 4500.00,
            'imagen' => 'images/solar500w.jpg',
            'categoria' => 'Paneles Solares',
        ]);

        Solar::create([
            'nombre' => 'Batería Solar 200Ah',
            'descripcion' => 'Batería de litio para almacenamiento de energía solar.',
            'precio' => 6500.00,
            'imagen' => 'images/bateria200ah.jpg',
            'categoria' => 'Baterías',
        ]);
    }
}
