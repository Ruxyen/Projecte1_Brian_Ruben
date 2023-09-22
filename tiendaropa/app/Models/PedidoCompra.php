<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PedidoCompra extends Model
{
    protected $table = 'pedidos_compra';
    protected $fillable = ['fecha_pedido', 'total_pedido', 'id_cliente'];

    // Define la relación con el cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }
}
