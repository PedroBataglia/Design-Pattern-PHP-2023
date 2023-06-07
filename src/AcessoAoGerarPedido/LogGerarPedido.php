<?php

namespace Alura\DesignPattern\AcessoAoGerarPedido;

use Alura\DesignPattern\Pedido;

class LogGerarPedido implements \SplObserver
{
    public function update(\SplSubject $pedido): void
    {
        echo "Gerando log de geração de pedido";
    }
}
