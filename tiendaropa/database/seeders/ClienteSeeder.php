<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientes = [
            [
                'nom_cliente' => 'Cliente 1',
                'direccion' => 'Dirección 1',
                'correo' => 'cliente1@example.com',
                'telefono' => '1234567890',
            ],
            [
                'nom_cliente' => 'Cliente 2',
                'direccion' => 'Dirección 2',
                'correo' => 'cliente2@example.com',
                'telefono' => '9876543210',
            ],
            
        ];

        Cliente::insert($clientes);
    }
}
