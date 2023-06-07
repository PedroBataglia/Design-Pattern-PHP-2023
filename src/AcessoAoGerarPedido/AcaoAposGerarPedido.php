<?php

namespace Alura\DesignPattern\AcessoAoGerarPedido;

interface AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void;
}
