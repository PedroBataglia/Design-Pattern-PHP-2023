<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\AcessoAoGerarPedido\AcaoAposGerarPedido;

use SplObserver;


class GerarPedidoHandler implements \SplSubject
{
    /** @var SplObserver[] */
    private array $acoesAposGerarPedido = [];
    public Pedido $pedido;

    public function __construct()
     {

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

        $this->pedido = $pedido;
        $this->notify();
    }

    public function attach(SplObserver $observer): void
    {
        $this->acoesAposGerarPedido[] = $observer;
    }

    public function detach(SplObserver $observer): void
    {

    }

    public function notify(): void
    {
        foreach($this->acoesAposGerarPedido as $acao) {
            $acao->update($this);
        }
    }
}
