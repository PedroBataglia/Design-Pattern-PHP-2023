<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\GerarPedido;


class GerarPedidoHandler
{
    public function __construct()
     {}

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->orcamento = $orcamento;
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();

        echo "Cria pedido no banco de dados".PHP_EOL;
        echo "Enviar e-mail".PHP_EOL;
    }
}
