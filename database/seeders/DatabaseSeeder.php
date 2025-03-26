<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\Tinacos;
use App\Models\Solar;
use App\Models\Cisternas;



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
        Tinacos::create([
            'nombre' => 'TINACO 1,100 lts',
            'descripcion' => 'Tricapa / Diámetro 1.10 mts / Altura 1.41 mts',
            'precio' => 1790.00,
            'imagen' => 'Images/tricapa110.png',
            'categoria' => 'Protección'
        ]);
        Tinacos::create([
            'nombre' => 'TINACO 450 lts',
            'descripcion' => 'Bicapa / Diámetro 0.82 mts / Altura 1.05 mts',
            'precio' => 1090.00,
            'imagen' => 'Images/bicapa450.png',
            'categoria' => 'Protección'
        ]);
        Tinacos::create([
            'nombre' => 'TINACO 750 lts',
            'descripcion' => 'Tricapa / Diámetro 1.3 mts / Altura 1.14 mts',
            'precio' => 1595.00,
            'imagen' => 'Images/tricapa750.png',
            'categoria' => 'Protección'
        ]);
        Tinacos::create([
            'nombre' => 'TINACO 750 lts',
            'descripcion' => 'Bicapa / Diámetro 1.3 mts / Altura 1.14 mts',
            'precio' => 1395.00,
            'imagen' => 'Images/bicapa750.png',
            'categoria' => 'Protección'
        ]);
        Tinacos::create([
            'nombre' => 'TINACO 1,100 lts',
            'descripcion' => 'Bicapa / Diámetro 1.10 mts / Altura 1.41 mts',
            'precio' => 1595.00,
            'imagen' => 'Images/bicapa1100.png',
            'categoria' => 'Protección'
        ]);
        Tinacos::create([
            'nombre' => 'TINACO 450 lts',
            'descripcion' => 'Tricapa / Diámetro 0.82 mts / Altura 1.05 mts',
            'precio' => 1195.00,
            'imagen' => 'Images/tricapa450.png',
            'categoria' => 'Protección'
        ]);
        Solar::create([
            'nombre' => 'Solar 8 tubos',
            'descripcion' => 'Baja presión / 8 tubos / 2 personas / 100 lts',
            'precio' => 3150.00,
            'imagen' => 'Images/solares1.png',
            'categoria' => 'Paneles Solares',
        ]);
        Solar::create([
            'nombre' => 'Solar 10 tubos',
            'descripcion' => 'Baja presión / 10 tubos / 3 personas / 130 lts',
            'precio' => 3500.00,
            'imagen' => 'Images/solares2.png',
            'categoria' => 'Paneles Solares',
        ]);
        Solar::create([
            'nombre' => 'Solar 12 tubos',
            'descripcion' => 'Baja presión / 12 tubos / 3 o 4 personas / 150 lts',
            'precio' => 3750.00,
            'imagen' => 'Images/solares3.png',
            'categoria' => 'Paneles Solares',
        ]);
        Solar::create([
            'nombre' => 'Solar 15 tubos',
            'descripcion' => 'Baja presión / 15 tubos / 5 personas / 175 lts',
            'precio' => 4300.00,
            'imagen' => 'Images/solares4.png',
            'categoria' => 'Paneles Solares',
        ]);
        Solar::create([
            'nombre' => 'Solar 18 tubos',
            'descripcion' => 'Baja presión / 18 tubos / 6 personas / 205 lts',
            'precio' => 4950.00,
          'imagen' => 'Images/solares5.png',
            'categoria' => 'Paneles Solares',
        ]);
        Solar::create([
            'nombre' => 'Solar 20 tubos',
            'descripcion' => 'Baja presión / 20 tubos / 6 o 7 personas / 228 lts',
            'precio' => 5300.00,
            'imagen' => 'Images/solares6.png',
            'categoria' => 'Paneles Solares',
        ]);
        Solar::create([
            'nombre' => 'Solar 24 tubos',
            'descripcion' => 'Baja presión / 24 tubos / 8 personas / 274 lts',
            'precio' => 6300.00,
           'imagen' => 'Images/solares7.png',
            'categoria' => 'Paneles Solares',
        ]);
        Solar::create([
            'nombre' => 'Solar 30 tubos',
            'descripcion' => 'Baja presión / 30 tubos / 9 o 10 personas / 300 lts',
            'precio' => 7200.00,
           'imagen' => 'Images/solares1.png',
            'categoria' => 'Paneles Solares',
        ]);
        Solar::create([
            'nombre' => 'Solar 36 tubos',
            'descripcion' => 'Baja presión / 36 tubos / 10 u 11 personas / 410 lts',
            'precio' => 7985.00,
            'imagen' => 'Images/solares1.png',
            'categoria' => 'Paneles Solares',
        ]);
        Solar::create([
            'nombre' => 'Solar 12 tubos',
            'descripcion' => 'Alta presión / 12 tubos / 4 personas / 150 lts',
            'precio' => 13800.00,
          'imagen' => 'Images/solares1.png',
            'categoria' => 'Paneles Solares',
        ]);
        Solar::create([
            'nombre' => 'Solar 18 tubos',
            'descripcion' => 'Alta presión / 18 tubos / 6 personas / 205 lts',
            'precio' => 17800.00,
          'imagen' => 'Images/solares1.png',
            'categoria' => 'Paneles Solares',
        ]);
        Solar::create([
            'nombre' => 'Solar 20 tubos',
            'descripcion' => 'Alta presión / 20 tubos / 6 o 7 personas / 228 lts',
            'precio' => 19250.00,
            'imagen' => 'Images/solares1.png',
            'categoria' => 'Paneles Solares',
        ]);
        Solar::create([
            'nombre' => 'Solar 28 tubos',
            'descripcion' => 'Alta presión / 28 tubos / 10 personas / 300 lts',
            'precio' => 24500.00,
           'imagen' => 'Images/solares1.png',
            'categoria' => 'Paneles Solares',
        ]);
        Cisternas::create([
            'nombre' => 'Cisterna 1100 Lts',
            'descripcion' => 'Diámetro de 1.10 mts / altura de 1.41 mts',
            'precio' => 2200.00,
            'imagen' => 'Images/cisternas1.png',
            'categoria' => 'Almacenamiento de agua',
        ]);
        Cisternas::create([
            'nombre' => 'Cisterna 10000 Lts',
            'descripcion' => 'Diámetro de 2.32 mts / altura de 2.4 mts',
            'precio' => 19900.00,
            'imagen' => 'Images/cisternas2.png',
            'categoria' => 'Almacenamiento de agua',
        ]);
        Cisternas::create([
            'nombre' => 'Cisterna 5000 Lts',
            'descripcion' => 'Diámetro de 1.84 mts / altura de 2.40 mts',
            'precio' => 8600.00,
            'imagen' => 'Images/cisternas3.png',
            'categoria' => 'Almacenamiento de agua',
        ]);
        Cisternas::create([
            'nombre' => 'Cisterna 5000 Lts',
            'descripcion' => 'Diámetro de 1.84 mts / altura de 2.40 mts',
            'precio' => 8600.00,
            'imagen' => 'Images/cisternas4.png',
            'categoria' => 'Almacenamiento de agua',
        ]);
        Cisternas::create([
            'nombre' => 'Cisterna 2700 Lts',
            'descripcion' => 'Diámetro de 1.52 mts / altura de 1.46 mts',
            'precio' => 4600.00,
            'imagen' => 'Images/cisternas5.png',
            'categoria' => 'Almacenamiento de agua',
        ]);
        Cisternas::create([
            'nombre' => 'Cisterna 1100 Lts',
            'descripcion' => 'Diámetro de 1.10 mts / altura de 1.41 mts',
            'precio' => 2200.00,
            'imagen' => 'Images/cisternas6.png',
            'categoria' => 'Almacenamiento de agua',
        ]);
        Cisternas::create([
            'nombre' => 'Cisterna 2700 Lts',
            'descripcion' => 'Diámetro de 1.52 mts / altura de 1.46 mts',
            'precio' => 4600.00,
            'imagen' => 'Images/cisternas7.png',
            'categoria' => 'Almacenamiento de agua',
        ]);
    }
}
