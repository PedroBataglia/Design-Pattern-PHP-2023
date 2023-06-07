<?php

namespace Alura\DesignPattern\AcessoAoGerarPedido;

use Alura\DesignPattern\Pedido;

class CriaPedidoNoBanco implements \SplObserver
{
    public function update(\SplSubject $pedido): void
    {
        echo "Salvando pedido no banco de dados";
    }
}
