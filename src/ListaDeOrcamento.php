<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamentos\Finalizado;
use Traversable;

class ListaDeOrcamento implements \IteratorAggregate
{
    /** @var Orcamento[] */
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->orcamentos);
    }

    public function orcamentosFinalizados(): array
    {
        return array_filter(
            $this->orcamementos,
            fn (Orcamento $orcamento) =>$orcamento->estadoAtual instanceof Finalizado);
    }
}
