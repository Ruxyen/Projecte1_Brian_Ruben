<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallesPedido extends Model
{
    protected $table = 'detalles_pedido';
    protected $fillable = ['id_pedido', 'id_cliente', 'precio_total'];

    // Define la relación con el pedido
    public function pedido()
    {
        return $this->belongsTo(PedidoCompra::class, 'id_pedido');
    }

    // Define la relación con el cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }
}
