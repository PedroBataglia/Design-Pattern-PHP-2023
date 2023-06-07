<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\AcessoAoGerarPedido\AcaoAposGerarPedido;
use Alura\DesignPattern\AcessoAoGerarPedido\CriaPedidoNoBanco;
use Alura\DesignPattern\AcessoAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcessoAoGerarPedido\LogGerarPedido;
use Alura\DesignPattern\GerarPedido;


class GerarPedidoHandler
{
    /** @var AcaoAposGerarPedido[] */
    private array $acoesAposGerarPedido = [];

    public function __construct()
     {}

    public function adicionaAcaoAoGerarPedido(AcaoAposGerarPedido $acao)
    {
        $this->acoesAposGerarPedido[] = $acao;
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->orcamento = $orcamento;
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();

        foreach($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }
}
