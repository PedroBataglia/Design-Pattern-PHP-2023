<?php

namespace Alura\DesignPattern\AcessoAoGerarPedido;

class CriaPedidoNoBanco implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Salvando pedido no banco de dados";
    }
}
