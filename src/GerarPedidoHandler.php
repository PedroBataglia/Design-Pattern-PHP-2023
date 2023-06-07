<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\AcessoAoGerarPedido\CriaPedidoNoBanco;
use Alura\DesignPattern\AcessoAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcessoAoGerarPedido\LogGerarPedido;
use Alura\DesignPattern\GerarPedido;


class GerarPedidoHandler
{
    private array $acoesAposGerarPedido = [];

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

        $pedidoRepository = new CriaPedidoNoBanco();
        $logGerarPedido = new LogGerarPedido();
        $enviarPedidoPorEmail = new EnviarPedidoPorEmail();
        $pedidoRepository->executaAcao($pedido);
        $logGerarPedido->executaAcao($pedido);
        $enviarPedidoPorEmail->executaAcao($pedido);

    }
}
