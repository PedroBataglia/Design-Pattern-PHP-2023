<?php

namespace Alura\DesignPattern\AcessoAoGerarPedido;

class EnviarPedidoPorEmail implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Enviando E-mail de pedido gerado";
    }
}
