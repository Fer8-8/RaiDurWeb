<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Producto::create([
            'nombre' => 'MIRAGE X LIFE ',
            'descripcion' => 'Minisplit 1 ton / 110-220 volt / frío y calor',
            'precio' => 6100,
            'imagen' => 'Images/imageotros1.png'
        ]);

        Producto::create([
            'nombre' => 'BASE HERRERIA',
            'descripcion' => 'Base para tinaco / altura de 1 m / diámetro 1.02 mts',
            'precio' => 1850,
            'imagen' => 'Images/imageotros2.png'
        ]);

        Producto::create([
            'nombre' => 'DOAL CORONEL',
            'descripcion' => 'Pintura Doal / cubeta 19 litros / coronel exterior',
            'precio' => 950,
            'imagen' => 'Images/imageotros3.png'
        ]);

        Producto::create([
            'nombre' => 'BIODIGESTOR 600 LTS',
            'descripcion' => 'Biodigestor / marca Suplast / 0.83 mts / 1.57 mts',
            'precio' => 5195,
            'imagen' => 'Images/imageotros4.png'
        ]);

        Producto::create([
            'nombre' => 'BOILER DE PASO 6 LTS',
            'descripcion' => 'Marca Mirage / 6 litros / 1 solo baño',
            'precio' => 1750,
            'imagen' => 'Images/imageotros5.png'
        ]);
        
        Producto::create([
            'nombre' => 'JUEGO DE BAÑO',
            'descripcion' => 'Marca Cato / tanque / lavamanos / color blanco',
            'precio' => 2850,
            'imagen' => 'Images/imageotros6.png'
        ]);
        Producto::create([
            'nombre' => 'MIRAGE X32 ',
            'descripcion' => 'Minisplit 1 ton / 110-220 volt / frío y calor',
            'precio' => 7600,
            'imagen' => 'Images/imageotros7.png'
        ]);
        Producto::create([
            'nombre' => 'BIODIGESTOR 2,500 LTS',
            'descripcion' => 'Biodigestor / marca Suplast / 1.47 mts / 1.80 mts',
            'precio' => 15800,
            'imagen' => 'Images/imageotros8.png'
        ]);
        Producto::create([
            'nombre' => 'BOILER DE PASO 16 LTS',
            'descripcion' => 'Marca Mirage / 16 litros / 3 baños',
            'precio' => 6900,
            'imagen' => 'Images/imageotros9.png'
        ]);
        Producto::create([
            'nombre' => 'DOAL',
            'descripcion' => 'Pintura Doal / cubeta 19 litros / casa-',
            'precio' => 780,
            'imagen' => 'Images/imageotros10.png'
        ]);
    }
}
