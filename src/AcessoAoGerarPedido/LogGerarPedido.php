<?php

namespace Alura\DesignPattern\AcessoAoGerarPedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Gerando log de geração de pedido";
    }
}
