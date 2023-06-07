<?php

namespace Alura\DesignPattern\AcessoAoGerarPedido;

class EnviarPedidoPorEmail
{
    public function executaAcao(Pedido $pedido)
    {
        echo "Enviando E-mail de pedido gerado";
    }
}
