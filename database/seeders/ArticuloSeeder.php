<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Articulo;
use Illuminate\Support\Str;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 200; $i++){
            Articulo::create([
                'nombre' => 'Articulo' . Str::random(5),
                'descripcion' => 'Descripcion del artículo número ' . $i,
                'codigo_barras' => 'CB' . Str::random(8),
                'precio_compra' => rand(10, 1000), 
                'precio_venta' => rand(10, 2000),  
                'stock' => rand(0, 100), 
                'activo' => rand(0, 1) == 1 ? true : false,
            ]);
        }
    }
}
