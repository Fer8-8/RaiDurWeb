<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Producto::create([
            'nombre' => 'Minisplit Mirage X Life',
            'descripcion' => 'Minisplit 1 ton / 110-220 volt / frío y calor',
            'precio' => 6100,
            'imagen' => 'productos/minisplit.jpg'
        ]);

        Producto::create([
            'nombre' => 'Base Herrería',
            'descripcion' => 'Base para tinaco / altura de 1 m / diámetro 1.02 mts',
            'precio' => 1850,
            'imagen' => 'productos/base-herreria.jpg'
        ]);
    }
}
