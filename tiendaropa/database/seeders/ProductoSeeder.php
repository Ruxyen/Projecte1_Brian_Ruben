<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $producto = [
            [
                'nom_producto' => 'Producto 1',
                'descripcion' => 'Descripción del Producto 1',
                'precio' => 19.99,
                'categoria' => 'Categoría 1',
                'talla' => 'M',
            ],
            [
                'nom_producto' => 'Producto 2',
                'descripcion' => 'Descripción del Producto 2',
                'precio' => 29.99,
                'categoria' => 'Categoría 2',
                'talla' => 'L',
            ],
            
        ];

        Producto::insert($producto);
    }
    
}
