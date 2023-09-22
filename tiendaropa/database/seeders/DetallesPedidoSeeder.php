<?php

namespace Database\Seeders;

use App\Models\DetallesPedido;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetallesPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detallespedido = [
            [
                'id_pedido' => 1, // ID de un pedido existente
                'id_cliente' => 1, // ID de un cliente existente
                'precio_total' => 50.00,
            ],
            [
                'id_pedido' => 2, // ID de otro pedido existente
                'id_cliente' => 2, // ID de otro cliente existente
                'precio_total' => 35.25,
            ],
            
        ];

        DetallesPedido::insert($detallespedido);
    }
}
