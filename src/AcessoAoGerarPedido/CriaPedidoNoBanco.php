<?php

namespace Alura\DesignPattern\AcessoAoGerarPedido;

use Alura\DesignPattern\Pedido;

class CriaPedidoNoBanco implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Salvando pedido no banco de dados";
    }
}
