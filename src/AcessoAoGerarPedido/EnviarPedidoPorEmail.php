<?php

namespace Alura\DesignPattern\AcessoAoGerarPedido;

use Alura\DesignPattern\Pedido;

class EnviarPedidoPorEmail implements \SplObserver
{
    public function update(\SplSubject $pedido): void
    {
        echo $pedido->pedido->nomeCliente;
        echo "Enviando E-mail de pedido gerado";
    }
}
