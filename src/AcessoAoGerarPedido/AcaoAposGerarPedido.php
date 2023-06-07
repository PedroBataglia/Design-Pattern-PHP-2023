<?php

namespace Alura\DesignPattern\AcessoAoGerarPedido;

use Alura\DesignPattern\Pedido;

interface AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void;
}
