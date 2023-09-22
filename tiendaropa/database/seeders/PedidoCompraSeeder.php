<?php

namespace Database\Seeders;

use App\Models\PedidoCompra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidoCompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pedidocompra = [
        [
            'fecha_pedido' => '2023-09-20',
            'total_pedido' => 100.00,
            'id_cliente' => 1, // ID de un cliente existente
        ],
        [
            'fecha_pedido' => '2023-09-21',
            'total_pedido' => 75.50,
            'id_cliente' => 2, // ID de otro cliente existente
        ],
      
    ];
    PedidoCompra::insert($pedidocompra);
}
}